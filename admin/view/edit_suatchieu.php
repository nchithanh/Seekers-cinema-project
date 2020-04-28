<form action="admin.php?contro=suatchieu&edit=<?php echo $_POST['edit_suat'] ?>" method="post" id="edit_suatchieu_form">
    <?php
    require_once "../model/connect.php";
    require_once "../model/getdata.php";
        $Suat_CH = LoadSuatchieuById($_POST['edit_suat']);
    ?>
            <div class="head_edit_form">
                <h3 class="title_edit">edit suất chiếu</h3>
                <button type="button" onclick="hide_form_edit_suatchieu();reset_input_editsuatchieu();" class="exit_edit_but">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <table>
                <tr>
                    <td>
                        <input class="label" type="text" placeholder="Ngày chiếu : " readonly>
                        <input type="date" name="ngaychieu_editsuatchieu" id="ngaychieu_editsuatchieu" value="<?php echo $Suat_CH['ngaychieu'] ;?>">
                    </td>
                    <td>
                        <input class="label" type="text" placeholder=" Giờ chiếu : " readonly>
                        <input type="time" name="thoigian_editsuatchieu" id="thoigian_editsuatchieu" value="<?php echo $Suat_CH['thoigian'] ;?>">
                    </td>
                </tr>
                <tr>
                    <td><select name="idrap_editsuatchieu" id="idrap_editsuatchieu">
                    <option value=""> CHỌN RẠP </option>
                    <?php
                    
                    $AllRap= LoadAllRap();
                    $AllFilm = LoadAllFilm();

                        foreach ($AllRap as $AllRap) {
                            echo '
                            <option value="'.$AllRap['id'].'"> '.$AllRap['tenrap'].' </option>
                            ';
                        }
                    ?>
                    </select></td>

                    <td><select name="idphim_editsuatchieu" id="idphim_editsuatchieu">
                    <option value=""> CHỌN FILM </option>
                    <?php
                        foreach ($AllFilm as $AllFilm) {
                            echo '
                            <option value="'.$AllFilm['id'].'"> '.$AllFilm['tenphim'].' </option>
                            ';
                        }
                    ?>
                    </select></td>
                </tr>
                    <td><select name="idphong_editsuatchieu" id="idphong_editsuatchieu">
                        
                    </select></td>
            </table>
            <script>
                $(document).ready(function(){

                    $("#idrap_editsuatchieu").change(function (){
                        var idrap = $("#idrap_editsuatchieu").val();
                        $.post("view/phongchieu_for_editsuat.php", {idrap:idrap}, function(data){
                            $("#idphong_editsuatchieu").html(data);
                    });
            });

                });
            </script>
            <button type="submit" form="edit_suatchieu_form" name="submit_edit_suatchieu" class="submit_edit">
                <i class="fas fa-plus"></i>
                <span>Edit</span>
            </button>
            <button type="button" onclick="hide_form_edit_suatchieu();reset_input_editsuatchieu();" class="discard_edit">
                <i class="far fa-trash-alt"></i>
                <span>Discard</span>
            </button>
        </form>