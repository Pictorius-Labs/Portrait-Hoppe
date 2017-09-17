<div id="kurse_titel">
  <h2>Kurse:</h2>
  <a href="index.php?show=absprache"><h3>Für Kursabsprachen <u>hier klicken</u></h3></a>
  <br />
  <img src="img/kurse_showcase.jpg" />
</div>

<div id ="formular_text">
  <br />
  <article>Für Kursabsprachen benutzen Sie bitte das nebenstehende Formular!
    <br />
    <br />
    Bildhauerkurse können nach Vereinbarung für verschiedenste Gruppen mit unterschiedlichen Vorerfahrungen vereinbart werden: 
    <br />
    - Bildhauerei in Speckstein und Baumberger Sandstein für Kinder und Jugendliche
    <br />
    - Bildhauerei für Schulklassen/ Schulprojekte 
    <br />
    - Bildhauerei für Erwachsene mit und ohne Vorkenntnisse
    <br />
    <br />
    In meinen Kursen werden zunächst die grundsätzlichen Arbeitsschritte des Skulptierens erfahren. Jeder hat Erfahrungen mit dem Modellieren, bei dem Material angetragen und weggenommen werden kann; beim Skulptieren ist abgeschlagenes Material weg. Die Formfindung bedarf also eines spezielleren Gedankenprozesses.
    Darüber hinaus lege ich besonderen Wert auf das Einüben bildhauerischer Schlagtechniken, die auch Anfängern ermöglichen, den Kurs bis zum Ende zu genießen.
  </article>
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
    float: right;
    width: 68%;
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
    height: 737px;
    width: 500px;
    float: left;
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
      float: left;
      width: 100%;
      font-size: 14px;
      font-family: Verdana,Arial,Helvetica,sans-serif;
      margin-bottom: 80px;
    }

  }
  
</style>