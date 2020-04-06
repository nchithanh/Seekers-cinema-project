<?php
// film information
	function UpdateFilmInformation($id,$tenphim,$tuoi,$theloai,$quocgia,$dienvien,$daodien,$thoiluong,$ngaychieu,$noidung,$anhphim,$trangthai){
	global $conn;
	$sql="update phim set tenphim = '".$tenphim."', tuoi = ".$tuoi.", theloai = '".$theloai."', quocgia = '".$quocgia."',dienvien= '".$dienvien."', daodien = '".$daodien."', thoiluong = ".$thoiluong.", ngaychieu = '".$ngaychieu."', noidung = '".$noidung."',anhphim = '".$anhphim."', trangthai = ".$trangthai." where id = ".$id."";
	$conn->exec($sql);
}
?>