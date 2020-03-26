
        <section class="login" style="margin-bottom:50px;">
            <div class="formlogin" id="formlogin">
                <div class="dangnhap">
                    <div class="backhome">
                        <a href="index.php?contro=home"><< go home</a>
                    </div>
                    <div class="left" id="tieude">
                        <div class="noidung">
                            <h2>Hello, Friend!</h2>
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
                        <form action="index.php?act=login" method="post">
                            Create Account
                            <input type="email" required placeholder="email (mail của goggle)" name="email">
                            <input type="text" required placeholder="Username" name="username">
                            <input type="password" required placeholder="Userpassword" name="userpass">
                            <input type="number" name="role" value="1" style="display:none">
                            <p>Forgot your password?</p>
                            <input  onclick="myFunction1()" class="button" type="submit" name="dangky" value="Đăng ký">
                        </form>
                    </div>
                </div>
            </div>
        </section>
