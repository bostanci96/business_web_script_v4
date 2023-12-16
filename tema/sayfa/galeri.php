<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html id="ctl00_htmlid" xmlns="http://www.w3.org/1999/xhtml" lang="tr">
    <head>
        <title><?php echo $blok["desc8"];?> - <?php echo $ayar[$lehce."site_title"];?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
        <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
        <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
        <meta name="classification" content="<?php echo $blok["desc8"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
        <meta http-equiv="content-language" content="tr" />
        <meta name="distribution" content="Global" />
        <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
        <meta name="robots" content="all" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="7 days" />
        <meta name="country" content="Türkiye" />
        <link rel="canonical" href="<?php echo LURL;?>" />
        <meta property="og:title" content="<?php echo $blok["desc8"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
        <meta property="og:locale" content="tr_TR" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
        <meta property="og:url" content="<?php echo LURL;?>" />
        <meta property="og:site_name" content="<?php echo $blok["desc8"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
        <link rel="icon" href="<?php echo LURL;?>images/favicon.ico">
        <?php require_once(TEMA_INC.'inc/ust.php');?>
        
    </head>
    <body>
        
        <?php require_once(TEMA_INC.'inc/head.php');?>
        <section class="page-header">
            <div class="center">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="<?php echo LURL;?>" title="<?php echo $blokRowdil["desc9"];?>"><?php echo $blokRowdil["desc9"];?></a></li>
                        <li><a href="<?php echo LURL; ?>galeri/" title="<?php echo $blokRowdil["baslik9"];?>"><?php echo $blokRowdil["baslik9"];?></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="page">
            <div class="center p-20">
                <?php require_once(TEMA_INC.'inc/slidebar.php');?>
                <div class="content">
                    
                    
                    
                    <div id="ctl00_ContentPlaceHolder1_galeri" class="brand-product">
                        <h4><?php echo $blokRowdil["baslik9"];?></h4>
                        <div class="products col-5 gap-20  text-center">
                            
                            
                            <?php
                            $galQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=3 AND fotograf_durum=1");
                            if($galQuery->rowCount()){
                            foreach($galQuery as $galRow){
                            ?>
                            
                            
                            <div class="box">
                                <a href="<?php echo URL.'images/photos/big/'.$galRow["fotograf_src"];?>" title="<?php echo $galRow["fotograf_shortDesc"];?>" data-fancybox="gallery">
                                    <img src="<?php echo URL.'images/photos/big/'.$galRow["fotograf_src"];?>">
                                </a>
                                <small><?php echo $galRow["fotograf_shortDesc"];?></small>
                            </div>
                            
                            <?php }}?>
                            
                            
                            
                            
                        </div>
                    </div>
                    <?php require_once(TEMA_INC.'inc/paylas.php');?>
                </div>
            </div>
        </section>
        
        <?php require_once(TEMA_INC.'inc/footer.php');?>
    </body>
    <a href="#0" class="cd-top js-cd-top">Top</a>
    <?php require_once(TEMA_INC.'inc/alt.php');?>
</html>