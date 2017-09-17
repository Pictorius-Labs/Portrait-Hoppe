<?php
  if(isset($_GET["site"]))
  {
    $site = $_GET["site"];
  }
  else
  {
    $site = "";
  }
?>

<html>
  <head>
    <title>Bildhauer Burkhard Hoppe - Administrator Bereich</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style_admin.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet" type="text/css">
  </head>
    
  <?php
    require_once '../mysql.php';
        
    $db = new DB();
    $LoggedIn = false;
    
    if(isset($_POST['einloggen'])) 
    {
      $user = $_POST['benutzername'];
      $passwort = hash('sha512', $_POST['passwort'] . $user);
      
      if($db->login($user, $passwort) === TRUE) 
      { 
        $LoggedIn = true;
        setcookie("USR",$passwort,time()+(1800));
      } 
      else 
      {
        echo "<style>#login_fail {display: block;}</style>";	
      }
    }
    
    $logged = $db->LoggedIn();
    
    foreach ($logged as $row) 
    {
      if (isset($_COOKIE["USR"]) && $row["passwort"] == $_COOKIE["USR"]) 
      {
        $LoggedIn = true;
      }
    }
    
    if(!$LoggedIn) 
    {
  ?>
  
  <body>
    <div class="login_bereich">
      <center>
        <img src="../img/logo.gif">
        <p>Administrator - Bereich</p>

        <form action=" " method="POST">
            <input type="text" placeholder="Benutzername" name="benutzername" required autofocus autocomplete="off">
            <br>
            <input type="password" placeholder="Passwort" name="passwort" required>
            <br>
            <div id="login_fail">Anmeldung fehlgeschlagen!</div>
            <input type="submit" name="einloggen" value="Anmelden">
        </form>
        
      </center>
    </div>
    
  <?php
    }

    if($LoggedIn) 
    {
  ?>
    
  <div class="menu">
    <img src="img/logo.png">
    <p>Administrator - Bereich</p>  
    <div class="menu_object"><a href="?site=neuigkeiten">Neuigkeiten</a></div>
    <div class="menu_object"><a href="?site=kurse">Kurse</a></div>
    <div class="menu_object"><a href="?site=shop">Shop</a></div>
    <div class="menu_object"><a href="logout.php">Abmelden</a></div>
  </div>
  <div class="content">
    <?php include("sites.php");?>
  </div>
  
  <?php
    }
  ?>
    
  </body>
</html>