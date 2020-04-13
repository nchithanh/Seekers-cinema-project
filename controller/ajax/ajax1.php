<option value="">chọn suất chiếu</option>
<?php
    include "../../model/connect.php";
    function loadsuatchieu($idrap){
        global $conn;
        $sql="SELECT * FROM suatchieu where idphim_rap = ".$idrap."";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetchAll();
        return $resul;    
    }
    function loadtrangthaighe($idsuatchieu){
        global $conn;
        $sql="SELECT * FROM trangthai_ghe where idsuatchieu = ".$idsuatchieu." AND trangthai = 0";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetch();
        return $resul;    
    }
    $idrap=$_POST['idrap'];
    $loadsuatchieu=loadsuatchieu($idrap);
    foreach ($loadsuatchieu as $suatchieu){
        $trangthaiphong=loadtrangthaighe($suatchieu['id']);
        if($trangthaiphong['id']==0){
            echo '<option disabled style="color:red;" value="'.$suatchieu['id'].'">'.$suatchieu['thoigian'].'( hết chỗ )</option>';
        }else{
            echo '<option value="'.$suatchieu['id'].'">'.$suatchieu['thoigian'].'</option>';
        }
    }
?>