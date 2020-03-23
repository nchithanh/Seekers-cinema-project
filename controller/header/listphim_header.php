<?php
// nho inlu connect database
// lam xong nho inlu qua index.php
include "model/connect.php";
include_once "model/phim_sql.php";
$loadphimdc=loadphimcc(0,4,0);
$loadphimsc=loadphimcc(0,4,1);
?>