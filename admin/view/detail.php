
                <aside>
                    <div class="tieude">
                        phim aaaaaaaaaaaaa
                    </div>

                    <div class="chitietphim">
                        <div class="anhphim">
                            <img src="../view/img/<?php echo $phim['anhphim']; ?>" alt="">
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
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
                                <select name="trangthai">
                                    <?php if($phim['trangthai']>0)
                                    {
                                        echo '<option value="'.$phim['trangthai'].'">phim sap chieu</option>
                                            <option value="0">phim dang chieu</option>';
                                    } else{ echo '<option value="'.$phim['trangthai'].'">phim dang chieu</option>
                                        <option value="1">phim sap chieu</option>';
                                    } ?>
                                </select>
                            </div>
                            <div style="height: 100px;" class="thongtin">
                                <label>Nội Dung</label>
                                <input type="text" name="noidung" value="<?php echo $phim['noidung']; ?>">
                            </div>
                            <div style="top: 10px;" class="thongtin">
                                <input type="submit" name="updatephim" value="update">
                            </div>
                        </form>
                    </div>
                  
                </aside>





            