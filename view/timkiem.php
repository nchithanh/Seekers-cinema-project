
        <div class="trangtimkiem">
            <div class="khungketqua">
                <?php
                foreach($timkiem as $tk)
                {
                    if(isset($_SESSION['user'])){
                        $link='<a href="index.php?contro=detail&idphim='.$tk['id'].'">chi tiet</a>';
                    }else{
                        $link='<a href="index.php?contro=login">chi tiet</a>';
                    }
                    echo '<div class="ketqua">
                    <div class="hinhphim">
                        <img src="view/img/'.$tk['anhphim'].'" alt="">
                        <div class="chitiet">
                           '.$link.'
                        </div>
                    </div>
                    <div class="tenphim">
                        '.$tk['tenphim'].'
                    </div>
                </div>';
                }
                ?>
            </div>
        </div>
