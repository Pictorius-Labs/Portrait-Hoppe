<div class="site">
    <h1>Kurse</h1>
<div class="site_content">
    <?php
        $showKursAdmin = true;
        $showNewKurs = false;
        if(isset($_GET['newKurs'])) {
            $showKursAdmin = false;
            $showNewKurs = true;

        if (isset($_POST["submit"])){
            $title = htmlentities($_POST['title']);
            $time = $_POST['time'];
            $date = $_POST['date'];
            $first_date = $_POST['first_date'];
            $last_date = $_POST['last_date'];
            $home_description = htmlentities($_POST['home_description']);
            $description = htmlentities($_POST['description']);

            if($db->newkurs($title, $time, $date, $first_date, $last_date, $home_description, $description) === TRUE) { 
                 $showNewKurs = false;
                echo "<h3>Eintrag hinzugefügt!</h3>";
                echo "<meta http-equiv='Refresh' content='2; URL=?site=kurse'>";    
            }
        }

                if($showNewKurs) {
    ?>
            <form id="formular" action="?site=kurse&newKurs" method="post">
                <input placeholder="Titel" name="title" type="text" required/><br />
                <input placeholder="Uhrzeit" name="time" type="text" required/><br />
                <input placeholder="Datum (sichtbar)" name="date" type="text" required/><br />
                <p>Erstes Datum (Sortierung für Startseite)</p><br />
                <input  name="first_date" type="date" required/><br />
                <p>Letztes Datum (Autolöschung)</p><br />
                <input  name="last_date" type="date" required/><br />
                <textarea placeholder="Kurz-Beschreibung"cols="30" rows="5" name="home_description"></textarea><br />
                <textarea placeholder="Beschreibung"cols="50" rows="5" name="description"></textarea><br />
                <input id="submit" name="submit" type="submit" value="Hinzufügen!" />
            </form>
    <?php
                }
            }
      if($showKursAdmin) {  
    ?>
        <div id="new">
            <a href="?site=kurse&newKurs"><img src="neu.png">Neuen Kurs eintragen</a>
        </div>
        <br>
            <?php
                if (isset($_GET["delkurs"])){
                    $kurs_id = $_GET['delkurs'];
                    if($db->delKurs($kurs_id) === TRUE) { 
                        echo "<h3>Eintrag wurde gelöscht!</h3>";
                        echo "<meta http-equiv='Refresh' content='2; URL=?site=kurse'>";    
                    }
                }
                $kurse = $db->Kurse();                    
                foreach ($kurse as $row) {
            ?>
            <div id="kurse_text">

            <?php
                    echo "<h3>" .$row['title']. "<a href='?site=kurse&delkurs=".$row['kurs-id']."'><img src='löschen.png'></a></h3>";
                    if ($row['description'] != TRUE) {
                            echo "<p>" .$row['date']." von ".$row['time']."</p><br />";

                    }else {
                        echo "<p>" .$row['date']." von ".$row['time']."<br />".$row['description']."</p><br />";
                    }
                }
        }
            ?>
            </div>
    </div>
</div>