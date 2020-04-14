<div class="clear"></div>
<main class="col_12">
    <aside class="col_2">
        <div class="menu">
        <ul>
                <li><a href="admin.php?contro=film">Quản lý phim</a></li>
                <li><a href="admin.php?contro=suatchieu">Quản lý suất chiếu</a></li>
                <li><a href="admin.php?contro=addphim">Add Phim</a></li>
                <li><a href="admin.php?contro=phongchieu">Quản Lí Phòng</a></li>
                <li><a href="admin.php?contro=qlrap">Quản Lí rạp</a></li>
            </ul>
        </div>
    </aside>
    <article class="col_10 ">
        <div class="admin_acount_manager">
            <h3> ADD PHIM </h3>
            <div class="chitietphim">
                        <div class="anhphim" style="background-image: url('../view/img/">
                        </div>
                        <form action="admin.php?contro=addphim" method="post" enctype="multipart/form-data">
                            <div class="thongtin">
                                <label>Tên Phim</label>
                                <input type="text" name="tenphim" value=""> 
                            </div>
                            <div class="thongtin">
                                <label>Thể Loại</label>
                                <input type="text" name="theloai" value="">
                            </div>
                            <div class="thongtin">
                                <label>Quốc Gia</label>
                                <input type="text" name="quocgia" value="">
                            </div>
                            <div class="thongtin">
                                <label>Đạo Diễn</label>
                                <input type="text" name="daodien" value="">
                            </div>
                            <div class="thongtin">
                                <label>Diễn Viên</label>
                                <input type="text" name="dienvien" value="">
                            </div>
                            <div class="thongtin">
                                <label>Thời Lượng</label>
                                <input type="number" name="thoiluong" value="">
                            </div>
                            <div class="thongtin">
                                <label>Ngày Chiếu</label>
                                <input type="date" name="ngaychieu" value="">
                            </div>
                            <div class="thongtin">
                                <label>Đánh Giá</label>
                                <input type="number" min="1" max="10" name="rating" value="">
                            </div>
                            <div class="thongtin">
                                <label>Tuổi</label>
                                <input type="number" name="tuoi" value="">
                            </div>
                            <div class="thongtin">
                                <label>Ảnh Phim</label>
                                <input name="anhphim" type="file" value="">
                            </div>
                            <div class="thongtin">
                                <label>Banner Phim</label>
                                <input name="banner" type="file" value="">
                            </div>
                            <div class="thongtin">
                                <label>Trailer Phim</label>
                                <input name="trailer" type="file" value="">
                            </div>
                            <div class="thongtin">
                            <label>Trạng Thái</label>
                                <select class="select_loai_phim" name="trangthai">
                                    <?php if($phim['trangthai']==1)
                                    {
                                        echo '<option value="'.$phim['trangthai'].'">Phim sắp chiếu</option>
                                            <option value="0">Phim đang chiếu</option>';
                                    } else{ echo '<option value="'.$phim['trangthai'].'">Phim đang chiếu</option>
                                        <option value="1">Phim sắp chiếu</option>';
                                    } 
                                    ?>
                                </select>
                            </div>
                            <div style="height: 100px;" class="thongtin">
                                <label>Nội Dung</label>
                                <input type="text" name="noidung" value="">
                            </div>
                            <div style="top: 10px;" class="thongtin submit_but">
                                <input type="submit" name="addphim" value="add phim">
                            </div>
                        </form>
                    </div>
                  
        </div>
    </article>
</main>


    
