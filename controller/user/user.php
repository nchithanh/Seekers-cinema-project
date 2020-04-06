<?php

include "model/connect.php";
include_once "model/user.php";
include_once "model/phim_sql.php";
if(isset($_POST['update']) && $_POST['update']) {
    update_user($_SESSION['id'],$_SESSION['user'],$_SESSION['pass'],$_SESSION['mail']);
} 
$dsve = loadveall();
?>