<div id="kurse_titel">
  <h2>Kurse:</h2>
  <a href="index.php?show=absprache"><h3>Für Kursabsprachen hier klicken</h3></a>
  <br />
</div>

<div id ="kurse">
  
  <?php
    $kurse = $db->Kurse();
    
    foreach ($kurse as $row) {
    ?>

    <div id="kurse_text">

      <?php
        echo "<h3>" .$row['title']. "</h3>";
        if ($row['description'] != TRUE) 
        {
          echo "<p>" .$row['date']." von ".$row['time']."</p><br />";
        }
        else 
        {
          echo "<p>" .$row['date']." von ".$row['time']."<br />".$row['description']."</p><br />";
        }
      ?>

    </div>

    <?php
    }
    ?>
  
</div>

<style>
  
  #kurse_titel
  {
    margin-bottom: 10px;
  }

  #kurse_titel a 
  {
    text-decoration: none;
    color: #000;
  }

  #kurse_titel a h3 
  {
    font-size: 14px;
    margin-bottom: -10px;
  }

  #kurse 
  {
    margin-bottom: 20px;
    clear: both;
  }

  #kurse_text 
  {
    margin-left: 30px;
    margin-bottom: 20px;
  }

  #kurse p 
  {
    margin-left: 10px;
    margin-top: 10px;
  }
  
</style>