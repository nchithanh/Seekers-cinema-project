<main>
    <?php
    require_once "view/sidebar.php";
    echo '
    <style>
        .li_film a{
            color: #fff;
        }
    </style>
    ';
    ?>
<article class="col_11">
		<div class="head col_12">
			<div class="name_action col_10">
				<h1 class="foot_font">Quản lý Phim</h1>
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
				<div class="search_table">
					<div class="col_6">
						<form action="#" method="post">
						<input type="text" name="seach_table" id="search_table" class="col_6" placeholder="Tìm kiếm tên phim">
						<input type="submit" id="submit_search_table" onclick="javascript:alert('Bạn vừa submit form')" style="display: none;">
						</form>
						<!-- <script>
						var search_table = document.getElementById("search_table");
						search_table.addEventListener("keyup", function(event) {
						  if (event.keyCode === 13) {
						   event.preventDefault();
						   document.getElementById("submit_search_table").click();
						  }
						});
						</script> -->
					</div>
					<div class="add_data col_6">
						<a href="admin.php?contro=film&addfilm_form">
							<i class="fas fa-plus"></i>
							<span>Add Film</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col_12">
			<div class="content">
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
        <div class="phim_data">
                    <div class="luachon">
                        <p class="option mau" id="option_dangchieu">phim đang chiếu</p>
                        <p class="option" id="option_sapchieu">phim sắp chiếu</p>
                    </div>
                    <div class="phimdangchieu">
                        <div class="data_table">
                            <table>
                                <thead>
                                <tr>
                                    <th>
                                        <input class="checkbox_table" type="checkbox" name="check_all" onclick="check_all()">
                                    </th>
                                    <th>Tên phim</th>
                                    <th>Ngày chiếu</th>
                                    <th>
                                    <a href="#" class="del_all_but">
                                        <!-- <i class="fas fa-trash"></i> -->
                                        <span>ACTIONs</span>
                                    </a>
                                    </th>
                                </tr>
                                </thead>
                                <?php
                                    foreach ($quanliphimcc as $phim){
                                        echo '<tr>
                                        <td>
					                        <input type="checkbox" class="checkbox_table" name="check_list_film[]" id="idphim_'.$phim['id'].'" value="'.$phim['id'].'">
				                        </td>
                                        <td>'.$phim['tenphim'].'</td>
                                        <td>'.$phim['ngaychieu'].'</td>
                                        <td>
                                            <div class="tools_data_table">
                                                <a class="detail_but" href="admin.php?contro=film&film_dt='.$phim['id'].'">
                                                    <span>Details</span>
                                                </a>
                                                <p class="slash">/</p>
                                                <a class="del_but" href="admin.php?contro=film&film_del='.$phim['id'].'">
                                                    <i class="fas fa-trash"></i>
                                                    <p>Delete</p>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>';
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                    <div class="phimsapchieu">
                    <div class="data_table">
                            <table>
                                <thead>
                                <tr>
                                    <th>
                                        <input class="checkbox_table" type="checkbox" name="check_all" onclick="check_all()">
                                    </th>
                                    <th>Tên phim</th>
                                    <th>Ngày chiếu</th>
                                    <th>
                                    <a href="#" class="del_all_but">
                                        <i class="fas fa-trash"></i>
                                        <span>Multiple Delete</span>
                                    </a>
                                    </th>
                                </tr>
                                </thead>
                                <?php
                                    foreach ($quanliphimdc as $phim){
                                        echo '<tr>
                                        <td>
					                        <input type="checkbox" class="checkbox_table" name="check_list_film[]" id="idphim_'.$phim['id'].'" value="'.$phim['id'].'">
				                        </td>
                                        <td>'.$phim['tenphim'].'</td>
                                        <td>'.$phim['ngaychieu'].'</td>
                                        <td>
                                            <div class="tools_data_table">
                                                <a class="detail_but" href="admin.php?contro=film&film_dt='.$phim['id'].'">
                                                    <span>Details</span>
                                                </a>
                                                <p class="slash">/</p>
                                                <a class="del_but" href="index.php?contro=film_del&idphim='.$phim['id'].'">
                                                    <i class="fas fa-trash"></i>
                                                    <p>Delete</p>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>';
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</article>
</main>


    
