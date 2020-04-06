<?php
// nho inlu connect database
// lam xong nho inlu qua index.php
include "model/connect.php";
include_once "model/phim_sql.php";
if(isset($_GET['idphim'])){
    $id=$_GET['idphim'];
}else{
    $id=0;
}
$loadphimdc=loadphim(3,0);
$loadphimsc=loadphim(3,1);
$detail=showdetail($id);
if(isset($_GET['idphim'])){
    $loadphim=showdetail($_GET['idphim']);
};
//xy ly dat ve nhanh

?>