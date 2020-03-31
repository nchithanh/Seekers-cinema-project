<?php

function phimdetail($id){
    global $conn;
    $sql= "select * from phim where id = ".$id."";
    $sql.=" order by id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function updatedetail($id,$name,$price,$idcatalog,$loaisanpham,$img){
    global $conn;
    $sql="update phim set tenphim = '".$tenphim."', theloai = ".$theloai.", quocgia = '".$quocgia."',
     dienvien = ".$dienvien.", thoiluong = ".$thoiluong." , ngaychieu = '".$ngaychieu."' , tuoi = ".$tuoi."
     ,anhphim = '".$anhphim."' , trangthai = ".$trangthai." , noidung = '".$noidung."' where id = ".$id."";
    $conn->exec($sql);
}
?>