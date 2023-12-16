

 <section class="slider">
        <div class="slider-container">

            <div class="swiper-wrapper">

                    <?php
                    $slideQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=1 && fotograf_durum=1");
                    if($slideQuery->rowCount()){
                        $sayac = 0;
                        foreach($slideQuery as $slideRow){
                            $sayac++;

                            ?>
                       
                    <?php if ($slideRow[$lehce."fotograf_sec"]=="1") { ?>
                        <div class='swiper-slide video'>
                    <video src='<?php echo $slideRow[$lehce."fotograf_shortDesc"];?>' autoplay muted></video>
                </div>
                 <?php   }else{ ?> 
                <div class='swiper-slide video'>
                    <img src='<?php echo URL.'images/photos/big/'.$slideRow["fotograf_src"];?>'>
                </div>


                        <?php
                        }
                        }
                    }
                    ?>
                      </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>