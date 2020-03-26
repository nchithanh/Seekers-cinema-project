<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>

        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                document.getElementById("thanhdatve").style.animationName = "vao";
            }
            else {
                document.getElementById("thanhdatve").style.animationName = "ra";
            }
            if(document.body.scrollTop > 300 || document.documentElement.scrollTop > 300){
                document.getElementById("listphim").style.animationName = "len";
            }
            else{
                document.getElementById("listphim").style.animationName = "len";
            }
            if(document.body.scrollTop > 400 || document.documentElement.scrollTop > 400){
                document.getElementById("soc").style.animationName = "soc";
            }
            else{
                document.getElementById("soc").style.animationName = "soc1";
            }
            if(document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000){
                document.getElementById("boxkhuyenmai").style.animationName = "len1";
            }
            else{
                document.getElementById("boxkhuyenmai").style.animationName = "len1a";
            }


        }

        $(document).ready(function () {

            $("#phim").change(function(){
                var idphim = $("#phim").val();
                $.post("view/ajax.php", {idphim:idphim}, function(data){
                   $("#rap").html(data);
                });
            });
            $("#rap").change(function(){
                var idrap = $("#rap").val();
                $.post("view/ajax2.php", {idrap:idrap}, function(data){
                   $("#rap_giatri").html(data);
                });
            });
            $("#rap").change(function(){
                var idrap = $("#rap").val();
                $.post("view/ajax1.php", {idrap:idrap}, function(data){
                   $("#suatchieu").html(data);
                });
            });
            $("#phimhead").change(function(){
                var idphim = $("#phimhead").val();
                $.post("view/ajax.php", {idphim:idphim}, function(data){
                   $("#raphead").html(data);
                });
            });
            $("#raphead").change(function(){
                var idrap = $("#raphead").val();
                $.post("view/ajax1.php", {idrap:idrap}, function(data){
                   $("#suatchieuhead").html(data);
                });
            });
            $("#raphead").change(function(){
                var idrap = $("#raphead").val();
                $.post("view/ajax2.php", {idrap:idrap}, function(data){
                   $("#raphead_giatri").html(data);
                });
            });

            $(".list").click(function () {
                $(".list").removeClass("maubanner");
                $(this).addClass("maubanner");
            });
            $("#listbanner1").click(function () {
                $("#banner1").fadeIn(500);
                $("#banner2").fadeOut(500);
                $("#banner3").fadeOut(500);
                $("#banner4").fadeOut(500);
            });
            $("#listbanner2").click(function () {
                $("#banner1").fadeOut(500);
                $("#banner2").fadeIn(500);
                $("#banner3").fadeOut(500);
                $("#banner4").fadeOut(500);
            });
            $("#listbanner3").click(function () {
                $("#banner1").fadeOut(500);
                $("#banner2").fadeOut(500);
                $("#banner3").fadeIn(500);
                $("#banner4").fadeOut(500);
            });
            $("#listbanner4").click(function () {
                $("#banner1").fadeOut(500);
                $("#banner2").fadeOut(500);
                $("#banner3").fadeOut(500);
                $("#banner4").fadeIn(500);
            });

            $(".listtieude").click(function () {
                $(".listtieude").removeClass("mautieude");
                $(this).addClass("mautieude");
            });
            $("#phimdangchieu").click(function () {
                $(".phimdangchieu").fadeIn(500);
                $(".phimsapchieu").fadeOut(500);
            });
            $("#phimsapchieu").click(function () {
                $(".phimdangchieu").fadeOut(500);
                $(".phimsapchieu").fadeIn(500);
            });
            $(".detail_option").click(function() {
                $(".detail_option").removeClass("mautieude");
                $(this).addClass("mautieude");
            });
            $("#muave").click(function () {
                $("#binhluanbox").fadeOut(500);
                $("#datve").fadeIn(500);
            });
            $("#binhluan").click(function () {
                $("#binhluanbox").fadeIn(500);
                $("#datve").fadeOut(500);
            });
            $("#dangky").click(function () {
                $("#formlogin").addClass("animation_dangky");
                $("#formlogin").removeClass("animation_dangnhap");
            });
            $("#dangnhap").click(function () {
                $("#formlogin").removeClass("animation_dangky");
                $("#formlogin").addClass("animation_dangnhap");
            });
        });
    </script>
</head>

<body>
    <div class="warp">
        <div class="gif" style=" position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background:url(img/mua.gif);
    background-size: contant;
    z-index: -1;">
       
        </div>
        <header>
            <div id="thanhdatve" class="thanhdatve">
                <form action="index.php?contro=datve" method="post">
                    <select name="phim" id="phimhead">
                        <option value="">chon phim</option>
                        <?php
                            foreach ($loadphimall as $phim){
                                echo '<option value="'.$phim['id'].'">'.$phim['tenphim'].'</option>';
                            }
                        ?>
                    </select>
                    <select  id="raphead">
                        <option value="">chon rap</option>
                       
                    </select>
                    <select name="rap" id="raphead_giatri" style="display:none" >               
                    </select>
                    <select name="suatchieu" id="suatchieuhead">
                        <option value="">chon suat</option>
                       
                    </select>
                    <?php
                        if(isset($_SESSION['user'])){
                            echo ' <input type="submit" name="muave" value="MUA VÉ">';
                        }
                        else{
                            echo '<a style="background:black;color:white;padding:15px 30px;" href="index.php?contro=login">MUA VÉ</a>';
                        }
                    ?>
                </form>
            </div>
            <a href="index.php?contro=home"><div class="logo">
                <h2><span>S</span><span>e</span><span>e</span><span>k</span><span>e</span><span>r</span>s<span></span> cinema</h2>
                <div class="gif">
                    <img src="img/nhen2.gif" alt="">
                </div>
            </div></a>
            <div class="timkiem">
                <form action="index.php?contro=timkiem" method="post" enctype="multipart/form-data">    
                    <input class="tim" type="submit" value="search" name="tim">
                    <input class="text" type="text" placeholder="Tên phim" name="noidung">
                </form>
            </div>
            <div class="tranglogin">
            <?php
											if(isset($_SESSION['user'])){
												echo'
                                                <a href="">
                                                <i class="fa fa-user-secret"></i>
                                                '.$_SESSION['user'].'
                                            </a>
                                            <a href="index.php?contro=logout">
                                                Đăng Xuất
                                            </a>
                                                ';
											}else{
												echo' <a href="index.php?contro=login">
                                                <i class="fa fa-user-secret"></i>
                                                Đăng nhập
                                                  </a>
                                                 <a href="index.php?contro=login">
                                                Đăng ký
                                            </a>';
											}
										?>
                <!-- <a href="index.php?contro=login">
                    <i class="fa fa-user-secret"></i>
                    Đăng nhập
                </a>
                <a href="index.php?contro=login">
                    Đăng ký
                </a> -->
            </div>
            <nav>
                <ul>
                    <li><a href="index.php?contro=muave">mua vé</a></li>
                    <li style="position: relative;"><a href="index.php?contro=danhsachphim">phim</a>
                    <?//cho nay la phan list phim dang chieu vs sap chieu//?>
                    <div class="box_phim">
                            <?//day la phim dang chieu//?>
                            <div class="phimdangchieu1">
                                <div class="tieude">PHIM ĐANG CHIẾU</div>
                                <?php
                                    foreach ($loadphimdc as $phim){
                                        if(isset($_SESSION["user"])){
                                            $link='<a href="index.php?contro=detail&idphim='.$phim['id'].'">MUA VÉ</a>';
                                        }else{
                                            $link='<a href="index.php?contro=login">MUA VÉ</a>';
                                        }
                                        $name=$phim['tenphim'];
                                        $img="img/".$phim['banner']; 
                                        echo ' <div class="phim">
                                        <div class="anhphim"><img src="'.$img.'" alt="">
                                            <div class="muave">
                                            '.$link.'                                              
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tenphim">'.$name.'</div>
                                    </div>';
                                    }
				
                               ?>
                            
                            </div>
                            <?//day la phim sap chieu//?>
                            <div class="phimsapchieu1">
                                <div class="tieude">PHIM SAP CHIẾU</div>
                                <?php
                                    foreach ($loadphimsc as $phim){
                                        if(isset($_SESSION["user"])){
                                            $link='<a href="index.php?contro=detail&idphim='.$phim['id'].'">MUA VÉ</a>';
                                        }else{
                                            $link='<a href="index.php?contro=login">MUA VÉ</a>';
                                        }
                                        $name=$phim['tenphim'];
                                        $img="img/".$phim['banner'];
                                    
                                        echo ' <div class="phim">
                                        <div class="anhphim"><img src="'.$img.'" alt="">
                                            <div class="muave">
                                            '.$link.'
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tenphim">'.$name.'</div>
                                    </div>';
                                    }
                
                                 ?>
                             
                            </div>
                        </div>            
                    </li>
                    <li><a href="">góc điện ảnh</a></li>
                    <li><a href="">su kiện</a></li>
                    <li><a href="">rạp/giá vé</a></li>
                    <li><a href="">hỗ trọ</a></li>
                    <li><a href="">thành viên</a></li>
                </ul>
            </nav>
        </header>