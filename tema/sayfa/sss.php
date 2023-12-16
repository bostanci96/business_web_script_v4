<?php
if(isset($_GET["tur"])){
$urlSef = g("tur");
$sayfaControl = $db->prepare("SELECT * FROM fotograflar WHERE fotograf_sec=:id AND fotograf_durum=:durum AND fotograf_bolum=:bolum");
$sayfaControl ->bindParam("id",$urlSef,PDO::PARAM_STR,50);
$sayfaControl ->bindValue("durum",1,PDO::PARAM_INT);
$sayfaControl ->bindValue("bolum",7896,PDO::PARAM_INT);
$sayfaControl -> execute();
if($sayfaControl->rowCount()){
$sirketRow = $sayfaControl->fetch(PDO::FETCH_ASSOC);
}else{
header("Location:".LURL."404");exit();
}
}else{
header("Location:".LURL."404");exit();
}

if ($urlSef==0) {
  $title ="Yönetim Kurulu";
}else{
    $title = "Bölge Müdürlüğü";
}
?>
<!DOCTYPE html>
<html id="ctl00_htmlid" xmlns="http://www.w3.org/1999/xhtml" lang="tr">
  <head>
    <title><?php echo $title ;?> - <?php echo $ayar[$lehce."site_title"];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
    <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
    <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
    <meta name="classification" content="<?php echo $title ;?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta http-equiv="content-language" content="tr" />
    <meta name="distribution" content="Global" />
    <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
    <meta name="robots" content="all" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
    <meta name="country" content="Türkiye" />
    <link rel="canonical" href="<?php echo LURL;?>" />
    <meta property="og:title" content="<?php echo $title ;?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
    <meta property="og:url" content="<?php echo LURL;?>" />
    <meta property="og:site_name" content="<?php echo $title ;?> - <?php echo $ayar[$lehce."site_title"];?>" />
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
            <li><a href="javascript:void(0);" title="<?php echo $title;?>"><?php echo $title;?></a></li>

          </ul>
        </div>
      </div>
    </section>
<section class="page">
    <div class="center p-20">
          <?php require_once(TEMA_INC.'inc/slidebar.php');?>
        <div class="content">

            <div class="news">
                <h1><?php echo $title;?></h1>

                <div class="admins">


                            <?php
                            $galQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=7896 AND fotograf_durum=1 AND fotograf_sec ='$urlSef' ");
                            if($galQuery->rowCount()){
                                $say=0;
                            foreach($galQuery as $galRow){
                                 
                                  $say++;
                            ?>
                            
                            
                          
                            
                      
                   
                    <div class="admin-box">
                        <a href="javascript:;" title="" data-fancybox data-modal="true" data-src="#<?php echo $say; ?>">
                            <div class="admin-image">
                                <img src="<?php echo URL.'images/photos/thumb/'.$galRow["fotograf_src"];?>" alt="<?php echo $galRow["fotograf_shortDesc"];?>">
                            </div>
                            <div class="admin-content">
                                <span><?php echo $galRow["fotograf_shortDesc"];?></span>
                                <small><?php echo $galRow["fotograf_shortDesc2"];?></small>
                                <small></small>
                            </div>
                        </a>
                    </div>


                    <!--Yönetim-->
                    <div class="bio" id="<?php echo $say; ?>">
                        <div class="admin-profile">
                            <div class="admin-box">
                                <div class="admin-image">
                                    <img src="<?php echo URL.'images/photos/big/'.$galRow["fotograf_src"];?>" alt="<?php echo $galRow["fotograf_shortDesc"];?>">
                                </div>
                            </div>
                        </div>
                        <div class="admin-bio">
                            <h3><?php echo $galRow["fotograf_shortDesc"];?></h3>
                            <small><?php echo $galRow["fotograf_shortDesc2"];?></small>
                            <p>
                               <?php echo $galRow["fotograf_longDesc"];?>
                            </p>
                            <a data-fancybox-close="" class="close-fb">X</a>
                        </div>
                    </div>

 <?php }}?>



                </div>

                <p></p>
            </div>


            <div class="information">
                <div id="information">



                </div>

            </div>







        </div>
    </div>
</section>


<?php require_once(TEMA_INC.'inc/footer.php');?>
</body>
<a href="#0" class="cd-top js-cd-top">Top</a>
<?php require_once(TEMA_INC.'inc/alt.php');?>
</html>