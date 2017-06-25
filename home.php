<!-- #region Jssor Slider Begin -->
<script src="js/jssor.slider-24.1.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
  
  jssor_1_slider_init = function() {

  var jssor_1_SlideshowTransitions = [
    {$Duration:1200,$Opacity:2}
  ];

  var jssor_1_options = {
    $AutoPlay: 1,
    $SlideshowOptions: {
      $Class: $JssorSlideshowRunner$,
      $Transitions: jssor_1_SlideshowTransitions,
      $TransitionsOrder: 1
    },
    $ArrowNavigatorOptions: {
      $Class: $JssorArrowNavigator$
    },
    $BulletNavigatorOptions: {
      $Class: $JssorBulletNavigator$
    }
  };

  var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

  /*responsive code begin*/
  /*remove responsive code if you don't want the slider scales while window resizing*/
  function ScaleSlider() {
    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
    if (refSize) 
    {
      refSize = Math.min(refSize, 1100);
      jssor_1_slider.$ScaleWidth(refSize);
    }
    else 
    {
      window.setTimeout(ScaleSlider, 30);
    }
    }
    ScaleSlider();
    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*responsive code end*/
  };
</script>
    
<style>
  
  /* jssor slider bullet navigator skin 05 css */
  /*
  .jssorb05 div           (normal)
  .jssorb05 div:hover     (normal mouseover)
  .jssorb05 .av           (active)
  .jssorb05 .av:hover     (active mouseover)
  .jssorb05 .dn           (mousedown)
  */
  
  .jssorb05 { position: absolute; }
  
  .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
      position: absolute;
      /* size of bullet elment */
      width: 16px;
      height: 16px;
      background: url('img/b05.png') no-repeat;
      overflow: hidden;
      cursor: pointer;
  }
  
  .jssorb05 div { background-position: -7px -7px; }
  .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
  .jssorb05 .av { background-position: -67px -7px; }
  .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

  /* jssor slider arrow navigator skin 12 css */
  /*
  .jssora12l                  (normal)
  .jssora12r                  (normal)
  .jssora12l:hover            (normal mouseover)
  .jssora12r:hover            (normal mouseover)
  .jssora12l.jssora12ldn      (mousedown)
  .jssora12r.jssora12rdn      (mousedown)
  */
  
  .jssora12l, .jssora12r {
      display: block;
      position: absolute;
      /* size of arrow element */
      width: 30px;
      height: 46px;
      cursor: pointer;
      background: url('img/a12.png') no-repeat;
      overflow: hidden;
  }
  
  .jssora12l { background-position: -16px -37px; }
  .jssora12r { background-position: -75px -37px; }
  .jssora12l:hover { background-position: -136px -37px; }
  .jssora12r:hover { background-position: -195px -37px; }
  .jssora12l.jssora12ldn { background-position: -256px -37px; }
  .jssora12r.jssora12rdn { background-position: -315px -37px; }
  
</style>
    
<div id="jssor_1" style="position:relative;margin:auto;top:0px;left:0px;width:600px;height:300px;overflow:hidden;visibility:hidden;">
  <!-- Loading Screen -->
  <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
  <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">

      <div>
          <img data-u="image" src="img/1.jpg" />
      </div>
      <div>
          <img data-u="image" src="img/2.jpg" />
      </div>
      <div>
          <img data-u="image" src="img/3.jpg" />
      </div>
      <div>
          <img data-u="image" src="img/4.jpg" />
      </div>

      <a data-u="any" href="https://www.jssor.com" style="display:none">js slider</a>
    
  </div>
  <!-- Bullet Navigator -->
  <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
      <!-- bullet navigator item prototype -->
      <div data-u="prototype" style="width:16px;height:16px;"></div>
  </div>
  <!-- Arrow Navigator -->
  <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
  <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
<!-- #endregion Jssor Slider End -->


<br />
<h1>„Aus meinen Steinen kommt Seele.‟</h1>

<div id="news_home_all">
  <div id="news_home_titel">
      <h2>Neuigkeiten:</h2>
  </div>
  <div id ="news_home">

      <?php
          $news = $db->NewsHome();                    
          foreach ($news as $row) {
              $ordner = "img";
              $bildinfo = pathinfo($ordner."/".$row['pic']); 
      ?>

          <a id="news_home_pic" href="<?php echo $bildinfo['dirname']."/".$bildinfo['basename'];?>">
          <img id="news_home_pic" src="<?php echo $bildinfo['dirname']."/".$bildinfo['basename'];?>"/></a> 
          <div id="news_home_text">

      <?php
          echo "<h3>" .$row['date']. "</h3>";
          echo "<p>" .$row['description']. "</p><br />";
      ?>
          </div>
      <?php
          }
      ?>

  </div>
</div>

<div id="kurse_home_all">
    <div id="kurse_home_titel">
        <h2>Anstehende Kurse:</h2>
        <a href="index.php?show=kurse"><h3>Alle Kurse</h3></a>
    </div>
    <div id ="kurse_home">

        <?php
        $kurse = $db->KurseHome();
        foreach ($kurse as $row) {
        ?>

                <div id="kurse_home_text">

        <?php
                echo "<h3>" .$row['title']. "</h3>";
                if ($row['home_description'] != TRUE) {
                        echo "<p>" .$row['date']." von ".$row['time']."</p><br />";

                }else {
                    echo "<p>" .$row['date']." von ".$row['time']."<br />".$row['home_description']."</p><br />";
                }
        ?>

                </div>

        <?php
        }
        ?>
    </div>
</div>

<style>
  
  #news_home_all {
    float: left;
    width: 50%;
  }

  #news_home_titel {
    margin-top: 50px;
    margin-bottom: 20px;
    word-wrap: break-word;
  } 

  #news_home {
    border-right: dotted 1px;
    margin-bottom: 20px;
  }

  #news_home_pic {
    width: 150px;
    float: left;
  }

  #news_home_text {
    margin-left: 160px;
    margin-right: 30px;
  }

  #news_home p {
    height: 90px;
    margin-left: 10px;
    margin-top: 10px;
  }


  #kurse_home_all {
    float: left;
    width: 50%;
  }

  #kurse_home_titel {
    margin-top: 50px;
    margin-bottom: 20px;
    margin-left: 30px;
    width: 90%;
    float: left;
  }

  #kurse_home_titel h3 {
    text-decoration: none;
    color: #000;
    font-size: 14px;
    float: right;
    margin-top: -18px;
  }

  #kurse_home {
    margin-bottom: 20px;
    clear: both;
  }

  #kurse_home_text {
    margin-left: 30px;
    margin-bottom: 20px;
  }

  #kurse_home p {
    margin-left: 10px;
    margin-top: 10px;
  }
</style>
