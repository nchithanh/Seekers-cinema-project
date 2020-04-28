
        <form action="admin.php?contro=phongchieu&add" method="post" id="add_phongchieu_form">
            <!-- <div class="head_add_form">
                <h3 class="title_add">Add suất chiếu</h3>
                <button type="button" onclick="hide_form_add_phongchieu();discard_add()" class="exit_add_but" id="exit_addphongchieu_but">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div> -->
            <table>
                <tr>
                    <td>
                        <input type="text" name="tenphong_addphongchieu" placeholder="Tên phòng chiếu" id="input_phongchieu_addphong">
                    </td>
                    <td>
                        <select name ="rap_addphongchieu" value ="">
                                <option value="" selected="selected">Chọn rạp</option>
                            <?php
                                require_once '../model/connect.php';
                                require_once '../model/getdata.php';
                                $Arap = LoadAllRap();
                                foreach ($Arap as $E_rap){
                                echo '<option value="'.$E_rap['id'].'">'.$E_rap['tenrap'].'</option>';
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="screen" colspan="2">
                    <div class="col_4"><div class="under_line"></div></div>
                    <div class="col_4"><p>-- THE SCREEN --</p></div>
                    <div class="col_4"><div class="under_line"></div></div>
                    </td>
                </tr>
            </table>
            <div class="add_ghe">
                <button class="col_ghe" >20</button>
                <button class="col_ghe" >19</button>
                <button class="col_ghe" >18</button>
                <button class="col_ghe" >17</button>
                <button class="col_ghe" >16</button>
                <button class="col_ghe" >15</button>
                <button class="col_ghe" >14</button>
                <button class="col_ghe" >13</button>
                <button class="col_ghe" >12</button>
                <button class="col_ghe" >11</button>
                <button class="col_ghe" >10</button>
                <button class="col_ghe" >9</button>
                <button class="col_ghe" >8</button>
                <button class="col_ghe" >7</button>
                <button class="col_ghe" >6</button>
                <button class="col_ghe" >5</button>
                <button class="col_ghe" >4</button>
                <button class="col_ghe" >3</button>
                <button class="col_ghe" >2</button>
                <button class="col_ghe" >1</button>
                <button class="col_ghe" style="opacity: 0; width : 3%;"></button>
                <div class="clear"></div>
<!-- ***** HANG GHE THU 1 ************ -->
<button type="button" class="hangghe">A</button>
                <?php
                    for ($i=20; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe1_'.$i.'" value="1 '.$i.'" ><input type="radio" name="hang1" id="radio_ghe1_'.$i.'" value="1 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=20 ; $h++) {
                            echo'
                                $("#ghe1_'.$h.'").click(function (){
                                    var value_ghe1_'.$h.' = $("#ghe1_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe1_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu1").html(data);
                                    });
                                    
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <style id="css_for_add_phongchieu1"></style>
                <style>
                    #ghe1_1:hover {background: #ffea40 ;}

                    #ghe1_2:hover {background: #ffea40 ;}
                    #ghe1_2:hover ~ #ghe1_1 {background: #ffea40 ;}

                    <?php
                        for ($j=3; $j <= 20 ; $j++) {
                            $the_str ="";
                            $f_str = "#ghe1_".$j.":hover ~ #ghe1_1" ;
                            for ($d=1; $d <= $j-1; $d++) { 
                                $next_str = " , #ghe1_".$j.":hover ~ #ghe1_".$d.""; 
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe1_'.$j.':hover {background: #ffea40 ;}
                                '.$f_str.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

<!-- ***** HANG GHE THU 2 ************ -->
<button type="button" class="hangghe">B</button>
                <?php
                    for ($i=20; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe2_'.$i.'" value="2 '.$i.'" ><input type="radio" name="hang2" id="radio_ghe2_'.$i.'" value="2 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=20 ; $h++) {
                            echo'
                                $("#ghe2_'.$h.'").click(function (){
                                    var value_ghe2_'.$h.' = $("#ghe2_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe2_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu2").html(data);
                                    });
                                    
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                 <style id="css_for_add_phongchieu2"></style>
                <style>
                    #ghe2_1:hover {background: #ffea40 ;}

                    #ghe2_2:hover {background: #ffea40 ;}
                    #ghe2_2:hover ~ #ghe2_1 {background: #ffea40 ;}

                    <?php
                        for ($j=3; $j <= 20 ; $j++) {
                            $the_str ="";
                            $f_str = "#ghe2_".$j.":hover ~ #ghe2_1" ;
                            for ($d=1; $d <= $j-1; $d++) { 
                                $next_str = " , #ghe2_".$j.":hover ~ #ghe2_".$d.""; 
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe2_'.$j.':hover {background: #ffea40 ;}
                                '.$f_str.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 3 ************ -->
                <button type="button" class="hangghe">C</button>
                <?php
                    for ($i=20; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe3_'.$i.'" value="3 '.$i.'" ><input type="radio" name="hang3" id="radio_ghe3_'.$i.'" value="3 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=20 ; $h++) {
                            echo'
                                $("#ghe3_'.$h.'").click(function (){
                                    var value_ghe3_'.$h.' = $("#ghe3_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe3_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu3").html(data);
                                    });
                                    
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <style id="css_for_add_phongchieu3"></style>
                <style>
                    #ghe3_1:hover {background: #ffea40 ;}

                    #ghe3_2:hover {background: #ffea40 ;}
                    #ghe3_2:hover ~ #ghe3_1 {background: #ffea40 ;}

                    <?php
                        for ($j=3; $j <= 20 ; $j++) {
                            $the_str ="";
                            $f_str = "#ghe3_".$j.":hover ~ #ghe3_1" ;
                            for ($d=1; $d <= $j-1; $d++) { 
                                $next_str = " , #ghe3_".$j.":hover ~ #ghe3_".$d.""; 
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe3_'.$j.':hover {background: #ffea40 ;}
                                '.$f_str.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 4 ************ -->
                <button type="button" class="hangghe">D</button>
                <?php
                    for ($i=20; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe4_'.$i.'" value="4 '.$i.'" ><input type="radio" name="hang4" id="radio_ghe4_'.$i.'" value="4 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=20 ; $h++) {
                            echo'
                                $("#ghe4_'.$h.'").click(function (){
                                    var value_ghe4_'.$h.' = $("#ghe4_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe4_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu4").html(data);
                                    });
                                    
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <style id="css_for_add_phongchieu4"></style>
                <style>
                    #ghe4_1:hover {background: #ffea40 ;}

                    #ghe4_2:hover {background: #ffea40 ;}
                    #ghe4_2:hover ~ #ghe4_1 {background: #ffea40 ;}

                    <?php
                        for ($j=3; $j <= 20 ; $j++) {
                            $the_str ="";
                            $f_str = "#ghe4_".$j.":hover ~ #ghe4_1" ;
                            for ($d=1; $d <= $j-1; $d++) { 
                                $next_str = " , #ghe4_".$j.":hover ~ #ghe4_".$d.""; 
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe4_'.$j.':hover {background: #ffea40 ;}
                                '.$f_str.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 5 ************ -->
                <button type="button" class="hangghe">E</button>
                <?php
                    for ($i=20; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe5_'.$i.'" value="5 '.$i.'" ><input type="radio" name="hang5" id="radio_ghe5_'.$i.'" value="5 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=20 ; $h++) {
                            echo'
                                $("#ghe5_'.$h.'").click(function (){
                                    var value_ghe5_'.$h.' = $("#ghe5_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe5_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu5").html(data);
                                    });
                                    
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <style id="css_for_add_phongchieu5"></style>
                <style>
                    #ghe5_1:hover {background: #ffea40 ;}

                    #ghe5_2:hover {background: #ffea40 ;}
                    #ghe5_2:hover ~ #ghe5_1 {background: #ffea40 ;}

                    <?php
                        for ($j=3; $j <= 20 ; $j++) {
                            $the_str ="";
                            $f_str = "#ghe5_".$j.":hover ~ #ghe5_1" ;
                            for ($d=1; $d <= $j-1; $d++) { 
                                $next_str = " , #ghe5_".$j.":hover ~ #ghe5_".$d.""; 
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe5_'.$j.':hover {background: #ffea40 ;}
                                '.$f_str.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 6 ************ -->
                <button type="button" class="hangghe">F</button>
                <?php
                    for ($i=20; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe6_'.$i.'" value="6 '.$i.'" ><input type="radio" name="hang6" id="radio_ghe6_'.$i.'" value="6 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=20 ; $h++) {
                            echo'
                                $("#ghe6_'.$h.'").click(function (){
                                    var value_ghe6_'.$h.' = $("#ghe6_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe6_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu6").html(data);
                                    });
                                    
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <style id="css_for_add_phongchieu6"></style>
                <style>
                    #ghe6_1:hover {background: #ffea40 ;}

                    #ghe6_2:hover {background: #ffea40 ;}
                    #ghe6_2:hover ~ #ghe6_1 {background: #ffea40 ;}

                    <?php
                        for ($j=3; $j <= 20 ; $j++) {
                            $the_str ="";
                            $f_str = "#ghe6_".$j.":hover ~ #ghe6_1" ;
                            for ($d=1; $d <= $j-1; $d++) { 
                                $next_str = " , #ghe6_".$j.":hover ~ #ghe6_".$d.""; 
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe6_'.$j.':hover {background: #ffea40 ;}
                                '.$f_str.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 7 ************ -->
                <button type="button" class="hangghe">G</button>
                <?php
                    for ($i=20; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe7_'.$i.'" value="7 '.$i.'" ><input type="radio" name="hang7" id="radio_ghe7_'.$i.'" value="7 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=20 ; $h++) {
                            echo'
                                $("#ghe7_'.$h.'").click(function (){
                                    var value_ghe7_'.$h.' = $("#ghe7_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe7_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu7").html(data);
                                    });
                                    
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <style id="css_for_add_phongchieu7"></style>
                <style>
                    #ghe7_1:hover {background: #ffea40 ;}

                    #ghe7_2:hover {background: #ffea40 ;}
                    #ghe7_2:hover ~ #ghe7_1 {background: #ffea40 ;}

                    <?php
                        for ($j=3; $j <= 20 ; $j++) {
                            $the_str ="";
                            $f_str = "#ghe7_".$j.":hover ~ #ghe7_1" ;
                            for ($d=1; $d <= $j-1; $d++) { 
                                $next_str = " , #ghe7_".$j.":hover ~ #ghe7_".$d.""; 
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe7_'.$j.':hover {background: #ffea40 ;}
                                '.$f_str.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 8 ************ -->
                <button type="button" class="hangghe">H</button>
                <?php
                    for ($i=20; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe8_'.$i.'" value="8 '.$i.'" ><input type="radio" name="hang8" id="radio_ghe8_'.$i.'" value="8 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=20 ; $h++) {
                            echo'
                                $("#ghe8_'.$h.'").click(function (){
                                    var value_ghe8_'.$h.' = $("#ghe8_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe8_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu8").html(data);
                                    });
                                    
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <style id="css_for_add_phongchieu8"></style>
                <style>
                    #ghe8_1:hover {background: #ffea40 ;}

                    #ghe8_2:hover {background: #ffea40 ;}
                    #ghe8_2:hover ~ #ghe8_1 {background: #ffea40 ;}

                    <?php
                        for ($j=3; $j <= 20 ; $j++) {
                            $the_str ="";
                            $f_str = "#ghe8_".$j.":hover ~ #ghe8_1" ;
                            for ($d=1; $d <= $j-1; $d++) { 
                                $next_str = " , #ghe8_".$j.":hover ~ #ghe8_".$d.""; 
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe8_'.$j.':hover {background: #ffea40 ;}
                                '.$f_str.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 9 ************ -->
                <button type="button" class="hangghe">I</button>
                <?php
                    for ($i=20; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe9_'.$i.'" value="9 '.$i.'" ><input type="radio" name="hang9" id="radio_ghe9_'.$i.'" value="9 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=20 ; $h++) {
                            echo'
                                $("#ghe9_'.$h.'").click(function (){
                                    var value_ghe9_'.$h.' = $("#ghe9_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe9_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu9").html(data);
                                    });
                                    
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <style id="css_for_add_phongchieu9"></style>
                <style>
                    #ghe9_1:hover {background: #ffea40 ;}

                    #ghe9_2:hover {background: #ffea40 ;}
                    #ghe9_2:hover ~ #ghe9_1 {background: #ffea40 ;}

                    <?php
                        for ($j=3; $j <= 20 ; $j++) {
                            $the_str ="";
                            $f_str = "#ghe9_".$j.":hover ~ #ghe9_1" ;
                            for ($d=1; $d <= $j-1; $d++) { 
                                $next_str = " , #ghe9_".$j.":hover ~ #ghe9_".$d.""; 
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe9_'.$j.':hover {background: #ffea40 ;}
                                '.$f_str.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 10 ************ -->
                <button type="button" class="hangghe">J</button>
                <?php
                    for ($i=20; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe10_'.$i.'" value="10 '.$i.'" ><input type="radio" name="hang10" id="radio_ghe10_'.$i.'" value="10 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=20 ; $h++) {
                            echo'
                                $("#ghe10_'.$h.'").click(function (){
                                    var value_ghe10_'.$h.' = $("#ghe10_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe10_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu10").html(data);
                                    });
                                    
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <style id="css_for_add_phongchieu10"></style>
                <style>
                    #ghe10_1:hover {background: #ffea40 ;}

                    #ghe10_2:hover {background: #ffea40 ;}
                    #ghe10_2:hover ~ #ghe10_1 {background: #ffea40 ;}

                    <?php
                        for ($j=3; $j <= 20 ; $j++) {
                            $the_str ="";
                            $f_str = "#ghe10_".$j.":hover ~ #ghe10_1" ;
                            for ($d=1; $d <= $j-1; $d++) { 
                                $next_str = " , #ghe10_".$j.":hover ~ #ghe10_".$d.""; 
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe10_'.$j.':hover {background: #ffea40 ;}
                                '.$f_str.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 11 ************ -->
                <button type="button" class="hangghe">K</button>
                <?php
                    for ($i=20; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe11_'.$i.'" value="11 '.$i.'" ><input type="radio" name="hang11" id="radio_ghe11_'.$i.'" value="11 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=20 ; $h++) {
                            echo'
                                $("#ghe11_'.$h.'").click(function (){
                                    var value_ghe11_'.$h.' = $("#ghe11_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe11_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu11").html(data);
                                    });
                                    
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                 <style id="css_for_add_phongchieu11"></style>
                <style>
                    #ghe11_1:hover {background: #ffea40 ;}

                    #ghe11_2:hover {background: #ffea40 ;}
                    #ghe11_2:hover ~ #ghe11_1 {background: #ffea40 ;}

                    <?php
                        for ($j=3; $j <= 20 ; $j++) {
                            $the_str ="";
                            $f_str = "#ghe11_".$j.":hover ~ #ghe11_1" ;
                            for ($d=1; $d <= $j-1; $d++) { 
                                $next_str = " , #ghe11_".$j.":hover ~ #ghe11_".$d.""; 
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe11_'.$j.':hover {background: #ffea40 ;}
                                '.$f_str.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 12 ************ -->
                <button type="button" class="hangghe">L</button>
                <?php
                    for ($i=20; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe12_'.$i.'" value="12 '.$i.'" ><input type="radio" name="hang12" id="radio_ghe12_'.$i.'" value="12 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=20 ; $h++) {
                            echo'
                                $("#ghe12_'.$h.'").click(function (){
                                    var value_ghe12_'.$h.' = $("#ghe12_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe12_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu12").html(data);
                                    });
                                    
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <style id="css_for_add_phongchieu12"></style>
                <style>
                    #ghe12_1:hover {background: #ffea40 ;}

                    #ghe12_2:hover {background: #ffea40 ;}
                    #ghe12_2:hover ~ #ghe12_1 {background: #ffea40 ;}

                    <?php
                        for ($j=3; $j <= 20 ; $j++) {
                            $the_str ="";
                            $f_str = "#ghe12_".$j.":hover ~ #ghe12_1" ;
                            for ($d=1; $d <= $j-1; $d++) { 
                                $next_str = " , #ghe12_".$j.":hover ~ #ghe12_".$d.""; 
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe12_'.$j.':hover {background: #ffea40 ;}
                                '.$f_str.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

            </div>
            <button type="submit" form="add_phongchieu_form" name="submit_add_phongchieu" class="submit_add">
                <i class="fas fa-plus"></i>
                <span>Add Seat map</span>
            </button>
            <button type="button" onclick="hide_form_add_phongchieu();discard_add();" class="discard_add" id="discard_add_but" value="1">
                <i class="far fa-trash-alt"></i>
                <span>Discard</span>
            </button>
            <button type="button" name="reset_add_but" class="redo_add" id="redo_add_but" onclick="discard_add();" value="1">
                <i class="fas fa-redo"></i>
                <span>Redo Seat map</span>
            </button>
        </form>

<!-- DISCARD ADD -->
<script>   
    function discard_add() {
        <?php
            for ($y=1; $y <=12 ; $y++) { 
                for ($a=1; $a <= 20 ; $a++) { 
                    echo '
                    document.getElementById("radio_ghe'.$y.'_'.$a.'").checked = false ;
                    ';
                }
            }    
        ?>
}
</script>

        <!-- CSS DISCARD AND REDO ADD -->
 <script>
                    $(document).ready(function() {
                        $("#discard_add_but").click(function (){
                                    var value_discard = $("#discard_add_but").val();
                                    $.post("view/NULL.php", {reset_seat:value_discard}, function(data){
                                        <?php
                                            for ($o=1; $o <=12 ; $o++) { 
                                                echo'
                                                $("#form_add_phongchieu").html(data);
                                                ';
                                            }    
                                        ?>
                                    });
                                });
                                $("#redo_add_but").click(function (){
                                    var value_redo = $("#redo_add_but").val();
                                    $.post("view/css_discard_addphongchieu.php", {reset_seat:value_redo}, function(data){
                                        <?php
                                            for ($w=1; $w <=12 ; $w++) { 
                                                echo'
                                                $("#css_for_add_phongchieu'.$w.'").html(data);
                                                ';
                                            }    
                                        ?>
                                    });
                                });
                });
                </script>