<?php
$showform = true;
// Ausführen wenn Formular gesendet
    if (isset($_POST["submit"]))
    {
      // Sammeln der Formulardaten
      $from = "b.hoppe@portrait-hoppe.de";
      $to = "stevenbrozda@gmail.com";
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

      mail($to,"=?UTF-8?B?".base64_encode("$subject")."?=",$message, implode($headers));
      echo "<p id='success'>Ihre Anfrage wurde erfolgreich versendet !</p>";
      echo "<meta http-equiv='Refresh' content='2; URL=index.php'>";
      $showform = false;
    };
if($showform) {
?>


<form id="formular" action="" method="post">
  <h2><?php echo LangText()["kurs_absprache_title"]; ?></h2>
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

<?php } ?>

<style>

  #success {
	   font-size: 20px;
    font-family: Verdana,Arial,Helvetica,sans-serif;
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
  
  @media screen and (max-width: 800px)
  {
    #formular 
    {
      float: left;
      width: 300px;%;
      font-size: 14px;
      font-family: Verdana,Arial,Helvetica,sans-serif;
    }

  }
</style>