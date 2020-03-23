<?php
 include "model/connect.php";
 include_once "model/timkiem_sql.php";
 if(isset($_POST['tim'])&&$_POST['tim']){
     $noidung=$_POST['noidung'];
    $timkiem=timkiem($noidung);
 }


?>