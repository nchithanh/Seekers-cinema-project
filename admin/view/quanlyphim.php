
                <aside>
                    <div class="tieude">
                        quản lý phim
                    </div>
                    <div class="luachon">
                        <p class="option mau" id="option_dangchieu">phim đang chiếu</p>
                        <p class="option" id="option_sapchieu">phim sắp chiếu</p>
                    </div>
                    <div class="phimdangchieu">
                    

                        <table>
                            <tr>
                                <td>Tên phim</td>
                                <td>Ngày Chiếu</td>
                                <td>
                                    action
                                </td>
                            </tr>
                            <?php
                    foreach ($quanliphimcc as $phim){
                        $name=$phim['tenphim'];
                        $date=$phim['ngaychieu'];
                        $id=$phim['id'];

                        echo '<tr>
                        <td>'.$name.'</td>
                        <td>'.$date.'</td>
                        <td>
                            <a href="">xoa phim</a>
                            <a href="admin.php?contro=detail&idphim='.$id.'" method="POST">chitiet</a>
                        </td>
                    </tr>';
                    }

                    ?>
                        </table>
                    </div>
                    <div class="phimsapchieu">
                        <table>
                            <tr>
                                <td>Tên phim</td>
                                <td>Ngày chiếu</td>
                                <td>
                                    action
                                </td>
                            </tr>
                            <?php
                    foreach ($quanliphimdc as $phim){
                        $name=$phim['tenphim'];
                        $date=$phim['ngaychieu'];

                        echo '<tr>
                        <td>'.$name.'</td>
                        <td>'.$date.'</td>
                        <td>
                            <a href="">xoa phim</a>
                            <a href="admin.php?contro=detail&idphim='.$id.'" method="POST">chitiet</a>
                        </td>
                    </tr>';
                    }

                    ?>
                        </table>
                    </div>
                </aside>
