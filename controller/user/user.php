<?php

include "model/connect.php";
include_once "model/user.php";
include_once "model/phim_sql.php";
if(isset($_POST['update']) && $_POST['update']) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $sdt=$_POST['sdt'];
    update_user($_SESSION['id'],$user,$pass,$email,$sdt);
} 
$loadusertheoid=loadusertheoid($_SESSION['id']);
$dsve = loadveall($_SESSION['id']);
?>