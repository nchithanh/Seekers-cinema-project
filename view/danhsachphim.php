
        <div class="danhsachphim">
            <div class="tieude">
                <span id="phimdangchieu" class="listtieude mautieude">PHIM ĐANG CHIẾU</span>
                <span id="phimsapchieu" class="listtieude">PHIM SẮP CHIẾU</span>
            </div>
            <div class="listphim">
            <?//day la phim sap chieu//?>
                <div class="phimsapchieu">

                <?php
						foreach ($loadphimsc as $phim){
                            
                            $name=$phim['tenphim'];
							$img="img/".$phim['anhphim'];
						
							echo '<div class="phim">
                            <div class="anhphim">
                            <a href=""><img src="'.$img.'" alt=""></a>
                            </div>
                            <div class="noidungphim">
                            '.$name.'
                            </div>
                          </div>';
						}
				
                    ?>
                   

                </div>
            <?//day la phan dang chieu//?>
                <div class="phimdangchieu">
                <?php
						foreach ($loadphimdc as $phim){
                            
                            $name=$phim['tenphim'];
							$img="img/".$phim['anhphim'];
						
							echo '<div class="phim">
                            <div class="anhphim">
                            <a href=""><img src="'.$img.'" alt=""></a>
                             
                            </div>
                            <div class="noidungphim">
                            '.$name.'
                            </div>
                          </div>';
						}
				
                    ?>
               
                </div>
            </div>
        </div>
