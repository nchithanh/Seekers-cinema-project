<?php
function loaduser(){
    global $conn;
    $sql= "select * from user order by id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;

}
function loadusertheoid($id){
    global $conn;
    $sql= "select * from user where id = ".$id."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function add_user($user,$pass,$email,$role){
    global $conn;
    $sql= "INSERT INTO user (user,pass,email,role) VALUES ('$user','$pass','$email','$role')";
    $conn->exec($sql);
}
function del_user($id){
    global $conn;
    $sql= "delete from user where id=".$id;
    $conn->exec($sql);
}
function getinformation($id){
    global $conn;
    $sql="select * from user where id=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function update_user($id,$user,$pass,$email,$sdt){
    global $conn;

    $sql = "UPDATE user SET user='$user',pass='$pass',email='$email',sdt='$sdt' WHERE id=".$id;
     // Prepare statement
     $stmt = $conn->prepare($sql);
     // execute the query
     $stmt->execute();
}
function checkuser($user,$pass){
    global $conn;
    $sql="select * from user where user = '".$user."' and pass = '".$pass."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
    
}

function checkUserTrung($user){
    global $conn;
    $sql="select * from user where user = '".$user."' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result['user'];
}

function load_cmt($idphim){
    global $conn;
    $sql= "select * from danhgiaphim where idphim = $idphim ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;

}

function add_cmt($tennguoidanhgia, $danhgia, $idphim){
    global $conn;
    $sql= "INSERT INTO danhgiaphim (tennguoidanhgia,danhgia,idphim) VALUES ('$tennguoidanhgia','$danhgia','$idphim')";
    $conn->exec($sql);
}

?>