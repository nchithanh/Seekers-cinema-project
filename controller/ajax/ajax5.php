<option value="">chọn suất chiếu</option>
<?php
    include "../../model/connect.php";
    function loadsuatchieu($id){
        global $conn;
        $sql="SELECT * FROM suatchieu where id = ".$id."";
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
    $idngaychieu=$_POST['idngaychieu'];
    $loadsuatchieu=loadsuatchieu($idngaychieu);
    foreach ($loadsuatchieu as $suatchieu){
        $trangthaiphong=loadtrangthaighe($suatchieu['id']);
        if($trangthaiphong['id']==0){
            echo '<option disabled style="color:red;" value="'.$suatchieu['id'].'">'.$suatchieu['thoigian'].'( hết chỗ )</option>';
        }else{
            echo '<option value="'.$suatchieu['id'].'">'.$suatchieu['thoigian'].'</option>';
        }
    }
?>