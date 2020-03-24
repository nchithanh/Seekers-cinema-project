<?php
    include "../model/connect.php";
    function loadsuatchieu($idrap){
        global $conn;
        $sql="select * from suatchieu where idrap = ".$idrap." order by id desc";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetchAll();
        return $resul;    
    }
    $idrap=$_POST['idrap'];
    $loadsuatchieu=loadsuatchieu($idrap);
    foreach ($loadsuatchieu as $suatchieu){
        echo '<option value="'.$suatchieu['id'].'">'.$suatchieu['thoigian'].'</option>';
    }
?>