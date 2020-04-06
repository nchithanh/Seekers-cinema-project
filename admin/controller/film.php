<?php
	require_once "model/getdata.php";
	$quanliphimdc=LoadFilmByStatus(1);
	$quanliphimcc=LoadFilmByStatus(0);
	include_once "view/film.php";
?>