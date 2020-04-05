<?php
function quanliphim($trangthai){
    global $conn;
    $sql= "select * from phim where trangthai = ".$trangthai."";
    $sql.=" order by id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}
function film_detail($id){
    global $conn;
    $sql= "select * from phim where id = ".$id."";
    $sql.=" order by id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function film_update($id,$tenphim,$tuoi,$theloai,$quocgia,$dienvien,$daodien,$thoiluong,$ngaychieu,$noidung,$anhphim,$trangthai){
	global $conn;
	$sql="update phim set tenphim = '".$tenphim."', tuoi = ".$tuoi.", theloai = '".$theloai."', quocgia = '".$quocgia."',dienvien= '".$dienvien."', daodien = '".$daodien."', thoiluong = ".$thoiluong.", ngaychieu = '".$ngaychieu."', noidung = '".$noidung."',anhphim = '".$anhphim."', trangthai = ".$trangthai." where id = ".$id."";
	$conn->exec($sql);
}

// function film_update($id,$tenphim,$tuoi,$theloai,$quocgia,$dienvien,$daodien,$thoiluong,$ngaychieu,$noidung,$anhphim,$trangthai){
//     global $conn;
//     $sql="update phim set tenphim = '".$tenphim."', theloai = '".$theloai."', quocgia = '".$quocgia."',
//      dienvien = '".$dienvien."', thoiluong = ".$thoiluong.", daodien = '".$daodien."'' , ngaychieu = '".$ngaychieu."' , tuoi = ".$tuoi.",anhphim = '".$anhphim."' , trangthai = ".$trangthai." , noidung = '".$noidung."' where id = ".$id."";
//     $conn->exec($sql);
// }
?>