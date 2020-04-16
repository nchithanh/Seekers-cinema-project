<?php
	require_once "model/delete_data.php";

	// if(isset($_GET['del'])){
	// 	$idphim = $_GET['idphim'];
	// 	DeleteFilmById($idphim);
	// 	include_once "view/film.php";
	//   }
	require_once "model/getdata.php";
	$quanliphimdc=LoadFilmByStatus(1);
	$quanliphimcc=LoadFilmByStatus(0);
	include_once "view/film.php";

?>