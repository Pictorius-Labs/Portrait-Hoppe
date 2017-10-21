<div class="site">
    <h1>Neuigkeiten</h1>
<div class="site_content">
    <?php
        $showNewsAdmin = true;
        $showNewNews = false;
        if(isset($_GET['newNews'])) {
            $showNewsAdmin = false;
            $showNewNews = true;

        if (isset($_POST["submit"])){
            $date = $_POST['date'];
            $description = htmlentities($_POST['description']);
            $pic = $_FILES['pic']['name'];
            move_uploaded_file($_FILES['pic']['tmp_name'], '../img/news/'.$_FILES['pic']['name']);

            if($db->newNews($date, $description, $pic) === TRUE) { 
                $showNewNews = false;
                echo "<h3>Eintrag hinzugefügt!</h3>";
                echo "<meta http-equiv='Refresh' content='2; URL=?site=neuigkeiten'>";    
            }
        }

                if($showNewNews) {
    ?>
            <form id="formular" action="?site=neuigkeiten&newNews" method="post" enctype="multipart/form-data">
                <input id="date" placeholder="Datum bzw. Titel" name="date" size="25" type="text" required/><br />
                <textarea id="description" placeholder="Beschreibung"cols="50" rows="5" name="description"required></textarea><br />
                <input id="pic" name="pic" size="25" type="file" /><br />
                <input id="submit" name="submit" type="submit" value="Hinzufügen!" />
            </form>
    <?php
                }
            }
      if($showNewsAdmin) {  
    ?>
        <div id="new">
            <a href="?site=neuigkeiten&newNews"><img src="neu.png">Neuen Eintrag erstellen</a>
        </div>
        <br>
            <?php
                if (isset($_GET["delNews"])){
                    $news_id = $_GET['delNews'];
                    $pic_delete = $db->delNewspic($news_id);
                    $ordner = "../img/news";  
                    $picname = explode('&', $pic_delete['0']);   
                    $pic = $ordner."/".$picname['0'];
                    unlink ($pic);
                    if($db->delNews($news_id) === TRUE) { 
                        echo "<h3>Eintrag wurde gelöscht!</h3>";
                        echo "<meta http-equiv='Refresh' content='2; URL=?site=neuigkeiten'>";
                    }
                }
                $news = $db->News();                    
                foreach ($news as $row) {
                    $ordner = "../img/news";
                    $bildinfo = pathinfo($ordner."/".$row['pic']); 
            ?>

                <img id="news_pic" src="<?php echo $bildinfo['dirname']."/".$bildinfo['basename'];?>"/></a> 
                <div id="news_text">

            <?php
                echo "<h3>" .$row['date']. "<a href='?site=neuigkeiten&delNews=".$row['news-id']."'><img src='löschen.png'></a></h3>";
                echo "<p>" .$row['description']. "</p><br />";
            ?>
                </div>
            <?php
                }
      }
            ?>
    </div>
</div>