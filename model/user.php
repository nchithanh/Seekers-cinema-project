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
function add_user($name,$user,$pass,$email){
    global $conn;
    $sql= "INSERT INTO user (name,user,pass,email) VALUES ('$name','$user','$pass','$email')";
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
function update_user($id,$name,$user,$pass,$email){
    global $conn;

    $sql = "UPDATE user SET name='$name',user='$user',pass='$pass',email='$email' WHERE id=".$id;
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
?>