<?php

function phimdetail($id){
    global $conn;
    $sql= "select * from phim where id = ".$id."";
    $sql.=" order by id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;

}
?>