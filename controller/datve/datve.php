<?php
    include "model/connect.php";
    include_once "model/datve_sql.php";
    if(isset($_POST['muave'])&&$_POST['muave']){
        $idrap=$_POST['rap'];
        $idphim=$_POST['phim'];
        $idsuatchieu=$_POST['suatchieu'];
        $idphongchieu=loadidphongchieu($idsuatchieu);
        $phongchieu=loadphongchieu($idphongchieu['idphongchieu']);
        addthanhtoan($idphim,$idrap,$idsuatchieu,$_SESSION['id'],$phongchieu['id'],$phongchieu['tenphong']);
        
        $loadhangghe=loadhangghetheophong($idphongchieu['idphongchieu']);
    }
    if(isset($_POST['chonlai'])&&$_POST['chonlai']){
        $iduser=$_POST['iduser'];
        deletethanhtoan($iduser);
        header('location: index.php?contro=home');
    }
    $loadthanhtoan=loadthanhtoan($_SESSION['id']);

    $ghe1=loadghetheohangghe(1);
    $ghe2=loadghetheohangghe(2);
    $ghe3=loadghetheohangghe(3);
    $ghe4=loadghetheohangghe(4);
    $ghe5=loadghetheohangghe(5);
    $ghe6=loadghetheohangghe(6);
    $ghe7=loadghetheohangghe(7);
    $ghe8=loadghetheohangghe(8);
    $ghe9=loadghetheohangghe(9);
    $ghe10=loadghetheohangghe(10);
    $ghe11=loadghetheohangghe(11);
?>