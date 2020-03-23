<?php
 function timkiem($text){
    global $conn;
    $sql="select * from phim where tenphim like '%".$text."%' order by id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resul = $stmt->fetchAll();
    return $resul;    
}
?>
