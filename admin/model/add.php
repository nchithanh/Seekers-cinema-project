<?php
	function AddConnectFilmRap($idphim,$idrap){
		global $conn ;
		$sql="insert into phim_rap(idphim,idrap) value(".$idphim.",".$idrap.")";
		$conn->exec($sql);
	}
	function AddSuatChieu($idFilmVSRap,$idphong,$thoigian){
		global $conn ;
	    $sql ="insert into suatchieu(thoigian,idphim_rap,idphongchieu) value('".$thoigian."', ".$idFilmVSRap." , ".$idphong.")";
	    $conn->exec($sql);
	}
?>