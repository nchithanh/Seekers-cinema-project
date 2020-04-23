<form action="admin.php?contro=phongchieu&edit=<?php echo $_POST['idphongchieu_for_edit']?>" method="post" id="edit_phongchieu_form">
            <div class="head_add_form">
                <h3 class="title_add">Edit phòng chiếu</h3>
                <button type="button" onclick="hide_form_edit_phongchieu()" class="exit_add_but">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <table>
                <tr>
                    <?php
                        require_once "../model/connect.php";
                        require_once "../model/getdata.php";
                        
                        $phongchieuById = LoadPhongChieuById($_POST['idphongchieu_for_edit']);
                        echo '
                        <td>
                            <input type="text" name="tenphongchieu" value="'.$phongchieuById['tenphong'].'">
                        </td>
                        ';
                    ?>
                    <td>
                        <select name="idrap" value="">
                                <?php
                                    $idrap = $phongchieuById['idrap'];
                                    $rAP = LoadRapById($idrap);

                                    echo '
                                    <option class="old_option" value="'.$rAP['id'].'">'.$rAP['tenrap'].'</option>';

                                    $allR = LoadAllRap();
                                foreach ($allR as $rap){
                                echo '<option value="'.$rap['id'].'">'.$rap['tenrap'].'</option>';
                                }
                                ?>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit" form="edit_phongchieu_form" name="submit_edit_phongchieu" class="submit_add">
                <i class="fas fa-tools"></i>
                <span>Edit</span>
            </button>
            <button type="button" onclick="hide_form_edit_phongchieu();" class="discard_add">
                <i class="far fa-trash-alt"></i>
                <span>Discard</span>
            </button>
        </form>
