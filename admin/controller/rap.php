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
    header('location: admin.php?contro=rap') ;
}
if(isset($_GET['addrap']))
    if (isset($_POST['submit_add_rap'])) {
        $tenrap=htmlspecialchars(($_POST['tenrap']), ENT_QUOTES);
        $diachi=$_POST['diachi'];
        $idtinhthanh=$_POST['tinhthanh'];
        addrap($tenrap,$diachi,$idtinhthanh);

        header('location: admin.php?contro=rap') ;
    }
if(isset($_GET['edit'])){
    $id= $_GET['edit'];
    $tenrap= $_POST['tenrap'];
    $diachi= $_POST['diachi'];
    $idtinhthanh =$_POST['tinhthanh'];
    UpdateRapInformation($id,$tenrap,$diachi,$idtinhthanh);

    header('location: admin.php?contro=rap') ;
}
if(isset($_GET['xoarap'])){
        $id = $_GET['xoarap'];

        $Connect = LoadConnectFilmRapByIdRap($id);
        $Count_suatchieu = 0;
        $id_Suat_out= "";
        if($Connect == null){
            $Phongchieu= LoadPhongchieuByIdRap($id);
            if ($Phongchieu == null) {
                xoarap($id);
            }else {
                $STR_p = "";
                foreach ($Phongchieu as $Phog_Ch) {
                    $STR_p = $STR_p.' '.$Phog_Ch['id'];
                }
                echo '
                <script>
                    alert(\'Rạp chứa phòng chiếu, Xóa phòng chiếu : ID : '.$STR_p.' trước khi xóa rạp này \');
                </script>                ';
            }
            
        }else{
            foreach ($Connect as $ID) {
                $Suatchieu_Rap = LoadSuatchieuByIdConnect($ID['id_lienket']);
                if($Suatchieu_Rap == null){
                    DeleteConnect($ID['id_lienket']);
                }else{
                    foreach ($Suatchieu_Rap as $SCRAP) {
                        $id_Suat_out = $id_Suat_out.' , '.$SCRAP['id'] ;
                    }
                }

            }
            if ($id_Suat_out == "") {
                $Phongchieu= LoadPhongchieuByIdRap($id);
                if ($Phongchieu == null) {
                    xoarap($id);
                }else {
                    $STR_p = "";
                    foreach ($Phongchieu as $Phog_Ch) {
                        $STR_p = $STR_p.' '.$Phog_Ch['id'];
                    }
                    echo '
                    <script>
                        alert(\'Rạp chứa phòng chiếu, Xóa phòng chiếu : ID : '.$STR_p.' trước khi xóa rạp này \');
                    </script>                ';
                }
            }else{
                echo '
                <script>
                        alert(\'Rạp chứa suất chiếu, Xóa suất chiếu : ID : '.$id_Suat_out.' trước khi xóa rạp này \');
                </script>
                '; 
            }

        }
        
        
    }
$allrap=LoadRapWithTenTinhThanh();
include "view/rap.php";