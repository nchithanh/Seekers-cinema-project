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
function loadphimall(){
    global $conn;
    $sql= "select * from phim where 1 order by id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}

function loadveall(){
    global $conn;
    $sql= "select * from ve where 1 order by id desc";
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
function loadbestphim(){
    global $conn;
    $sql= "select * from phim where 1 order by rating desc limit 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}    
?>