
<!--our work or portfolio section start-->
<section class="our-portfolio-section ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-heading text-center mb-5">
                    <h2><?php echo $blokRowdil["baslik22"]; ?></h2>
                    <p class="lead"><?php echo $blokRowdil["desc22"]; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
               
                <div class="portfolio-container" id="MixItUp">



                    <?php

                    $urunSorgu = $db->prepare("SELECT * FROM urunler 
                      INNER JOIN urunresim   ON urun_id=resim_urun_id
                      WHERE urun_populer=:pop AND urun_durum=:durum
                      GROUP BY (urun_id) ORDER BY urun_sira_no");
                    $urunSorgu -> bindValue("pop",1,PDO::PARAM_INT);
                    $urunSorgu -> bindValue("durum",1,PDO::PARAM_INT);
                    $urunSorgu -> execute();
                    if($urunSorgu->rowCount()){
                      $sayac=0;
                      foreach($urunSorgu as $urunRow){
                        $sayac++;
                        $link = LURL."urun-detay/".$urunRow["urun_url"]."/"; ?>
                        <div class="mix portfolio-item branding" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="<?php echo $link;?>">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="<?php echo URL;?>images/urunler/big/<?php echo $urunRow["urun_img"];?>" alt="<?php echo $urunRow[$lehce."urun_adi"];?>"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1"><?php echo $urunRow[$lehce."urun_adi"];?></h5>
                                        <p><?php echo $urunRow[$lehce."urun_icerik"];?></p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php     }
                }




                ?>
                



                <div class="gap"></div>
                <div class="gap"></div>
                <div class="gap"></div>
            </div>
        </div>
    </div>
</div>
</section>
<!--our work or portfolio section end-->
