
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
            <h3>Quản Lí Rạp</h3>
        </div> 
            <body>
            <div class="suatchieu">
                <form action="admin.php?contro=qlrap&addrap" method="post">
                    <div class="thongtin">
                        <label for="">
                            Tên Rạp
                        </label>
                        <input type="text" name="tenphong" value="">
                        </select>
                    </div>
                    <div class="thongtin">
                        <label for="">
                            Địa chỉ
                        </label>
                        <input type="text" name="diachi" value="">
                        </select>
                    </div>
                    <div class="thongtin">
                        <label for="">
                            chọn rạp
                        </label>
                        <select name="tinhthanh" required>
                            <option value="">Chọn tỉnh thành</option>
                            <?php
                            foreach ($tinhthanh as $tinhthanh){
                            echo '<option value="'.$tinhthanh['id'].'">'.$tinhthanh['tentinhthanh'].'</option>';
                    
                            }
                        ?>
                        </select>
                    </div>
                    <div style="top: 10px;" class="thongtin submit_but">
                                <input type="submit" name="addrap" value="add rạp">
                            </div>
                </form>
            </div>
            <div class="phimdangchieu">
                
                    <table>
                        <tr>
                            <td>Tên Rạp</td>
                            <td>Địa Chỉ</td>
                            <td>Tỉnh thành</td>
                            <td>
                                action
                            </td>
                        </tr>
                        <tr>
                        <?php
                    foreach ($rap as $rap){
                        

                        echo '<tr>
                        <td>'.$rap['tenrap'].'</td>
                        <td>'.$rap['diachi'].'</td>
                        <td>'.$rap['tentinhthanh'].'</td>
                        <td>
                            <a href="admin.php?contro=qlrap&xoarap='.$rap['id'].'">Xóa rạp</a>
                        </td>
                    </tr>';
                    }
                    ?>
                        </tr>
                            </table>
                        </div>