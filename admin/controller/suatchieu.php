<?php
    require_once "model/add.php";
    require_once "model/getdata.php";
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

            $AllRap= LoadAllRap();
            $AllFilm = LoadAllFilm();
            $AllPhong = LoadAllPhongchieu();
            $AllSuatchieu= LoadAllSuatChieu();
            include "view/suatchieu.php";
?>