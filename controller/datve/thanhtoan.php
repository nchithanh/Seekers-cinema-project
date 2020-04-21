<?php
    include "model/connect.php";
    include_once "model/thanhtoan_sql.php";
    include_once "model/datve_sql.php";
        // $loadrap=thanhtoan_rap($_GET['idrap']);
        // $loadphim=thanhtoan_phim($_GET['phim']);
        // $loadsuatchieu=thanhtoan_suatchieu($_GET['idsuatchieu']);
        // $loadphongchieu=thanhtoan_phongchieu($_GET['phongchieu']);
        // $loadhangghe=thanhtoan_hangghe($loadghe['idhangghe']);
    if(isset($_POST['thanhtoan'])&&$_POST['thanhtoan']){
        $tenphim=$_POST['phim'];
        $tenrap=$_POST['rap'];
        $tenphongchieu=$_POST['phongchieu'];
        $suatchieu=$_POST['suatchieu'];
        $ngaychieu=$_POST['ngaychieu'];
        $iduser=$_SESSION['id'];
        if(isset($_POST['ghe'])){
            $arr_idghe=$_POST['ghe'];
        // $trangthaighe=$_POST['trangthaighe'];
        $chuoi='';
        foreach ($arr_idghe as $g){
            updateghe($g,1);
            $loadghe=thanhtoan_ghe($g);
            $tenhangghe=thanhtoan_hangghe($loadghe['idhangghe']);
            $chuoi.=''.$tenhangghe['tenhangghe'].''.$loadghe['ghe'].'.';
        }
        add_ve($tenphim,$tenrap,$tenphongchieu,$ngaychieu,$suatchieu,$chuoi,$iduser);
        deletethanhtoan($iduser);
     
        echo '<div id="thanhcong">
        <div class="top">
            <p><i class="fa fa-check-circle"></i></p>
            <p>Thành công</p>
            <p>Cảm ơn bạn đã tin tưởng chúng tôi</p>
        </div>
        <div class="bottom">
        <span></span>
        <button onclick="close_thanhcongbox()">Cancel</button>
        </div>
    </div>';
    }
        }
?>