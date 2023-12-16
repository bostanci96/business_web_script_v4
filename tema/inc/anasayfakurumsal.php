
<!--promo section start-->
<section class="promo-block ptb-100 mt--165 z-index position-relative">
    <div class="container">
        <div class="row">
          <?php
          $sabitQuery = $db->query("SELECT * FROM sayfalar WHERE sayfa_durum=1 AND secenekHaber=3 ORDER BY sayfa_id DESC LIMIT 0,3");
          if( $sabitQuery->rowCount() ){
            $say=0;
            foreach($sabitQuery as $sabitRow){
                $say++;
                $haberUrl = LURL.$sabitRow["sayfa_url"].'/';
                ?>
                <div class="col-md-4 col-lg-4">
                    <div class="single-promo-block promo-hover-bg-<?php echo $say;?> hover-image shadow-lg p-5 custom-radius white-bg">
                        <div class="promo-block-icon mb-3">
                            <span class="fab fa-superpowers icon-md color-primary"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5><?php echo $sabitRow[$lehce."sayfa_adi"];?></h5>
                            <p><?php echo $sabitRow[$lehce."sayfa_desc"];?></p>
                        </div>
                    </div>
                </div>
                <style type="text/css">
                    .promo-hover-bg-<?php echo $say;?>:before {
                        background-image: url(<?php echo URL.'images/sayfalar/big/'.$sabitRow["sayfa_resim"];?>);
                    }
                </style>
                <?php
            }
        }?>
    </div>
</div>
</section>
<!--promo section end-->
