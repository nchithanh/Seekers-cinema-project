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
?>