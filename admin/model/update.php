<?php
// film information
	function UpdateFilmInformation($id,$tenphim,$tuoi,$theloai,$quocgia,$dienvien,$daodien,$thoiluong,$ngaychieu,$noidung,$anhphim,$trangthai){
	global $conn;
	$sql="update phim set tenphim = '".$tenphim."', tuoi = ".$tuoi.", theloai = '".$theloai."', quocgia = '".$quocgia."',dienvien= '".$dienvien."', daodien = '".$daodien."', thoiluong = ".$thoiluong.", ngaychieu = '".$ngaychieu."', noidung = '".$noidung."',anhphim = '".$anhphim."', trangthai = ".$trangthai." where id = ".$id."";
	$conn->exec($sql);
}
// rap update
function UpdateRapInformation($id,$tenrap,$diachi,$idtinhthanh){
	global $conn;
	$sql="update rap set tenrap='".$tenrap."' ,diachi ='".$diachi."' ,idtinhthanh= '".$idtinhthanh."' where id = ".$id."";
	$conn->exec($sql);
}
// rap update
function UpdateSuatchieuInformation($id,$ngaychieu,$thoigian,$idphim_rap,$idphongchieu){
	global $conn;
	$sql="update suatchieu set ngaychieu='".$ngaychieu."' ,thoigian ='".$thoigian."' ,idphim_rap= ".$idphim_rap." , idphongchieu =".$idphongchieu." where id = ".$id."";
	$conn->exec($sql);
}
?>