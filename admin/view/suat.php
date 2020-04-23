<main>
    <!-- form add phong chieu  -->
    <!-- <div class="form_add_suatchieu" id="form_add_suatchieu">
        <form action="admin.php?contro=suatchieu&add" method="post" id="add_suatchieu_form">
            <div class="head_add_form">
                <h3 class="title_add">Add phòng chiếu</h3>
                <button type="button" onclick="hide_form_add_suatchieu();reset_input_addsuatchieu();" class="exit_add_but">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <table>
                <tr>
                    <td>
                        <input type="text" name="tensuatchieu" placeholder="Tên phòng chiếu" id="input_tensuatchieu_addphong">
                    </td>
                    <td>
                        <select name="idsuatchieu" value="">
                                <option value="">Chọn rạp</option>
                                <?php
                                // foreach ($suatchieu as $suatchieu){
                                // echo '<option value="'.$suatchieu['id'].'">'.$suatchieu['tensuatchieu'].'</option>';
                                // }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit" form="add_suatchieu_form" name="submit_add_suatchieu" class="submit_add">
                <i class="fas fa-plus"></i>
                <span>Add</span>
            </button>
            <button type="button" onclick="hide_form_add_suatchieu();reset_input_addsuatchieu();" class="discard_add">
                <i class="far fa-trash-alt"></i>
                <span>Discard</span>
            </button>
        </form>
    </div> -->

 <!-- end form -->
 <!-- EDIT PHONG CHIEU -->
 <div class="form_edit_suatchieu" id="form_edit_suatchieu">
 </div>
      <!-- end form -->
    <?php
    require_once "view/sidebar.php";
    ?>
<article class="col_11">
		<div class="head col_12">
			<div class="name_action col_10">
				<h1 class="foot_font">Quản lý phòng chiếu</h1>
			</div>
			<div class="map_action col_2">
				<a href="admin.php?contro=home">
					<h1>Trang chủ</h1>
				</a>
				<i class="fas fa-chevron-right"></i>
				<a href="admin.php?contro=suatchieu">
					<h3>Quản lý phòng chiếu</h3>
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
						<button type="button" onclick="show_form_add_suatchieu()">
							<i class="fas fa-plus"></i>
							<span>Add Phòng chiếu</span>
						</a>
					</div>
				</div>
            </div>
            <div class="col_12">
			<div class="content">
            <div class="suatchieu_data">
            <div class="data_table">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên phòng chiếu</th>
                    <th>Tên rạp</th>
                    <th>Fix and Delete</th>
                </tr>
                </thead>
                <tbody>
                <form action="admin.php?contro=suatchieu&mul_del" method="post" id="del_mul_suatchieu_form">
                    <?php
                    foreach ($loadsuatchieu as $Pch){
                        $Rap = LoadRapById($Pch['idrap']);
                    echo '
                    <tr>
                        <td>'.$Pch['id'].'</td>
                        <td>'.$Pch['tenphong'].'</td>
                        <td>'.$Rap['tenrap'].'</td>
                        <td>
                            <div class="tools_data_table">
                            <button type="button" class="edit_but" id="edit_suatchieu_but'.$Pch['id'].'" value="'.$Pch['id'].'">
                            <i class="fas fa-wrench"></i>
                            </button>
                            <p>/</p>
                            <a class="del_but" href="admin.php?contro=suatchieu&xoasuatchieu='.$Pch['id'].'">
                            <i class="fas fa-trash"></i>
                            </a>
                            </div>
                        </td>
                    </tr>';
                     }
                    ?>
                </form>
                </tbody>
            </table>

            <!-- SCRIPT AJAX TRANFER DATA FOR EDIT -->
            <script>
                $(document).ready(function(){
                    <?php
                        foreach ($loadsuatchieu as $PhogC) {
                            echo'
                                $("#edit_suatchieu_but'.$PhogC['id'].'").click(function (){
                                    var idsuatchieu_for_edit'.$PhogC['id'].' = $("#edit_suatchieu_but'.$PhogC['id'].'").val();
                                    $.post("view/editphong.php", {idsuatchieu_for_edit:idsuatchieu_for_edit'.$PhogC['id'].'}, function(data){
                                        $("#form_edit_suatchieu").html(data);
                                    });
                                    show_form_edit_suatchieu();
                                });
                            ';
                        }    
                    ?>
                });
            </script>
            <!-- SCRIPT CHECK AND UNCHECK ALL ROWS FOR DELETE MUTIPLE  -->
            <script>
                function uncheck_all_suatchieu(){
                    var id_uncheck;
                    <?php
                    foreach ($allsuatchieu as $Pch){
                        echo'
                            id_uncheck ="checkbox_suatchieu_'.$Pch['id'].'";
                            uncheck(id_uncheck);
                        ';    
                    }
                    ?>
                }
                function check_all_suatchieu(){
                    var idcheck;
                    <?php
                    foreach ($allsuatchieu as $rp){
                        echo'
                            idcheck ="checkbox_suatchieu_'.$rp['id'].'";
                            check(idcheck);
                        ';    
                    }
                    ?>
                }
                function check_and_uncheck_all(){
                    var check_status = document.getElementById('check_all_suatchieu').checked == true ;
                    if (check_status) {
                        check_all_suatchieu();
                    }else{
                        uncheck_all_suatchieu();
                    }
                }
            </script>
            </div>
            </div>
            </div>
		</div>
	</article>
</main>






<!-- <div class="clear"></div>
<main class="col_12">
    <aside class="col_2">
        <div class="menu">
        <ul>
                <li><a href="admin.php?contro=film">Quản lý phim</a></li>
                <li><a href="admin.php?contro=suatchieu">Quản lý suất chiếu</a></li>
                <li><a href="admin.php?contro=addphim">Add Phim</a></li>
                <li><a href="admin.php?contro=suatchieu">Quản Lí Phòng</a></li>
                <li><a href="admin.php?contro=qlsuatchieu">Quản Lí rạp</a></li>
            </ul>
        </div>
    </aside>
    <article class="col_10 ">
        <div class="admin_acount_manager">
            <h3>Quản Lí Phòng</h3>
        </div> 
            <body>
            <div class="suatchieu">
                <form action="admin.php?contro=suatchieu&addphong" method="post">
                    <div class="thongtin">
                        <label for="">
                            Tên Phòng Chiếu
                        </label>
                        <input type="text" name="tenphong" value="">
                        </select>
                    </div>
                    <div class="thongtin">
                        <label for="">
                            chọn rạp
                        </label>
                        <select name="suatchieu" id="suatchieu" required>
                            <option value="">Chọn rạp</option>
                            <?php
                            foreach ($Pch as $Pch){
                            echo '<option value="'.$Pch['id'].'">'.$Pch['tensuatchieu'].'</option>';
                    
                            }
                        ?>
                        </select>
                    </div>
                    <div style="top: 10px;" class="thongtin submit_but">
                                <input type="submit" name="addphong" value="add phòng chiếu">
                            </div>
                </form>
            </div>
            <div class="phimdangchieu">
                
                    <table>
                        <tr>
                            <td>Tên Phòng Chiếu</td>
                            <td>Tên Rạp</td>
                            <td>
                                action
                            </td>
                        </tr>
                        <tr>
                        <?php
                    foreach ($Pch as $suatchieu){
                        

                        echo '<tr>
                        <td>'.$suatchieu['tenphong'].'</td>
                        <td>'.$suatchieu['tensuatchieu'].'</td>
                        <td>
                            <a href="admin.php?contro=suatchieu&xoaphong='.$suatchieu['id'].'">Xóa phòng chiếu</a>
                        </td>
                    </tr>';
                    }
                    ?>
                </tr>
                    </table>
                </div> -->