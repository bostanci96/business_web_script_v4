


 <section class="news home-news n-language-TR">
        <div class="center">
            <h3><?php echo $blokRowdil["baslik4"]; ?></h3>
            <div class="boxes col-4 gap-20 text-center">

            <?php
            $haberQuery = $db->query("SELECT * FROM sayfalar WHERE sayfa_durum=1 AND secenekHaber=1 OR secenekHaber=2 OR secenekHaber=3 ORDER BY sayfa_id DESC LIMIT 0,8");
            if( $haberQuery->rowCount() ){
                foreach($haberQuery as $haberRow){
                   $haberUrl = LURL.$haberRow["sayfa_url"].'/';
                   ?>



                <div class="box" data-text="<?php if($haberRow[$lehce."secenekHaber"]==1){ echo"Haber";}elseif($haberRow[$lehce."secenekHaber"]==2){ echo "Duyuru";}else{ echo "İhale";} ?>">
                    <a href="<?php echo $haberUrl;?>" title="<?php echo $haberRow[$lehce."sayfa_adi"];?>">
                                <img src="<?php echo URL.'images/sayfalar/big/'.$haberRow["sayfa_resim"];?>" alt="<?php echo $haberRow[$lehce."sayfa_adi"];?>">
                                <small><?php echo $haberRow[$lehce."sayfa_adi"];?></small>
                            </a>
                </div>

 <?php
        }
    }?>



            </div>
        </div>
        <div class="center text-center">
            <a href="<?php echo LURL;?>haberler/" title="" class="btn btn-blue"><?php echo $blokRowdil["desc4"]; ?></a>
        </div>
    </section>