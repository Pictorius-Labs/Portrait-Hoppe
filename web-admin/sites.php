<?php 
switch ($site) {
        
        case "neuigkeiten":
            include("news_admin.php");
            break;

       case "kurse":
            include("kurse_admin.php");
            break;
        
        case "shop":
            include("shop_admin.php");
            break;
        
        case "slider":
            include("slider_admin.php");
            break;
        
        default:
            include("admin_home.php");
            break;         
    }
?>