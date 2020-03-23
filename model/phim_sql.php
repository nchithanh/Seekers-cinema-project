<?php
function loadphim($limit,$trangthai){
    global $conn;
    $sql= "select * from phim where trangthai = ".$trangthai."";
    $sql.=" order by id desc";
    if($limit>0){
        $sql.=" limit ".$limit;
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;

}
    function showdetail($id){
        global $conn;
        $sql="select * from phim where id = ".$id."";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetch();
        return $result;
    }
?>