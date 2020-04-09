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
    $idrap=$_POST['idrap'];
    $loadsuatchieu=loadsuatchieu($idrap);
    foreach ($loadsuatchieu as $suatchieu){
        echo '<option value="'.$suatchieu['id'].'">'.$suatchieu['thoigian'].'</option>';
    }
?>