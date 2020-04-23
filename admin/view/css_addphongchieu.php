<?php

        $arr = explode(' ', $_POST['value_ghe']);
        $arr[0] =(int)$arr[0] ;
        $arr[1] =(int)$arr[1] ;
?>
        <style>
            <?php
                for ($w= 1; $w <= $arr[1] ; $w++) { 
                    echo'
                        #ghe'.$arr[0].'_'.$w.'{ background-color : #000;}
                    ';
                }
            ?>
        </style>

