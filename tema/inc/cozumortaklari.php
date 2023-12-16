<!--client section start-->
<div class="client-section ptb-100">
    <div class="container">
        <!--clients logo start-->
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                    <?php
                    $cozumQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=58 && fotograf_durum=1");
                    if($cozumQuery->rowCount()){
                        $sayac = 0;
                        foreach($cozumQuery as $cozumRow){
                            $sayac++;

                            ?>
                            <div class="item single-client">
                                <img src="<?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?>" alt="<?php echo $cozumRow[$lehce."fotograf_shortDesc"];?>" class="client-img">
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!--clients logo end-->
    </div>
</div>
<!--client section start-->