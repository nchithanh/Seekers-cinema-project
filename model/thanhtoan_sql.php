<?php
function thanhtoan_phim($idphim){
    global $conn;
    $sql= "select tenphim from phim where id = ".$idphim."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function thanhtoan_rap($id){
    global $conn;
    $sql= "select tenrap from rap where id = ".$id."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function thanhtoan_suatchieu($id){
    global $conn;
    $sql= "select thoigian from suatchieu where id = ".$id."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function thanhtoan_phongchieu($idphim){
    global $conn;
    $sql= "select tenphong from phongchieu where id = ".$idphim."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function thanhtoan_ghe($idphim){
    global $conn;
    $sql= "select id, ghe, idhangghe from trangthai_ghe where id = ".$idphim."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function thanhtoan_hangghe($idghe){
    global $conn;
    $sql= "select * from hangghe where id = ".$idghe."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function add_ve($tenphim,$tenrap,$tenphongchieu,$suatchieu,$ghe,$iduser){
    global $conn;
    $sql= "INSERT INTO ve (tenphim,tenrap,tenphongchieu,suatchieu,ghe,iduser) VALUES";
    $sql.=" ('$tenphim','$tenrap','$tenphongchieu','$suatchieu','$ghe','$iduser')";
    $conn->exec($sql);
}
function updateghe($id,$trangthai){
    global $conn;
    $sql="update trangthai_ghe set trangthai = ".$trangthai." where id = ".$id."";
    $conn->exec($sql);
}
?>