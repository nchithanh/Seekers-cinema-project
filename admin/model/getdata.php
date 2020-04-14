<?php

	// GET FILM DATA
	
function LoadAllFilm(){
    global $conn;
    $sql= "select * from phim order by ngaychieu";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}
function LoadFilmByStatus($trangthai){
    global $conn;
    $sql= "select * from phim where trangthai = ".$trangthai."";
    $sql.=" order by id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}
function LoadFilmDetailById($id){
    global $conn;
    $sql= "select * from phim where id = ".$id."";
    $sql.=" order by id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}

	// Get Cinema data

function LoadAllRap(){
	global $conn;
    $sql= "select * from rap";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}

    // Get ID data
function LoadIdConnectFilmRap($idphim,$idrap){
    global $conn;
    $sql= "select * from phim_rap where idphim = ".$idphim." and idrap =".$idrap." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
//load phòng chiếu
function loadphongchieu(){
    global $conn;
    $sql="SELECT phongchieu.id, phongchieu.tenphong, rap.tenrap FROM phongchieu INNER JOIN rap ON phongchieu.idrap = rap.id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resul = $stmt->fetchAll();
    return $resul;    
}
function raptheotinh(){
	global $conn;
    $sql= "select * from tinhthanh";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}
// load rạp theo tỉnh thành
function loadprap(){
    global $conn;
    $sql="SELECT rap.id, rap.tenrap, rap.diachi, tinhthanh.tentinhthanh FROM rap INNER JOIN tinhthanh ON rap.idtinhthanh = tinhthanh.id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resul = $stmt->fetchAll();
    return $resul;    
}
?>