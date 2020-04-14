<?php
    function xoarap($id){
		global $conn ;
	    $sql ="DELETE FROM rap where id=".$id."";
	    $conn->exec($sql);
	}
?>