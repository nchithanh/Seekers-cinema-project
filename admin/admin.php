<?php
session_start();
ob_start();
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
    }   
    include "view/footer.php";
    
?>