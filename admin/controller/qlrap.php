<?php
require_once "model/add.php";
require_once "model/getdata.php";
require_once "model/delete_data.php";
require_once "model/update.php";
$tinhthanh=raptheotinh();
if(isset($_GET['mul_del'])){
	if(!empty($_POST['check_list_rap'])){
		foreach($_POST['check_list_rap'] as $selected){
			xoarap($selected);
		}
    }
    header('location: admin.php?contro=qlrap') ;
}
if(isset($_GET['addrap']))
    if (isset($_POST['submit_add_rap'])) {
        $tenrap=htmlspecialchars(($_POST['tenrap']), ENT_QUOTES);
        $diachi=$_POST['diachi'];
        $idtinhthanh=$_POST['tinhthanh'];
        addrap($tenrap,$diachi,$idtinhthanh);

        header('location: admin.php?contro=qlrap') ;
    }
if(isset($_GET['edit'])){
    $id= $_GET['edit'];
    $tenrap= $_POST['tenrap'];
    $diachi= $_POST['diachi'];
    $idtinhthanh =$_POST['tinhthanh'];
    UpdateRapInformation($id,$tenrap,$diachi,$idtinhthanh);

    header('location: admin.php?contro=qlrap') ;
}
if(isset($_GET['xoarap']))
    {
        $id = $_GET['xoarap'];
        xoarap($id);
        header('location: admin.php?contro=qlrap') ;
    }
$allrap=LoadRapWithTenTinhThanh();
include "view/qlrap.php";