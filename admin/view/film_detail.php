<div class="clear"></div>
<main class="col_12">
    <aside class="col_2">
        <div class="menu">
            <ul>
                <li><a href="admin.php?contro=film" class="this_page">Film Manager</a></li>
                <li><a href="index.php?act=catalog_management">Catalog Manager</a></li>
                <li><a href="index.php?act=admin_account_management" >Admin Account Manager</a></li>
                <li><a href="index.php?act=order">Order Management</a></li>
            </ul>
        </div>
    </aside>
    <article class="col_10 ">
        <div class="admin_acount_manager">
            <h3> FILM DETAIL </h3>
            <div class="chitietphim">
                        <div class="anhphim" style="background-image: url('../view/img/<?php echo $phim['anhphim']; ?>');">
                        </div>
                        <form action="admin.php?contro=film_dt&updated=1" method="post" enctype="multipart/form-data">
                            <input style="display: none;" type="text" name="id" value="<?php echo $phim['id']; ?>">
                            <div class="thongtin">
                                <label>Tên Phim</label>
                                <input type="text" name="tenphim" value="<?php echo $phim['tenphim']; ?>"> 
                            </div>
                            <div class="thongtin">
                                <label>Thể Loại</label>
                                <input type="text" name="theloai" value="<?php echo $phim['theloai']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Quốc Gia</label>
                                <input type="text" name="quocgia" value="<?php echo $phim['quocgia']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Đạo Diễn</label>
                                <input type="text" name="daodien" value="<?php echo $phim['daodien']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Diễn Viên</label>
                                <input type="text" name="dienvien" value="<?php echo $phim['dienvien']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Thời Lượng</label>
                                <input type="text" name="thoiluong" value="<?php echo $phim['thoiluong']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Ngày Chiếu</label>
                                <input type="text" name="ngaychieu" value="<?php echo $phim['ngaychieu']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Tuổi</label>
                                <input type="text" name="tuoi" value="<?php echo $phim['tuoi']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Ảnh Phim</label>
                                <input name="anhphim" type="file">
                            </div>
                            <div class="thongtin">
                                <label>Trang Thái</label>
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
                                <input type="text" name="noidung" value="<?php echo $phim['noidung']; ?>">
                            </div>
                            <div style="top: 10px;" class="thongtin submit_but">
                                <input type="submit" name="updatephim" value="update">
                            </div>
                        </form>
                    </div>
                  
        </div>
    </article>
</main>


    
