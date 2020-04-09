<?php
include_once "model/add.php";
include "model/connect.php";
                if(isset($_POST['addphim'])&&$_POST['addphim'])
            {       
                    $tenphim=htmlspecialchars(($_POST['tenphim']), ENT_QUOTES);
                    $tuoi=$_POST['tuoi'];
                    $theloai=$_POST['theloai'];
                    $quocgia=$_POST['quocgia'];
                    $dienvien=$_POST['dienvien'];
                    $daodien=$_POST['daodien'];
                    $thoiluong=$_POST['thoiluong'];
                    $noidung=$_POST['noidung'];
                    $trangthai=($_POST['trangthai']);
                    $path='../view/img/'.$_FILES['anhphim']['name'];
                    move_uploaded_file($_FILES['anhphim']['tmp_name'],$path);
                    $anhphim=$_FILES['anhphim']['name'];
                    $ngaychieu=$_POST['ngaychieu'];
                    $path='../view/video/'.$_FILES['trailer']['name'];
                    move_uploaded_file($_FILES['trailer']['tmp_name'],$path);
                    $trailer=$_FILES['trailer']['name'];
                    $rating=$_POST['rating'];
                    $path='../view/img/'.$_FILES['banner']['name'];
                    move_uploaded_file($_FILES['banner']['tmp_name'],$path);
                    $banner=$_FILES['banner']['name'];

                    addphim($tenphim,$tuoi,$theloai,$quocgia,$dienvien,$daodien,$thoiluong,$noidung,$trangthai,$anhphim,$trailer,$banner,$ngaychieu,$rating);
            }
include "view/addphim.php";
?>