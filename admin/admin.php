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
            include "controller/quanliphim/phimql_ql.php";
            include "view/quanlyphim.php";
            break;
        case 'detail':
            include "controller/quanliphim/updatephim.php";
            include "controller/quanliphim/phimdetail_ql.php";
            include "view/detail.php";
            break;
        case 'suatchieu':
            
            include "view/suatchieu.php";
            break;
        case 'logout':
    
            include "controller/logout.php";
            break;
    }   
    include "view/footer.php";
    
?>