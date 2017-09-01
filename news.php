<div id="news_titel">
  <h2>Neuigkeiten:</h2>
  <br />
</div>

<div id ="news">
  
  <?php
    $news = $db->News();                    
    
    foreach ($news as $row) 
    {
      $ordner = "img";
      $bildinfo = pathinfo($ordner."/".$row['pic']); 
  ?>

  <a id="news_pic" href="<?php echo $bildinfo['dirname']."/".$bildinfo['basename'];?>">
    <img id="news_pic" src="<?php echo $bildinfo['dirname']."/".$bildinfo['basename'];?>"/>
  </a> 
  <div id="news_text">
    
    <?php
      echo "<h3>" .$row['date']. "</h3>";
      echo "<p>" .$row['description']. "</p><br />";
    ?>
    
  </div>
  <?php
    }
  ?>

</div>

<style>
  
  #news_titel, #news
  {
    font-size: 14px;
	   margin-top: 10px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
    color: #000;
  }
  
  #news_titel 
  {
    margin-top: 20px;
    margin-bottom: 20px;
    word-wrap: break-word;
  }

  #news 
  {
    margin-bottom: 20px;
    margin-left: 20px;
    margin-right: 20px;
  }

  #news_pic 
  {
    width: 200px;
    float: left;
  }

  #news_text 
  {
    margin-left: 250px;
    margin-bottom: 20px;
  }

  #news p 
  {
    height: 90px;
    margin-left: 20px;
    margin-top: 10px;
  }
  
</style>