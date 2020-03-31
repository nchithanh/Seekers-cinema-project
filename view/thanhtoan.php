
        <div class="chuckhach <?php if(isset($_GET['thanhcong'])){echo 'block';}else{echo 'none';} ?>">
            <div class="box">
                <p>Cảm ơn bạn đã tin tưởng chúng tôi, hãy đến đúng giờ thanh toán nhận vé và thưởng thức bộ phim bạn nhé, yêu nhiều</p>
                <div class="ok"><i class="fa fa-check-circle"></i></div>
                <p>Chúc bạn có buổi xem phim vui vẻ</p>
                <a href="index.php?contro=user">Thông tin</a>
            </div>
        </div>
        <div class="form_thanhtoan <?php if(isset($_GET['thanhcong'])){echo 'none';};?>">
            <form action="index.php?contro=thanhtoan&thanhcong=1" method="post">
                <div class="row">
                    <label>phim :</label>
                    <input type="text" name="phim" value="<?php echo $loadphim['tenphim']; ?>" readonly>
                </div>
                <div class="row">
                    <label>rap :</label>
                    <input type="text" name="rap" value="<?php echo $loadrap['tenrap']; ?>" readonly>
                </div>
                <div class="row">
                    <label>suat chieu :</label>
                    <input type="text" name="suatchieu" value="<?php echo $loadsuatchieu['thoigian']; ?>" readonly>
                </div>
                <div class="row">
                    <label>phong chieu :</label>
                    <input type="text" name="phongchieu" value="<?php echo $loadphongchieu['tenphong']; ?>" readonly>
                </div>
                <div class="row">
                    <label>ghe ngoi :</label>
                    <input type="text" name="ghe" value="<?php echo $loadhangghe['tenhangghe']; ?><?php echo $loadghe['ghe']; ?>" readonly>
                </div>
                <div class="row">
                    <label>gia ve :</label>
                    <input type="text" name="gia" value="85 nghin VND" readonly>
                </div>
                <input type="text" name="idghe" value="<?php echo $loadghe['id']; ?>" style="display: none;" readonly>
                <input type="text" name="trangthaighe" value="1" style="display: none;">
                <input class="submit" name="thanhtoan" type="submit" value="dat ve">
            </form>
        </div>
