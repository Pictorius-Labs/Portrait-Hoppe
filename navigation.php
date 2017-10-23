<nav>
  <div id="menu_main">
    <ul>
      <a href="index.php?show=portraits">
        <li id="menu_portrait">
          <?php echo LangText()["menuepoint_1"]; ?>
        </li>
      </a>
      <a id="dropdown">
        <li id="menu_bildhauerei">
            <?php echo LangText()["menuepoint_2"]; ?>
        </li>
      </a>
      <div id="layer_2">
        <ul>
          <a href="index.php?show=bauschmuck">
            <li>
                <?php echo LangText()["menuepoint_2.1"]; ?>
            </li>
          </a>
          <a href="index.php?show=skulptur">
            <li>
                <?php echo LangText()["menuepoint_2.2"]; ?>
            </li>
          </a>
          <a href="index.php?show=relief">
            <li>
                <?php echo LangText()["menuepoint_2.3"]; ?>
            </li>
          </a>
          <a href="index.php?show=vorgehensweise">
            <li>
                <?php echo LangText()["menuepoint_2.4"]; ?>
            </li>
          </a>
        </ul>
      </div>
      <a href="index.php?show=vita">
        <li id="menu_vita">
            <?php echo LangText()["menuepoint_3"]; ?>
        </li>
      </a>
      <a href="index.php?show=news">
        <li id="menu_news">
            <?php echo LangText()["menuepoint_4"]; ?>
        </li>
      </a>
      <a href="index.php?show=kurse">
        <li id="menu_kurse">
            <?php echo LangText()["menuepoint_5"]; ?>
        </li>
      </a>
    </ul>
  </div>
</nav>

<style>

  #menu_main
  {
	position: fixed;
    width: 300px;
    height: 100%;
    background: #E0E0E0;
    box-shadow: 1px 5px 20px #000;
    margin-left: -310px;
  }
   
  #menu_main ul li
  {
    text-align: center;
    width: 280px;
    padding: 10px;
    font-family: Arial;
    font-size: 18px;
	list-style-type:none;
  }
   
  #menu_main ul li:hover
  {
    background: #757575;
    color: #FFF;
  }
  
  #menu_main ul a
  {
    text-decoration: none;
    color: #000;
  }
   
  #menu_main ul #layer_2 li
  {
    background: #BDBDBD;
  }
   
  #menu_main #layer_2 ul li:hover
  {
    background: #757575;
    color: #FFF;
  }
  
  #layer_2
  {
	  display: none;
  }
 
  
  #menu_main #dropdown
  {
	  cursor:pointer;
  }
  
 
  
</style>
<?php
    if(isset($_GET['show'])) {
        if($show == "bauschmuck" || $show == "skulptur" || $show == "relief" || $show == "vorgehensweise") {
             echo "<style> #menu_bildhauerei {color: #FFF; background: #424242; }; </style>";
        }else {
        echo "<style> #menu_".$show."{color: #FFF; background: #424242; }; </style>";
        }
    }
?>
<script>
	var dropdown = document.getElementById("dropdown");
	var box = document.getElementById("layer_2");
	var open = 0;
	  
  dropdown.onclick = function(){
    if(open == 0) {
      box.style.display = "block";
      open = 1; 
    }else {
      box.style.display = "none";
      open = 0;
    }
  }
</script>
