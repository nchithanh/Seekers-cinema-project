        <div class="toanphong">
        <div class="thongtinphongchieu">
            <div class="thongtin">
                <p><?php echo $loadphim['tenphim']; ?> (<?php echo $loadphim['thoiluong']; ?>p)</p>
                <p><?php echo $loadrap['tenrap']; ?>, <?php echo $phongchieu['tenphong']; ?>, <?php echo $loadsuatchieu['thoigian']; ?></p>
            </div>
            <div class="chuthich">
                <form action="" method="post">
                    <input type="number" name="iduser" value="<?php echo ''.$_SESSION['id'].''; ?>" style="display: none;">
                    <input type="submit" name="chonlai" value="Chọn lại phim">
                </form>
            </div>
        </div>
        <div class="phongchieu">
           
            <div class="chongoi">
                <div class="manhinh">
                    <img src="view/img/screen.png" alt="">
                </div>
                <div class="screen">SCREEN</div>
                <div class="ghengoi">
                    <div class="hangghe1">
                        <?php
                            foreach ($loadhangghe as $hangghe){
                                echo '<div class="ghe">'.$hangghe['tenhangghe'].'</div>';
                            }
                        ?>
                        
                    </div>
                    <div class="hangghe2">
                    <?php
                            foreach ($loadhangghe as $hangghe){
                                echo '<div class="ghe">'.$hangghe['tenhangghe'].'</div>';
                            }
                        ?>
                    </div>
                    <div class="vitri">
                        
                        <div class="hang">
                            <?php
                               
                                foreach ($ghe1 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                        $link="";
                                    }else{
                                        $trangthai='';
                                        $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"';
                                    }
                                    echo '<a '.$link.'><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                           

                            
                        </div>
                        <div class="hang">
                        <?php
                               
                               foreach ($ghe2 as $g){
                                   if($g['trangthai']==1){
                                       $trangthai="hetcho";
                                       $link="";
                                   }else{
                                       $trangthai='';
                                       $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"';
                                   }
                                   echo '<a '.$link.'><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                               }
                           ?>
                        </div>
                        <div class="hang">
                        <?php
                               
                                foreach ($ghe3 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                        $link="";
                                    }else{
                                        $trangthai='';
                                        $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"';
                                    }
                                    echo '<a '.$link.'><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                        </div>
                        <div class="hang">
                        <?php
                               
                                foreach ($ghe4 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                        $link="";
                                    }else{
                                        $trangthai='';
                                        $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"';
                                    }
                                    echo '<a '.$link.'><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                        </div>
                        <div class="hang">
                        <?php
                               
                                foreach ($ghe5 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                        $link="";
                                    }else{
                                        $trangthai='';
                                        $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"';
                                    }
                                    echo '<a '.$link.'><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                        </div>
                        <div class="hang">
                        <?php
                               
                               foreach ($ghe6 as $g){
                                   if($g['trangthai']==1){
                                       $trangthai="hetcho";
                                       $link="";
                                   }else{
                                       $trangthai='';
                                       $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"';
                                   }
                                   echo '<a '.$link.'><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                               }
                           ?>
                        </div>
                        <div class="hang">
                        <?php
                               
                               foreach ($ghe7 as $g){
                                   if($g['trangthai']==1){
                                       $trangthai="hetcho";
                                       $link="";
                                   }else{
                                       $trangthai='';
                                       $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"';
                                   }
                                   echo '<a '.$link.'><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                               }
                           ?>
                        </div>
                        <div class="hang">
                        <?php
                               
                               foreach ($ghe8 as $g){
                                   if($g['trangthai']==1){
                                       $trangthai="hetcho";
                                       $link="";
                                   }else{
                                       $trangthai='';
                                       $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"';
                                   }
                                   echo '<a '.$link.'><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                               }
                           ?>
                        </div>
                        <div class="hang">
                        <?php
                               
                               foreach ($ghe9 as $g){
                                   if($g['trangthai']==1){
                                       $trangthai="hetcho";
                                       $link="";
                                   }else{
                                       $trangthai='';
                                       $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"';
                                   }
                                   echo '<a '.$link.'><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                               }
                           ?>
                        </div>
                        <div class="hang">
                        <?php
                               
                                foreach ($ghe10 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                        $link="";
                                    }else{
                                        $trangthai='';
                                        $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"';
                                    }
                                    echo '<a '.$link.'><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                        </div>
                        <div class="hang">
                        <?php
                               
                               foreach ($ghe11 as $g){
                                   if($g['trangthai']==1){
                                       $trangthai="hetcho";
                                       $link="";
                                   }else{
                                       $trangthai='';
                                       $link='href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"';
                                   }
                                   echo '<a '.$link.'><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                               }
                           ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <style>
            body{
                background:#333545;
            }
            .warp{
                background:#333545;
            }
            footer{
                margin-top:100px;
            }
        </style>