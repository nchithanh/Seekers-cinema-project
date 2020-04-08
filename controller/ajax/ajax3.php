
<?php
    include "../../model/connect.php";
    include "../../model/user.php";
    include_once "../../model/thanhtoan_sql.php";
    include_once "../../model/datve_sql.php";
        $tenphim=$_POST['textphim'];
        $tenrap=$_POST['textrap'];
        $tenphongchieu=$_POST['textphongchieu'];
        $suatchieu=$_POST['textsuatchieu'];
        $ghe=$_POST['textghe'];
        $iduser=$_POST['textiduser'];
        add_ve($tenphim,$tenrap,$tenphongchieu,$suatchieu,$ghe,$iduser);
        $idghe=$_POST['textidghe'];
        $trangthaighe=$_POST['texttrangthaighe'];
        updateghe($idghe,$trangthaighe);
        deletethanhtoan($iduser);
        echo '<div class="chuckhach">
        <div class="box">
            <p>Cảm ơn bạn đã tin tưởng chúng tôi, hãy đến đúng giờ thanh toán nhận vé và thưởng thức bộ phim bạn nhé, yêu nhiều</p>
            <div class="ok"><i class="fa fa-check-circle"></i></div>
            <p>Chúc bạn có buổi xem phim vui vẻ</p>
            <a href="index.php?contro=user">Thông tin</a>
        </div>
    </div>';
?>