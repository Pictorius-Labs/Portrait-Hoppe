<?php
    session_start();
    session_destroy();
    setcookie("USR","",time() - 3600);
    echo '<meta http-equiv="Refresh" content="0; URL=../web-admin/">';
?>