<?php
	require_once "model/delete_data.php";
	require_once "model/getdata.php";
	require_once "model/update.php";
	require_once "model/add.php";
	
	if(isset($_GET['film_dt']) && $_GET['film_dt']){
		$phim = LoadFilmDetailById($_GET['film_dt']);
		include_once "view/film_detail.php";
		exit();
	}
	

	if(isset($_GET['updated']) && $_GET['updated']){
		$idphim = $_POST['id'];
		$tenphim = htmlspecialchars(($_POST['tenphim']), ENT_QUOTES);
		$tuoi = $_POST['tuoi'];
		$theloai = $_POST['theloai'];
		$quocgia = $_POST['quocgia'];
		$dienvien = $_POST['dienvien'];
		$daodien = $_POST['daodien'];
		$thoiluong = $_POST['thoiluong'];
		$ngaychieu = $_POST['ngaychieu'];
	
		$path='../view/img/'.$_FILES['anhphim']['name'];
		move_uploaded_file($_FILES['anhphim']['tmp_name'],$path);
	
		$anhphim=$_FILES['anhphim']['name'];
		$noidung=$_POST['noidung'];
		$trangthai=number_format($_POST['trangthai']);
		$phim = LoadFilmDetailById($idphim);
		if ($anhphim == null) {
		  $anhphim = $phim['anhphim'];
		}
		UpdateFilmInformation($idphim,$tenphim,$tuoi,$theloai,$quocgia,$dienvien,$daodien,$thoiluong,$ngaychieu,$noidung,$anhphim,$trangthai);
		header('location: admin.php?contro=film') ;
	}
	if(isset($_GET['addfilm_form'])){
		include_once "view/addphim.php";
		exit ();
	}

	if(isset($_GET['addfilm'])){
		if(isset($_POST['addphim']) && $_POST['addphim']){
			$tenphim=htmlspecialchars(($_POST['tenphim']), ENT_QUOTES);
			$tuoi=$_POST['tuoi'];
			$theloai=$_POST['theloai'];
			$quocgia=$_POST['quocgia'];
			$dienvien=$_POST['dienvien'];
			$daodien=$_POST['daodien'];
			$thoiluong=$_POST['thoiluong'];
			$noidung=$_POST['noidung'];
			$trangthai=($_POST['trangthai']);
			$path='../view/img/'.$_FILES['anhphim']['name'];
			move_uploaded_file($_FILES['anhphim']['tmp_name'],$path);
			$anhphim=$_FILES['anhphim']['name'];
			$ngaychieu=$_POST['ngaychieu'];
			$path='../view/video/'.$_FILES['trailer']['name'];
			move_uploaded_file($_FILES['trailer']['tmp_name'],$path);
			$trailer=$_FILES['trailer']['name'];
			$rating=$_POST['rating'];
			$path='../view/img/'.$_FILES['banner']['name'];
			move_uploaded_file($_FILES['banner']['tmp_name'],$path);
			$banner=$_FILES['banner']['name'];
			addphim($tenphim,$tuoi,$theloai,$quocgia,$dienvien,$daodien,$thoiluong,$noidung,$trangthai,$anhphim,$trailer,$banner,$ngaychieu,$rating);
		
		}
	}

	if(isset($_GET['film_del']) && $_GET['film_del']){
		$id = $_GET['film_del'];

        $Connect = LoadConnectFilmRapByIdPhim($id);
        $Count_suatchieu = 0;
        $id_Suat_out= "";
        if($Connect == null){
			$Danhgiaphim = LoadDanhgiaphimByIDPhim($id);
			foreach ($Danhgiaphim as $DG) {
				DeleteDanhgiaphim($DG['id']);
			}
			DeleteFilmById($id);
            
        }else{
            foreach ($Connect as $ID) {
                $Suatchieu_Phim = LoadSuatchieuByIdConnect($ID['id_lienket']);
                if($Suatchieu_Phim == null){
                    DeleteConnect($ID['id_lienket']);
                }else{
                    foreach ($Suatchieu_Phim as $SCRAP) {
                        $id_Suat_out = $id_Suat_out.' , '.$SCRAP['id'] ;
                    }
                }

            }
            if ($id_Suat_out == "") {
				$Danhgiaphim = LoadDanhgiaphimByIDPhim($id);
				foreach ($Danhgiaphim as $DG) {
					DeleteDanhgiaphim($DG['id']);
				}
			DeleteFilmById($id);
            }else{
                echo '
                <script>
                        alert(\'Phim chứa suất chiếu, Xóa suất chiếu : ID : '.$id_Suat_out.' trước khi xóa Phim này \');
                </script>
                '; 
            }

        }
        
        
}

	$quanliphimdc=LoadFilmByStatus(1);
	$quanliphimcc=LoadFilmByStatus(0);
	include_once "view/film.php";
?>