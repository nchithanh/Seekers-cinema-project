<option value="">chọn suất chiếu</option>
<?php
    include "../../model/connect.php";
    function loadsuatchieu($id,$ngaychieu){
        global $conn;
        $sql="SELECT * FROM suatchieu where idphim_rap = ".$id." and ngaychieu = '".$ngaychieu."'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetchAll();
        return $resul;    
    }
    function loadsuatchieu_ngay($id){
        global $conn;
        $sql="SELECT ngaychieu,idphim_rap FROM suatchieu where id = ".$id."";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetch();
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
    function loadsuatchieu_phong($idphongchieu){
        global $conn;
        $sql="SELECT * FROM phongchieu where id = ".$idphongchieu."";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetch();
        return $resul;    
    }
    $idngaychieu=$_POST['idngaychieu'];
    $loadsuatchieu_ngay=loadsuatchieu_ngay($idngaychieu);
    $loadsuatchieu=loadsuatchieu($loadsuatchieu_ngay['idphim_rap'],$loadsuatchieu_ngay['ngaychieu']);
    foreach ($loadsuatchieu as $suatchieu){
        $loadphong=loadsuatchieu_phong($suatchieu['idphongchieu']);
        $trangthaiphong=loadtrangthaighe($suatchieu['id']);
        if($trangthaiphong['id']==0){
            echo '<option disabled style="color:red;" value="'.$suatchieu['id'].'">'.$suatchieu['thoigian'].'( hết chỗ )</option>';
        }else{
            echo '<option value="'.$suatchieu['id'].'">'.$suatchieu['thoigian'].' ('.$loadphong['tenphong'].')</option>';
        }
    }
?>