<?php
    include "model/connect.php";
    include_once "model/thanhtoan_sql.php";
    include_once "model/datve_sql.php";
    if(isset($_GET['phim'])){
        $loadrap=thanhtoan_rap($_GET['idrap']);
        $loadphim=thanhtoan_phim($_GET['phim']);
        $loadsuatchieu=thanhtoan_suatchieu($_GET['idsuatchieu']);
        $loadphongchieu=thanhtoan_phongchieu($_GET['phongchieu']);
        $loadghe=thanhtoan_ghe($_GET['idghe']);
        $loadhangghe=thanhtoan_hangghe($loadghe['idhangghe']);
    }
    if(isset($_POST['thanhtoan'])&&$_POST['thanhtoan']){
        $tenphim=$_POST['phim'];
        $tenrap=$_POST['rap'];
        $tenphongchieu=$_POST['phongchieu'];
        $suatchieu=$_POST['suatchieu'];
        $ghe=$_POST['ghe'];
        $iduser=$_SESSION['id'];
        add_ve($tenphim,$tenrap,$tenphongchieu,$suatchieu,$ghe,$iduser);
        $idghe=$_POST['idghe'];
        $trangthaighe=$_POST['trangthaighe'];
        updateghe($idghe,$trangthaighe);
        deletethanhtoan($iduser);
        header('locotion: index.php?contro=thanhtoan&thanhcong=1');
    }
?>