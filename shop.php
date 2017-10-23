<div id="shop_titel">
  <h2><?php echo LangText()["shop"]; ?></h2>
  <br />
</div>

<?php
  $showShop = true;
  $showFormular = false;
  
  if(isset($_GET['betreff'])) {
    $showShop = false;
    $showFormular = true;
    $betreff = $_GET['betreff'];
    if($showFormular) {
  ?>

  <form id="shop_formular" action="" method="post">
    <input id="name" placeholder="Vorname, Name" name="name" size="25" type="text" required/>
    <br />
    <input id="email" placeholder="Email" name="email" size="25" type="email" required/>
    <br />
    <input id="betreff" placeholder="Kauf: <?php echo $betreff ?>" name="betreff" size="25" type="text" disabled="disabled"/>
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
    $from = "b.hoppe@portrait-hoppe.de";
    $to = "b.hoppe@portrait-hoppe.de";
    $subject = "Eine neue Nachricht von portrait-hoppe.de";
    $message = "Guten Tag Herr Hoppe, " 
      . "\n" 
      . "\n"
      . "Ein Besucher ihrer Website hat eine Kaufanfrage in ihrem Shop fur das Produkt" .$_POST['betreff']. "für Sie hinterlassen !" 
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
    echo "<meta http-equiv='Refresh' content='0; URL=index.php?show=shop'>";
    };
?>


<?php
    }
  }
?>
    
<div id ="shop">

  <?php
    $news = $db->Shop();                    
    foreach ($news as $row) {
      $ordner = "img/shop";
      $bildinfo = pathinfo($ordner."/".$row['pic']); 
      if($showShop) {
  ?>
    
  <img id="shop_pic" src="<?php echo $bildinfo['dirname']."/".$bildinfo['basename'];?>"/>
  <div id="shop_text">
    <a href="index.php?show=shop&betreff=<?php echo $row['product'] ?>"><h3><?php echo $row['product']; ?></h3></a>
  
    <?php
      echo "</form><h3 id='cost'>".$row['cost']."</h3></a>";
      echo "<p>" .$row['description']. "</p><br />";
    ?>

  </div>
  
  <?php
      }
    }
  ?>


</div>

<style>

  #shop_titel {
    margin: 20px;
    word-wrap: break-word;
    font-size: 14px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
  }

  #shop {
    position: relative;
    margin-bottom: 20px;
    margin-left: 40px;
    font-size: 14px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
  }

  #shop_pic {
    width: 200px;
    float: left;
    height 150px;
  }

  #shop_text {
    margin-left: 250px;
    margin-bottom: 20px;
    font-size: 14px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
  }

  #shop p {
    height: 90px;
    width: 50%;
    margin-left: 20px;
    margin-top: 10px;
  }

  #shop a {
    text-decoration: none;
    color: black;
  }

  #shop #cost {
    margin-top: -18px;
    margin-right: 20px;
    margin-left: 55%;
    font-size: 14px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
  }
  
  #shop_formular {
    margin-left: 20px;
    font-size: 14px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
  }

  #shop_formular input, #shop_formular textarea {
    width: 70%;
    margin-bottom: 20px;
    border: 0px;
    border-radius: 3px;
    border-bottom: 1px solid black;
    font-size: 14px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
  }

  #shop_formular textarea{
    max-width: 100%;
    max-height: 35%;
    font-size: 14px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
  }

  #shop_formular input:last-child 
  {
    padding: 2px;
    border-radius: 5px;
    border: 1px solid black;
    width: 120px;
    font-size: 14px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
  }
  
  @media screen and (max-width: 860px)
  {

    #shop #cost 
    {
      float: left;
      margin-top: 10px;
      margin-left: 0;
    }
    #shop_text 
    {
      margin-top: 10px;
    }
    
    #shop p
    {
      margin-top: 40px;
      margin-left: 0;
      width: 400px;
    }
    
  }
  
  @media screen and (max-width: 790px)
  {
    #shop_text 
    {
      float: left;
      margin-left: 0;
    }
    
    #shop p
    {
      width: 600px;
    }
    
  }
  
  @media screen and (max-width: 480px)
  {
    #shop p
    {
      width: 300px;
    }
  }
  
  @media screen and (max-width: 390px)
  {
    #shop p
    {
      width: 200px;
    }
  }
  
  @media screen and (max-width: 300px)
  {
    #shop p
    {
      width: 100px;
    }
  }
  
</style>