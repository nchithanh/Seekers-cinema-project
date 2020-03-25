
<?php
    include "../model/connect.php";
    function loadrap($idrap){
        global $conn;
        $sql="SELECT idrap FROM phim_rap WHERE id_lienket = ".$idrap."";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetch();
        return $resul;    
    }
    $idrap=$_POST['idrap'];
    $loadrap=loadrap($idrap);
        echo '<option value="'.$loadrap['idrap'].'"></option>';
    
?>