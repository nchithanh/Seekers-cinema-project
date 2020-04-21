
        <section class="login" style="margin-bottom:50px;">
            <div class="formlogin" id="formlogin">
                <div class="dangnhap">
                    <div class="backhome">
                        <a href="index.php?contro=home"><< go home</a>
                    </div>
                    <div class="left" id="tieude">
                        <div class="noidung">
                            <h2>Hello, Friend!</h2>
                            <?php 
                            if(isset($_SESSION['trung']) > 0) {
                                echo '<h6>Tên User bạn vừa khai báo nó đã có người đăng kí</h6>';
                            
                            } 
                            
                            
                            ?>
                            <p>Enter your personal details and start journey with us</p>
                            <button class="button" id="dangky">Đăng ký</button>
                        </div>
                    </div>
                    <div class="right">
                        <form action="index.php?contro=login" method="post">
                            Sign in
                            
                            <input type="text" required placeholder="Username" name="user">
                            <input type="password" required placeholder="Userpassword" name="pass">
                            <?php
                            if(isset($_GET['loidangnhap'])){
                                echo '<p style="color:red;">Sai Mật Khẩu hoặc tài khoản</p>';
                            }
                            ?>
                            
                            <p>Forgot your password?</p>
                            <input class="button" type="submit" name="login" value="Đăng nhập">
                        </form>
                    </div>
                </div>
                <div class="dangky">

                    <div class="right">
                        <div class="noidung">
                            <h2>Welcome Back!</h2>
                            <p>To keep connected with us please login with your personal info</p>
                            <button class="button" id="dangnhap">Đăng nhập</button>
                        </div>
                    </div>
                    <div class="left">
                        <div class="backhome">
                            <a href="index.php?contro=home"><< go home</a>
                        </div>
                        <form action="index.php?contro=signin" method="post" >
                            Create Account
                            <input type="text" required placeholder="Nhập Tài Khoản" name="user" pattern="[a-z,0-9]{6,30}" title="6-30 ký tự,không viết hoa,không ký tự đặt biệt">
                            <input type="password" required placeholder="Nhập Password" name="pass" pattern="{6,30}" title="6-30 ký tự">
                            <input type="email" required placeholder="Nhập Email (mail của goggle)" name="email">
                            <input name="sdt" type="tel" pattern="[0]{1}[0-9]{9}" required placeholder="tel">
                            <input type="number" name="role" value="1" style="display:none">
                           
                            <p>Forgot your password?</p>
                            <input  onclick="myFunction1()" class="button" type="submit" name="adduser" value="Đăng ký">
                        </form>
                    </div>
                </div>
            </div>
        </section>
