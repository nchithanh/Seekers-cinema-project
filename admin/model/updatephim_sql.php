<?php

function updatephim($id, $tenphim, $tuoi, $theloai, $quocgia, $daodien, $thoiluong, $ngaychieu, $noidung, $anhphim, $dienvien)
{
    $DBH = connect();
    $query = "UPDATE phim 
    SET id='$id', name='$tenphim', tuoi='$tuoi', 
    theloai='$theloai', quocgia='$quocgia', anhphim='$anhphim', daodien='$daodien', ngaychieu='$ngaychieu', noidung='$noidung',
    WHERE id='$id'";
    $STH = $DBH -> prepare($query);
    $STH -> execute();
}


function updatephim($id, $tenphim, $tuoi, $theloai, $quocgia, $daodien, $thoiluong, $ngaychieu, $noidung, $anhphim, $dienvien){
    global $conn;
    $sql= "UPDATE phim SET id=".$id.", name="".$tenphim."", tuoi=".$tuoi.",theloai="".$theloai."", quocgia="".$quocgia."", anhphim="".$anhphim."", daodien="".$daodien."", ngaychieu="".$ngaychieu."",
     noidung='$noidung',dienvien="".$dienvien."", trangthai=".$trangthai." WHERE id=".$id."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;

}


?>