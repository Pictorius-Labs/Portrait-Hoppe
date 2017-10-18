<?php
    session_start();
    require_once '../mysql.php';
    $db = new DB();
    $db->logout();
    echo '<meta http-equiv="Refresh" content="0; URL=../web-admin/">';
?>