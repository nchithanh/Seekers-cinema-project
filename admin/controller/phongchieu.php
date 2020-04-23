<?php
    require_once "model/getdata.php";
    require_once "model/delete_data.php";
    include_once "model/add.php";
    include "model/connect.php";
    $rap=LoadAllRap();
    $tinhthanh=raptheotinh();
    if(isset($_GET['add']) && isset($_POST['tenphong_addphongchieu']) && isset($_POST['rap_addphongchieu']))
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
            }
    if(isset($_GET['xoaphongchieu']) && $_GET['xoaphongchieu'] )
            {
                $id = $_GET['xoaphongchieu'];
                $HangGhe_trong_phong = LoadHanggheByIdphong($id);
                if($HangGhe_trong_phong == null){
                        xoaphong($id);
                }else{
                        echo '
                        <script>
                                alert(\'TỒN TẠI GHẾ TRONGPHÒNG, KHÔNG XÓA ĐƯỢC\');
                        </script>
                        '; 
                }
            }
    $loadphongchieu=LoadAllPhongchieu();    
    include_once "view/phongchieu.php";    
?>
