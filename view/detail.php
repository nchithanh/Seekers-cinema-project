<div class="trailer">
    <div class="box">
        <iframe src="<?php echo $detail["trailer"];  ?>" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
    </div>
</div>
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
        <span class="detail_option mautieude" id="muave">MUA VÉ</span><span class="detail_option" id="binhluan">BÌNH
            LUẬN</span>
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
            <select required name="phim" id="phim">
                <option value="">chọn phim</option>
                <option value="<?php echo $loadphim['id']; ?>"><?php echo $loadphim['tenphim']; ?></option>
            </select>
            <select required id="rap">
                <option value="">chọn rạp</option>
            </select>
            <select required name="rap" id="rap_giatri" style="display:none">
            </select>
            <select required name="ngaychieu" id="ngaychieu">
                <option value="">chọn ngày chiếu</option>
            </select>
            <select required name="suatchieu" id="suatchieu">
                <option value="">chọn suất chiếu</option>
            </select>
            <input style="display:none;" type="number" id="iduser" value="<?php echo $_SESSION['id']; ?>">
            <input id="btn_muave" name="muave" type="button" value="MUA VÉ">
        </form>
    </div>
    <?php
        if($detail["trangthai"]>0){
           echo '<div class="boxcanhbao">
           <form action="" method="post" >
               <input style="display:none;" type="text" value="'.$_SESSION['id'].'" name="iduser" id="">
               <input style="display:none;" type="text" value="'.$detail['id'].'" name="idphim" id="">
               <input class="btn_nhanthongbao" type="submit" value="Nhận thông báo khi có phim " name="thongbaophim">
           </form>
         </div>';
        }
      ?>
</article>
<aside>
    <div class="tieude">
        <span>PHIM ĐANG CHIẾU</span>
    </div>
    <?//day la phan list phim//?>
    <?php
						foreach ($loadphimdc as $phim){
                            
                            $name=$phim['tenphim'];
							$img="view/img/".$phim['banner'];
						
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
<style>
    footer {
        display: none;
    }
</style>
<div class="box_ajax" id="ajax">

</div>