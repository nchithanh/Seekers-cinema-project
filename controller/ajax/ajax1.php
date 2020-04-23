<option value="">chọn ngày chiếu</option>
<?php
    include "../../model/connect.php";
    function loadsuatchieu($idrap){
        global $conn;
        $sql="SELECT * FROM suatchieu where idphim_rap = ".$idrap." order by ngaychieu asc limit 7";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetchAll();
        return $resul;    
    }

    $idrap=$_POST['idrap'];
    $loadsuatchieu=loadsuatchieu($idrap);

    $check='';
    foreach ($loadsuatchieu as $suatchieu){
        if($suatchieu['ngaychieu']==$check){
           
        }else {
            echo '<option value="'.$suatchieu['id'].'">'.$suatchieu['ngaychieu'].'</option>';
            $check=$suatchieu['ngaychieu'];
        }
            
    }
?>