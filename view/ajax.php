<option value="">chon rap</option>
<?php
    include "../model/connect.php";
    function loadrap($idphim){
        global $conn;
        $sql="SELECT * FROM phim_rap, rap WHERE phim_rap.idrap = rap.id AND phim_rap.idphim = ".$idphim."";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetchAll();
        return $resul;    
    }
    $idphim=$_POST['idphim'];
    $loadrap=loadrap($idphim);
    foreach ($loadrap as $rap){
        echo '<option value="'.$rap['id_lienket'].'">'.$rap['tenrap'].'</option>';
    }
?>