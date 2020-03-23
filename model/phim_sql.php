<?php
function loadphim($idphim,$limit,$trangthai){
    global $conn;
    $sql= "select * from phim where trangthai = ".$trangthai."";
    if($idphim>0){
        $sql.= " AND idphim".$idphim;
    }
    
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
function loadphimsc($idphim,$limit){
    global $conn;
    $sql= "select * from phim where trangthai = 1";
    if($idphim>0){
        $sql.= " AND idphim".$idphim;
    }
    
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
?>