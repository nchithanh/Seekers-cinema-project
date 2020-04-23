
<div class="box_hien">
    <?php 
        if(isset($_SESSION['user'])){
            echo ' <p onclick="datve()">BOOKING TICKET</p>
            <p onclick="datve()"><i class="fa fa-sort-up"></i></p>
            <p onclick="datve()"><i class="fa fa-spinner fa-spin"></i></p>';
        }else{
            echo ' <p onclick="dangnhap()">BOOKING TICKET</p>
            <p onclick="dangnhap()"><i class="fa fa-sort-up"></i></p>
            <p onclick="datve()"><i class="fa fa-spinner fa-spin"></i></p>';
        }
    ?>
</div>
<div class="thanhdatve" id="thanhdatve">
    <div class="box_datve">
        <div class="head_box">
            <div class="box">
                <span onclick="datve_ve()">CLOSE</span>
                <i onclick="datve_ve()" class="fa fa-sort-down"></i>
            </div>
        </div>
        <div class="head_box">
            <div class="box">
                <p id="box_form">BOOKING TICKET</p>
            </div>
        </div>
        <div class="head_box">
            <div class="box">
            <form action="index.php?contro=datve" method="post">
            <select name="phim" id="phim">
                <option value="">chọn phim</option>
                <?php
                            foreach ($loadphim_datve as $phim){
                                echo '<option value="'.$phim['id'].'">'.$phim['tenphim'].'</option>';
                            }
                        ?>
            </select>
            <select id="rap">
                <option value="">chọn rạp</option>
            </select>
            <select name="rap" required id="rap_giatri" style="display:none">
            </select>
            <select name="ngaychieu" required id="ngaychieu">
                <option value="">chọn ngày chiếu</option>
            </select>
            <select name="suatchieu" required id="suatchieu">
                <option value="">chọn suất chiếu</option>
            </select>
            <input style="display:none;" type="number" id="iduser" value="<?php echo $_SESSION['id']; ?>">
            <?php
                        if(isset($_SESSION['user'])){
                            echo '<input id="btn_muave" name="muave" type="button" value="MUA VÉ">';
                        }else{
                            echo ' <a onclick="dangnhap()"><input type="submit" value="MUA VÉ"></a>';
                        }
                    ?>

        </form>
            </div>
        </div>
    </div>
</div>
<div class="banner_top">
    <?php
        $i=0;
        foreach ($loadbanner as $banner){
            $i++;
            echo ' <div id="banner'.$i.'" class="box_trailer">
            <img src="view/img/'.$banner['img'].'" alt="">
        </div>';
        }
    ?>
   
    <div class="listbanner">
        <span class="list" id="listbanner1"></span>
        <span class="list" id="listbanner2"></span>
        <span class="list" id="listbanner3"></span>
        <span class="list maubanner" id="listbanner4"></span>
    </div>
</div>



<div class="banner_bottom" id="banner_bottom">

<div class="ten_box"><p>News Movies</p></div>
    <div class="box_phim">
    <?php     
        foreach ($loadphimmoi as $phim){
            if(isset($_SESSION['user'])){
                $link=' <a href="index.php?contro=detail&idphim='.$phim['id'].'">
                        <div class="tenphim"><p>'.$phim['tenphim'].'</p></div>
                        </a>';
            }else{
                $link=' <a onclick="dangnhap()">
                        <div class="tenphim"><p>'.$phim['tenphim'].'</p></div>
                        </a>';
                }  
            echo '<div class="box">
            <img src="view/img/'.$phim['anhphim'].'" alt="">
            '.$link.'
        </div>';
        }
    ?>
    </div>
</div>

<div class="banner_bottom banner_bottom2" id="banner_bottom2">
<div class="ten_box"><p>Best IMDB</p></div>
        <?php
            foreach ($loadbestphim as $phim){
                if(isset($_SESSION['user'])){
                    $link='<a href="index.php?contro=detail&idphim='.$phim['id'].'">view detail</a>';
                }else{
                    $link='<a onclick="dangnhap()">view detail</a>';
                }
                echo '<div class="best_phim">
                <div class="left">
                <iframe width="100%" height="100%" src="'.$phim['trailer'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="right">
                   <p>'.$phim['tenphim'].'</p>
                   <p>Đạo diễn :'.$phim['daodien'].'</p>
                   <p>Diễn viên :'.$phim['dienvien'].'</p>
                   <p>'.$phim['noidung'].'</p>
                   <p>'.$link.'</p>
                </div>
            </div>';
            }
        ?>
</div>

<section>
    <div class="tieude">
        <span id="phimdangchieu" class="listtieude mautieude">PHIM ĐANG CHIẾU</span>
        <span id="phimsapchieu" class="listtieude">PHIM SẮP CHIẾU</span>
    </div>
    <div id="listphim" class="listphim">

        <div id="soc" class="soc"></div>
        <?//cho nay la phim sap chieu//?>
        <div class="phimsapchieu">
            <a href="index.php?contro=danhsachphim">
                <div class="more">
                    XEM THÊM
                </div>
            </a>
            <?php	
						foreach ($loadphimsc as $phim){
                            if(isset($_SESSION["user"])){
                                $link='<a href="index.php?contro=detail&idphim='.$phim['id'].'">MUA VÉ</a>';
                            }else{
                                $link='<a onclick="dangnhap()">MUA VÉ</a>';
                            }
                            $name=$phim['tenphim'];
							$img="view/img/".$phim['banner'];
						
							echo '<div class="phim">
                            <div class="hinhphim">
                                <img src="'.$img.'" alt="">
                                <div class="muave">
                                '.$link.'
                                </div>
                                <div class="diemphim">'.$phim['rating'].'</div>
                                <div class="tenphim">
                                <p>'.$name.'</p>
                                <p>Đạo diễn :'.$phim['daodien'].'</p>
                                <p>Diễn viên :'.$phim['dienvien'].'</p>
                                </div>
                                <div class="ngaychieu">
                                '.$phim['ngaychieu'].'
                                </div>
                            </div>
                            <div class="muave">
                                <a href="">MUA VÉ</a>
                            </div>
                        </div>';
						}
				
                     ?>
        </div>
        <?//cho nay la phim dang chieu//?>
        <div class="phimdangchieu">
            <a href="index.php?contro=danhsachphim">
                <div class="more">
                    XEM THÊM
                </div>
            </a>
            <?php
                    	
						foreach ($loadphimdc as $phim){
                            if(isset($_SESSION["user"])){
                                $link='<a href="index.php?contro=detail&idphim='.$phim['id'].'">MUA VÉ</a>';
                            }else{
                                $link='<a onclick="dangnhap()">MUA VÉ</a>';
                            }
                            $name=$phim['tenphim'];
							$img="view/img/".$phim['banner'];
						
							echo '<div class="phim">
                            <div class="hinhphim">
                                <img src="'.$img.'" alt="">
                                <div class="muave">
                              '.$link.'
                                </div>
                                <div class="diemphim">'.$phim['rating'].'</div>
                                <div class="tenphim">
                            <p>'.$name.'</p>
                            <p>Đạo diễn :'.$phim['daodien'].'</p>
                            <p>Diễn viên :'.$phim['dienvien'].'</p>
                                </div>
                                <div class="ngaychieu">
                                '.$phim['ngaychieu'].'
                                </div>
                            </div>
                            <div class="muave">
                                <a href="">MUA VÉ</a>
                            </div>
                        </div>';
						}
				
                    ?>
        </div>
</section>


<section class="tinkhuyenmai">
<div class="ten_box foo"><p>News Movies</p></div>
    <?//cho nay la khuyen mai//?>
    <div class="boxkhuyenmai" id="boxkhuyenmai">


        <?//foreach echo phan nay ra//?>

        <?php
                    	
						foreach ($loadkm as $khuyenmai){
                            
                            $name=$khuyenmai['tenkhuyenmai'];
							$img="view/img/".$khuyenmai['img'];
						
							echo '<div class="khuyenmai">
                            <img src="'.$img.'" alt="">
                            <div class="tenkhuyenmai">
                                <p>'.$name.'</p>
                                <a href="">detail</a>
                            </div>
                        </div>';
						}
				
                    ?>

    </div>
    <?//cho nay la khuyen mai//?>
</section>
<section>
<div class="ten_box foo"><p>News Movies</p></div>
    <div class="thongtin">
        SEEKERS CINEMA là một trong những công ty tư nhân đầu tiên về điện ảnh được thành lập từ năm 2003, đã
        khẳng định thương hiệu là 1 trong 10 địa điểm vui chơi giải trí được yêu thích nhất. Ngoài hệ thống rạp
        chiếu phim hiện đại, thu hút hàng triệu lượt người đến xem, SEEKERS CINEMA còn hấp dẫn khán giả bởi không
        khí thân thiện cũng như chất lượng dịch vụ hàng đầu. Đến website galaxycine.vn, quý khách sẽ được cập
        nhật nhanh chóng các phim hay nhất phim mới nhất đang chiếu hoặc sắp chiếu. Lịch chiếu tại mọi hệ thống
        rạp chiếu phim của Galaxy Cinema cũng được cập nhật đầy đủ hàng ngày hàng giờ trên trang chủ. Đặt vé tại
        Galaxy Cinema dễ dàng chỉ sau vài thao tác vô cùng đơn giản. Để mua vé, hãy vào tab Mua vé. Quý khách có
        thể chọn Mua vé theo phim, theo rạp, theo ngày tùy cách nào tiện lợi nhất cho bản thân.Sau đó, tiến hành
        mua vé theo các bước hướng dẫn. Chỉ trong vài phút, quý khách sẽ nhận được tin nhắn và email phản hồi
        Đặt vé thành công của Galaxy Cinema. Quý khách có thể dùng tin nhắn lấy vé tại quầy vé của Galaxy Cinema
        hoặc quét mã QR để một bước vào rạp mà không cần tốn thêm bất kỳ công đoạn nào nữa. Nếu bạn đã chọn được
        phim hay để xem, hãy đặt vé cực nhanh bằng box Mua Vé Nhanh ngay từ Trang Chủ. Chỉ cần một phút, tin
        nhắn và email phản hồi của Galaxy Cinema sẽ gửi ngay vào điện thoại và hộp mail của bạn. Nếu chưa quyết
        định sẽ xem phim mới nào, hãy tham khảo các bộ phim hay trong mục Phim Đang Chiếu cũng như Phim Sắp
        Chiếu tại rạp chiếu phim bằng cách vào mục Bình Luận Phim ở Góc Điện Ảnh để đọc những bài bình luận chân
        thật nhất, tham khảo và cân nhắc. Sau đó, quý khách hãy đặt vé bằng box Mua Vé Nhanh ngay ở đầu trang để
        chọn được suất chiếu và chỗ ngồi vừa ý nhất. Galaxy Cinema luôn có những chương trình khuyến mãi, ưu
        đãi, quà tặng vô cùng hấp dẫn như giảm giá vé, tặng vé xem phim miễn phí, tặng Combo, tặng quà phim…
        dành cho quý khách. Trang web galaxycine.vn còn có mục Góc Điện Ảnh - sở hữu lượng dữ liệu về phim, diễn
        viên và đạo diễn, giúp quý khách dễ dàng chọn được phim mình yêu thích và nâng cao kiến thức về điện ảnh
        của bản thân. Ngoài ra, vào mỗi tháng, Galaxy Cinema cũng giới thiệu các phim sắp chiếu hot nhất trong
        mục Phim Hay Tháng để quý khách sớm có sự tính toán. Hiện nay, Galaxy Cinema đang ngày càng phát triển
        hơn nữa với các chương trình đặc sắc, các khuyến mãi hấp dẫn, đem đến cho khán giả những bộ phim bom tấn
        của thế giới và Việt Nam nhanh chóng và sớm nhất.
    </div>
</section>

<div class="box_ajax" id="ajax">
   
</div>

