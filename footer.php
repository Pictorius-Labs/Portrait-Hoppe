<footer>
  <div id="kontakt">
    <img src="img/hoppe.jpg" alt="Burkhard Hoppe" />
    <div id="kontaktdaten">
      <p>Burkhard Hoppe</p>
      <p>Bernhardstraße 19</p>
      <p>48653 Coesfeld</p>
      <p>Tel. <a href="tel:+49254121748422">+49 2541 21 74 84 22</a></p>
      <p>Mobil <a href="tel:+4915221927424">+49 152 21 92 74 24</a></p>
      <p>
        <a href="mailto:b.hoppe@portrait-hoppe.de">b.hoppe@portrait-hoppe.de</a>
      </p>
    </div>
  </div>
  <div id="links">
    <a href="index.php?show=impressum" ><?php echo LangText()["disclaimer"]; ?></a>
    <a href="index.php?show=agb" ><?php echo LangText()["agb"]; ?></a>
  </div>
</footer>

<style>
  
  footer
  {
    width: 100%;
    height: 10em;
    background: #000;
    color: #FFF;
    position: absolute;
    bottom: 0;
    font-size: 14px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
  }
   
  #kontakt
  {
    display: flex;
    justify-content: flex-end;
  }
   
  #kontakt img
  {
    float: left;
    width: 100px;
    height: 115px;
    padding-top: 12.5px;
  }
   
  #kontakt #kontaktdaten
  {
    height: 90px;
    padding: 16px;
  }
   
  #kontakt #kontaktdaten p
  {
    padding-bottom: 2px;
  }
   
  #kontakt #kontaktdaten p a
  {
    text-decoration: none;
    color: #FFF;
  }
   
  #links
  {
    height: 20px;
    width: 140px;
    margin-top: -16px;
    margin-left: 15px
  }
   
  #links a
  {
    text-decoration: none;
    color: #FFF;
    padding-right: 10px; 
  }
  
  #links a:hover, #links a:focus, #links a:active, #kontakt #kontaktdaten p a:hover, #kontakt #kontaktdaten p a:active, #kontakt #kontaktdaten p a:focus
  {
    color: #3a6770;
  }
  
  @media screen and (max-width: 500px)
  {
    #kontakt img
    {
      display: none;
    }
  }
  
  @media screen and (max-width: 380px)
  {
    #links a:last-child
    {
      margin-left: 26px; 
      padding-right: 10px; 
    }
    
    #links a:first-child
    {
      display: block; 
      margin-top: -30px;
      margin-bottom: 2px;
      padding-right: 10px; 
    }
  }
  
</style>