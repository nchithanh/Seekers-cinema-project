<?php
	function AddConnectFilmRap($idphim,$idrap){
		global $conn ;
		$sql="insert into phim_rap(idphim,idrap) value(".$idphim.",".$idrap.")";
		$conn->exec($sql);
	}
	function AddSuatChieu($ngaychieu,$thoigian,$idFilmVSRap,$idphongchieu){
		global $conn ;
	    $sql ="insert into suatchieu(ngaychieu,thoigian,idphim_rap,idphongchieu) value( '".$ngaychieu."', '".$thoigian."', ".$idFilmVSRap." , ".$idphongchieu." )";
	    $conn->exec($sql);
	}
	function addphim($tenphim,$tuoi,$theloai,$quocgia,$dienvien,$daodien,$thoiluong,$noidung,$trangthai,$anhphim,$trailer,$banner,$ngaychieu,$rating)
	{
		global $conn ;
		$sql= "INSERT INTO phim (tenphim,tuoi,theloai,quocgia,dienvien,daodien,thoiluong,noidung,trangthai,anhphim,trailer,banner,ngaychieu,rating) VALUES ('$tenphim','$tuoi','$theloai','$quocgia','$dienvien','$daodien','$thoiluong','$noidung','$trangthai','$anhphim','$trailer','$banner','$ngaychieu','$rating')";
		$conn->exec($sql);
	}
	function addphong($tenphong,$idrap)
	{
		global $conn ;
		$sql= "INSERT INTO phongchieu (tenphong,idrap) VALUES ('$tenphong', '$idrap')";
		$conn->exec($sql);
	}
	function addrap($tenrap,$diachi,$idtinhthanh)
	{
		global $conn ;
		$sql= "INSERT INTO rap (tenrap, diachi, idtinhthanh) VALUES ('$tenrap', '$diachi', '$idtinhthanh')";
		$conn->exec($sql);
	}
	function AddHangghe($tenhangghe,$idphongchieu){
		global $conn ;
		$sql= "insert into hangghe (tenhangghe, idphongchieu) value('".$tenhangghe."', ".$idphongchieu.")";
		$conn->exec($sql);
	}
	function AddGhe($tenghe,$idhangghe,$idphong){
		global $conn ;
		$sql= "insert into ghe (ghe,idhangghe,idphong) value(".$tenghe.", ".$idhangghe." , ".$idphong.")";
		$conn->exec($sql);
	}
	function AddTrangthaighe($trangthai,$ghe,$idhangghe,$idsuatchieu){
		global $conn ;
		$sql= "insert into trangthai_ghe (trangthai, ghe, idhangghe, idsuatchieu) value(".$trangthai.", ".$ghe.", ".$idhangghe." , ".$idsuatchieu.")";
		$conn->exec($sql);
	}
?>