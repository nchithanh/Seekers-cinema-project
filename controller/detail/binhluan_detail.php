<?php 
include "model/connect.php";
include_once "model/user.php";
$id_phim = $_GET['idphim'];
$dscmt = load_cmt($id_phim);
$tennguoidanhgia = $_SESSION['user'];
if(isset($_POST['submit']) && $_POST['submit']) {
    $danhgia = $_POST['danhgia']; 
    $id_phim = $_GET['idphim'];
    add_cmt($tennguoidanhgia,$danhgia,$id_phim);
}
?>