<?php
// nho inlu connect database
// lam xong nho inlu qua index.php
include "model/connect.php";
include_once "model/phim_sql.php";
$loadphimdc=loadphim(3,0);
$loadphimsc=loadphim(3,1);
$loadphimall=loadphimall();
?>