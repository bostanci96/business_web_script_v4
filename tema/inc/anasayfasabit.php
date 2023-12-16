

        <section class="quick-menu qm-language-TR">
        <div class="center col-6 text-center" style=" display: grid;
    max-width: 665px!important;
    grid-template-columns: repeat(3,1fr);
    align-items: center;
    align-content: space-around;
    justify-content: space-evenly;">



                  <?php
                    $cozumQue = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=159753 && fotograf_durum=1");
                    if($cozumQue->rowCount()){
                        $sayac = 0;
                        foreach($cozumQue as $cozumR){
                            $sayac++;

                            ?>
                                                
            <div class="box">
                <a href="<?php echo $cozumR[$lehce."fotograf_shortDesc2"];?>" target="_blank" title="">
                     <span><?php echo $cozumR[$lehce."fotograf_shortDesc"];?></span>
                    <img src="<?php echo URL.'images/photos/big/'.$cozumR["fotograf_src"];?>" alt="">
                </a>
            </div>
            <?php
                        }
                    }
                    ?>


        </div>
    </section>