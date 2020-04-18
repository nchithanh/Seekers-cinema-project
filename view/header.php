<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="view/index.js"></script>
    <style>
        .block {
            display: block;
        }

        .none {
            display: none;
        }
    </style>
</head>

<body>
    <div class="background"></div>
    <div class="loading"><img src="view/img/loading2.gif" alt=""></div>
    <!-- <a href="#"><div class="boxlen"><i class="fa fa-sort-up"></i></div></a> -->
    <div class="form_login ani" id="login" style="display:none;">
        <p>YOUR ACCOUNT</p>
        <form action="index.php?contro=home" method="post">

        <div class="row">
            <i class="fa fa-user-secret"></i><input name="user" type="text" pattern="[a-z,0-9]{6,30}" title="6-30 ký tự,không viết hoa,không ký tự đặt biệt" required placeholder="Username">
            </div>
            <div class="row">
            <i class="fa fa-unlock-alt"></i><input name="pass" type="password" pattern="[a-z,0-9]{6,30}" title="6-30 ký tự,không viết hoa,không ký tự đặt biệt" required placeholder="Userpassword">
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
            <i class="fa fa-user-secret"></i><input name="user" type="text" pattern="[a-z,0-9]{6,30}" title="6-30 ký tự,không viết hoa,không ký tự đặt biệt" required placeholder="Username">
            </div>
            <div class="row">
            <i class="fa fa-unlock-alt"></i><input name="pass" type="password" pattern="[a-z,0-9]{6,30}" title="6-30 ký tự,không viết hoa,không ký tự đặt biệt" required placeholder="Userpassword">
            </div>
            <div class="row">
            <i class="fa fa-envelope"></i><input name="email"  type="mail" required placeholder="email">
            </div>
            <div class="row">
            <i class="fa fa-phone"></i><input name="sdt" type="tel" pattern="[0]{1}[0-9]{9}" title="số điện thoại không hợp lệ" required placeholder="tel">
            <input name="role" value="1" type="number" style="display:none;">
            </div>
            <div class="row1">
                <input class="btn" type="button" value="Đăng nhập" onclick="dangnhap()">
                <input name="adduser" class="btn" type="submit" value="Đăng ký ngay">
                <input class="btn" type="button" value="cancel" onclick="huydangnhap()">
            </div>
        </form>
    </div>
    <div class="alert_login"></div>
    <div class="warp" id="warp">
        <!-- <a href="#">
            <div class="boxlen" id="boxlen">
                <img src="view/img/top.png" alt="">
            </div>
        </a> -->
        <header id="header">
            <a href="index.php?contro=home">
                <div class="logo">
                    <p>Seekers cinema</p>
                </div>
            </a>
            <div class="timkiem">
                <form action="index.php?contro=timkiem" method="post" enctype="multipart/form-data">
                    <input class="tim" type="submit" value="search" name="tim">
                    <input class="text" type="search" placeholder="Tên phim" name="noidung">
                </form>
            </div>
            <div class="tranglogin">
                <?php
                    if(isset($_SESSION['user'])){
                        echo '<a style="color:black;" href="index.php?contro=user"><i class="fa fa-user-secret"></i>
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
                                <div class="boxphim">
                                    <div class="tieude">
                                        PHIM ĐANG CHIẾU
                                    </div>
                                    <div class="phim">
                                    <?php
                                    foreach ($loadphimdc as $phim){
                                        if(isset($_SESSION["user"])){
                                            $link='<a href="index.php?contro=detail&idphim='.$phim['id'].'">MUA VÉ</a>';
                                        }else{
                                            $link='<a onclick="dangnhap()">MUA VÉ</a>';
                                        }
                                        $name=$phim['tenphim'];
                                        $img="view/img/".$phim['banner']; 
                                        echo ' <div class="phim_box">
                                        <div class="anh">
                                            <a href="">'.$link.'</a>
                                            <img src="'.$img.'" alt="">
                                        </div>
                                        <div class="ten">'.$name.'</div>
                                    </div>';
                                    }
				
                               ?>
                                    </div>
                                </div>
                                <div class="boxphim">
                                    <div class="tieude">
                                    PHIM SẮP CHIẾU
                                    </div>
                                    <div class="phim">
                                    <?php
                                    foreach ($loadphimsc as $phim){
                                        if(isset($_SESSION["user"])){
                                            $link='<a href="index.php?contro=detail&idphim='.$phim['id'].'">MUA VÉ</a>';
                                        }else{
                                            $link='<a onclick="dangnhap()">MUA VÉ</a>';
                                        }
                                        $name=$phim['tenphim'];
                                        $img="view/img/".$phim['banner']; 
                                        echo ' <div class="phim_box">
                                        <div class="anh">
                                            <a href="">'.$link.'</a>
                                            <img src="'.$img.'" alt="">
                                        </div>
                                        <div class="ten">'.$name.'</div>
                                    </div>';
                                    }
				
                               ?>
                                    </div>
                                </div>
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
        <div class="fullmanhinh" id="fullmanhinh">

</div>