<?php
// nho inlu connect database
// lam xong nho inlu qua index.php
include "model/connect.php";
include_once "model/user.php";

if(isset($_POST["login"])&&$_POST["login"]){
    $user=htmlspecialchars($_POST['user'],ENT_QUOTES);
    $pass=htmlspecialchars($_POST['pass'],ENT_QUOTES);
    //ma hoa//
    $pass = sha1($pass.$user.$pass);
    //ma hoa//
    $checkinfo=checkuser($user,$pass);
    $_SESSION['id']=$checkinfo['id'];
    $_SESSION['user']=$checkinfo['user'];
    $_SESSION['pass']=$checkinfo['pass'];
    $_SESSION['role']=$checkinfo['role'];
    $_SESSION['sdt']=$checkinfo['sdt'];
    $_SESSION['mail']= $checkinfo['email'];
    if($checkinfo['role']==2){
        header('location: admin/admin.php');
    }elseif($checkinfo['role']==1){
        header('location: index.php') ;
    }else{
        header('location: index.php?loidangnhap=1') ;

    }
        
        
}

?>