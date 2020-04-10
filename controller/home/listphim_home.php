<?php
// nho inlu connect database
// lam xong nho inlu qua index.php
include "model/connect.php";
include_once "model/phim_sql.php";
$loadphimdc=loadphim(6,0);
$loadphimsc=loadphim(6,1);
$loadphim_datve=loadphim(0,0);
$loadphimmoi=loadphim(4,1);
$loadbestphim=loadbestphim();
?>