<?php
 function addthanhtoan($idphim,$idrap,$idsuatchieu,$iduser,$idphongchieu,$phongchieu){
    global $conn;
    $sql= "INSERT INTO thanhtoan (idphim,idrap,idsuatchieu,iduser,idphongchieu,phongchieu) VALUES ('$idphim','$idrap','$idsuatchieu','$iduser','$idphongchieu','$phongchieu')";
    $conn->exec($sql);
}
function deletethanhtoan($iduser){
    global $conn;
    $sql= "DELETE from thanhtoan where iduser = ".$iduser."";
    $conn->exec($sql);
}
function loadthanhtoan($iduser){
    global $conn;
    $sql="select * from thanhtoan where iduser = ".$iduser." order by id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resul = $stmt->fetch();
    return $resul;    
}
function loadtenrap($id){
    global $conn;
    $sql="select tenrap from rap where id = ".$id."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resul = $stmt->fetch();
    return $resul;    
}
function loadidphongchieu($idsuatchieu){
    global $conn;
    $sql="select idphongchieu from suatchieu where id = ".$idsuatchieu."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resul = $stmt->fetch();
    return $resul;    
}
function loadphongchieu($id){
    global $conn;
    $sql="select * from phongchieu where";
    if($id>0){
        $sql.=" id = ".$id."";
    }else{
        $sql.=" 1";
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resul = $stmt->fetch();
    return $resul;    
}
function loadhangghetheophong($idphong){
    global $conn;
    $sql="select * from hangghe where idphongchieu = ".$idphong." order by id asc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resul = $stmt->fetchALL();
    return $resul;    
}
function load_index_idhangghe($idphong,$index){
    global $conn;
    $sql="SELECT * FROM `hangghe` WHERE idphongchieu = ".$idphong." LIMIT ".$index.",1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resul = $stmt->fetch();
    return $resul;    
}
function loadghetheohangghe($idhangghe,$idsuatchieu){
    global $conn;
    $sql="select * from trangthai_ghe where idhangghe = ".$idhangghe." and idsuatchieu = ".$idsuatchieu." order by id asc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resul = $stmt->fetchALL();
    return $resul;    
}

?>