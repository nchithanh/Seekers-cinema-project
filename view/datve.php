
        <div class="phongchieu">
            <div class="chuthich">
                <div class="giaithich">
                    <div class="box1"></div>
                    <span>Hết chỗ</span>
                </div>
                <div class="giaithich">
                    <div class="box2"></div>
                    <span>Còn chỗ</span>
                </div>
                <div class="giaithich">
                    <div class="box2"></div>
                    <span><?php echo $phongchieu['tenphong']; ?></span>
                </div>
                <form action="" method="post">
                    <input type="number" name="iduser" value="<?php echo ''.$_SESSION['id'].''; ?>" style="display: none;">
                    <input type="submit" name="chonlai" value="Chọn lại phim">
                </form>
            </div>
           
            <div class="chongoi">
                <div class="manhinh"></div>
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
                                    }else{
                                        $trangthai='';
                                    }
                                    echo '<a href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                           

                            
                        </div>
                        <div class="hang">
                        <?php
                                foreach ($ghe2 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                    }else{
                                        $trangthai='';
                                    }
                                    echo '<a href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                        </div>
                        <div class="hang">
                        <?php
                                foreach ($ghe3 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                    }else{
                                        $trangthai='';
                                    }
                                    echo '<a href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                        </div>
                        <div class="hang">
                        <?php
                                foreach ($ghe4 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                    }else{
                                        $trangthai='';
                                    }
                                    echo '<a href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                        </div>
                        <div class="hang">
                        <?php
                                foreach ($ghe5 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                    }else{
                                        $trangthai='';
                                    }
                                    echo '<a href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                        </div>
                        <div class="hang">
                        <?php
                                foreach ($ghe6 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                    }else{
                                        $trangthai='';
                                    }
                                    echo '<a href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                        </div>
                        <div class="hang">
                        <?php
                                foreach ($ghe7 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                    }else{
                                        $trangthai='';
                                    }
                                    echo '<a href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                        </div>
                        <div class="hang">
                        <?php
                                foreach ($ghe8 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                    }else{
                                        $trangthai='';
                                    }
                                    echo '<a href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                        </div>
                        <div class="hang">
                        <?php
                                foreach ($ghe9 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                    }else{
                                        $trangthai='';
                                    }
                                    echo '<a href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                        </div>
                        <div class="hang">
                        <?php
                                foreach ($ghe10 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                    }else{
                                        $trangthai='';
                                    }
                                    echo '<a href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                        </div>
                        <div class="hang">
                        <?php
                                foreach ($ghe11 as $g){
                                    if($g['trangthai']==1){
                                        $trangthai="hetcho";
                                    }else{
                                        $trangthai='';
                                    }
                                    echo '<a href="index.php?contro=thanhtoan&idrap='.$loadthanhtoan['idrap'].'&phongchieu='.$phongchieu['id'].'&phim='.$loadthanhtoan['idphim'].'&idsuatchieu='.$loadthanhtoan['idsuatchieu'].'&idghe='.$g['id'].'"><div id="'.$trangthai.'" class="box">'.$g['ghe'].'</div></a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
