
<main>
<div class="form_add_suatchieu" id="form_add_suatchieu">
        <form action="admin.php?contro=suatchieu&addsuatchieu" method="post" id="add_suatchieu_form">
            <div class="head_add_form">
                <h3 class="title_add">Add suất chiếu</h3>
                <button type="button" onclick="hide_form_add_suatchieu();reset_input_addsuatchieu();" class="exit_add_but">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <table>
                <tr>
                    <td>
                        <input class="label" type="text" placeholder="Ngày chiếu : " readonly>
                        <input type="date" name="ngaychieu_addsuatchieu" id="ngaychieu_addsuatchieu">
                    </td>
                    <td>
                        <input class="label" type="text" placeholder=" Giờ chiếu : " readonly>
                        <input type="time" name="thoigian_addsuatchieu" id="thoigian_addsuatchieu">
                    </td>
                </tr>
                <tr>
                    <td><select name="idrap_addsuatchieu" id="idrap_addsuatchieu">
                    <option value=""> CHỌN RẠP </option>
                    <?php
                        foreach ($AllRap as $AllRap) {
                            echo '
                            <option value="'.$AllRap['id'].'"> '.$AllRap['tenrap'].' </option>
                            ';
                        }
                    ?>
                    </select></td>

                    <td><select name="idphim_addsuatchieu" id="idphim_addsuatchieu">
                    <option value=""> CHỌN FILM </option>
                    <?php
                        foreach ($AllFilm as $AllFilm) {
                            echo '
                            <option value="'.$AllFilm['id'].'"> '.$AllFilm['tenphim'].' </option>
                            ';
                        }
                    ?>
                    </select></td>
                </tr>
                    <td><select name="idphong_addsuatchieu" id="idphong_addsuatchieu">
                        <option value=""> CHỌN PHÒNG </option>
                    </select></td>
            </table>
            <script>
                $(document).ready(function(){

                    $("#idrap_addsuatchieu").change(function (){
                        var idrap = $("#idrap_addsuatchieu").val();
                        $.post("view/phongchieu_for_addsuat.php", {idrap:idrap}, function(data){
                            $("#idphong_addsuatchieu").html(data);
                    });
            });

                });
            </script>
            <button type="submit" form="add_suatchieu_form" name="submit_add_suatchieu" class="submit_add">
                <i class="fas fa-plus"></i>
                <span>Add</span>
            </button>
            <button type="button" onclick="hide_form_add_suatchieu();reset_input_addsuatchieu();" class="discard_add">
                <i class="far fa-trash-alt"></i>
                <span>Discard</span>
            </button>
        </form>
    </div>

    <!-- EDIT SUAT CHIEU -->

    <div class="form_edit_suatchieu" id="form_edit_suatchieu">
        
    </div>
    <!-- open form EDIT -->
    <script>
        $(document).ready(function() {
            <?php
                foreach ($AllSuatchieu as $S_chieu) {
                    echo'
                    $("#edit_suat_'.$S_chieu['id'].'").click(function (){
                        var id_suat_'.$S_chieu['id'].' = $("#edit_suat_'.$S_chieu['id'].'").val();
                        $.post("view/edit_suatchieu.php", {edit_suat:id_suat_'.$S_chieu['id'].'}, function(data){
                        $("#form_edit_suatchieu").html(data);
                        });
                    });
                    ';
                }
            ?>
                
        });
                    </script>
<!-- END EDIT -->

    <?php
    require_once "view/sidebar.php";
    echo '
    <style>
        .li_suatchieu{
            color: #fff;
        }
    </style>
    ';
    ?>
<article class="col_11">
		<div class="head col_12">
			<div class="name_action col_10">
				<h1 class="foot_font">Quản lý suất chiếu</h1>
			</div>
			<div class="map_action col_2">
				<a href="admin.php?contro=home">
					<h1>Trang chủ</h1>
				</a>
				<i class="fas fa-chevron-right"></i>
				<a href="admin.php?contro=film">
					<h3>Quản lý suất chiếu</h3>
				</a>	
			</div>
			<div class="col_12">
				<div class="search_table">
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
						<button type="button" onclick="show_form_add_suatchieu()" id="open_edit_suatchieu" value="1">
							<i class="fas fa-plus"></i>
							<span>Add Suất chiếu</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col_12">
			<div class="content">

            <script>
                $(function(){
                    $( "#list_suatchieu" ).accordion(); 
                });
            </script>

            <div id="list_suatchieu">
                <?php
                    foreach ($AllSuatchieu as $Sch) {
                        $Suatchieu_Connectphimrap = LoadConnectphimrapById($Sch['idphim_rap']);
                        $Suatchieu_Film= LoadFilmDetailById($Suatchieu_Connectphimrap['idphim']);
                        $Suatchieu_Rap = LoadRapById($Suatchieu_Connectphimrap['idrap']);
                        $Suatchieu_Phong = LoadPhongChieuById($Sch['idphongchieu']);
                        $Suatchieu_Available = CountAvailableBySuatchieuId($Sch['id']);
                        $Suatchieu_Booked = CountBookedBySuatchieuId($Sch['id']);
                        echo'
                        <h3>
                        <div class="name">
                            <i> ID :</i>
                            <p>'.$Sch['id'].'</p>
                        </div>
                        <div class="name">
                            <i class="fas fa-film"></i>
                            <p>'.$Suatchieu_Film['tenphim'].'</p>
                        </div>
                        <div class="date">
                            <i class="far fa-calendar-alt"></i>
                            <p class="time">'.$Sch['thoigian'].'</p>
                            <p>'.$Suatchieu_Film['ngaychieu'].'</p>
                        </div>
                        <div class="location">
                            <i class="fas fa-search-location"></i>
                            <p>'.$Suatchieu_Rap['diachi'].'</p>
                        </div>
                    </h3>
                    <div class="detail_suatchieu">
                        <table>
                        <tbody>
                            <tr>
                                <td>
                                <div class="name">
                                    <i class="fas fa-film"></i>
                                    <p>Film : '.$Suatchieu_Film['tenphim'].'</p>
                                </div>
                                </td>
                                <td>
                                    <div class="room">
                                        <i class="fas fa-person-booth"></i>
                                        <p>Room name : '.$Suatchieu_Phong['tenphong'].'</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="edit">
                                        <button type="button" onclick="show_form_edit_suatchieu()" value="'.$Sch['id'].'" id="edit_suat_'.$Sch['id'].'"><i class="fas fa-edit"></i> Edit</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="delete">
                                    <form action="admin.php?contro=suatchieu&del='.$Sch['id'].'" method="post" id="del_suatchieu_form">
                                        <button type="submit" form="del_suatchieu_form"><i class="fas fa-trash" '.$Sch['id'].'></i> Delete</button>
                                        </form?>
                                    </div>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                <div class="location">
                                    <i class="fas fa-search-location"></i>
                                    <p>Address : '.$Suatchieu_Rap['diachi'].'</p>
                                </div>
                                </td>
                                <td>
                                <div class="booked">
                                    <i class="fas fa-user-circle"></i>
                                    <p>Booked : '.$Suatchieu_Booked['count'].' ghế </p>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <div class="date">
                                    <i class="far fa-calendar-alt"></i>
                                    <p>Date time : 19/07/2019 '.$Sch['thoigian'].'</p>
                                </div>
                                </td>
                                <td>
                                <div class="unreserved">
                                    <i class="far fa-user-circle"></i>
                                    <p>Available : '.$Suatchieu_Available['count'].' ghế</p>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="rap">
                                        <i class="fas fa-hotel"></i>
                                        <p>Rạp : '.$Suatchieu_Rap['tenrap'].'</p>
                                    </div>
                                </td>
                                <td>
                                <div class="age">
                                    <i class="fas fa-child"></i>
                                    <p>Age : '.$Suatchieu_Film['tuoi'].'</p>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                        ';
                    }
                ?>
            </div>
           
        </div>
        </div>
        </div>
	</article>
</main>
