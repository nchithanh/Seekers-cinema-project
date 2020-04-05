<?php
  include_once "model/film.php";

  if(isset($_GET['idphim'])){
    $phim = film_detail($_GET['idphim']);
    include "view/film_detail.php";
  }

  if(isset($_GET['updated'])){
    $idphim = $_POST['id'];
    $tenphim = htmlspecialchars(($_POST['tenphim']), ENT_QUOTES);
    $tuoi = $_POST['tuoi'];
    $theloai = $_POST['theloai'];
    $quocgia = $_POST['quocgia'];
    $dienvien = $_POST['dienvien'];
    $daodien = $_POST['daodien'];
    $thoiluong = $_POST['thoiluong'];
    $ngaychieu = $_POST['ngaychieu'];

    $path='../view/img/'.$_FILES['anhphim']['name'];
    move_uploaded_file($_FILES['anhphim']['tmp_name'],$path);

    $anhphim=$_FILES['anhphim']['name'];
    $noidung=$_POST['noidung'];
    $trangthai=number_format($_POST['trangthai']);
    $phim = film_detail($idphim);
    if ($anhphim == null) {
      $anhphim = $phim['anhphim'];
    }
    film_update($idphim,$tenphim,$tuoi,$theloai,$quocgia,$dienvien,$daodien,$thoiluong,$ngaychieu,$noidung,$anhphim,$trangthai);
    header('location: admin.php?contro=film') ;
  }
?>