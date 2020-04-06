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

        function dangnhap(){
            document.getElementById('login').style.display='block'
            document.getElementById('sign').style.display='none'
        };
        function dangky(){
            document.getElementById('login').style.display='none'
            document.getElementById('sign').style.display='block'
        };
        function huydangnhap(){
            document.getElementById('login').style.display='none'
            document.getElementById('sign').style.display='none'
        };
        

        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                document.getElementById("header").style.animationName = "header";
            }
            else {

            }
            if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
                document.getElementById("banner_bottom").style.animationName = "banner_bottom";
            }
            else {
                document.getElementById("boxlen").style.animationName = "boxlen_ra";
            }
            if (document.body.scrollTop > 750 || document.documentElement.scrollTop > 750) {
                document.getElementById("banner_bottom2").style.animationName = "banner_bottom";
            }
            else {

            }
            if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {
                document.getElementById("listphim").style.animationName = "len";
                document.getElementById("soc").style.animationName = "soc";
            }
            else {
                document.getElementById("soc").style.animationName = "soc1";
            }
            if (document.body.scrollTop > 2400 || document.documentElement.scrollTop > 2400) {
                document.getElementById("boxkhuyenmai").style.animationName = "len1";
            }
            else {
                document.getElementById("boxkhuyenmai").style.animationName = "len1a";
            }


        }

        $(document).ready(function () {

            $("#phim").change(function () {
                var idphim = $("#phim").val();
                $.post("view/ajax.php", { idphim: idphim }, function (data) {
                    $("#rap").html(data);
                });
            });
            $("#rap").change(function () {
                var idrap = $("#rap").val();
                $.post("view/ajax2.php", { idrap: idrap }, function (data) {
                    $("#rap_giatri").html(data);
                });
            });
            $("#rap").change(function () {
                var idrap = $("#rap").val();
                $.post("view/ajax1.php", { idrap: idrap }, function (data) {
                    $("#suatchieu").html(data);
                });
            });

            
            $(".list").click(function () {
                $(".list").removeClass("maubanner");
                $(this).addClass("maubanner");
            });
            $(".btn").click(function () {
                $(".btn").removeClass("user_mau");
                $(this).addClass("user_mau");
            });
            $(".qltk").click(function () {
                $("#qltk").fadeIn(500);
                $("#lsdv").fadeOut(500);
            });
            $(".lsdt").click(function () {
                $("#qltk").fadeOut(500);
                $("#lsdv").fadeIn(500);
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
            $(".detail_option").click(function () {
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

        $(window).on('load', function (event) {
            $('body').removeClass('loading');
            // $('.load').delay(1000).fadeOut('fast');
            $('.loading').delay(500).fadeOut('fast');
        });
       
    </script>
    
    <style>
        .block {
            display: block;
        }

        .none {
            display: none;
        }
    </style>
</head>

<body >
    <div class="loading"><img src="view/img/loading2.gif" alt=""></div>
    <div class="form_login ani" id="login" style="display:none;">
        <p>YOUR ACCOUNT</p>
        <form action="index.php?contro=home" method="post">

            <div class="row">
            <i class="fa fa-user-secret"></i><input name="user" type="text" required placeholder="Username">
            </div>
            <div class="row">
            <i class="fa fa-unlock-alt"></i></i><input name="pass" type="password" required placeholder="Userpassword">
            </div>
            <p>Forgot your password?</p>
            <div class="row1">
                <input name="login" class="btn" type="submit" value="Đăng nhập">
                <input class="btn" type="button" value="Đăng ký ngay" onclick="dangky()">
                <input class="btn" type="button" value="cancel" onclick="huydangnhap()">
                
            </div>
        </form>
    </div>
    <div class="form_login ani" id="sign" style="display:none;">
        <p>CREATE ACCOUNT</p>
        <form action="index.php?contro=home" method="post">
            <div class="row">
            <i class="fa fa-user-secret"></i><input name="user" type="text" required placeholder="Username">
            </div>
            <div class="row">
            <i class="fa fa-unlock-alt"></i><input name="pass" type="password" required placeholder="Userpassword">
            </div>
            <div class="row">
            <i class="fa fa-envelope"></i><input name="email" type="mail" required placeholder="email">
            </div>
            <div class="row">
            <i class="fa fa-phone"></i><input type="number" required placeholder="tel">
            <input name="role" value="1" type="number" placeholder="tel">
            </div>
            <div class="row1">
                <input class="btn" type="button" value="Đăng nhập" onclick="dangnhap()">
                <input name="adduser" class="btn" type="submit" value="Đăng ký ngay">
                <input class="btn" type="button" value="cancel" onclick="huydangnhap()">
            </div>
        </form>
    </div>
    <div class="warp" id="warp">
        <!-- <a href="#">
            <div class="boxlen" id="boxlen">
                <img src="view/img/top.png" alt="">
            </div>
        </a> -->
        <header id="header">
            <a href="index.php?contro=home">
                <div class="logo">
                    <h2><span>S</span><span>e</span><span>e</span><span>k</span><span>e</span><span>r</span>s<span></span>
                        cinema</h2>
                </div>
            </a>
            <div class="timkiem">
                <form action="index.php?contro=timkiem" method="post" enctype="multipart/form-data">
                    <input class="tim" type="submit" value="search" name="tim">
                    <input class="text" type="text" placeholder="Tên phim" name="noidung">
                </form>
            </div>
            <div class="tranglogin">
                <?php
                    if(isset($_SESSION['user'])){
                        echo '<a href="index.php?contro=user"><i class="fa fa-user-secret"></i>
                        '.$_SESSION['user'].'
                    </a>
                    <a href="index.php?contro=logout">
                    logout
                    </a>';
                    }else{
                        echo '<a onclick="dangnhap()"><i class="fa fa-user-secret"></i>
                        Đăng nhập
                    </a>
                    <a onclick="dangky()">
                        Đăng ký
                    </a>';
                    }
                ?>
            </div>
            <nav>
                <ul>

                    <li style="position: relative;font-size:20px;"><a href="index.php?contro=danhsachphim"><i
                                class="fa fa-chevron-down"></i>List phim</a>
                        <?//cho nay la phan list phim dang chieu vs sap chieu//?>
                        <div class="box_phim">
                            <div class="box">
                                <div class="box_logo">
                                    <h2><span>S</span><span>e</span><span>e</span><span>k</span><span>e</span><span>r</span><span>s</span>
                                    </h2>
                                    <p>cinema project</p>
                                </div>
                                <p class="fpt">FPT Education - FPT Polytechnic HCM - Cơ sở 3</p>
                                <div class="location">
                                    <p>Địa chỉ: Công viên phần mềm, Toà nhà Innovation, lô 24, Quang Trung, Quận 12, Hồ
                                        Chí Minh</p>
                                    <p>Điện thoại: 113 114 115 116 911</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="tieude">PHIM ĐANG CHIẾU</div>
                                <?//phim dang chieu //?>
                                <a href="">
                                    <div class="phim">The Dustwalker - Sa Mạc Chết
                                        <!-- <div class="anhphim">
                                    <img src="view/img/phim1.jpg" alt="">
                            </div> -->
                                    </div>
                                </a>
                                <a href="">
                                    <div class="phim">Bloodshot
                                        <!-- <div class="anhphim">
                                    <img src="view/img/phim1.jpg" alt="">
                            </div> -->
                                    </div>
                                </a>
                                <a href="">
                                    <div class="phim">Honest Candidate - Bà Hoàng Nói Dối
                                        <!-- <div class="anhphim">
                                    <img src="view/img/phim1.jpg" alt="">
                            </div> -->
                                    </div>
                                </a>
                                <a href="">
                                    <div class="phim">The Dustwalker - Sa Mạc Chết
                                        <!-- <div class="anhphim">
                                    <img src="view/img/phim1.jpg" alt="">
                            </div> -->
                                    </div>
                                </a>
                                <a href="">
                                    <div class="phim">Bloodshot
                                        <!-- <div class="anhphim">
                                    <img src="view/img/phim1.jpg" alt="">
                            </div> -->
                                    </div>
                                </a>
                                <a href="">
                                    <div class="phim">Honest Candidate - Bà Hoàng Nói Dối
                                        <!-- <div class="anhphim">
                                    <img src="view/img/phim1.jpg" alt="">
                            </div> -->
                                    </div>
                                </a>
                            </div>
                            <div class="box">
                                <div class="tieude">PHIM SẮP CHIẾU</div>
                                <?//phim dang chieu //?>
                                <a href="">
                                    <div class="phim">The Dustwalker - Sa Mạc Chết
                                        <!-- <div class="anhphim">
                                    <img src="view/img/phim1.jpg" alt="">
                            </div> -->
                                    </div>
                                </a>
                                <a href="">
                                    <div class="phim">Bloodshot
                                        <!-- <div class="anhphim">
                                    <img src="view/img/phim1.jpg" alt="">
                            </div> -->
                                    </div>
                                </a>
                                <a href="">
                                    <div class="phim">Honest Candidate - Bà Hoàng Nói Dối
                                        <!-- <div class="anhphim">
                                    <img src="view/img/phim1.jpg" alt="">
                            </div> -->
                                    </div>
                                </a>
                                <a href="">
                                    <div class="phim">The Dustwalker - Sa Mạc Chết
                                        <!-- <div class="anhphim">
                                    <img src="view/img/phim1.jpg" alt="">
                            </div> -->
                                    </div>
                                </a>
                                <a href="">
                                    <div class="phim">Bloodshot
                                        <!-- <div class="anhphim">
                                    <img src="view/img/phim1.jpg" alt="">
                            </div> -->
                                    </div>
                                </a>
                                <a href="">
                                    <div class="phim">Honest Candidate - Bà Hoàng Nói Dối
                                        <!-- <div class="anhphim">
                                    <img src="view/img/phim1.jpg" alt="">
                            </div> -->
                                    </div>
                                </a>
                            </div>
                            <div class="box">
                                <?//xu ly dang nhap //?>
                                <form action="" method="post">
                                    <label>Login</label>
                                    <div class="row">
                                        <input type="text" required placeholder="Username">
                                    </div>
                                    <div class="row">
                                        <input type="password" required placeholder="Userpassword">
                                    </div>
                                    <p>Forgot your password?</p>
                                    <input class="btn" type="submit" value="Đăng nhập">
                                    <input class="btn" type="button" value="Đăng ký ngay">
                                </form>
                            </div>
                        </div>
                    </li>
                    <li><a style="font-style:italic;">
                            <?php
                                        if(isset($_GET['contro'])){
                                            $ten=$_GET['contro'];
                                        }else{
                                            $ten="home";
                                        };
                                        echo ''.$ten.'';
                                    ?>
                        </a></li>
                </ul>
            </nav>
        </header>