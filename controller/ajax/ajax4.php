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


        
        $index1=load_index_idhangghe($idphongchieu['idphongchieu'],0);
        $index2=load_index_idhangghe($idphongchieu['idphongchieu'],1);
        $index3=load_index_idhangghe($idphongchieu['idphongchieu'],2);
        $index4=load_index_idhangghe($idphongchieu['idphongchieu'],3);
        $index5=load_index_idhangghe($idphongchieu['idphongchieu'],4);
        $index6=load_index_idhangghe($idphongchieu['idphongchieu'],5);
        $index7=load_index_idhangghe($idphongchieu['idphongchieu'],6);
        $index8=load_index_idhangghe($idphongchieu['idphongchieu'],7);
        $index9=load_index_idhangghe($idphongchieu['idphongchieu'],8);
        $index10=load_index_idhangghe($idphongchieu['idphongchieu'],9);
        $index11=load_index_idhangghe($idphongchieu['idphongchieu'],10);


        if($index1){
            if(is_null($index1['id'])){
                $ghe1=loadghetheohangghe(100,$idsuatchieu);
            }else{
                $ghe1=loadghetheohangghe($index1['id'],$idsuatchieu);
            }
        }
        if($index2){
            if(is_null($index2['id'])){
                $ghe2=loadghetheohangghe(100,$idsuatchieu);
            }else{
                $ghe2=loadghetheohangghe($index2['id'],$idsuatchieu);
            }
        }
        if($index3){
            if(is_null($index3['id'])){
                $ghe3=loadghetheohangghe(100,$idsuatchieu);
            }else{
                $ghe3=loadghetheohangghe($index3['id'],$idsuatchieu);
            }
        }
        if($index4){
            if(is_null($index4['id'])){
                $ghe4=loadghetheohangghe(100,$idsuatchieu);
            }else{
                $ghe4=loadghetheohangghe($index4['id'],$idsuatchieu);
            }
        }
        if($index5){
            if(is_null($index5['id'])){
                $ghe5=loadghetheohangghe(100,$idsuatchieu);
            }else{
                $ghe5=loadghetheohangghe($index5['id'],$idsuatchieu);
            }
        }
        if($index6){
            if(is_null($index6['id'])){
                $ghe6=loadghetheohangghe(100,$idsuatchieu);
            }else{
                $ghe6=loadghetheohangghe($index6['id'],$idsuatchieu);
            }
        }
        if($index7){
            if(is_null($index7['id'])){
                $ghe7=loadghetheohangghe(100,$idsuatchieu);
            }else{
                $ghe7=loadghetheohangghe($index7['id'],$idsuatchieu);
            }
        }
        if($index8){
            if(is_null($index8['id'])){
                $ghe8=loadghetheohangghe(100,$idsuatchieu);
            }else{
                $ghe8=loadghetheohangghe($index8['id'],$idsuatchieu);
            }
        }
        if($index9){
            if(is_null($index9['id'])){
                $ghe9=loadghetheohangghe(100,$idsuatchieu);
            }else{
                $ghe9=loadghetheohangghe($index9['id'],$idsuatchieu);
            }
        }
        if($index10){
            if(is_null($index10['id'])){
                $ghe10=loadghetheohangghe(100,$idsuatchieu);
            }else{
                $ghe10=loadghetheohangghe($index10['id'],$idsuatchieu);
            }
        }
        if($index11){
            if(is_null($index11['id'])){
                $ghe11=loadghetheohangghe(100,$idsuatchieu);
            }else{
                $ghe11=loadghetheohangghe($index11['id'],$idsuatchieu);
            }
        }
        // $ghe1=loadghetheohangghe($index['id'],$idsuatchieu);
        // $ghe2=loadghetheohangghe($index2['id'],$idsuatchieu);
        // $ghe3=loadghetheohangghe($index3['id'],$idsuatchieu);
        // $ghe4=loadghetheohangghe($index4['id'],$idsuatchieu);
        // $ghe5=loadghetheohangghe($index5['id'],$idsuatchieu);
        // $ghe6=loadghetheohangghe($index6['id'],$idsuatchieu);
        // $ghe7=loadghetheohangghe($index7['id'],$idsuatchieu);
        // $ghe8=loadghetheohangghe($index8['id'],$idsuatchieu);
        // $ghe9=loadghetheohangghe(91,$idsuatchieu);
        // $ghe10=loadghetheohangghe(101,$idsuatchieu);
        // $ghe11=loadghetheohangghe(111,$idsuatchieu);
       


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
                    <?php
                       
                    ?>
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