<main>
    <aside class="col_2">
        <div class="menu">
            <ul>
                <li><a href="admin.php?contro=film">Quản lý phim</a></li>
                <li><a href="admin.php?contro=suatchieu" class="this_page">Quản lý suất chiếu</a></li>
                <li><a href="index.php?act=admin_account_management" >Admin Account Manager</a></li>
                <li><a href="index.php?act=order">Order Management</a></li>
            </ul>
        </div>
    </aside>
    <article class="col_10 ">
        <div class="admin_acount_manager">
            <h3> THÊM SUẤT CHIẾU </h3>
            <script>
                $(document).ready(function(){

                    $("#rap").change(function (){
                        var idrap = $("#rap").val();
                        $.post("model/ajax.php", {idrap:idrap}, function(data){
                            $("#phong").html(data);
                    });
            });

                });
            </script>
            <div class="suatchieu">
                <form action="admin.php?contro=suatchieu&add" method="post">
                    <div class="thongtin">
                        <label for="">
                            Chọn phim
                        </label>
                        <select name="phim" id="phim" required>
                            <option value="">Chọn phim</option>
                            <?php
                            foreach ($AllFilm as $Af) {
                                echo'
                                <option value="'.$Af['id'].'">'.$Af['tenphim'].'</option>
                                ';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="thongtin">
                        <label for="">
                            chọn rạp
                        </label>
                        <select name="rap" id="rap" required>
                            <option value="">Chọn rạp</option>
                            <?php
                            foreach ($AllRap as $Ar) {
                                echo'
                                <option value="'.$Ar['id'].'">'.$Ar['tenrap'].'</option>
                                ';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="thongtin">
                        <label for="">
                            Chọn phòng chiếu
                        </label>
                        <select name="phong" id="phong" required>
                            <option value="">Chọn phòng chiếu</option>
                        </select>
                    </div>
                    <div class="thongtin">
                        <input type="time" name="time" placeholder="00:00 CH">    
                    </div>
                    <div class="thongtin">
                        <input class="themsuatchieu" type="submit" value="THÊM SUẤT CHIẾU">
                    </div>
                </form>
            </div>
        </div>
    </article>
</main>