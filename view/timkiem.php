
        <div class="trangtimkiem">
            <div class="khungketqua">
                <?php
                foreach($timkiem as $tk)
                {
                    echo '<div class="ketqua">
                    <div class="hinhphim">
                        <img src="img/'.$tk['anhphim'].'" alt="">
                        <div class="chitiet">
                            <a href="">chi tiet</a>
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
