
<?php
    include "../../model/connect.php";
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
    $i=0;
    foreach ($loadrap as $rap){
        $i++;
        echo '<option value="">chọn rạp</option>';
        echo '<option value="'.$rap['id_lienket'].'">'.$rap['tenrap'].'</option>';
    }
    if($i==0){
        echo '<option value="">không còn rạp chiếu phim này</option>';
    }
?>