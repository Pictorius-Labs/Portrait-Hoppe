<div id ="formular_text">
  <br />
  <article>Für Kursabsprachen benutzen Sie bitte das nebenstehende Formular!
    <br />
    <br />
    Bildhauerkurse können nach Vereinbarung für verschiedenste Gruppen mit unterschiedlichen Vorerfahrungen vereinbart werden: 
    <br />
    - Bildhauerei in Gasbeton (Ytong), Speckstein und Baumberger Sandstein für Kinder und Jugendliche
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


<form id="formular" action="absprache.php" method="get">
  <h2>Kursabsprachen</h2>
  <input id="name" placeholder="Name" name="name" size="25" type="text" required/>
  <br />
  <input id="email" placeholder="Email" name="email" size="25" type="email" required/>
  <br />
  <input id="betreff" placeholder="Betreff" name="betreff" size="25" type="text" required/>
  <br />
  <textarea id="nachricht" placeholder="Nachricht hier eingeben..."cols="50" rows="6" name="nachricht" required></textarea>
  <br />
  <input id="submit" name="submit" type="submit" value="Anfrage senden" />
</form>

<?php
    
    // Ausführen wenn Formular gesendet
    if (isset($_POST["submit"]))
    {
      // Sammeln der Formulardaten
      $from = "test@portrait-hoppe.de";
      $to = "windows8user@web.de";
      $subject = "Eine neue Nachricht von portrait-hoppe.de";
      $message = "Guten Tag Herr Hoppe, " 
        . "\n" 
        . "\n"
        . "Ein Besucher ihrer Website hat eine Nachricht für Sie hinterlassen !" 
        . "\n" 
        . "\n"
        . "Name der Person : " . $_POST['name'] 
        . "\n" 
        . "E-Mail Addresse der Person(für eventuelle Antworten) : " 
        . $_POST['email'] 
        . "\n" 
        . "Nachricht von " . $_POST['name'] 
        . "\n"
        . $_POST['nachricht']
        . "\n";
      $headers   = array();
      $headers[] = "MIME-Version: 1.0";
      $headers[] = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers[] = "From:" . $from;

      mail($to,$subject,$message, implode("\r\n",$headers));
    };
?>

<style>
  #formular_text {
    float: right;
    width: 50%;
    font-size: 14px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
    margin-right: 20px;
    margin-top: 55px;
  }

  #formular {
    float: left;
    width: 45%;
    font-size: 14px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
  }
  
  #formular h2 {
    font-size: 20px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  #formular input, #formular textarea{
    width: 80%;
    margin-bottom: 20px;
    border: 0px;
    border-radius: 3px;
    border-bottom: 1px solid black;
    font-size: 14px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
  }

  #formular textarea{
    max-width: 80%;
    max-height: 35%;
    font-size: 12px;
	   font-family: Verdana,Arial,Helvetica,sans-serif; 
  }

  #formular input:last-child {
    padding: 2px;
    border-radius: 5px;
    border: 1px solid black;
    width: 120px;
    font-size: 12px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
  }
  
</style>