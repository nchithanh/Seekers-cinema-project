
                <aside>
                    <div class="tieude">
                        phim aaaaaaaaaaaaa
                    </div>

                    <div class="chitietphim">
                        <div class="anhphim">
                            <img src="../view/img/<?php echo $phim['anhphim']; ?>" alt="">
                        </div>
                        <form action="admin.php?contro=index.php?contro=detail&idphim='.$id.'">
                            <div class="thongtin">
                                <label>Tên Phim</label>
                                <input type="text" value="<?php echo $phim['tenphim']; ?>"> 
                            </div>
                            <div class="thongtin">
                                <label>Thể Loại</label>
                                <input type="text" value="<?php echo $phim['theloai']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Quốc Gia</label>
                                <input type="text" value="<?php echo $phim['quocgia']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Đạo Diễn</label>
                                <input type="text" value="<?php echo $phim['daodien']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Diễn Viên</label>
                                <input type="text" value="<?php echo $phim['dienvien']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Thời Lượng</label>
                                <input type="text" value="<?php echo $phim['thoiluong']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Ngày Chiếu</label>
                                <input type="text" value="<?php echo $phim['ngaychieu']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Tuổi</label>
                                <input type="text" value="<?php echo $phim['tuoi']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Ảnh Phim</label>
                                <input type="file">
                            </div>
                            <div class="thongtin">
                                <label>Trang Thái</label>
                                <input type="text" value="<?php if($phim['trangthai']>0){echo 'phim đang chiếu';} else{ echo 'phim sắp chiếu';} ?>">
                            </div>
                            <div style="height: 100px;" class="thongtin">
                                <label>Nội Dung</label>
                                <input type="text" value="<?php echo $phim['noidung']; ?>">
                            </div>
                            <div style="top: 10px;" class="thongtin">
                                <input type="submit" value="update">
                            </div>
                        </form>
                    </div>
                  
                </aside>





            