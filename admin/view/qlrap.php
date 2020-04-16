<main>
    <div class="form_add_rap" id="form_add_rap">
        <form action="admin.php?contro=qlrap&addrap" method="post" id="add_rap_form">
            <div class="head_add_form">
                <h3 class="title_add">Add rạp</h3>
                <button type="button" onclick="hide_form_add_rap();reset_input_addrap();" class="exit_add_rap_but">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <table>
                <tr>
                    <td>
                        <input type="text" name="tenrap" placeholder="Tên rạp" id="input_tenrap_addrap">
                    </td>
                    <td>
                        <input type="text" name="diachi" placeholder="Địa chỉ" id="input_diachi_addrap">
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="tinhthanh" value="">
                                <option value="" selected="selected">Chọn tỉnh thành</option>
                                <?php
                                foreach ($tinhthanh as $tinhthanh){
                                echo '<option value="'.$tinhthanh['id'].'">'.$tinhthanh['tentinhthanh'].'</option>';
                                }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit" form="add_rap_form" name="submit_add_rap" class="submit_add_rap">
                <i class="fas fa-plus"></i>
                <span>Add</span>
            </button>
            <button onclick="hide_form_add_rap();reset_input_addrap();" class="discard_add_rap">
                <i class="far fa-trash-alt"></i>
                <span>Discard</span>
            </button>
        </form>
    </div>
    <!-- ===== -->
    <!-- EDIT RAP FORM -->
    <div class="form_add_rap" id="form_edit_rap">
        
    </div>
    <!-- ==== -->
    <!-- ADD MENU -->
    <?php
    require_once "view/sidebar.php";
    ?>
<article class="col_11">
		<div class="head col_12">
			<div class="name_action col_10">
				<h1 class="foot_font">Quản lý Rạp</h1>
			</div>
			<div class="map_action col_2">
				<a href="admin.php?contro=home">
					<h1>Trang chủ</h1>
				</a>
				<i class="fas fa-chevron-right"></i>
				<a href="admin.php?contro=qlrap">
					<h3>Quản lý rạp</h3>
				</a>	
			</div>
			<div class="col_12">
				<div class="search_table">
					<div class="col_6">
						<form action="#" method="post">
						<input type="text" name="seach_table" id="search_table" class="col_6" onclick="enter_to_submit(search_table,submit_search_table);" placeholder="Tìm kiếm tên rạp">
						<input type="submit" id="submit_search_table" onclick="submit_form_alert()" style="display: none;">
						</form>
					</div>
					<div class="add_data col_6">
						<button type="button" onclick="show_form_add_rap()">
							<i class="fas fa-plus"></i>
							<span>Add Rạp</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col_12">
			<div class="content">
            <div class="rap_data">
            <div class="data_table">
            <table>
                <thead>
                <tr>
                    <th>
                        <input class="checkbox_table" type="checkbox" name="check_all" id="check_all_rap" onclick="check_and_uncheck_all()">
                    </th>
                    <th>ID</th>
                    <th>Tên rạp</th>
                    <th>Địa chỉ</th>
                    <th>Tỉnh Thành</th>
                    <th>
                        <button form="del_mul_rap_form" class="del_all_but">
                            <i class="fas fa-trash"></i>
                            <span>Multiple Delete</span>
                        </button>
                    </th>
                </tr>
                </thead>
                <tbody>
                <form action="admin.php?contro=qlrap&mul_del" method="post" id="del_mul_rap_form">
                    <?php
                    foreach ($allrap as $rap){
                    echo '
                    <tr>
                        <td>
                            <input type="checkbox" class="checkbox_table" name="check_list_rap[]" id="checkbox_rap_'.$rap['id'].'" value="'.$rap['id'].'">
                        </td>
                        <td>'.$rap['id'].'</td>
                        <td>'.$rap['tenrap'].'</td>
                        <td>'.$rap['diachi'].'</td>
                        <td>'.$rap['tentinhthanh'].'</td>
                        <td>
                            <div class="tools_data_table">
                            <button type="button" class="edit_but" id="edit_rap_but'.$rap['id'].'" value="'.$rap['id'].'">
                            <i class="fas fa-wrench"></i>
                            </button>
                            <p>/</p>
                            <a class="del_but" href="admin.php?contro=qlrap&xoarap='.$rap['id'].'">
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
                        foreach ($allrap as $ifRap) {
                            echo'
                                $("#edit_rap_but'.$ifRap['id'].'").click(function (){
                                    var idrap_for_edit'.$ifRap['id'].' = $("#edit_rap_but'.$ifRap['id'].'").val();
                                    $.post("model/ajax2.php", {idrap_for_edit:idrap_for_edit'.$ifRap['id'].'}, function(data){
                                        $("#form_edit_rap").html(data);
                                    });
                                    show_form_edit_rap();
                                });
                            ';
                        }    
                    ?>
                });
            </script>
            <!-- SCRIPT CHECK AND UNCHECK ALL ROWS FOR DELETE MUTIPLE  -->
            <script>
                function uncheck_all_rap(){
                    var id_uncheck;
                    <?php
                    foreach ($allrap as $rAp){
                        echo'
                            id_uncheck ="checkbox_rap_'.$rAp['id'].'";
                            uncheck(id_uncheck);
                        ';    
                    }
                    ?>
                }
                function check_all_rap(){
                    var idcheck;
                    <?php
                    foreach ($allrap as $rp){
                        echo'
                            idcheck ="checkbox_rap_'.$rp['id'].'";
                            check(idcheck);
                        ';    
                    }
                    ?>
                }
                function check_and_uncheck_all(){
                    var check_status = document.getElementById('check_all_rap').checked == true ;
                    if (check_status) {
                        check_all_rap();
                    }else{
                        uncheck_all_rap();
                    }
                }
            </script>
            </div>
            </div>
            </div>
		</div>
	</article>
</main>
