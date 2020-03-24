<?php
    include "../model/connect.php";
    function loadrap($idphim){
        global $conn;
        $sql="select * from rap where idphim = ".$idphim." order by id desc";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetchAll();
        return $resul;    
    }
    $idphim=$_POST['idphim'];
    $loadrap=loadrap($idphim);
    foreach ($loadrap as $rap){
        echo '<option value="'.$rap['id'].'">'.$rap['tenrap'].'</option>';
    }
?>