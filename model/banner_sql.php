<?php
 function loadbanner(){
    global $conn;
    $sql="select * from banner order by id asc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resul = $stmt->fetchAll();
    return $resul;    
}
?>