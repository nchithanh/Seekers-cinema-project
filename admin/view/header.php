<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".option").click(function() {
                $(".option").removeClass("mau");
                $(this).addClass("mau");
            });
            $("#option_dangchieu").click(function (){
                $(".phimdangchieu").fadeIn(500);
                $(".phimsapchieu").fadeOut(500);
            });
            $("#option_sapchieu").click(function (){
                $(".phimsapchieu").fadeIn(500);
                $(".phimdangchieu").fadeOut(500);
            });
        });
    </script>
</head>
<body>
    <div class="warp">
        <section>
            <article>
                <div class="menu">
                    <div class="tieude">
                        welcom admin
                    </div>
                    <li><a href="../index.php">Trang chủ</a></li>
                    <li><a href="index.php?contro=quanlyphim">quản lý phim</a></li>
                    <li><a href="">sắp xếp lịch chiếu</a></li>
                    <li><a href="">quản lý phòng chiếu</a></li>
                    <li><a href="">quản lý rạp</a></li>
                    <li><a href="">hủy suất chiếu</a></li>
                    <li><a href="admin.php?contro=logout&ad=1">Đăng Xuất</a></li>
                </div>