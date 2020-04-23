<?php
	require_once "model/delete_data.php";
	require_once "model/getdata.php";
	require_once "model/update.php";
	
	if(isset($_GET['film_dt']) && $_GET['film_dt']){
		$phim = LoadFilmDetailById($_GET['film_dt']);
		include_once "view/film_detail.php";
		exit();
	}
	
	if(isset($_GET['updated']) && $_GET['updated']){
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
		$phim = LoadFilmDetailById($idphim);
		if ($anhphim == null) {
		  $anhphim = $phim['anhphim'];
		}
		UpdateFilmInformation($idphim,$tenphim,$tuoi,$theloai,$quocgia,$dienvien,$daodien,$thoiluong,$ngaychieu,$noidung,$anhphim,$trangthai);
		header('location: admin.php?contro=film') ;
	}

	if(isset($_GET['addfilm'])){
		if(isset($_POST['addphim']) && $_POST['addphim']){
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
	include_once "view/addphim.php";
	exit();
	}

	if(isset($_GET['film_del']) && $_GET['film_del']){
		echo ' CHUA LAM AHIHI';
		echo "ID PHIM :".$_GET['film_del'];
	// 	$idphim = $_GET['idphim'];
	// 	DeleteFilmById($idphim);
	// 	include_once "view/film.php";
	   }

	$quanliphimdc=LoadFilmByStatus(1);
	$quanliphimcc=LoadFilmByStatus(0);
	include_once "view/film.php";
?>