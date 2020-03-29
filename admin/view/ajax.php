<option value="">chon rap</option>
<?php
    include "model/connect.php";
    function loadphong($idrap){
        global $conn;
        $sql="SELECT * FROM phongchieu WHERE idrap = ".$idrap."";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetchAll();
        return $resul;    
    }
    $idrap=$_POST['idrap'];
    $loadphong=loadphong($idrap);
    foreach ($loadphong as $phong){
        echo '<option value="'.$phong['id'].'">'.$phong['tenphong'].'</option>';
    }
?>