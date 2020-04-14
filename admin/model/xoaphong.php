<?php
    function xoaphong($id){
		global $conn ;
	    $sql ="DELETE FROM phongchieu where id=".$id."";
	    $conn->exec($sql);
	}
?>