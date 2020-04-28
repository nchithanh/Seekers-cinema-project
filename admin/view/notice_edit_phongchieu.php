<?php
    require_once '../model/connect.php';
    require_once '../model/getdata.php';

    $suatchieu_theophong = LoadSuatchieuByIdPhong($_POST['id_notice_edit_phongchieu']);
    if ($suatchieu_theophong == null) {
        echo '
        <script> 
            alert(\'Phòng đang không chứa suất chiếu nào, bạn có thể sửa tên , rạp , sơ đồ ghế trong phòng\');
        </script>
        ';
    }else{
        echo '
        <script> 
            alert(\'Phòng đã tồn tại suất chiếu, chỉ có thể thay đổi tên và rạp của phòng ; Xóa suất chiếu ID : '.$_POST['id_notice_edit_phongchieu'].' Nếu muốn đổi ghế\'); 
        </script>
        ';
    }
?>