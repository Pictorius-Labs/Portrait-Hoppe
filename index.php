<html>
  
  <head>
    <title>Bildhauer Burkhard Hoppe - Bildhauer mit Seele</title>
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="js/jquery.js"></script>
  
    <meta name="author" content="Pictorius-Labs">
    <meta name="publisher" content="Bildhauer Burkhard Hoppe">
    <meta name="copyright" content="Bildhauer Burkhard Hoppe">
    <meta name="description" content="Ich fertige individuelle Skulpturen aus Naturstein. Auftragsarbeiten, Steinarbeiten und Workshops in und um Coesfeld. Besuchen Sie meine Seite und erleben Sie meine Passion mit.">
    <meta name="keywords" content="Bildhauer, Portraitbildhauerei, Bildhauerei, in, Coesfeld, Burkhard, Hoppe, Bauschmuck, Skulptur, Relief, Grabmal">
    <meta name="audience" content="all">
    <meta name="robots" content="index, follow">
    
  </head>
    
  <?php 
    
	  
    if(isset($_GET['show'])) $show = $_GET['show'];
    if(isset($_POST['show'])) $show = $_POST['show'];  
	
	
 
    session_start();
	
	

    if(isset ($_GET['lang'])) {
        $_SESSION['language'] = $_GET['lang'];
    }

    if(!isset($_SESSION['language'])){
        $_SESSION['language'] = "de";
    }
    
    require_once 'mysql.php';
    $db = new DB();
    
    $pdo = new PDO('mysql:host=localhost;dbname=portrait-hoppe', 'root', 'Nintendo56');
    $kurse = $db->KurseHome();
    foreach ($kurse as $row) {
      date_default_timezone_set("Europe/Berlin");
      $timestamp = time();
      $datenow = date("Y-m-d",$timestamp);
      $datekurs = $row['last_date'];
      if ($datenow > $datekurs) {
        $stmt = $pdo->prepare("DELETE FROM `kurse` WHERE `kurs-id` = ".$row['kurs-id']);
        $stmt->execute();
      }
    }
    
    include ('LanguageText/'.$_SESSION['language'].'_language.php');
?>
  
 
  
  <body>
    
    <div id="wrapper">
      
    <?php 
        include('header.php');
        include('navigation.php');
    ?>
      
      <div id="content">
        <?php if(is_null($show)) {$show='home';} include($show.'.php'); ?>
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
    margin: 100px 20px 0px 20px;
    height: auto;
    padding-bottom: 14em;
    padding-top: 20px;
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
      menu.style.marginLeft = -20;
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
      content.style.marginLeft = 20;
      open = 0;
    }
  }
</script>