<div id="kurse_titel">
  <h2><?php echo LangText()["kurs"]; ?></h2>
  <a href="index.php?show=absprache"><h3><?php echo LangText()["kurs_absprache"]; ?></h3></a>
  <br />
  <img src="img/kurse_showcase.jpg" />
</div>

<div id ="formular_text">
  <p>
    <?php echo LangText()["kurs_text"]; ?>
  </p>
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
  
  #formular_text
  {
    font-size: 14px;
    font-family: Verdana,Arial,Helvetica,sans-serif;
  }
  
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
    width: 300px;
    float: left;
      padding-right: 10px;
  }

  #kurse 
  {
    padding-top: 15px;
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
  
  @media screen and (max-width: 1700px)
  {

    #formular_text 
    {
      font-size: 14px;
      font-family: Verdana,Arial,Helvetica,sans-serif;
      margin-bottom: 80px;
    }

  }
  
</style>