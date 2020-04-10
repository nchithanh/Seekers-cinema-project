
<?php
    include "../../model/connect.php";
    include_once "../../model/datve_sql.php";
    include_once "../../model/phim_sql.php";
    include_once "../../model/thanhtoan_sql.php";
        $idrap=$_POST['idrap'];
        $idphim=$_POST['idphim'];
        $idsuatchieu=$_POST['idsuatchieu'];
        $iduser=$_POST['iduser'];
        $idphongchieu=loadidphongchieu($idsuatchieu);
        $phongchieu=loadphongchieu($idphongchieu['idphongchieu']);
        addthanhtoan($idphim,$idrap,$idsuatchieu,$iduser,$phongchieu['id'],$phongchieu['tenphong']);
        $loadhangghe=loadhangghetheophong($idphongchieu['idphongchieu']);
        $loadphim=showdetail($idphim);
        $loadrap=loadtenrap($idrap);
        $loadsuatchieu=thanhtoan_suatchieu($idsuatchieu);

        $loadthanhtoan=loadthanhtoan($iduser);

    $ghe1=loadghetheohangghe(1,$idsuatchieu);
    $ghe2=loadghetheohangghe(2,$idsuatchieu);
    $ghe3=loadghetheohangghe(3,$idsuatchieu);
    $ghe4=loadghetheohangghe(4,$idsuatchieu);
    $ghe5=loadghetheohangghe(5,$idsuatchieu);
    $ghe6=loadghetheohangghe(6,$idsuatchieu);
    $ghe7=loadghetheohangghe(7,$idsuatchieu);
    $ghe8=loadghetheohangghe(8,$idsuatchieu);
    $ghe9=loadghetheohangghe(9,$idsuatchieu);
    $ghe10=loadghetheohangghe(10,$idsuatchieu);
    $ghe11=loadghetheohangghe(11,$idsuatchieu);

?>
<div class="ajax">
    <div class="ajax_datve">
         <div class="ajax_thongtin">
                     <div class="thongtin">
                     <p><?php echo $loadphim['tenphim']; ?> (<?php echo $loadphim['thoiluong']; ?>p)</p>
                     <p><?php echo $loadrap['tenrap']; ?>, <?php echo $phongchieu['tenphong']; ?>, <?php echo $loadsuatchieu['thoigian']; ?></p>
                     </div>
         </div>
         <div class="ajax_sodo">
             <div class="manhinh">
                 SCREEN
             </div>
             <div class="chongoi">
                 <div class="hangghe">
                     <?php
                        foreach ($loadhangghe as $hangghe){
                            echo '<div class="box">'.$hangghe['tenhangghe'].'</div>';
                        }
                     ?>
                 </div>
                 <div class="hangghe">
                    <?php
                        foreach ($loadhangghe as $hangghe){
                            echo '<div class="box">'.$hangghe['tenhangghe'].'</div>';
                        }
                     ?>
                 </div>
                 <div class="ghe">
                     <form action="">
                     <div class="dayghe">
                         <?php
                           foreach ($ghe1 as $ghe){
                            if($ghe['trangthai']==1){
                                $trangthai="hetcho";
                                $link="";
                            }else{
                                $trangthai='';
                                $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$ghe['id'].'"';
                            }
                            echo '<a '.$link.'><div maghe="'.$ghe['ghe'].'" class="box '.$trangthai.'">'.$ghe['ghe'].'</div></a>';
                        }
                         ?>
                     </div>
                     <div class="dayghe">
                         <?php
                            foreach ($ghe2 as $ghe){
                                if($ghe['trangthai']==1){
                                $trangthai="hetcho";
                                $link="";
                            }else{
                                $trangthai='';
                                $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$ghe['id'].'"';
                            }
                            echo '<a '.$link.'><div maghe="'.$ghe['ghe'].'" class="box '.$trangthai.'">'.$ghe['ghe'].'</div></a>';
                        }
                         ?>
                     </div>
                     <div class="dayghe">
                         <?php
                            foreach ($ghe3 as $ghe){
                                if($ghe['trangthai']==1){
                                $trangthai="hetcho";
                                $link="";
                            }else{
                                $trangthai='';
                                $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$ghe['id'].'"';
                            }
                            echo '<a '.$link.'><div maghe="'.$ghe['ghe'].'" class="box '.$trangthai.'">'.$ghe['ghe'].'</div></a>';
                        }
                         ?>
                     </div>
                     <div class="dayghe">
                         <?php
                            foreach ($ghe4 as $ghe){
                                if($ghe['trangthai']==1){
                                $trangthai="hetcho";
                                $link="";
                            }else{
                                $trangthai='';
                                $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$ghe['id'].'"';
                            }
                            echo '<a '.$link.'><div maghe="'.$ghe['ghe'].'" class="box '.$trangthai.'">'.$ghe['ghe'].'</div></a>';
                        }
                         ?>
                     </div>
                     <div class="dayghe">
                         <?php
                            foreach ($ghe5 as $ghe){
                                if($ghe['trangthai']==1){
                                $trangthai="hetcho";
                                $link="";
                            }else{
                                $trangthai='';
                                $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$ghe['id'].'"';
                            }
                            echo '<a '.$link.'><div maghe="'.$ghe['ghe'].'" class="box '.$trangthai.'">'.$ghe['ghe'].'</div></a>';
                        }
                         ?>
                     </div>
                     <div class="dayghe">
                         <?php
                            foreach ($ghe6 as $ghe){
                                if($ghe['trangthai']==1){
                                $trangthai="hetcho";
                                $link="";
                            }else{
                                $trangthai='';
                                $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$ghe['id'].'"';
                            }
                            echo '<a '.$link.'><div maghe="'.$ghe['ghe'].'" class="box '.$trangthai.'">'.$ghe['ghe'].'</div></a>';
                        }
                         ?>
                     </div>
                     <div class="dayghe">
                         <?php
                            foreach ($ghe7 as $ghe){
                                if($ghe['trangthai']==1){
                                $trangthai="hetcho";
                                $link="";
                            }else{
                                $trangthai='';
                                $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$ghe['id'].'"';
                            }
                            echo '<a '.$link.'><div maghe="'.$ghe['ghe'].'" class="box '.$trangthai.'">'.$ghe['ghe'].'</div></a>';
                        }
                         ?>
                     </div>
                     <div class="dayghe">
                         <?php
                            foreach ($ghe8 as $ghe){
                                if($ghe['trangthai']==1){
                                $trangthai="hetcho";
                                $link="";
                            }else{
                                $trangthai='';
                                $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$ghe['id'].'"';
                            }
                            echo '<a '.$link.'><div maghe="'.$ghe['ghe'].'" class="box '.$trangthai.'">'.$ghe['ghe'].'</div></a>';
                        }
                         ?>
                     </div>
                     <div class="dayghe">
                         <?php
                            foreach ($ghe8 as $ghe){
                                if($ghe['trangthai']==1){
                                $trangthai="hetcho";
                                $link="";
                            }else{
                                $trangthai='';
                                $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$ghe['id'].'"';
                            }
                            echo '<a '.$link.'><div maghe="'.$ghe['ghe'].'" class="box '.$trangthai.'">'.$ghe['ghe'].'</div></a>';
                        }
                         ?>
                     </div>
                     <div class="dayghe">
                         <?php
                            foreach ($ghe10 as $ghe){
                                if($ghe['trangthai']==1){
                                $trangthai="hetcho";
                                $link="";
                            }else{
                                $trangthai='';
                                $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$ghe['id'].'"';
                            }
                            echo '<a '.$link.'><div maghe="'.$ghe['ghe'].'" class="box '.$trangthai.'">'.$ghe['ghe'].'</div></a>';
                        }
                         ?>
                     </div>
                     <div class="dayghe">
                         <?php
                            foreach ($ghe11 as $ghe){
                                if($ghe['trangthai']==1){
                                $trangthai="hetcho";
                                $link="";
                            }else{
                                $trangthai='';
                                $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$ghe['id'].'"';
                            }
                            echo '<a '.$link.'><div maghe="'.$ghe['ghe'].'" class="box '.$trangthai.'">'.$ghe['ghe'].'</div></a>';
                        }
                         ?>
                     </div>
                     </form>
                 </div>
             </div>
         </div>
    </div>
</div>