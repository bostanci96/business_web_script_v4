<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
  <title><?php echo $blok["desc25"];?> - <?php echo $ayar[$lehce."site_title"];?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
  <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
  <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
  <meta name="classification" content="<?php echo $blok["desc25"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <meta http-equiv="content-language" content="tr" />
  <meta name="distribution" content="Global" />
  <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
  <meta name="robots" content="all" />
  <meta name="robots" content="index, follow" />
  <meta name="revisit-after" content="7 days" />
  <meta name="country" content="Türkiye" />
  <link rel="canonical" href="<?php echo LURL;?>" />
  <meta property="og:title" content="<?php echo $blok["desc25"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <meta property="og:locale" content="tr_TR" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
  <meta property="og:url" content="<?php echo LURL;?>" />
  <meta property="og:site_name" content="<?php echo $blok["desc25"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <link rel="icon" href="<?php echo LURL;?>images/favicon.ico">
  <?php require_once(TEMA_INC.'inc/ust.php');?>
</head>
<body>
 <!--loader start-->
 <div id="preloader">
  <div class="loader1">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
<!--loader end-->
<?php require_once(TEMA_INC.'inc/head.php');?>









<!--body content wrap start-->
<div class="main">

  <!--header section start-->
  <section class="hero-section ptb-100 gradient-overlay"
  style="background: url('<?php echo TEMA_URL;?>ast/img/header-bg-5.jpg')no-repeat center center / cover;padding-bottom: 40px;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-7">
        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
          <h1 class="text-white mb-0"><?php echo $blokRowdil["baslik25"]; ?></h1>
          <div class="custom-breadcrumb">
            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
              <li class="list-inline-item breadcrumb-item"><a href="<?php echo LURL; ?>"><?php echo $blokRowdil["baslik5"]; ?></a></li>
              <li class="list-inline-item breadcrumb-item active"><?php echo $blokRowdil["baslik25"]; ?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--header section end-->



<!--services section start-->
<section class="services-section ptb-100 gray-light-bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="section-heading text-center mb-4">
          <h2><?php echo $blokRowdil["baslik26"]; ?></h2>
          <p class="lead"><?php echo $blokRowdil["desc26"]; ?></p>
        </div>
      </div>
    </div>
    <div class="row">




      <?php
      $haberQuery = $db->query("SELECT * FROM sayfalar WHERE sayfa_durum=1 AND secenekHaber=2 ORDER BY sayfa_id DESC ");
      if( $haberQuery->rowCount() ){
        foreach($haberQuery as $haberRow){
         $haberUrl = LURL.$haberRow["sayfa_url"].'/';
         ?>






         <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
            <div class="service-icon mr-4" style="width: 50%;">
              <img  src="<?php echo URL.'images/sayfalar/big/'.$haberRow["sayfa_resim"];?>" class="card-img-top position-relative img-fluid" alt="<?php echo $haberRow[$lehce."sayfa_adi"];?>">
            </div>
            <div class="services-content-wrap">
              <h5><?php echo $haberRow[$lehce."sayfa_adi"];?></h5>
              <p class="mb-0"><?php echo $haberRow[$lehce."sayfa_desc"];?></p>
              <a href="<?php echo $haberUrl;?>" class="detail-link mt-3"><?php echo $blokRowdil["baslik27"]; ?> <span class="ti-arrow-right"></span></a>
            </div>
          </div>
        </div>


        <?php
      }
    }?>


  </div>
</div>
</section>
<!--services section end-->

</div>
<!--body content wrap end-->

<?php require_once(TEMA_INC.'inc/iletisimegechizmet.php');?>
<?php require_once(TEMA_INC.'inc/cozumortaklari.php');?>


<?php require_once(TEMA_INC.'inc/footer.php');?>
<?php require_once(TEMA_INC.'inc/alt.php');?>
</body>
</html>
