<?php
  class DB {
	   private static $_db_username 		= "root";
	   private static $_db_password 		= "Nintendo56";
	   private static $_db_host 		    = "localhost";
	   private static $_db_name		    = "portrait-hoppe";
	   private static $_db;	
	
    
     function __construct() 
     {
      try {
      self::$_db = new PDO("mysql:host=" . self::$_db_host . ";dbname=" . self::$_db_name,  self::$_db_username , self::$_db_password);
      } 
      catch(PDOException $e) 
      {
       echo "Verbindung gescheitert!";
       die();
      }
     }

    function NewsHome() 
    {
      $stmt= self::$_db->prepare("SELECT * FROM news ORDER BY `news-id` DESC LIMIT 5");
      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function KurseHome() 
    {
      $stmt= self::$_db->prepare("SELECT * FROM kurse ORDER BY `first_date` ASC LIMIT 5");
      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    function News() 
    {
      $stmt= self::$_db->prepare("SELECT * FROM news ORDER BY `news-id` DESC");
      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function Kurse() 
    {
      $stmt= self::$_db->prepare("SELECT * FROM kurse ORDER BY `first_date` ASC");
      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    function Shop() 
    {
      $stmt= self::$_db->prepare("SELECT * FROM shop");
      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

  }
?>