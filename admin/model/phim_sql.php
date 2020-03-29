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


?>