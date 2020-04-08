
        <div class="form_thanhtoan <?php if(isset($_GET['thanhcong'])){echo 'none';};?>">
            <form action="index.php?contro=thanhtoan&thanhcong=1" method="post">
                <div class="row">
                    <label>phim :</label>
                    <input type="text" id="textphim" name="phim" value="<?php echo $loadphim['tenphim']; ?>" readonly>
                </div>
                <div class="row">
                    <label>rạp :</label>
                    <input type="text" id="textrap" name="rap" value="<?php echo $loadrap['tenrap']; ?>" readonly>
                </div>
                <div class="row">
                    <label>suất chiếu :</label>
                    <input type="text" id="textsuatchieu" name="suatchieu" value="<?php echo $loadsuatchieu['thoigian']; ?>" readonly>
                </div>
                <div class="row">
                    <label>phòng chiếu :</label>
                    <input type="text" id="textphongchieu" name="phongchieu" value="<?php echo $loadphongchieu['tenphong']; ?>" readonly>
                </div>
                <div class="row">
                    <label>ghế ngồi :</label>
                    <input type="text" id="textghe" name="ghe" value="<?php echo $loadhangghe['tenhangghe']; ?><?php echo $loadghe['ghe']; ?>" readonly>
                </div>
                <div class="row">
                    <label>giá vé :</label>
                    <input type="text" id="textgia" name="gia" value="85 nghin VND" readonly>
                    <input type="number" id="textiduser" name="iduser" value="<?php echo $_SESSION['id']; ?>" readonly style="display: none;" >
                </div>
                <input type="text" id="textidghe" name="idghe" value="<?php echo $loadghe['id']; ?>" style="display: none;" readonly>
                <input type="text" id="texttrangthaighe" name="trangthaighe" value="1" style="display: none;">
                <input class="submit" id="textthanhtoan" name="thanhtoan" type="button" value="booking">
            </form>
        </div>
        <div class="box_chuckhach">

        </div>
        <style>

            footer{
                display:none;
            }
        </style>