<?php
    require_once "model/add.php";
            require_once "model/getdata.php";
            if(isset($_GET['add'])){
                $idphim = $_POST['phim'] ; 
                $idrap = $_POST['rap'] ;

                AddConnectFilmRap($idphim,$idrap);
                $IDConnect = LoadIdConnectFilmRap($idphim,$idrap);

                $idphong = $_POST['phong'];
                $thoigian = $_POST['time'];

                AddSuatChieu($IDConnect['id_lienket'],$idphong,$thoigian);
                header('location: admin.php?contro=suatchieu') ;       
            }
            require_once "model/getdata.php";
            $AllRap= LoadAllRap();
            $AllFilm = LoadAllFilm();
            include "view/suatchieu.php";
?>