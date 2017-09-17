<div class="site">
<h1>Shop</h1>
<div class="site_content">
  
  <?php
    $showShopAdmin = true;
    $showNewShop = false;
      
    if(isset($_GET['newShop'])) 
    {
      $showShopAdmin = false;
      $showNewShop = true;

      if (isset($_POST["submit"]))
      {
        $product = htmlentities($_POST['product']);
        $description = htmlentities($_POST['description']);
        $cost = htmlentities($_POST['cost'].'€');
        $pic = $_POST['pic'];

        if($db->newShop($product, $description, $cost, $pic) === TRUE) 
        { 
          $showNewShop = false;
          echo "<h3>Produkt hinzugefügt!</h3>";
          echo "<meta http-equiv='Refresh' content='2; URL=?site=shop'>";    
        }
      }

      if($showNewShop) 
      {
  ?>
  
  <form id="formular" action="?site=shop&newShop" method="post">
      <input placeholder="Produktname" name="product" type="text" required/><br />
      <textarea  placeholder="Beschreibung"cols="50" rows="5" name="description" required></textarea><br />
      <input placeholder="Preis" name="cost" type="text" />€<br />
      <input placeholder="Bildname" name="pic" type="text" /><br />
      <input id="submit" name="submit" type="submit" value="Hinzufügen!" />
  </form>

  <?php
      }
    }
    if($showShopAdmin) 
    {  
  ?>
  
  <div id="new">
      <a href="?site=shop&newShop"><img src="img/ic_neu.png">Neuen Eintrag erstellen</a>
  </div>  
  <br>
  
  <?php
    if (isset($_GET["delShop"]))
    {
      $shop_id = $_GET['delShop'];
      
      if($db->delShop($shop_id) === TRUE) 
      { 
        echo "<h3>Eintrag wurde gelöscht!</h3>";
        echo "<meta http-equiv='Refresh' content='2; URL=?site=shop'>";    
      }
    }
    
    $shop = $db->Shop();                    
                
    foreach ($shop as $row) 
    {
      $ordner = "../img/shop";
      $bildinfo = pathinfo($ordner."/".$row['pic']); 
  ?>

  <div class="shop_object">
    <img id="shop_pic" src="<?php echo $bildinfo['dirname']."/".$bildinfo['basename'];?>"/>
    <div id="shop_text">
      <?php
        echo "<h3 id='product'>" .$row['product']. "<h3 id='cost'>".$row['cost']."<a href='?site=shop&delShop=".$row['id']."'><img src='img/ic_löschen.png'></a></h3></h3>";
        echo "";
        echo "<p>" .$row['description']. "</p><br />";
      ?>
    </div>
  </div>
  
  <?php
      }
    }
  ?>
  
  </div>
</div>