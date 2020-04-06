<div class="box_user">
    <div class="left">
        <h2>welcom user</h2>
        <p class="btn qltk user_mau">quản lý tài khoản</p>
        <p class="btn lsdt">lịch sử đặt vé</p>
        <p></p>
    </div>
    <div class="right">
        <div class="box" id="qltk">
            <h2>quản lý tài khoản</h2>
            <div class="content">
                <form action="index.php?contro=user" method="POST">
                    <div class="thongtin">
                        <label>Username</label>
                        <input type="text" required value="<?php echo $_SESSION['user'] ?>">
                    </div>
                    <div class="thongtin">
                        <label>Userpass</label>
                        <input type="text" required value="<?php echo $_SESSION['pass'] ?>">
                    </div>
                    <div class="thongtin">
                        <label>email</label>
                        <input type="email" required value="<?php echo $_SESSION['mail'] ?>">
                    </div>
                    <div class="thongtin">
                        <label>SDT:</label>
                        <input type="number" required value="<?php echo $_SESSION['sdt'] ?>">
                    </div>
                    <input type="submit" class="btn" value="update" name="update">
                </form>
            </div>
        </div>
        <div class="box" id="lsdv">
            <h2>lịch sử đặt vé</h2>
            <div class="content">
                <table>
                    <tr>
                        <td>ten phim</td>
                        <td>ten rap</td>
                        <td>phong chieu</td>
                        <td>suat chieu</td>
                        <td>ghe</td>
                    </tr>
                    <?php 
                        foreach ($dsve as $ve) {
                            $tenphim = $ve['tenphim'];
                            $tenrap = $ve['tenrap'];
                            $tenphongchieu = $ve['tenphongchieu'];
                            $suatchieu = $ve['suatchieu']; 
                            $ghe = $ve['ghe'];
                            $id = $ve['id'];
                            echo '
                            <tr>
                                <td>'.$tenphim.'</td>
                                <td>'.$tenrap.'</td>
                                <td>'.$tenphongchieu.'</td>
                                <td>'.$suatchieu.'</td>
                                <td>'.$ghe.'</td>
                            </tr>
                            ';
                        }
                    
                    ?>
                    
                </table>
            </div>
        </div>
    </div>
</div>