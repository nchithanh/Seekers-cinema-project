<?php
// nho inlu connect database
// lam xong nho inlu qua index.php
include "model/connect.php";
include "model/phim_sql.php";
$loadphimdc=loadphim(0,6,0);
$loadphimsc=loadphim(0,6,1);
?>