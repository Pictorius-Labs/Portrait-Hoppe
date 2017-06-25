<!-- Autor Markus Richert -->

<html>
  
  <head>
    <title>Bildhauer Burkhard Hoppe - Bildhauer mit Seele</title>
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="js/jquery.js"></script>
  </head>
  
  <?php 
    $show='home';
      if(isset($_GET['show'])) $show=$_GET['show'];
      if(isset($_POST['show'])) $show=$_POST['show'];  
  ?>
  
  <?php 
    require_once 'mysql.php';
    $db = new DB();
  ?>
  
  <?php
    
    $pdo = new PDO('mysql:host=localhost;dbname=portrait-hoppe', 'root', 'Nintendo56');
    $kurse = $db->KurseHome();
    foreach ($kurse as $row) 
    {
      date_default_timezone_set("Europe/Berlin");
      $timestamp = time();
      $datenow = date("Y-m-d",$timestamp);
      $datekurs = $row['last_date'];
      
      if ($datenow > $datekurs) {
        $stmt = $pdo->prepare("DELETE FROM `kurse` WHERE `kurs-id` = ".$row['kurs-id']);
        $stmt->execute();
      }
    }
?>
  
 
  
  <body>
    
    <div id="wrapper">
      
      <?php include('header.php'); ?>
      
      <nav>
        <?php include('navigation.php'); ?>
      </nav>
      
      <div id="content">
        <?php include($show.'.php'); ?>
      </div>
      
      <?php include('footer.php'); ?>
      
    </div>
    
  </body>

</html>
    

<style>
     
  *
  {
    margin: 0;
    padding: 0;
    font-family: Arial;
    font-size: 14px;
  }
  
  html, body
  {
    height: 100%;
  }
  
  #wrapper{
    position: relative;
    min-height: 100%;
  }
  
  #content{
    margin-left : 0px;
    margin-top: -942px;
    padding-bottom: 14em;
    overflow: hidden;
  }
  
</style>

<script>
  var mButton = document.getElementById("menu");
  var menu = document.getElementById("menu_main");
  var content =  document.getElementById("content");
  var open = 0;
  
  mButton.onclick = function(){
    if(open == 0)
    {
      menu.style.marginLeft = 0;
      mButton.style.color = "#000";
      menu.style.transition = "margin-left 1s ease-in";
      content.style.transition = "margin-left 1s ease-in";
      content.style.marginLeft = 300;
      open = 1; 
    }
    else
    {
      menu.style.marginLeft = -310;
      mButton.style.color = "gray";
      menu.style.transition = "margin-left 1s ease-out";
      content.style.transition = "margin-left 1s ease-out";
      content.style.marginLeft = 0;
      open = 0;
    }
  }
</script>