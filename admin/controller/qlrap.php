<?php
include_once "model/add.php";
include_once "model/getdata.php";
include_once "model/xoarap.php";
$tinhthanh=raptheotinh();
if(isset($_POST['addrap'])&&$_POST['addrap'])
            {       
                    $tenrap=htmlspecialchars(($_POST['tenphong']), ENT_QUOTES);
                    $diachi=$_POST['diachi'];
                    $idtinhthanh=$_POST['tinhthanh'];
                    addrap($tenrap,$diachi,$idtinhthanh);
            }  
if(isset($_GET['xoarap']))
            {
                $id = $_GET['xoarap'];
                xoarap($id);
            }
$rap=loadprap();            
include "model/connect.php";
include "view/qlrap.php";