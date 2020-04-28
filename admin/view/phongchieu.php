<main>
    <!-- form add phong chieu  -->
    <div class="form_add_phongchieu" id="form_add_phongchieu"></div>
 
 <!-- end form -->

 <!-- EDIT PHONG CHIEU -->
 <div class="form_edit_phongchieu" id="form_edit_phongchieu"></div>
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
				<a href="admin.php?contro=phongchieu">
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
						<button type="button" onclick="show_form_add_phongchieu();" id="open_form_add_phongchieu" value="1"> 
							<i class="fas fa-plus"></i>
							<span>Add Phòng chiếu</span>
						</a>
                    </div>
                    <!-- Script open form add -->
                    <script>
                        $(document).ready(function() {
                        $("#open_form_add_phongchieu").click(function (){
                                    var state_form = $("#open_form_add_phongchieu").val();
                                    $.post("view/add_phongchieu.php", {state_form:state_form}, function(data){
                                    $("#form_add_phongchieu").html(data);
                                    });
                                });
                });
                    </script>
				</div>
            </div>
            <div class="col_12">
			<div class="content">
            <div class="phongchieu_data">
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
                <form action="admin.php?contro=phongchieu&mul_del" method="post" id="del_mul_phongchieu_form">
                    <?php
                    foreach ($loadphongchieu as $Pch){
                        $Rap = LoadRapById($Pch['idrap']);
                    echo '
                    <tr>
                        <td>'.$Pch['id'].'</td>
                        <td>'.$Pch['tenphong'].'</td>
                        <td>'.$Rap['tenrap'].'</td>
                        <td>
                            <div class="tools_data_table">
                            <button type="button" class="edit_but" id="edit_phongchieu_but'.$Pch['id'].'" value="'.$Pch['id'].'">
                                <i class="fas fa-wrench"></i>
                                <p>Edit</p>
                            </button>
                            <p class="slash">/</p>
                            <a class="del_but" href="admin.php?contro=phongchieu&xoaphongchieu='.$Pch['id'].'">
                                <i class="fas fa-trash"></i>
                                <p>Delete</p>
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
                        foreach ($loadphongchieu as $PhogC) {
                            echo'
                                
                                $("#edit_phongchieu_but'.$PhogC['id'].'").click(function (){
                                    var idphongchieu_for_edit'.$PhogC['id'].' = $("#edit_phongchieu_but'.$PhogC['id'].'").val();
                                    $.post("view/edit_phongchieu.php", {id_edit_phongchieu:idphongchieu_for_edit'.$PhogC['id'].'}, function(data){
                                        $("#form_edit_phongchieu").html(data);
                                    });
                                    show_form_edit_phongchieu();
                                    $.post("view/notice_edit_phongchieu.php", {id_notice_edit_phongchieu:idphongchieu_for_edit'.$PhogC['id'].'}, function(data){
                                        $("#notice_edit_phongchieu").html(data);
                                    });
                                });
                            ';
                        }    
                    ?>
                });
            </script>
            <!-- NOTICE EDIT PHONG CHIEU -->
            <div id="notice_edit_phongchieu"></div>
            <!-- SCRIPT CHECK AND UNCHECK ALL ROWS FOR DELETE MUTIPLE  -->
            <script>
                function uncheck_all_phongchieu(){
                    var id_uncheck;
                    <?php
                    foreach ($allphongchieu as $Pch){
                        echo'
                            id_uncheck ="checkbox_phongchieu_'.$Pch['id'].'";
                            uncheck(id_uncheck);
                        ';    
                    }
                    ?>
                }
                function check_all_phongchieu(){
                    var idcheck;
                    <?php
                    foreach ($allphongchieu as $rp){
                        echo'
                            idcheck ="checkbox_phongchieu_'.$rp['id'].'";
                            check(idcheck);
                        ';    
                    }
                    ?>
                }
                function check_and_uncheck_all(){
                    var check_status = document.getElementById('check_all_phongchieu').checked == true ;
                    if (check_status) {
                        check_all_phongchieu();
                    }else{
                        uncheck_all_phongchieu();
                    }
                }
            </script>


<script>
document.getElementById("ghe1_6").click(); 
document.getElementById("ghe2_6").click(); 
document.getElementById("ghe3_5").click(); 
document.getElementById("ghe4_5").click();         
</script>

            </div>
            </div>
            </div>
		</div>
	</article>
</main>
