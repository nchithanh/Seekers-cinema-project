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
function loadghetheohangghe($idhangghe){
    global $conn;
    $sql="select * from ghe where idhangghe = ".$idhangghe." order by id asc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resul = $stmt->fetchALL();
    return $resul;    
}
?>