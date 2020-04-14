
<div class="clear"></div>
<main class="col_12">
    <aside class="col_2">
        <div class="menu">
        <ul>
                <li><a href="admin.php?contro=film">Quản lý phim</a></li>
                <li><a href="admin.php?contro=suatchieu">Quản lý suất chiếu</a></li>
                <li><a href="admin.php?contro=addphim">Add Phim</a></li>
                <li><a href="admin.php?contro=phongchieu">Quản Lí Phòng</a></li>
                <li><a href="admin.php?contro=qlrap">Quản Lí rạp</a></li>
            </ul>
        </div>
    </aside>
    <article class="col_10 ">
        <div class="admin_acount_manager">
            <h3>Quản Lí Phòng</h3>
        </div> 
            <body>
            <div class="suatchieu">
                <form action="admin.php?contro=phongchieu&addphong" method="post">
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
                        <select name="rap" id="rap" required>
                            <option value="">Chọn rạp</option>
                            <?php
                            foreach ($rap as $rap){
                            echo '<option value="'.$rap['id'].'">'.$rap['tenrap'].'</option>';
                    
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
                    foreach ($loadphongchieu as $phongchieu){
                        

                        echo '<tr>
                        <td>'.$phongchieu['tenphong'].'</td>
                        <td>'.$phongchieu['tenrap'].'</td>
                        <td>
                            <a href="admin.php?contro=phongchieu&xoaphong='.$phongchieu['id'].'">Xóa phòng chiếu</a>
                        </td>
                    </tr>';
                    }
                    ?>
                </tr>
                    </table>
                </div>