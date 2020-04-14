<?php
    require_once "model/getdata.php";
    require_once "model/xoaphong.php";
    include_once "model/add.php";
    include "model/connect.php";
    $rap=LoadAllRap();
    $tinhthanh=raptheotinh();
    if(isset($_POST['addphong'])&&$_POST['addphong'])
            {       
                    $tenphong=htmlspecialchars(($_POST['tenphong']), ENT_QUOTES);
                    $idrap=$_POST['rap'];
                    addphong($tenphong,$idrap);
            }        
    if(isset($_GET['xoaphong']))
            {
                $id = $_GET['xoaphong'];
                xoaphong($id);
            }
    $loadphongchieu=loadphongchieu();    
    include_once "view/phongchieu.php";    
?>