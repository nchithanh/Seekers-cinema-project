        <form action="admin.php?contro=rap&edit=<?php echo $_POST['idrap_for_edit']?>" method="post" id="edit_rap_form">
            <div class="head_add_form">
                <h3 class="title_add">Edit rạp</h3>
                <button type="button" onclick="hide_form_edit_rap()" class="exit_add_but">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <table>
                <tr>
                    <?php
                        require_once "../model/connect.php";
                        require_once "../model/getdata.php";
                        
                        $RapById = LoadRapById($_POST['idrap_for_edit']);
                        echo '
                        <td>
                            <input type="text" name="tenrap" placeholder="Tên rạp" value="'.$RapById['tenrap'].'">
                        </td>
                        <td>
                            <input type="text" name="diachi" placeholder="Địa chỉ" value="'.$RapById['diachi'].'">
                        </td>
                        ';
                    ?>
                </tr>
                <tr>
                    <td>
                        <select name="tinhthanh" value="">
                                <?php
                                    $TinhByRap = LoadTenTinhByIdRap($_POST['idrap_for_edit']);
                                    echo '<option class="old_option" value="'.$TinhByRap['idtinhthanh'].'">'.$TinhByRap['tentinhthanh'].'</option>';
                                    
                                    $alltinh = LoadAllTinh();
                                foreach ($alltinh as $tinh){
                                echo '<option value="'.$tinh['id'].'">'.$tinh['tentinhthanh'].'</option>';
                                }
                                ?>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit" form="edit_rap_form" name="submit_edit_rap" class="submit_add">
                <i class="fas fa-tools"></i>
                <span>Edit</span>
            </button>
            <button type="button" onclick="hide_form_edit_rap()" class="discard_add">
                <i class="far fa-trash-alt"></i>
                <span>Discard</span>
            </button>
        </form>
