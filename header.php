<header>
  <div id="logo">
    <a href="index.php?show=home"><img src="img/logo_top.gif" alt="Burkhard Hoppe Logo" /></a>
  </div>
  <div id="menu">
    <i class="material-icons">menu</i>
  </div>
  <a id="button_frame" href="index.php?show=shop">
    <div id="button">
      <i class="material-icons">shopping_cart</i>
      <p><?php echo LangText()["shop"]; ?></p>
    </div>
    </a>
<!--
  <div id="DropDown_frame">
    <div id="menu_lang">
      <ul>
        <li>
          <img src="img/flags/<?php echo $_SESSION['language'];?>_flag.png"/>
          <?php
                if ($_SESSION['language'] == "de") {
                    echo "<p>Deutsch</p>";
                }elseif ($_SESSION['language'] == "en") {
                    echo "<p>English</p>";
                }elseif ($_SESSION['language'] == "nl") {
                    echo "<p>Nederlands</p>";
                }elseif ($_SESSION['language'] == "fr") {
                    echo "<p>Français</p>";
                }
            ?>
        </li>
          
        <?php
        
                if ($_SESSION['language'] !== "de") {
                    echo "<li>
                            <a href='?lang=de'>
                                <img src='img/flags/de_flag.png' />
                            <p>Deutsch</p>
                            </a>
                          </li>";
                }
                if ($_SESSION['language'] !== "en") {
                    echo "<li>
                            <a href='?lang=en'>
                                <img src='img/flags/en_flag.png' />
                            <p>English</p>
                            </a>
                          </li>";
                }
                if ($_SESSION['language'] !== "nl") {
                    echo "<li>
                            <a href='?lang=nl'>
                                <img src='img/flags/nl_flag.png' />
                            <p>Nederlands</p>
                            </a>
                          </li>";
                }
                if ($_SESSION['language'] !== "fr") {
                    echo "<li>
                            <a href='?lang=fr'>
                                <img src='img/flags/fr_flag.png' />
                            <p>Français</p>
                            </a>
                          </li>";
                }
        ?>
      </ul>
    </div>
  </div>
-->
</header>

<style>
   
  header
  {
    width: 100%;
    height: 100px;
    background: #FFF;
    border-bottom: #000 solid 1px;
    position: fixed;
    top: 0;
    z-index: 10;
    box-shadow: 1px 0.5px 20px -2px #000;
  }
   
  #menu
  {
    margin-top: 35px;
    margin-left: 15px;
    top: 0;
    position: absolute;
    width: 24px;
    height: 24px;
    color: gray;
  }
   
  #menu:hover
  {
    color: #000;
    cursor: pointer;
  }
   
  #logo
  {
    width: 252px;
    height: 67px;
    margin-left: auto;
    margin-right: auto;
    padding-top: 15px;
    padding-bottom: 15px;
  }
   
  #button i
  {
    float: left;
    width: 24px;
    height: 24px;
    margin-left: 12px;
    margin-top: 8px;
  }
  
  #button
  {
    font-family: Arial;
    height: 40px;
    width: 100px;
    border: #000 solid 1px;
    border-radius: 20px;
  }
  
  #button:hover
  {
    color: #FFF;
    background: #000;
  }
  
  #button p
  {
    margin-top: 12px;
    margin-left: 45px;
  }
  
  #button_frame
  {
    text-decoration: none;
    color: #000;
    margin-top: -70px;
    margin-right: 20px;
    float: right;
  }
  
  #DropDown_frame
  {
    font-family: Arial;
    font-size: 16px;
    float: right;
    margin-top: -70px;
    margin-right: 15px;
  }
  
  #menu_lang ul
  {
    list-style: none;
    width: 140px;
    border: #000 solid 1px;
    border-radius: 20px;
  }
  
  #menu_lang ul:hover li
  {
    display: block;
  }
  
  /*#menu_lang ul:hover li:first-child
  {
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
    display: block;
    border-bottom: #000 solid 1px;
  }*/
  
  #menu_lang ul li
  {
    background: #FFF;
    text-align-last: center;
    height: 40px;
    border-bottom: #000 solid 1px;
    display: none;
  }
  
  #menu_lang ul li:hover
  {
    background: #81D4FA;
  }
  
  #menu_lang ul li img
  {
    float: left; 
    width: 30px;
    height: 20px;
    padding-left: 15px;
    padding-top:  10px;
  }
  
  #menu_lang ul li p
  {
    padding-left: 55px;
    padding-top:  12px;
  }
  
  #menu_lang ul li:first-child
  {
    background: #E0E0E0;
    height: 40px;
    width: 140px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    display: block;
    border-bottom: none;
    background: #FFF;
  }
  
  #menu_lang ul li:last-child
  {
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    border-bottom: none; 
  }
  
  #menu_lang ul li:last-child img
  {
    padding-right: 10px;
  }
   
  #menu_lang ul li:last-child p
  {
    padding-right: 50px;
  }
  
  #menu_lang ul a
  {
    text-decoration: none;
    color: #000;
  }
  
  @media screen and (max-width: 600px) {
    #button {
      width: 40px;
    }
    #button p {
        display: none;
    }
    #button i {
        margin-left: 8px;
    } 
    #button_frame {
        margin-right: 20px;
    }
    #menu_lang ul {
      width: 40px;
    }
    #menu_lang ul li img {
      padding-left: 5px;
    }
  
    #menu_lang ul li p
    {
      display: none;
    }
  
    #menu_lang ul li:first-child
    {
      height: 40px;
      width: 40px;
    }
}
    
@media screen and (max-width: 850px) {
   #logo
    {
      margin-left: 20px;
    }
  }
  
  @media screen and (max-width: 420px)
  {
	  
    #DropDown_frame
    {
      display: none;
    }
      #button_frame {
          margin-right: 20px;
      }
  }
  
</style>