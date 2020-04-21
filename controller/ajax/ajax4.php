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
<div class="ajax" id="box_ajax_back">
    <div class="ajax_datve">
        <div onclick="close_datvebox()" id="ajax_back">
          back
        </div>
         <form action="index.php" method="post">
         <div class="box left">
             <div class="head">
                 <div class="manhinh">
                     screen
                 </div>
             </div>
             <div class="body">
                 <div class="hangghe">
                    <?php
                        foreach ($loadhangghe as $hg){
                            echo ' <div class="tenhang">'.$hg['tenhangghe'].'</div>';
                        }
                    ?>
                     
                 </div>
                 <div class="ghe">
                     <div class="dayghe dayghe1">
                     <?php
                                foreach ($ghe1 as $g){
                                    switch ($g['trangthai']) {
                                        case '0':
                                            echo '<div class="vitri">
                                            <label>
                                                <input type="checkbox" name="ghe[]" value="'.$g['id'].'">
                                                <span class="hetcho"><i class="fa fa-check"></i></span>
                                            </label>
                                       </div>';
                                            break;
                                        
                                        case '1':
                                            echo '<div class="vitri">
                                            <label>  
                                                <span class="dadat"><i class="fa fa-lock"></i></span>
                                            </label>
                                        </div>';
                                            break;
                                    }
                                }
                            ?>
                         
                     </div>
                     <div class="dayghe dayghe2">
                     <?php
                                foreach ($ghe2 as $g){
                                    switch ($g['trangthai']) {
                                        case '0':
                                            echo '<div class="vitri">
                                            <label>
                                                <input type="checkbox" name="ghe[]" value="'.$g['id'].'">
                                                <span class="hetcho"><i class="fa fa-check"></i></span>
                                            </label>
                                       </div>';
                                            break;
                                        
                                        case '1':
                                            echo '<div class="vitri">
                                            <label>  
                                                <span class="dadat"><i class="fa fa-lock"></i></span>
                                            </label>
                                        </div>';
                                            break;
                                    }
                                }
                            ?>
                         
                     </div>
                     <div class="dayghe dayghe3">
                     <?php
                                foreach ($ghe3 as $g){
                                    switch ($g['trangthai']) {
                                        case '0':
                                            echo '<div class="vitri">
                                            <label>
                                                <input type="checkbox" name="ghe[]" value="'.$g['id'].'">
                                                <span class="hetcho"><i class="fa fa-check"></i></span>
                                            </label>
                                       </div>';
                                            break;
                                        
                                        case '1':
                                            echo '<div class="vitri">
                                            <label>  
                                                <span class="dadat"><i class="fa fa-lock"></i></span>
                                            </label>
                                        </div>';
                                            break;
                                    }
                                }
                            ?>
                         
                     </div>
                     <div class="dayghe dayghe4">
                     <?php
                                foreach ($ghe4 as $g){
                                    switch ($g['trangthai']) {
                                        case '0':
                                            echo '<div class="vitri">
                                            <label>
                                                <input type="checkbox" name="ghe[]" value="'.$g['id'].'">
                                                <span class="hetcho"><i class="fa fa-check"></i></span>
                                            </label>
                                       </div>';
                                            break;
                                        
                                        case '1':
                                            echo '<div class="vitri">
                                            <label>  
                                                <span class="dadat"><i class="fa fa-lock"></i></span>
                                            </label>
                                        </div>';
                                            break;
                                    }
                                }
                            ?>
                         
                     </div>
                     <div class="dayghe dayghe5">
                     <?php
                                foreach ($ghe5 as $g){
                                    switch ($g['trangthai']) {
                                        case '0':
                                            echo '<div class="vitri">
                                            <label>
                                                <input type="checkbox" name="ghe[]" value="'.$g['id'].'">
                                                <span class="hetcho"><i class="fa fa-check"></i></span>
                                            </label>
                                       </div>';
                                            break;
                                        
                                        case '1':
                                            echo '<div class="vitri">
                                            <label>  
                                                <span class="dadat"><i class="fa fa-lock"></i></span>
                                            </label>
                                        </div>';
                                            break;
                                    }
                                }
                            ?>
                         
                     </div>
                     <div class="dayghe dayghe6">
                     <?php
                                foreach ($ghe6 as $g){
                                    switch ($g['trangthai']) {
                                        case '0':
                                            echo '<div class="vitri">
                                            <label>
                                                <input type="checkbox" name="ghe[]" value="'.$g['id'].'">
                                                <span class="hetcho"><i class="fa fa-check"></i></span>
                                            </label>
                                       </div>';
                                            break;
                                        
                                        case '1':
                                            echo '<div class="vitri">
                                            <label>  
                                                <span class="dadat"><i class="fa fa-lock"></i></span>
                                            </label>
                                        </div>';
                                            break;
                                    }
                                }
                            ?>
                         
                     </div>
                     <div class="dayghe dayghe7">
                     <?php
                                foreach ($ghe7 as $g){
                                    switch ($g['trangthai']) {
                                        case '0':
                                            echo '<div class="vitri">
                                            <label>
                                                <input type="checkbox" name="ghe[]" value="'.$g['id'].'">
                                                <span class="hetcho"><i class="fa fa-check"></i></span>
                                            </label>
                                       </div>';
                                            break;
                                        
                                        case '1':
                                            echo '<div class="vitri">
                                            <label>  
                                                <span class="dadat"><i class="fa fa-lock"></i></span>
                                            </label>
                                        </div>';
                                            break;
                                    }
                                }
                            ?>
                         
                     </div>
                     <div class="dayghe dayghe8">
                     <?php
                                foreach ($ghe8 as $g){
                                    switch ($g['trangthai']) {
                                        case '0':
                                            echo '<div class="vitri">
                                            <label>
                                                <input type="checkbox" name="ghe[]" value="'.$g['id'].'">
                                                <span class="hetcho"><i class="fa fa-check"></i></span>
                                            </label>
                                       </div>';
                                            break;
                                        
                                        case '1':
                                            echo '<div class="vitri">
                                            <label>  
                                                <span class="dadat"><i class="fa fa-lock"></i></span>
                                            </label>
                                        </div>';
                                            break;
                                    }
                                }
                            ?>
                         
                     </div>
                     <div class="dayghe dayghe9">
                     <?php
                                foreach ($ghe9 as $g){
                                    switch ($g['trangthai']) {
                                        case '0':
                                            echo '<div class="vitri">
                                            <label>
                                                <input type="checkbox" name="ghe[]" value="'.$g['id'].'">
                                                <span class="hetcho"><i class="fa fa-check"></i></span>
                                            </label>
                                       </div>';
                                            break;
                                        
                                        case '1':
                                            echo '<div class="vitri">
                                            <label>  
                                                <span class="dadat"><i class="fa fa-lock"></i></span>
                                            </label>
                                        </div>';
                                            break;
                                    }
                                }
                            ?>
                         
                     </div>
                     <div class="dayghe dayghe10">
                     <?php
                                foreach ($ghe10 as $g){
                                    switch ($g['trangthai']) {
                                        case '0':
                                            echo '<div class="vitri">
                                            <label>
                                                <input type="checkbox" name="ghe[]" value="'.$g['id'].'">
                                                <span class="hetcho"><i class="fa fa-check"></i></span>
                                            </label>
                                       </div>';
                                            break;
                                        
                                        case '1':
                                            echo '<div class="vitri">
                                            <label>  
                                                <span class="dadat"><i class="fa fa-lock"></i></span>
                                            </label>
                                        </div>';
                                            break;
                                    }
                                }
                            ?>
                         
                     </div>
                     <div class="dayghe dayghe11">
                     <?php
                                foreach ($ghe11 as $g){
                                    switch ($g['trangthai']) {
                                        case '0':
                                            echo '<div class="vitri">
                                            <label>
                                                <input type="checkbox" name="ghe[]" value="'.$g['id'].'">
                                                <span class="hetcho"><i class="fa fa-check"></i></span>
                                            </label>
                                       </div>';
                                            break;
                                        
                                        case '1':
                                            echo '<div class="vitri">
                                            <label>  
                                                <span class="dadat"><i class="fa fa-lock"></i></span>
                                            </label>
                                        </div>';
                                            break;
                                    }
                                }
                            ?>
                         
                     </div>


                 </div>
             </div>
         </div>
         <div class="box right">
            <div class="head">
                    <div class="tenphim"><p><?php
                        
                            echo $loadphim['tenphim'];
                        
                    ?></p></div>
            </div>
            <div class="body">
                   <div class="box_thongtin">
                        <div style="display:none;"><input name="phim" readonly type="text" value="<?php echo $loadphim['tenphim']; ?>"></div>
                       <div class="box_tenthongtin">rạp</div>
                       <div class="box_noidung"><input name="rap" readonly type="text" value="<?php echo $loadrap['tenrap']; ?>"></div>
                   </div>
                   <div class="box_thongtin">
                       <div class="box_tenthongtin">ngày chiếu</div>
                       <div class="box_noidung"><input name="ngaychieu" readonly type="text" value="<?php echo $loadsuatchieu['ngaychieu']; ?>"></div>
                   </div>
                   <div class="box_thongtin">
                       <div class="box_tenthongtin">suất chiếu</div>
                       <div class="box_noidung"><input name="suatchieu" readonly type="text" value="<?php echo $loadsuatchieu['thoigian']; ?>"></div>
                   </div>
                   <div class="box_thongtin">
                       <div class="box_tenthongtin">phòng chiếu</div>
                       <div class="box_noidung"><input name="phongchieu" readonly type="text" value="<?php echo $phongchieu['tenphong']; ?>"></div>
                   </div>
                   <div class="box_thongtin">
                       <div class="box_tenthongtin">giá vé</div>
                       <div class="box_noidung"><input readonly type="text" value="85 nghin VND"></div>
                   </div>
                   <div class="box_thongtin">
                       <input type="submit" value="Thanh toán" name="thanhtoan">
                   </div>
            </div>
         </div>
         </form>
    </div>
</div>