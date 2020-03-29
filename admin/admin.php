<?php
session_start();
ob_start();
if($_SESSION['role']!=2){
    header('location: ../index.php');
}
    include "../model/connect.php";
    include "view/header.php";
   

    $controller="quanlyphim";
    if(isset($_GET['contro'])){
        $controller=$_GET['contro'];
    }
    switch($controller){
        case 'quanlyphim':
            
            include "view/quanlyphim.php";
            break;
        case 'chitietphim':
            
            include "view/detail_phim.php";
            break;
            case 'logout':
    
                include "controller/logout.php";
                break;
    }   
    include "view/footer.php";
    
?>