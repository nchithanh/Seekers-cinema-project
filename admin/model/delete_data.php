<?php
// Xóa rạp chiếu
    function xoarap($id){
		global $conn ;
	    $sql ="DELETE FROM rap where id=".$id."";
	    $conn->exec($sql);
	}
// Xóa phòng chiếu
    function xoaphong($id){
		global $conn ;
	    $sql ="DELETE FROM phongchieu where id=".$id."";
	    $conn->exec($sql);
    }
// Xóa phim
function DeleteFilmById($id){
    global $conn ;
    $sql ="DELETE FROM phim where id=".$id."";
    $conn->exec($sql);
}
// Xóa hang ghe 
function DeleteHangghe($id){
	global $conn ;
	$sql ="DELETE FROM hangghe where id=".$id."";
	$conn->exec($sql);
}
//Xoa ghe
function Deleteghe($id){
	global $conn ;
	$sql ="DELETE FROM ghe where id=".$id."";
	$conn->exec($sql);
}
// Xoa Suat chieu ;
function DeleteSuatchieu($id){
	global $conn ;
	$sql ="DELETE FROM suatchieu where id=".$id."";
	$conn->exec($sql);
}
// Xoa trang thai ghe ;
function DeleteTrangthaighe($id){
	global $conn ;
	$sql ="DELETE FROM trangthai_ghe where id=".$id."";
	$conn->exec($sql);
}
// XOA lien ket phi rap 
function DeleteConnect($id){
	global $conn ;
	$sql ="DELETE FROM phim_rap where id_lienket =".$id."";
	$conn->exec($sql);
}
// XOA DANH GIA PHIM 
function DeleteDanhgiaphim($id){
	global $conn ;
	$sql ="DELETE FROM danhgiaphim where id =".$id."";
	$conn->exec($sql);
}
?>