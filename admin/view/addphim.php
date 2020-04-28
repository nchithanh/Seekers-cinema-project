
<style>
    .head{
        max-height: 160px;
        height: 60px !important;
    }
</style>
<main>
    <?php
    require_once "view/sidebar.php";
    ?>
<article class="col_11">
		<div class="head col_12">
			<div class="name_action col_10">
				<h1 class="foot_font">Thêm Film</h1>
			</div>
			<div class="map_action col_2">
				<a href="admin.php?contro=home">
					<h1>Trang chủ</h1>
				</a>
				<i class="fas fa-chevron-right"></i>
				<a href="admin.php?contro=film">
					<h3>Quản lý phim</h3>
                </a>
			</div>
			<div class="col_12">
				<!-- <div class="search_table">
					<div class="col_6">
						<form action="#" method="post">
						<input type="text" name="seach_table" id="search_table" class="col_6" placeholder="Tìm kiếm tên phim">
						<input type="submit" id="submit_search_table" onclick="javascript:alert('Bạn vừa submit form')" style="display: none;">
						</form>
						<script>
						var search_table = document.getElementById("search_table");
						search_table.addEventListener("keyup", function(event) {
						  if (event.keyCode === 13) {
						   event.preventDefault();
						   document.getElementById("submit_search_table").click();
						  }
						});
						</script>
					</div>
					<div class="add_data col_6">
						<a href="#">
							<i class="fas fa-plus"></i>
							<span>Add Film</span>
						</a>
					</div>
				</div> -->
			</div>
		</div>
		<div class="col_12">
			<div class="content">
            <div class="admin_acount_manager">
            <div class="chitietphim">
                        <div class="anhphim" style="background-image: url('../view/img/anhphim10.jpg')">
                        </div>
                        <form action="admin.php?contro=film&addfilm" method="post" enctype="multipart/form-data">
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
            </div>
		</div>
	</article>
</main>

