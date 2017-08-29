<div id="menu_main">
  <ul>
    <a href="index.php?show=portraits&menüpunkt=1" <?php if(isset($_GET["menüpunkt"]))if($_GET["menüpunkt"]== 1) echo"class='sie-sind-hier'"; ?>>
      <li>
        Portraits
      </li>
    </a>
    <a href="index.php?show=bildhauerei&menüpunkt=2" <?php if(isset($_GET["menüpunkt"]))if($_GET["menüpunkt"]== 2) echo"class='sie-sind-hier'"; ?>>
      <li>
        Bildhauerei
      </li>
    </a>
    <div id="layer_2">
      <ul>
        <a href="index.php?show=bauschmuck&menüpunkt=2">
          <li>
            Bauschmuck
          </li>
        </a>
        <a href="index.php?show=skulptur&menüpunkt=2">
          <li>
            Skulptur
          </li>
        </a>
        <a href="index.php?show=relief&menüpunkt=2">
          <li>
            Relief
          </li>
        </a>
        <a href="index.php?show=vorgehensweise&menüpunkt=2">
          <li>
            Vorgehensweise
          </li>
        </a>
      </ul>
    </div>
    <a href="index.php?show=vita&menüpunkt=3" <?php if(isset($_GET["menüpunkt"]))if($_GET["menüpunkt"]== 3) echo"class='sie-sind-hier'"; ?>>
      <li>
        Vita
      </li>
    </a>
    <a href="index.php?show=news&menüpunkt=4" <?php if(isset($_GET["menüpunkt"]))if($_GET["menüpunkt"]== 4) echo"class='sie-sind-hier'"; ?>>
      <li>
        News
      </li>
    </a>
    <a href="index.php?show=kurse&menüpunkt=5" <?php if(isset($_GET["menüpunkt"]))if($_GET["menüpunkt"]== 5) echo"class='sie-sind-hier'"; ?>>
      <li>
        Kurse
      </li>
    </a>
  </ul>
</div>

<style>

  #menu_main
  {
    width: 300px;
    height: 100%;
    background: #E0E0E0;
    box-shadow: 1px 5px 20px #000;
    margin-left: -310px;
    margin-top: 100px;
  }
   
  #menu_main ul li
  {
    text-align: center;
    width: 280px;
    padding: 10px;
    font-family: Arial;
    font-size: 18px;
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
  
  #menu_main ul a.sie-sind-hier li
  {
    color: #FFF;
    background: #424242;
  }
  
</style>
