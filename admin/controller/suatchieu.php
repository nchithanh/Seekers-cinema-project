<?php
    require_once "model/add.php";
    require_once "model/getdata.php";
    require_once "model/update.php";
    require_once "model/delete_data.php";


if(isset($_GET['addsuatchieu'])){
            
                $idphim = $_POST['idphim_addsuatchieu'] ; 
                $idrap = $_POST['idrap_addsuatchieu'] ;
                $idphong = $_POST['idphong_addsuatchieu'] ;
                $date = $_POST['ngaychieu_addsuatchieu'];
                $time = $_POST['thoigian_addsuatchieu'];

                $IDConnect = LoadIdConnectFilmRap($idphim,$idrap);
                if ($IDConnect == null) {
                    AddConnectFilmRap($idphim,$idrap);
                    $IDConnect = LoadIdConnectFilmRap($idphim,$idrap);
                }

                AddSuatChieu($date,$time,$IDConnect['id_lienket'],$idphong);

                $Idsuatchieu = LoadIdSuatchieu($date,$time,$IDConnect['id_lienket'],$idphong);

                $ghe_ofphong = LoadGheByIdPhong($idphong);
                foreach ($ghe_ofphong as $ghe) {
                    AddTrangthaighe(0,$ghe['ghe'],$ghe['idhangghe'],$Idsuatchieu['id']);
                }
                header('location: admin.php?contro=suatchieu') ;
                exit();

            }
if (isset($_GET['edit']) && $_POST['ngaychieu_editsuatchieu'] && $_POST['thoigian_editsuatchieu']){
                $idphim = $_POST['idphim_editsuatchieu'] ; 
                $idrap = $_POST['idrap_editsuatchieu'] ;

                $IDConnect = LoadIdConnectFilmRap($idphim,$idrap);
                if ($IDConnect == null) {
                    AddConnectFilmRap($idphim,$idrap);
                    $IDConnect = LoadIdConnectFilmRap($idphim,$idrap);
                }

                $idphong = $_POST['idphong_editsuatchieu'] ;
                $date = $_POST['ngaychieu_editsuatchieu'];
                $time = $_POST['thoigian_editsuatchieu'];

                UpdateSuatchieuInformation($_GET['edit'],$date,$time,$IDConnect['id_lienket'],$idphong);
                header('location: admin.php?contro=suatchieu') ;
                
            }
if(isset($_GET['del'])){
    $id = $_GET['del'];

    $Trangthai_ghe = LoadTrangthaigheBySuatchieuId($id);

    foreach ($Trangthai_ghe as $ghe_tt) {
        DeleteTrangthaighe($ghe_tt['id']);
    }

    DeleteSuatchieu($id);
    header('location: admin.php?contro=suatchieu') ;
}

            $AllRap= LoadAllRap();
            $AllFilm = LoadAllFilm();
            $AllPhong = LoadAllPhongchieu();
            $AllSuatchieu= LoadAllSuatChieu();
            include "view/suatchieu.php";
?>