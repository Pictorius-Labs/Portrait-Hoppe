<div class="site">
    <h1>Slider-Bilder</h1>
<div class="site_content">
    <?php
        $showSliderAdmin = true;
        $showNewSlider = false;
        if(isset($_GET['newSlider'])) {
            $showSliderAdmin = false;
            $showNewSlider = true;

        if (isset($_POST["submit"])){
            $pic = $_FILES['pic']['name'];
            move_uploaded_file($_FILES['pic']['tmp_name'], '../img/slider/'.$_FILES['pic']['name']);

            if($db->newSlider($pic) === TRUE) { 
                $showNewSlider = false;
                echo "<h3>Eintrag hinzugefügt!</h3>";
                echo "<meta http-equiv='Refresh' content='2; URL=?site=slider'>";    
            }
        }

                if($showNewSlider) {
    ?>
            <form id="formular" action="?site=slider&newSlider" method="post" enctype="multipart/form-data">
                <input id="pic" name="pic" size="25" type="file" /><br />
                <input id="submit" name="submit" type="submit" value="Hinzufügen!" />
            </form>
    <?php
                }
            }
      if($showSliderAdmin) {  
    ?>
        <div id="new">
            <a href="?site=slider&newSlider"><img src="neu.png">Neues Bild hinzufügen</a>
        </div>
        <br>
            <?php
                if (isset($_GET["delSlider"])){
                    $id = $_GET['delSlider'];
                    $pic_delete = $db->delSliderpic($id);
                    $ordner = "../img/slider";  
                    $picname = explode('&', $pic_delete['0']);   
                    $pic = $ordner."/".$picname['0'];
                    unlink ($pic);
                    if($db->delSlider($id) === TRUE) {
                        echo "<h3>Eintrag wurde gelöscht!</h3>";
                        echo "<meta http-equiv='Refresh' content='2; URL=?site=slider'>";
                    }
                }
                $slider = $db->Slider();                    
                foreach ($slider as $row) {
                    $ordner = "../img/slider";
                    $bildinfo = pathinfo($ordner."/".$row['pic']); 
            ?>
                <div class="slider_object">
                    <img id="slider_pic" src="<?php echo $bildinfo['dirname']."/".$bildinfo['basename'];?>"/> 
                    <div id="slider_text">
            <?php
                        echo "<h3><a href='?site=slider&delSlider=".$row['id']."'><img src='löschen.png'></a></h3>"
            ?>
                    </div>
               </div> 
            <?php
                }
      }
            ?>
    </div>
</div>
