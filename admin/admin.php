<?php
session_start();
ob_start();
if($_SESSION['role']!=2){
    header('location: ../index.php');
}
    require_once "model/connect.php";
    include "view/header.php";
    
    $controller="home";
    if(isset($_GET['contro'])){
        $controller=$_GET['contro'];
    }
    switch($controller){
        case'home':
            include "controller/home.php";
            break ;
        case 'logout':
            include "controller/logout.php";
            break;
        case 'film':
            include "controller/film.php";
            break ;
        case 'film_dt':
            include "controller/film_dt.php";
            break ;
        case 'suatchieu':
            include "controller/suatchieu.php";
            break;
        case 'addphim':
            include "controller/addphim.php";
            break;
        case 'phongchieu':
            include "controller/phongchieu.php";
            break; 
        case 'qlrap':
            include "controller/qlrap.php";
            break;            
        // case 'logout':
    
        //     include "controller/logout.php";
        //     break;
    }   
    include "view/footer.php";
    
?>