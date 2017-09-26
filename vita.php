<div id="vita">
  <img src="img/sites/profil_vita.jpg" />
  <table>
    <?php echo LangText()["vita"]; ?>
  </table>
</div>

<style>
  
  #vita img 
  {
    margin: 20px;
    float: left;
  }

  #vita table 
  {
    padding-left: 20px;
    padding-top: 2.125%;
  }
  
  #vita #datum 
  {
    width: 100px;
  }

  #vita td 
  {
    padding-right: 50px;
    padding-top: 20px;
  }
  
  #vita 
  {
    margin-top: 20px;
    margin-left: 6.5%;
    font-size: 14px;
	   font-family: Verdana,Arial,Helvetica,sans-serif;
  }
  
  @media screen and (max-width: 880px)
  {
    #vita table 
      {
        float: left
      }
    
  }
  
  @media screen and (max-width: 480px)
  {
    #vita table 
    {
      padding-left: 5px;
      margin-left: -20px;
    }
    
    #vita img 
    {
      margin-left: -40px;
    }
    
  }
  
  @media screen and (max-width: 360px)
  {
    #vita table 
    {
      padding-left: 5px;
      margin-left: -20px;
    }
    
    #vita img 
    {
      margin-left: -50px;
    }

  }
</style>