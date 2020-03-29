<?php
 include "model/connect.php";
 include_once "model/phim_sql.php";
 include_once "model/phimdetail_sql.php";
 if(isset($_GET['idphim'])){
    $phim = phimdetail($_GET['idphim']);
 }
 
?>