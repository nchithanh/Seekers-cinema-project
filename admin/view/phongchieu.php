<main>
    <!-- form add phong chieu  -->
    <div class="form_add_phongchieu" id="form_add_phongchieu">
        <form action="admin.php?contro=phongchieu&add" method="post" id="add_phongchieu_form">
            <div class="head_add_form">
                <h3 class="title_add">Add suất chiếu</h3>
                <button type="button" onclick="hide_form_add_phongchieu();discard_add()" class="exit_add_but" id="exit_addphongchieu_but">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <table>
                <tr>
                    <td>
                        <input type="text" name="tenphong_addphongchieu" placeholder="Tên phòng chiếu" id="input_phongchieu_addphong">
                    </td>
                    <td>
                        <select name ="rap_addphongchieu" value ="">
                                <option value="" selected="selected">Chọn rạp</option>
                                <?php
                                foreach ($rap as $E_rap){
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
            
                <button class="col_ghe" >25</button>
                <button class="col_ghe" >24</button>
                <button class="col_ghe" >23</button>
                <button class="col_ghe" >22</button>
                <button class="col_ghe" >21</button>
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
                <button class="col_ghe" style="opacity: 0;"></button>
                <div class="clear"></div>
<!-- ***** HANG GHE THU 1 ************ -->
<button type="button" class="hangghe">A</button>
                <?php
                    for ($i=25; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe1_'.$i.'" value="1 '.$i.'" ><input type="radio" name="hang1" id="radio_ghe1_'.$i.'" value="1 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=25 ; $h++) {
                            echo'
                                $("#ghe1_'.$h.'").click(function (){
                                    var value_ghe1_'.$h.' = $("#ghe1_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe1_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu1").html(data);
                                    });
                                    show_form_edit_rap();
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <div id="css_for_add_phongchieu1"></div>
                <style>
                    #ghe1_1:hover {background: #ffea40 ;}

                    #ghe1_2:hover {background: #ffea40 ;}
                    #ghe1_2:hover ~ #ghe1_1 {background: #ffea40 ;}

                    <?php
                        $the_str ="";
                        for ($j=3; $j <= 25 ; $j=$j+1) {
                            for ($d=1; $d <= $j-1; $d=$d+1) { 
                                if($d==1) {
                                    $next_str = "#ghe1_".$j.":hover ~ #ghe1_1" ;
                                    $the_str = $next_str ;
                                }else{
                                    $next_str = " , #ghe1_".$j.":hover ~ #ghe1_".$d.""; 
                                }
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe1_'.$j.':hover {background: #ffea40 ;}
                                '.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>
<!-- ***** HANG GHE THU 2 ************ -->
                <button type="button" class="hangghe">B</button>
                <?php
                    for ($i=25; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe2_'.$i.'" value="2 '.$i.'" ><input type="radio" name="hang2" id="radio_ghe2_'.$i.'" value="2 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=25 ; $h++) {
                            echo'
                                $("#ghe2_'.$h.'").click(function (){
                                    var value_ghe2_'.$h.' = $("#ghe2_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe2_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu2").html(data);
                                    });
                                    show_form_edit_rap();
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <div id="css_for_add_phongchieu2"></div>
                <style>
                    #ghe2_1:hover {background: #ffea40 ;}

                    #ghe2_2:hover {background: #ffea40 ;}
                    #ghe2_2:hover ~ #ghe1_1 {background: #ffea40 ;}

                    <?php
                        $the_str ="";
                        for ($j=3; $j <= 25 ; $j=$j+1) {
                            for ($d=1; $d <= $j-1; $d=$d+1) { 
                                if($d==1) {
                                    $next_str = "#ghe2_".$j.":hover ~ #ghe2_1" ;
                                    $the_str = $next_str ;
                                }else{
                                    $next_str = " , #ghe2_".$j.":hover ~ #ghe2_".$d.""; 
                                }
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe2_'.$j.':hover {background: #ffea40 ;}
                                '.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 3 ************ -->
                <button type="button" class="hangghe">C</button>
                <?php
                    for ($i=25; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe3_'.$i.'" value="3 '.$i.'" ><input type="radio" name="hang3" id="radio_ghe3_'.$i.'" value="3 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=25 ; $h++) {
                            echo'
                                $("#ghe3_'.$h.'").click(function (){
                                    var value_ghe3_'.$h.' = $("#ghe3_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe3_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu3").html(data);
                                    });
                                    show_form_edit_rap();
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <div id="css_for_add_phongchieu3"></div>
                <style>
                    #ghe3_1:hover {background: #ffea40 ;}

                    #ghe3_2:hover {background: #ffea40 ;}
                    #ghe3_2:hover ~ #ghe1_1 {background: #ffea40 ;}

                    <?php
                        $the_str ="";
                        for ($j=3; $j <= 25 ; $j=$j+1) {
                            for ($d=1; $d <= $j-1; $d=$d+1) { 
                                if($d==1) {
                                    $next_str = "#ghe3_".$j.":hover ~ #ghe3_1" ;
                                    $the_str = $next_str ;
                                }else{
                                    $next_str = " , #ghe3_".$j.":hover ~ #ghe3_".$d.""; 
                                }
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe3_'.$j.':hover {background: #ffea40 ;}
                                '.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 4 ************ -->
                <button type="button" class="hangghe">D</button>
                <?php
                    for ($i=25; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe4_'.$i.'" value="4 '.$i.'" ><input type="radio" name="hang4" id="radio_ghe4_'.$i.'" value="4 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=25 ; $h++) {
                            echo'
                                $("#ghe4_'.$h.'").click(function (){
                                    var value_ghe4_'.$h.' = $("#ghe4_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe4_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu4").html(data);
                                    });
                                    show_form_edit_rap();
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <div id="css_for_add_phongchieu4"></div>
                <style>
                    #ghe4_1:hover {background: #ffea40 ;}

                    #ghe4_2:hover {background: #ffea40 ;}
                    #ghe4_2:hover ~ #ghe4_1 {background: #ffea40 ;}

                    <?php
                        $the_str ="";
                        for ($j=3; $j <= 25 ; $j=$j+1) {
                            for ($d=1; $d <= $j-1; $d=$d+1) { 
                                if($d==1) {
                                    $next_str = "#ghe4_".$j.":hover ~ #ghe4_1" ;
                                    $the_str = $next_str ;
                                }else{
                                    $next_str = " , #ghe4_".$j.":hover ~ #ghe4_".$d.""; 
                                }
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe4_'.$j.':hover {background: #ffea40 ;}
                                '.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 5 ************ -->
                <button type="button" class="hangghe">E</button>
                <?php
                    for ($i=25; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe5_'.$i.'" value="5 '.$i.'" ><input type="radio" name="hang5" id="radio_ghe5_'.$i.'" value="5 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=25 ; $h++) {
                            echo'
                                $("#ghe5_'.$h.'").click(function (){
                                    var value_ghe5_'.$h.' = $("#ghe5_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe5_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu5").html(data);
                                    });
                                    show_form_edit_rap();
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <div id="css_for_add_phongchieu5"></div>
                <style>
                    #ghe5_1:hover {background: #ffea40 ;}

                    #ghe5_2:hover {background: #ffea40 ;}
                    #ghe5_2:hover ~ #ghe5_1 {background: #ffea40 ;}

                    <?php
                        $the_str ="";
                        for ($j=3; $j <= 25 ; $j=$j+1) {
                            for ($d=1; $d <= $j-1; $d=$d+1) { 
                                if($d==1) {
                                    $next_str = "#ghe5_".$j.":hover ~ #ghe5_1" ;
                                    $the_str = $next_str ;
                                }else{
                                    $next_str = " , #ghe5_".$j.":hover ~ #ghe5_".$d.""; 
                                }
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe5_'.$j.':hover {background: #ffea40 ;}
                                '.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 6 ************ -->
                <button type="button" class="hangghe">F</button>
                <?php
                    for ($i=25; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe6_'.$i.'" value="6 '.$i.'" ><input type="radio" name="hang6" id="radio_ghe6_'.$i.'" value="6 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=25 ; $h++) {
                            echo'
                                $("#ghe6_'.$h.'").click(function (){
                                    var value_ghe6_'.$h.' = $("#ghe6_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe6_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu6").html(data);
                                    });
                                    show_form_edit_rap();
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <div id="css_for_add_phongchieu6"></div>
                <style>
                    #ghe6_1:hover {background: #ffea40 ;}

                    #ghe6_2:hover {background: #ffea40 ;}
                    #ghe6_2:hover ~ #ghe6_1 {background: #ffea40 ;}

                    <?php
                        $the_str ="";
                        for ($j=3; $j <= 25 ; $j=$j+1) {
                            for ($d=1; $d <= $j-1; $d=$d+1) { 
                                if($d==1) {
                                    $next_str = "#ghe6_".$j.":hover ~ #ghe6_1" ;
                                    $the_str = $next_str ;
                                }else{
                                    $next_str = " , #ghe6_".$j.":hover ~ #ghe6_".$d.""; 
                                }
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe6_'.$j.':hover {background: #ffea40 ;}
                                '.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 7 ************ -->
                <button type="button" class="hangghe">G</button>
                <?php
                    for ($i=25; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe7_'.$i.'" value="7 '.$i.'" ><input type="radio" name="hang7" id="radio_ghe7_'.$i.'" value="7 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=25 ; $h++) {
                            echo'
                                $("#ghe7_'.$h.'").click(function (){
                                    var value_ghe7_'.$h.' = $("#ghe7_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe7_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu7").html(data);
                                    });
                                    show_form_edit_rap();
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <div id="css_for_add_phongchieu7"></div>
                <style>
                    #ghe7_1:hover {background: #ffea40 ;}

                    #ghe7_2:hover {background: #ffea40 ;}
                    #ghe7_2:hover ~ #ghe7_1 {background: #ffea40 ;}

                    <?php
                        $the_str ="";
                        for ($j=3; $j <= 25 ; $j=$j+1) {
                            for ($d=1; $d <= $j-1; $d=$d+1) { 
                                if($d==1) {
                                    $next_str = "#ghe7_".$j.":hover ~ #ghe7_1" ;
                                    $the_str = $next_str ;
                                }else{
                                    $next_str = " , #ghe7_".$j.":hover ~ #ghe7_".$d.""; 
                                }
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe7_'.$j.':hover {background: #ffea40 ;}
                                '.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 8 ************ -->
                <button type="button" class="hangghe">H</button>
                <?php
                    for ($i=25; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe8_'.$i.'" value="8 '.$i.'" ><input type="radio" name="hang8" id="radio_ghe8_'.$i.'" value="8 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=25 ; $h++) {
                            echo'
                                $("#ghe8_'.$h.'").click(function (){
                                    var value_ghe8_'.$h.' = $("#ghe8_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe8_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu8").html(data);
                                    });
                                    show_form_edit_rap();
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <div id="css_for_add_phongchieu8"></div>
                <style>
                    #ghe8_1:hover {background: #ffea40 ;}

                    #ghe8_2:hover {background: #ffea40 ;}
                    #ghe8_2:hover ~ #ghe8_1 {background: #ffea40 ;}

                    <?php
                        $the_str ="";
                        for ($j=3; $j <= 25 ; $j=$j+1) {
                            for ($d=1; $d <= $j-1; $d=$d+1) { 
                                if($d==1) {
                                    $next_str = "#ghe8_".$j.":hover ~ #ghe8_1" ;
                                    $the_str = $next_str ;
                                }else{
                                    $next_str = " , #ghe8_".$j.":hover ~ #ghe8_".$d.""; 
                                }
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe8_'.$j.':hover {background: #ffea40 ;}
                                '.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 9 ************ -->
                <button type="button" class="hangghe">I</button>
                <?php
                    for ($i=25; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe9_'.$i.'" value="9 '.$i.'" ><input type="radio" name="hang9" id="radio_ghe9_'.$i.'" value="9 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=25 ; $h++) {
                            echo'
                                $("#ghe9_'.$h.'").click(function (){
                                    var value_ghe9_'.$h.' = $("#ghe9_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe9_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu9").html(data);
                                    });
                                    show_form_edit_rap();
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <div id="css_for_add_phongchieu9"></div>
                <style>
                    #ghe9_1:hover {background: #ffea40 ;}

                    #ghe9_2:hover {background: #ffea40 ;}
                    #ghe9_2:hover ~ #ghe9_1 {background: #ffea40 ;}

                    <?php
                        $the_str ="";
                        for ($j=3; $j <= 25 ; $j=$j+1) {
                            for ($d=1; $d <= $j-1; $d=$d+1) { 
                                if($d==1) {
                                    $next_str = "#ghe9_".$j.":hover ~ #ghe9_1" ;
                                    $the_str = $next_str ;
                                }else{
                                    $next_str = " , #ghe9_".$j.":hover ~ #ghe9_".$d.""; 
                                }
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe9_'.$j.':hover {background: #ffea40 ;}
                                '.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

                <!-- ***** HANG GHE THU 10 ************ -->
                <button type="button" class="hangghe">J</button>
                <?php
                    for ($i=25; $i >=1; $i--) { 
                        echo'
                        <button type="button" class="ghe" id="ghe10_'.$i.'" value="10 '.$i.'" ><input type="radio" name="hang10" id="radio_ghe10_'.$i.'" value="10 '.$i.'"></button>
                        ';
                    }
                ?>
                <script>
                    $(document).ready(function() {
                    <?php
                        for ($h=1; $h <=25 ; $h++) {
                            echo'
                                $("#ghe10_'.$h.'").click(function (){
                                    var value_ghe10_'.$h.' = $("#ghe10_'.$h.'").val();
                                    $.post("view/css_addphongchieu.php", {value_ghe:value_ghe10_'.$h.'}, function(data){
                                        $("#css_for_add_phongchieu10").html(data);
                                    });
                                    show_form_edit_rap();
                                });
                            ';
                        }    
                    ?>
                });
                </script>
                <div id="css_for_add_phongchieu10"></div>
                <style>
                    #ghe10_1:hover {background: #ffea40 ;}

                    #ghe10_2:hover {background: #ffea40 ;}
                    #ghe10_2:hover ~ #ghe10_1 {background: #ffea40 ;}

                    <?php
                        $the_str ="";
                        for ($j=3; $j <= 25 ; $j=$j+1) {
                            for ($d=1; $d <= $j-1; $d=$d+1) { 
                                if($d==1) {
                                    $next_str = "#ghe10_".$j.":hover ~ #ghe10_1" ;
                                    $the_str = $next_str ;
                                }else{
                                    $next_str = " , #ghe10_".$j.":hover ~ #ghe10_".$d.""; 
                                }
                                $the_str = $the_str.$next_str ;
                            }
                            echo '
                                #ghe10_'.$j.':hover {background: #ffea40 ;}
                                '.$the_str.' {background: #ffea40 ;}
                            ';
                        }
                    ?>
                </style>
                <div class="clear"></div>

            </div>
            <button type="submit" form="add_phongchieu_form" name="submit_add_phongchieu" class="submit_add">
                <i class="fas fa-plus"></i>
                <span>Add</span>
            </button>
            <button type="button" onclick="hide_form_add_phongchieu();discard_add();" class="discard_add" id="discard_add_but" value="1">
                <i class="far fa-trash-alt"></i>
                <span>Discard</span>
            </button>
        </form>
    </div>

 <!-- end form -->
 <!-- CSS DISCARD ADD -->
 <script>
                    $(document).ready(function() {
                        $("#discard_add_but").click(function (){
                                    var value = $("#discard_add_but").val();
                                    $.post("view/css_discard_addphongchieu.php", {value_ghe:value}, function(data){
                                        <?php
                                            for ($k=1; $k <=10 ; $k++) { 
                                                echo '
                                                $("#css_for_add_phongchieu'.$k.'").html(data);
                                                ';
                                            }
                                            ?>
                                    });
                                    show_form_edit_rap();
                                });
                        $("#exit_addphongchieu_but").click(function (){
                                    var value = $("#discard_add_but").val();
                                    $.post("view/css_discard_addphongchieu.php", {value_ghe:value}, function(data){
                                        <?php
                                            for ($k=1; $k <=10 ; $k++) { 
                                                echo '
                                                $("#css_for_add_phongchieu'.$k.'").html(data);
                                                ';
                                            }
                                            ?>
                                    });
                                    show_form_edit_rap();
                                });
                });
                </script>
 <!-- EDIT PHONG CHIEU -->
 <div class="form_edit_phongchieu" id="form_edit_phongchieu">
 </div>
      <!-- end form -->














    <?php
    require_once "view/sidebar.php";
    ?>
<article class="col_11">
		<div class="head col_12">
			<div class="name_action col_10">
				<h1 class="foot_font">Quản lý phòng chiếu</h1>
			</div>
			<div class="map_action col_2">
				<a href="admin.php?contro=home">
					<h1>Trang chủ</h1>
				</a>
				<i class="fas fa-chevron-right"></i>
				<a href="admin.php?contro=phongchieu">
					<h3>Quản lý phòng chiếu</h3>
				</a>	
			</div>
			<div class="col_12">
				<div class="search_table">
					<div class="col_6">
						<form action="#" method="post">
						<input type="text" name="seach_table" id="search_table" class="col_6" placeholder="Tìm kiếm tên phim">
						<input type="submit" id="submit_search_table" onclick="javascript:alert('Bạn vừa submit form')" style="display: none;">
						</form>
						<script>
						var search_table = document.getElementById("search_table");
						search_table.addEventListener("keyup", function(event) {
						  if (event.keyCode === 13) {
						   event.preventDefault();
						   document.getElementById("submit_search_table").click();
						  }
						});
						</script>
					</div>
					<div class="add_data col_6">
						<button type="button" onclick="show_form_add_phongchieu();">
							<i class="fas fa-plus"></i>
							<span>Add Phòng chiếu</span>
						</a>
					</div>
				</div>
            </div>
            <div class="col_12">
			<div class="content">
            <div class="phongchieu_data">
            <div class="data_table">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên phòng chiếu</th>
                    <th>Tên rạp</th>
                    <th>Fix and Delete</th>
                </tr>
                </thead>
                <tbody>
                <form action="admin.php?contro=phongchieu&mul_del" method="post" id="del_mul_phongchieu_form">
                    <?php
                    foreach ($loadphongchieu as $Pch){
                        $Rap = LoadRapById($Pch['idrap']);
                    echo '
                    <tr>
                        <td>'.$Pch['id'].'</td>
                        <td>'.$Pch['tenphong'].'</td>
                        <td>'.$Rap['tenrap'].'</td>
                        <td>
                            <div class="tools_data_table">
                            <button type="button" class="edit_but" id="edit_phongchieu_but'.$Pch['id'].'" value="'.$Pch['id'].'">
                            <i class="fas fa-wrench"></i>
                            </button>
                            <p>/</p>
                            <a class="del_but" href="admin.php?contro=phongchieu&xoaphongchieu='.$Pch['id'].'">
                            <i class="fas fa-trash"></i>
                            </a>
                            </div>
                        </td>
                    </tr>';
                     }
                    ?>
                </form>
                </tbody>
            </table>
            <!-- SCRIPT AJAX TRANFER DATA FOR EDIT -->
            <script>
                $(document).ready(function(){
                    <?php
                        foreach ($loadphongchieu as $PhogC) {
                            echo'
                                $("#edit_phongchieu_but'.$PhogC['id'].'").click(function (){
                                    var idphongchieu_for_edit'.$PhogC['id'].' = $("#edit_phongchieu_but'.$PhogC['id'].'").val();
                                    $.post("view/editphong.php", {idphongchieu_for_edit:idphongchieu_for_edit'.$PhogC['id'].'}, function(data){
                                        $("#form_edit_phongchieu").html(data);
                                    });
                                    show_form_edit_phongchieu();
                                });
                            ';
                        }    
                    ?>
                });
            </script>
            <!-- SCRIPT CHECK AND UNCHECK ALL ROWS FOR DELETE MUTIPLE  -->
            <script>
                function uncheck_all_phongchieu(){
                    var id_uncheck;
                    <?php
                    foreach ($allphongchieu as $Pch){
                        echo'
                            id_uncheck ="checkbox_phongchieu_'.$Pch['id'].'";
                            uncheck(id_uncheck);
                        ';    
                    }
                    ?>
                }
                function check_all_phongchieu(){
                    var idcheck;
                    <?php
                    foreach ($allphongchieu as $rp){
                        echo'
                            idcheck ="checkbox_phongchieu_'.$rp['id'].'";
                            check(idcheck);
                        ';    
                    }
                    ?>
                }
                function check_and_uncheck_all(){
                    var check_status = document.getElementById('check_all_phongchieu').checked == true ;
                    if (check_status) {
                        check_all_phongchieu();
                    }else{
                        uncheck_all_phongchieu();
                    }
                }
            </script>
            </div>
            </div>
            </div>
		</div>
	</article>
</main>






<!-- <div class="clear"></div>
<main class="col_12">
    <aside class="col_2">
        <div class="menu">
        <ul>
                <li><a href="admin.php?contro=film">Quản lý phim</a></li>
                <li><a href="admin.php?contro=phongchieu">Quản lý suất chiếu</a></li>
                <li><a href="admin.php?contro=addphim">Add Phim</a></li>
                <li><a href="admin.php?contro=phongchieu">Quản Lí Phòng</a></li>
                <li><a href="admin.php?contro=qlphongchieu">Quản Lí rạp</a></li>
            </ul>
        </div>
    </aside>
    <article class="col_10 ">
        <div class="admin_acount_manager">
            <h3>Quản Lí Phòng</h3>
        </div> 
            <body>
            <div class="phongchieu">
                <form action="admin.php?contro=phongchieu&addphong" method="post">
                    <div class="thongtin">
                        <label for="">
                            Tên Phòng Chiếu
                        </label>
                        <input type="text" name="tenphong" value="">
                        </select>
                    </div>
                    <div class="thongtin">
                        <label for="">
                            chọn rạp
                        </label>
                        <select name="phongchieu" id="phongchieu" required>
                            <option value="">Chọn rạp</option>
                            <?php
                            foreach ($Pch as $Pch){
                            echo '<option value="'.$Pch['id'].'">'.$Pch['tenphongchieu'].'</option>';
                    
                            }
                        ?>
                        </select>
                    </div>
                    <div style="top: 10px;" class="thongtin submit_but">
                                <input type="submit" name="addphong" value="add phòng chiếu">
                            </div>
                </form>
            </div>
            <div class="phimdangchieu">
                
                    <table>
                        <tr>
                            <td>Tên Phòng Chiếu</td>
                            <td>Tên Rạp</td>
                            <td>
                                action
                            </td>
                        </tr>
                        <tr>
                        <?php
                    foreach ($Pch as $phongchieu){
                        

                        echo '<tr>
                        <td>'.$phongchieu['tenphong'].'</td>
                        <td>'.$phongchieu['tenphongchieu'].'</td>
                        <td>
                            <a href="admin.php?contro=phongchieu&xoaphong='.$phongchieu['id'].'">Xóa phòng chiếu</a>
                        </td>
                    </tr>';
                    }
                    ?>
                </tr>
                    </table>
                </div> -->