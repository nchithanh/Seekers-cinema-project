<?php
include "model/connect.php";
include_once "model/user.php";
if(isset($_POST['adduser'])&&$_POST['adduser']){
    $user=htmlspecialchars($_POST['user'],ENT_QUOTES);
    $pass=htmlspecialchars($_POST['pass'],ENT_QUOTES);
    $email=htmlspecialchars($_POST['email'],ENT_QUOTES);
    add_user($user,$pass,$email); 
}
?>