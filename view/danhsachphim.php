
        <div class="danhsachphim">
            <div class="tieude">
                <span id="phimdangchieu" class="listtieude mautieude">PHIM ĐANG CHIẾU</span>
                <span id="phimsapchieu" class="listtieude">PHIM SẮP CHIẾU</span>
            </div>
            <div class="listphim">
            <?//day la phim sap chieu//?>
                <div class="phimsapchieu" style="display:none;">
                <?php
						foreach ($loadphimsc as $phim){
                            if(isset($_SESSION['user'])){
                                $link='<a href="index.php?contro=detail&idphim='.$phim['id'].'">MUA VE</a>';
                            }else{
                                $link='<a href="index.php?contro=login">MUA VE</a>';
                            }
                            $name=$phim['tenphim'];
							$img="view/img/".$phim['anhphim'];
						
							echo '<div class="phim">
                            <div class="anhphim">
                            <img src="'.$img.'" alt="">
                            <div class="chitiet">
                            '.$link.'
                            </div>  
                            <div class="noidungphim">
                            <p>'.$name.'</p>
                            <p>Đạo diễn :'.$phim['daodien'].'</p>
                            <p>Diễn viên :'.$phim['dienvien'].'</p>
                            </div> 
                            <div class="ngaychieu">
                                '.$phim['ngaychieu'].'
                            </div>  
                            </div>
                          </div>';
						}	
                    ?>     
                </div>
            <?//day la phan dang chieu//?>
                <div class="phimdangchieu">
                <?php
						foreach ($loadphimdc as $phim){       
                            if(isset($_SESSION['user'])){
                                $link='<a href="index.php?contro=detail&idphim='.$phim['id'].'">MUA VE</a>';
                            }else{
                                $link='<a href="index.php?contro=login">MUA VE</a>';
                            }   
                            $name=$phim['tenphim'];
							$img="view/img/".$phim['anhphim'];
						
							echo '<div class="phim">
                            <div class="anhphim">
                            <img src="'.$img.'" alt="">
                            <div class="chitiet">
                            '.$link.'
                            </div>  
                            <div class="noidungphim">
                            <p>'.$name.'</p>
                            <p>Đạo diễn :'.$phim['daodien'].'</p>
                            <p>Diễn viên :'.$phim['dienvien'].'</p>
                            </div> 
                            <div class="ngaychieu">
                                '.$phim['ngaychieu'].'
                            </div>  
                            </div>
                          </div>';
						}
                    ?>
                </div>
            </div>
        </div>
<style>
    footer{
        display:none;
    }
</style>