<div id="kurse_titel">
  <h2>Kurse:</h2>
  <a href="index.php?show=absprache"><h3>Für Kursabsprachen <u>hier klicken</u></h3></a>
  <br />
  <img src="img/kurse_showcase.jpg" />
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
  
  #kurse_titel, #kurse
  {
    font-size: 14px;
	   margin-top: 10px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
    color: #000;
  }
  
  #kurse_titel
  {
    margin: 20px;
  }

  #kurse_titel a 
  {
    text-decoration: none;
    color: #000;
    margin-top: 10px;
    display: block;
  }
  
  #kurse_titel u:hover, #kurse_titel u:focus, #kurse_titel u:active
  {
    color: #3a6770;
  }

  #kurse_titel a h3 
  {
    font-size: 14px;
    margin-bottom: -10px;
  }
  
  #kurse_titel img 
  {
    height: 737px;
    width: 500px;
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
    width: 60%;
  }

  #kurse p 
  {
    margin-left: 10px;
    margin-top: 10px;
  }
  
</style>