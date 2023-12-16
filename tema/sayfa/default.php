<!DOCTYPE html>
<html id="ctl00_htmlid" xmlns="http://www.w3.org/1999/xhtml" lang="tr">
    <head>
        <title><?php echo $ayar[$lehce."site_title"];?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
        <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
        <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
        <meta name="classification" content="<?php echo $ayar[$lehce."site_title"];?>" />
        <meta http-equiv="content-language" content="tr" />
        <meta name="distribution" content="Global" />
        <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
        <meta name="robots" content="all" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="7 days" />
        <meta name="country" content="Türkiye" />
        <link rel="canonical" href="<?php echo LURL;?>" />
        <meta property="og:title" content="<?php echo $ayar[$lehce."site_title"];?>" />
        <meta property="og:locale" content="tr_TR" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
        <meta property="og:url" content="<?php echo LURL;?>" />
        <meta property="og:site_name" content="<?php echo $ayar[$lehce."site_title"];?>" />
        <link rel="icon" href="<?php echo LURL;?>images/favicon.ico">
        <?php require_once(TEMA_INC.'inc/ust.php');?>
    </head>
    <body>
        
        <?php require_once(TEMA_INC.'inc/head.php');?>
        <?php require_once(TEMA_INC.'inc/slide.php');?>
        <?php require_once(TEMA_INC.'inc/anasayfasabit.php');?>
        <?php require_once(TEMA_INC.'inc/anasayfablog.php');?>
        <?php require_once(TEMA_INC.'inc/neleryaptik.php');?>
    </section>
    <?php require_once(TEMA_INC.'inc/footer.php');?>
</body>
<a href="#0" class="cd-top js-cd-top">Top</a>
<?php require_once(TEMA_INC.'inc/alt.php');?>
</html>