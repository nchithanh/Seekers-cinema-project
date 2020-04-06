<?php
    include "model/connect.php";
    include_once "model/datve_sql.php";
    include_once "model/phim_sql.php";
    include_once "model/thanhtoan_sql.php";
    if(isset($_POST['muave'])&&$_POST['muave']){
        $idrap=$_POST['rap'];
        $idphim=$_POST['phim'];
        $idsuatchieu=$_POST['suatchieu'];
        $idphongchieu=loadidphongchieu($idsuatchieu);
        $phongchieu=loadphongchieu($idphongchieu['idphongchieu']);
        addthanhtoan($idphim,$idrap,$idsuatchieu,$_SESSION['id'],$phongchieu['id'],$phongchieu['tenphong']);
        $loadhangghe=loadhangghetheophong($idphongchieu['idphongchieu']);
        $loadphim=showdetail($idphim);
        $loadrap=loadtenrap($idrap);
        $loadsuatchieu=thanhtoan_suatchieu($idsuatchieu);
    }
    if(isset($_POST['chonlai'])&&$_POST['chonlai']){
        $iduser=$_POST['iduser'];
        deletethanhtoan($iduser);
        header('location: index.php?contro=home');
    }
    $loadthanhtoan=loadthanhtoan($_SESSION['id']);

    $ghe1=loadghetheohangghe(1,$idsuatchieu);
    $ghe2=loadghetheohangghe(2,$idsuatchieu);
    $ghe3=loadghetheohangghe(3,$idsuatchieu);
    $ghe4=loadghetheohangghe(4,$idsuatchieu);
    $ghe5=loadghetheohangghe(5,$idsuatchieu);
    $ghe6=loadghetheohangghe(6,$idsuatchieu);
    $ghe7=loadghetheohangghe(7,$idsuatchieu);
    $ghe8=loadghetheohangghe(8,$idsuatchieu);
    $ghe9=loadghetheohangghe(9,$idsuatchieu);
    $ghe10=loadghetheohangghe(10,$idsuatchieu);
    $ghe11=loadghetheohangghe(11,$idsuatchieu);
?>