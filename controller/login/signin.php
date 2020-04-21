<?php
include "model/connect.php";
include_once "model/user.php";
if(isset($_POST['adduser'])&&$_POST['adduser']){
    $user=htmlspecialchars($_POST['user'],ENT_QUOTES);
    $pass=htmlspecialchars($_POST['pass'],ENT_QUOTES);
    $email=htmlspecialchars($_POST['email'],ENT_QUOTES);
    $sdt=htmlspecialchars($_POST['sdt'],ENT_QUOTES);
    $role=$_POST['role'];
    $trung = (checkUserTrung($user) == $user) ? 1 : 0;  
    if($trung == 0) {
        unset($_SESSION['trung']);
        add_user($user,$pass,$email,$sdt,$role); 
        // dang ky xong tu dong dang nhap lun
        $loaduser=checkuser($user,$pass);
        $_SESSION['id']=$loaduser['id'];
        $_SESSION['user']=$loaduser['user'];
        $_SESSION['pass']=$loaduser['pass'];
        $_SESSION['role']=$loaduser['role'];
        $_SESSION['sdt']=$loaduser['sdt'];
        $_SESSION['mail']= $loaduser['email'];
        header('location: index.php');
        // dang ky xong tu dong dang nhap lun
    } else if($trung == 1) {
        $_SESSION['trung'] = 1;
        header('location: index.php');
    } else {
        header('location: index.php');
    }
    
}
?>