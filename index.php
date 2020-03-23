<?php
    include "model/connect.php";
    //incluce controller xu ly listphim  trong phim tren thanh menu
    include "view/header.php";

    //incluce controller xu ly sreach  tren header
    
    $controller="home";
    if(isset($_GET['contro'])){
        $controller=$_GET['contro'];
    }
    switch($controller){
        case 'home':
            //incluce controller xu ly banner home
            include "controller/home/banner_home.php";
            //incluce controller xu ly listphim (phim dang chieu,phim sap chieu)

            //incluce controller xu ly khuyen mai
            include "view/home.php";
            break;
        case 'danhsachphim':
            //incluce controller xu ly listphim (phim dang chieu,phim sap chieu) 
            
            include "view/danhsachphim.php";
            break;
        case 'login':
            include "view/login.php";
            break;
        case 'detail':

            //incluce controller xu ly thong tin phim 

            //incluce controller xu ly sidebar (phim dang chieu,phim sap chieu)


            //incluce controller xu ly chuc nang binh luan 

            //incluce controller xu ly mua ve 
            include "view/detail.php";
            break;
    }
    
    
?>