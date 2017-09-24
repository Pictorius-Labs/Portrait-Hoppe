<?php
    if(isset($_GET["site"])){
        $site = $_GET["site"];
    }else{
        $site = "";
    }

    $LoggedIn = false;
    session_start();

    if(isset ($_GET['lang'])) {
        $_SESSION['language'] = $_GET['lang'];
    }

    if(!isset($_SESSION['language'])){
        $_SESSION['language'] = "de";
    } else {
        echo "<style> #".$_SESSION['language']."{color: lightgreen}; </style>";
    }
    
    require_once '../mysql.php';
    $db = new DB();

    if(isset($_POST['einloggen'])) {
            $user = $_POST['benutzername'];
            $passwort = hash('sha512', $_POST['passwort'] . $user);
            if($db->login($user, $passwort) === TRUE) { 
                $LoggedIn = true;
                setcookie("USR",$passwort,time()+(1800));
            } else {
                $errorMessage = TRUE;	
            }
        }
    $logged = $db->LoggedIn();
    if (isset($_COOKIE["USR"]) && $logged["passwort"] == $_COOKIE["USR"]) {
            $LoggedIn = true;
        }
?>
<html>
    <head>
    <title>Bildhauer Burkhard Hoppe - Administrator Bereich</title>
    
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style_admin.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet" type="text/css">
    </head>
    <?php
        if(!$LoggedIn) {
    ?>
    <body>
    <div class="login_bereich">
    <center>
        <img src="logo.gif">
        <p>Administrator - Bereich</p>

        <form action=" " method="POST">
            <input type="text" placeholder="Benutzername" name="benutzername" required autofocus autocomplete="off">
            <br>
            <input type="password" placeholder="Passwort" name="passwort" required>
            <br>
            <?php
            if(isset($errorMessage)) {
                echo "<div id='login_fail'>Anmeldung fehlgeschlagen!</div>";
            }
            ?>
            <input type="submit" name="einloggen" value="Anmelden">
        </form>
    </center>
    </div>
    <?php
        }else{
    ?>
    <div class="menu">
            <img src="logo.png">
            <p>Administrator - Bereich</p>
        <div id="lang">
            <a href="?lang=de"><p id="de">DE</p></a>
            <a href="?lang=en"><p id="en">EN</p></a>
            <a href="?lang=nl"><p id="nl">NL</p></a>
            <a href="?lang=fr"><p id="fr">FR</p></a>
        </div>
        <div class="menu_object"><a href="?site=neuigkeiten">Neuigkeiten</a></div>
        <div class="menu_object"><a href="?site=kurse">Kurse</a></div>
        <div class="menu_object"><a href="?site=shop">Shop</a></div>
        <div class="menu_object"><a href="logout.php">Abmelden</a></div>
    </div>
    <div class="content">
        <?php include("sites.php");?>
    </div>
    <?php
        }
    ?>
    </body>
</html>