<?php
// nho inlu connect database
// lam xong nho inlu qua index.php
include "model/connect.php";
include_once "model/user.php";

if(isset($_POST["login"])&&$_POST["login"]){
    $user=htmlspecialchars($_POST['user'],ENT_QUOTES);
    $pass=htmlspecialchars($_POST['pass'],ENT_QUOTES);
    $checkinfo=checkuser($user,$pass);
    // $trung = checkUserTrung($user) > 0 ? 1 : 0;  
    //     if($trung = 0) {
    //         unset($_SESSION['trung']);
    //         add_user($user,$pass,$email,$role); 
    //     } else {
    //         $_SESSION['trung'] = 1;
    //         header('location: index.php?contro=login');
    //     }
    
    
        $_SESSION['id']=$checkinfo['id'];
        $_SESSION['user']=$checkinfo['user'];
        $_SESSION['role']=$checkinfo['role'];
        if($checkinfo['role']==2){
            header('location: admin/admin.php');
        }elseif($checkinfo['role']==1){
            header('location: index.php') ;
        }else{
            header('location: index.php?contro=login&loidangnhap=1') ;

        }
        
    
}

?>