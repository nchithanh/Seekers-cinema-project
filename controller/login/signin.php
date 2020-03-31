<?php
include "model/connect.php";
include_once "model/user.php";
if(isset($_POST['adduser'])&&$_POST['adduser']){
    $user=htmlspecialchars($_POST['user'],ENT_QUOTES);
    $pass=htmlspecialchars($_POST['pass'],ENT_QUOTES);
    $email=htmlspecialchars($_POST['email'],ENT_QUOTES);
    $role=$_POST['role'];
    $trung = (checkUserTrung($user) == $user) ? 1 : 0;  
    if($trung == 0) {
        unset($_SESSION['trung']);
        add_user($user,$pass,$email,$role); 
    } else if($trung == 1) {
        $_SESSION['trung'] = 1;
        header('location: index.php?contro=login');
    } else {
        header('location: index.php');
    }
    
}
?>