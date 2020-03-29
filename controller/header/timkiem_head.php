<?php
 include "model/connect.php";
 include_once "model/timkiem_sql.php";
 if(isset($_POST['tim'])&&$_POST['tim']){
     
     $noidung=htmlspecialchars($_POST['noidung'],ENT_QUOTES);
    $timkiem=timkiem($noidung);
 }


?>