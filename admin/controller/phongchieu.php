<?php
    require_once "model/getdata.php";
    require_once "model/delete_data.php";
    include_once "model/add.php";
    include "model/connect.php";
    $rap=LoadAllRap();
    $tinhthanh=raptheotinh();

if(isset($_GET['edit']) && $_POST['tenphong_editphongchieu'] && $_POST['rap_editphongchieu']){
        $id = $_GET['edit'];
        $ten = $_POST['tenphong_editphongchieu'];
        $rap = $_POST['rap_editphongchieu'];

        // XOA PHONG 
        $exits_phong = LoadSuatchieuByIdPhong($id);
        
        $hangghe_phong = LoadHanggheByIdphong($id);
        $ghe_phong = LoadGheByIdPhong($id);
        
        if ($exits_phong == null) {
                foreach ($ghe_phong as $P_ghe) {
                        Deleteghe($P_ghe['id']);
                }

                foreach ($hangghe_phong as $P_hangghe) {
                        DeleteHangghe($P_hangghe['id']);
                }

                xoaphong($id);
        }

        // ADD PHONG MOI CUNG TEN

        addphong($ten,$rap);
        $IDPhong = LoadIDPhongchieu($ten,$rap); 
        $tenhang = array("A","B","C","D","E","F","G","H","I","J");
        $tenghe = 0;
        for ($l=1 ; $l <=10 ; $l++) { 
                if(isset($_POST['hang'.$l.''])){
                    $arr = explode(' ', $_POST['hang'.$l.'']);
                    $arr[0] =(int)$arr[0] ;
                    $arr[1] =(int)$arr[1] ;
                    $hang =$arr[0]-1;
                    AddHangghe($tenhang[$hang],$IDPhong['id']);

                    $IDhangghe = LoadIdHangghe($tenhang[$hang],$IDPhong['id']);

                    for ($p=1 ; $p <=$arr[1] ; $p++) { 
                            $tenghe= $tenghe +1;
                            AddGhe($tenghe,$IDhangghe['id'],$IDPhong['id']);
                    }
                }
        }
        header('location: admin.php?contro=phongchieu') ;
    }

if(isset($_GET['add']) && $_POST['tenphong_addphongchieu'] && $_POST['rap_addphongchieu'] )
            {       
                    $tenphong=htmlspecialchars(($_POST['tenphong_addphongchieu']), ENT_QUOTES);
                    $idrap=$_POST['rap_addphongchieu'];
                    addphong($tenphong,$idrap);
                
                $idphong = LoadIDPhongchieu($tenphong,$idrap); 

                    $tenhang = array("A","B","C","D","E","F","G","H","I","J");
                    $tenghe = 0;
                    for ($l=1 ; $l <=10 ; $l++) { 
                            if(isset($_POST['hang'.$l.''])){
                                $arr = explode(' ', $_POST['hang'.$l.'']);
                                $arr[0] =(int)$arr[0] ;
                                $arr[1] =(int)$arr[1] ;
                                $hang =$arr[0]-1;
                                AddHangghe($tenhang[$hang],$idphong['id']);

                                $IDhangghe = LoadIdHangghe($tenhang[$hang],$idphong['id']);

                                for ($p=1 ; $p <=$arr[1] ; $p++) { 
                                        $tenghe= $tenghe +1;
                                        AddGhe($tenghe,$IDhangghe['id'],$idphong['id']);
                                }
                            }
                    }
                    header('location: admin.php?contro=phongchieu') ;
                    
            }
if(isset($_GET['xoaphongchieu']) && $_GET['xoaphongchieu'] )
        {
                $id = $_GET['xoaphongchieu'];
                $Suatchieu_p = LoadSuatchieuByIdPhong($id);
                $hangghe_Phong = LoadHanggheByIdphong($id);
                $ghe_phong = LoadGheByIdPhong($id);

                if($Suatchieu_p == null){
                foreach ($ghe_phong as $P_ghe) {
                        Deleteghe($P_ghe['id']);
                }
                foreach ($hangghe_Phong as $P_hangghe) {
                        DeleteHangghe($P_hangghe['id']);
                }    
                xoaphong($id);
                
                header('location: admin.php?contro=phongchieu') ;
                
        }else {
                $str_del = "";
                        foreach ($Suatchieu_p as $Sch_phong) {
                        $str_del = $str_del.$Sch_phong['id'].' , ';
                        }
                        echo '
                        <script>
                                alert(\'Phòng đang chứa suất chiếu, Xóa suất chiếu : ID : '.$str_del.' trước khi xóa phòng chiếu này \');
                        </script>
                        '; 
                        
                }
               
            }
    $loadphongchieu=LoadAllPhongchieu();    
    include_once "view/phongchieu.php";    
?>
