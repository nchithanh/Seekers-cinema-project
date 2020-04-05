<div class="clear"></div>
<main class="col_12">
    <aside class="col_2">
        <div class="menu">
            <ul>
                <li><a href="admin.php?contro=film" class="this_page">Film Manager</a></li>
                <li><a href="index.php?act=catalog_management">Catalog Manager</a></li>
                <li><a href="index.php?act=admin_account_management" >Admin Account Manager</a></li>
                <li><a href="index.php?act=order">Order Management</a></li>
            </ul>
        </div>
    </aside>
    <article class="col_10 ">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){

            $("#rap").change(function (){
                var idrap = $("#rap").val();
                $.post("view/ajax.php", {idrap:idrap}, function(data){
                    $("#phong").html(data);
                });
            });

            $(".option").click(function() {
                $(".option").removeClass("mau");
                $(this).addClass("mau");
            });
            $("#option_dangchieu").click(function (){
                $(".phimdangchieu").fadeIn(500);
                $(".phimsapchieu").fadeOut(500);
            });
            $("#option_sapchieu").click(function (){
                $(".phimsapchieu").fadeIn(500);
                $(".phimdangchieu").fadeOut(500);
            });
        });
    </script>
    <div class="admin_acount_manager">
            <h3> FILM MANAGEMENT </h3>
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
                            <a href="index.php?contro=film_del&quanliphim='.$id.'">xoa phim</a>
                            <a class="detail_but" href="admin.php?contro=film_dt&idphim='.$id.'">chitiet</a>
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
                        $id=$phim['id'];

                        echo '<tr>
                        <td>'.$name.'</td>
                        <td>'.$date.'</td>
                        <td>
                            <a class="detail_but" href="admin.php?contro=film_dt&idphim='.$id.'">chitiet</a>
                        </td>
                    </tr>';
                    }

                    ?>
                        </table>
                    </div>
                </div>
    </article>
</main>


    
