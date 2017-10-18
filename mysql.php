<?php  
    class DB {
        private static $_db_username 		= "root";
        private static $_db_password 		= "Nintendo56";
        private static $_db_host 		    = "localhost";
        private static $_db_name		    = "portrait-hoppe";
        private static $_db;	



        function __construct() {
            try {
            self::$_db = new PDO("mysql:host=" . self::$_db_host . ";dbname=" . self::$_db_name,  self::$_db_username , self::$_db_password);
            } catch(PDOException $e) {
                echo "Verbindung gescheitert!";
                die();
            }
        }
        function NewsHome () {

            $stmt= self::$_db->prepare("SELECT * FROM news_".$_SESSION['language']." ORDER BY `news-id` DESC LIMIT 5");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function KurseHome() {

            $stmt= self::$_db->prepare("SELECT * FROM kurse_".$_SESSION['language']." ORDER BY `first_date` ASC LIMIT 5");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);   
        }

        function News () {

            $stmt= self::$_db->prepare("SELECT * FROM news_".$_SESSION['language']." ORDER BY `news-id` DESC");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function Kurse() {

            $stmt= self::$_db->prepare("SELECT * FROM kurse_".$_SESSION['language']." ORDER BY `first_date` ASC");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);   
        }

        function Shop () {

            $stmt= self::$_db->prepare("SELECT * FROM shop_".$_SESSION['language']);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

     //Admin-Interface   

        function LoggedIn() {
            $stmt = self::$_db->prepare("SELECT ID FROM web_admin WHERE Session=:sid");
            $sid = session_id();
            $stmt->bindParam(":sid", $sid);
            $stmt->execute();

            if($stmt->rowCount() === 1) {
                return true;
            } else {
                return false;	
            }
        }

        function login($user, $passwort) {
            $stmt = self::$_db->prepare("UPDATE web_admin SET Session=:sid WHERE benutzername=:benutzername AND passwort=:pw");
            $stmt->bindParam(":benutzername", $user);
            $stmt->bindParam(":pw", $passwort);
            $sid = session_id();
            $stmt->bindParam(":sid", $sid);
            $stmt->execute();

            if($stmt->rowCount() === 1) {
                return true;
            } else {
                return false;	
            }
        }
        
        function logout() {
        $stmt = self::$_db->prepare("UPDATE web_admin SET Session='' WHERE Session=:sid");
        $sid = session_id();
        $stmt->bindParam(":sid", $sid);
        $stmt->execute();
        }

        function newNews($date, $description, $pic) {
            $stmt = self::$_db->prepare("INSERT INTO news_".$_SESSION['language']." VALUES ('', :pic, :date, :description)");
            $stmt->bindParam(":pic", $pic);
            $stmt->bindParam(":date", $date);
            $stmt->bindParam(":description", $description);
            $stmt->execute();

            if($stmt->rowCount() === 1) {
                return true;
            } else {
                return false;	
            }
        }

        function delNews($news_id) {
            $stmt = self::$_db->prepare("DELETE FROM news_".$_SESSION['language']." WHERE `news-id`=:news_id");
            $stmt->bindParam(":news_id", $news_id);
            $stmt->execute();

            if($stmt->rowCount() === 1) {
                return true;
            } else {
                return false;	
            }
        }

        function newKurs($title, $time, $date, $first_date, $last_date, $home_description, $description) {
            $stmt = self::$_db->prepare("INSERT INTO kurse_".$_SESSION['language']." VALUES (:title, :date, :last_date, '', :time, :description, :home_description, '')");
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":date", $date);
            $stmt->bindParam(":first_date", $first_date);
            $stmt->bindParam(":last_date", $last_date);
            $stmt->bindParam(":time", $time);
            $stmt->bindParam(":description", $description);
            $stmt->bindParam(":home_description", $home_description);
            $stmt->execute();

            if($stmt->rowCount() === 1) {
                return true;
            } else {
                return false;	
            }
        }

        function delKurs($kurs_id) {
            $stmt = self::$_db->prepare("DELETE FROM kurse_".$_SESSION['language']." WHERE `kurs-id`=:kurs_id");
            $stmt->bindParam(":kurs_id", $kurs_id);
            $stmt->execute();

            if($stmt->rowCount() === 1) {
                return true;
            } else {
                return false;	
            }
        }

        function newShop($product, $description, $cost, $pic) {
            $stmt = self::$_db->prepare("INSERT INTO shop_".$_SESSION['language']." VALUES ('', :pic, :product, :cost, :description)");
            $stmt->bindParam(":pic", $pic);
            $stmt->bindParam(":product", $product);
            $stmt->bindParam(":cost", $cost);
            $stmt->bindParam(":description", $description);
            $stmt->execute();

            if($stmt->rowCount() === 1) {
                return true;
            } else {
                return false;	
            }
        }

        function delShop($shop_id) {
            $stmt = self::$_db->prepare("DELETE FROM shop_".$_SESSION['language']." WHERE id=:id");
            $stmt->bindParam(":id", $shop_id);
            $stmt->execute();

            if($stmt->rowCount() === 1) {
                return true;
            } else {
                return false;	
            }
        }


    }
?>