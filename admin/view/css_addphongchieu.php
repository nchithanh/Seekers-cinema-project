<?php
    if (isset($_POST['reset_seat'])) {
        exit();
    }elseif(isset($_POST['value_ghe'])){
        $arr = explode(' ', $_POST['value_ghe']);
        $arr[0] =(int)$arr[0] ;
        $arr[1] =(int)$arr[1] ;

        for ($w= 1; $w <= $arr[1] ; $w++) { 
            echo'
                #ghe'.$arr[0].'_'.$w.'{ background-color : #4e9491;}
            ';
        }
    }
      
?>
