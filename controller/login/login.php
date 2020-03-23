<?php
// nho inlu connect database
// lam xong nho inlu qua index.php
include "model/connect.php";
include_once "model/user.php";
if(isset($_POST["login"])&&$_POST["login"]){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $checkinfo=checkuser($user,$pass);
  
        $_SESSION['id']=$checkinfo['id'];
        $_SESSION['user']=$checkinfo['user'];
        $_SESSION['role']=$checkinfo['role'];
        if($checkinfo['role']==2){
            header('location: index.php');
        }elseif($checkinfo['role']==1){
            header('location: index.php') ;
        }else{
            header('location: index.php?contro=login&loidangnhap=1') ;

        }
  
}

?>