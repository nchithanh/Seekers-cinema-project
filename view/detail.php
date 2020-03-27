

        <article>
            <div class="anhphim">
            <?php
					$img="view/img/".$detail['anhphim'];
				?>
                <img src="<?=$img?>" alt="">
            </div>
            <div class="thongtinphim">
                <?//day la thong tin phim//?>
                <div class="tenphim"><?php echo $detail["tenphim"];  ?></div>
                <div><i style="color: yellow;" class="fa fa-star"></i> 9.2<span>/10</span></div>
                <div><span><i class="fa fa-hourglass"></i> :</span> <?php echo $detail["thoiluong"];  ?> phút</div>
                <div><span>Thể loại:</span> <?php echo $detail["theloai"];  ?></div>
                <div><span>Quốc gia:</span> <?php echo $detail["quocgia"];  ?></div>
                <div><span>Diễn viên:</span> <?php echo $detail["dienvien"];  ?></div>
                <div><span>Đạo diễn:</span> <?php echo $detail["daodien"];  ?></div>
                <div><span>Ngày:</span> <?php echo $detail["ngaychieu"];  ?></div>
                <?php
                    switch ($detail["tuoi"]){
                        case '16':
                            echo '<div><img style="width: 10%;" src="view/img/c16.png" alt=""></div>';
                            break;
                        case '18':
                                echo '<div><img style="width: 10%;" src="view/img/c18.png" alt=""></div>';
                            break;
                            default:
                            echo'';
                    }
                ?>

            </div>
            <div class="noidungphim">
                <div class="tieude">Nội dung phim</div>
                <p> <?php echo $detail["noidung"];  ?></p>
            </div>
            <?//day la thong tin phim//?>
            <div class="tieude2">
                <span class="detail_option mautieude" id="muave">MUA VÉ</span><span class="detail_option" id="binhluan">BÌNH LUẬN</span>
            </div>
            <div class="binhluan" id="binhluanbox">
            <?//day la form binh luan//?>
                <form action="index.php?contro=detail&idphim=<?=$id_phim?>" method="POST">
                    <input type="text" placeholder="Thêm bình luận" name="danhgia">
                    <input type="submit" value="Send" name="submit">
                </form>
            <?//day la form binh luan//?>
            <?//day la show binh luan//?>
            <?php 
                
                foreach ($dscmt as $cmt) {
                    $tennguoidanhgia = $cmt['tennguoidanhgia'];
                    $danhgia  = $cmt['danhgia'];

                    echo '

                    <div class="hienbinhluan">
                        <div class="tenbinhluan">'.$tennguoidanhgia.'</div>
                        <p>'.$danhgia.'</p>
                    </div>

                    ';
                }
            ?>
            <?//day la show binh luan//?>    
            </div>
            <div class="datve" id="datve">
            <form action="index.php?contro=datve" method="post">
                    <select name="phim" id="phim">
                    <option value="">chon phim</option>
                        <?php
                            foreach ($loadphimall as $phim){
                                echo '<option value="'.$phim['id'].'">'.$phim['tenphim'].'</option>';
                            }
                        ?>
                    </select>
                    <select id="rap">
                        <option value="">chon rap</option>  
                    </select>
                    <select name="rap" id="rap_giatri" style="display:none" >               
                    </select>
                    <select name="suatchieu" id="suatchieu">
                        <option value="">chon suat</option>
                    </select>
                    <input type="submit" name="muave" value="MUA VÉ">
                </form>
            </div>
        </article>
        <aside>
            <div class="tieude">
                <span>PHIM ĐANG CHIẾU</span>
            </div>
            <?//day la phan list phim//?>
            <?php
						foreach ($loadphimdc as $phim){
                            
                            $name=$phim['tenphim'];
							$img="img/".$phim['banner'];
						
							echo '<div class="phim">
                            <div class="hinhphim">
                                <img src="'.$img.'" alt="">
                                <div class="muave">
                                    <a href="index.php?contro=detail&idphim='.$phim['id'].'">MUA VÉ</a>
                                </div>
                            </div>
                            <div class="tenphim">'.$name.'</div>
                        </div>';
						}
				
                    ?>
            
            <?//day la phan list phim//?>
            <a href="index.php?contro=danhsachphim">
                <div class="more">XEM THÊM</div>
            </a>
        </aside>
