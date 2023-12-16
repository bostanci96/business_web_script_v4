<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<?php
if(isset($_GET["kategori"])){
  $urunGet = $_GET["kategori"];

  $kategori = explode ("/",$urunGet);
  $kategoriid=$kategori[0];
  $kategoriurl=$kategori[1];

  $kategoriControl = $db->prepare("SELECT * FROM kategoriler WHERE kategori_url=:url and kategori_id=:id AND kategori_durum=:durum");
  $kategoriControl ->bindParam("url",$kategoriurl,PDO::PARAM_STR);
  $kategoriControl ->bindParam("id",$kategoriid,PDO::PARAM_INT);
  $kategoriControl ->bindValue("durum",1,PDO::PARAM_INT);
  $kategoriControl ->execute();
  if( $kategoriControl->rowCount() ){
    $kategoriRow = $kategoriControl->fetch(PDO::FETCH_ASSOC);
    $title     = $kategoriRow[$lehce."kategori_adi"];
    $description = $kategoriRow[$lehce."kategori_desc"];
    $checked   = true;
    $kategori_id = $kategoriRow["kategori_id"];
    $kategori_ust_id = $kategoriRow["kategori_ust_id"];
    require(TEMA_INC.'urun/broadcrumb.php');
  }else{
    $broadCrumb = '<li class="list-inline-item breadcrumb-item"><a href="'.LURL.'"  title="'. $blok["baslik5"].'"> '. $blok["baslik5"].' </a></li>';
    $broadCrumb .= '<li class="list-inline-item breadcrumb-item active">'.$blok["baslik22"].'</li>';
    $title = $blok["baslik22"]." - ".$ayar["site_title"];
    $description = $ayar[$lehce."site_desc"];
    $kategoriRow[$lehce."kategori_adi"] = $blok["baslik22"];
    
  }
}else{
  $broadCrumb = '<li class="list-inline-item breadcrumb-item"><a href="'.LURL.'"  title="'. $blok["baslik5"].'"> '. $blok["baslik5"].' </a></li>';
  $broadCrumb .= '<li class="list-inline-item breadcrumb-item active">'.$blok["baslik22"].'</li>';
  $title = $blok["baslik22"];
  $description = $ayar[$lehce."site_desc"];
  $kategoriRow[$lehce."kategori_adi"] = $blok["baslik22"];
}
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
  <meta http-equiv="Content-Type" content="text/html" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">
  <title><?php echo $kategoriRow[$lehce."kategori_adi"];?> - <?php echo $ayar[$lehce."site_title"];?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" itemprop="description" content="<?php echo $description;?>" />
  <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
  <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
  <meta name="classification" content="<?php echo $kategoriRow[$lehce."kategori_adi"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <meta http-equiv="content-language" content="tr" />
  <meta name="distribution" content="Global" />
  <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
  <meta name="robots" content="all" />
  <meta name="robots" content="index, follow" />
  <meta name="revisit-after" content="7 days" />
  <meta name="country" content="Türkiye" />
  <link rel="canonical" href="<?php echo LURL;?>" />
  <meta property="og:title" content="<?php echo $kategoriRow[$lehce."kategori_adi"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <meta property="og:locale" content="tr_TR" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="<?php echo $description;?>" />
  <meta property="og:url" content="<?php echo LURL;?>" />
  <meta property="og:site_name" content="<?php echo $kategoriRow[$lehce."kategori_adi"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <meta content="telephone=no" name="format-detection">
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
          <h1 class="text-white mb-0"><?php echo $blokRowdil["baslik22"]; ?></h1>
          <div class="custom-breadcrumb">
            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
              <?php echo $broadCrumb;?>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--header section end-->


<!--our work or portfolio section start-->
<section class="services-section ptb-100 white-light-bg">
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
          if(isset($checked)){
            $urunSorgu = $db->prepare("SELECT * FROM urunler 
              INNER JOIN kategoriler ON urun_kategori=kategori_id
              INNER JOIN urunresim   ON urun_id=resim_urun_id
              WHERE kategori_id=:id AND urun_durum=:durum
              GROUP BY (urun_id) ORDER BY urun_sira_no");
            $urunSorgu -> bindParam("id",$kategoriid,PDO::PARAM_STR);
            $urunSorgu -> bindValue("durum",1,PDO::PARAM_INT);
            $urunSorgu -> execute();
            if($urunSorgu->rowCount()){
              $sayac=0;
              foreach($urunSorgu as $urunRow){
                $sayac++;
                $link = LURL."urun-detay/".$urunRow["urun_url"]."/";
                require(TEMA_INC.'urun/urunlerUrunSingle.php');
              }
            }else{
              $altCatQuery = $db->prepare("SELECT * FROM kategoriler 
                WHERE kategori_ust_id=:ust_kategori AND kategori_durum=:durum");
              $altCatQuery -> bindParam("ust_kategori",$kategori_id,PDO::PARAM_INT);
              $altCatQuery -> bindValue("durum",1,PDO::PARAM_INT);
              $altCatQuery -> execute();
              if($altCatQuery->rowCount()){
                $sayac=0;
                foreach($altCatQuery as $altCatRow){
                  $sayac++;
                  $link = LURL."kategoriler/".$altCatRow["kategori_id"]."/".$altCatRow["kategori_url"]."/";
                  require(TEMA_INC.'urun/urunlerKategoriSingle.php');
                }
              }else{
                echo 'Bu kategoride ürün girişi yapılmamış..';
              }
            }
          }else{
            $altCatQuery = $db->prepare("SELECT * FROM kategoriler 
              WHERE kategori_ust_id=:ust_kategori AND kategori_durum=:durum");
            $altCatQuery -> bindValue("ust_kategori",0,PDO::PARAM_INT);
            $altCatQuery -> bindValue("durum",1,PDO::PARAM_INT);
            $altCatQuery -> execute();
            if($altCatQuery->rowCount()){
              $sayac=0;
              foreach($altCatQuery as $altCatRow){
                $sayac++;
                $link = LURL."kategoriler/".$altCatRow["kategori_id"]."/".$altCatRow["kategori_url"]."/";
                require(TEMA_INC.'urun/urunlerKategoriSingle.php');
              }
            }else{
              echo 'Bu kategoride ürün girişi yapılmamış..';
            }
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











<?php require_once(TEMA_INC.'inc/neleryaptik.php');?>

<?php require_once(TEMA_INC.'inc/formiletisim.php');?>

<?php require_once(TEMA_INC.'inc/cozumortaklari.php');?>

</div>
<?php require_once(TEMA_INC.'inc/footer.php');?>
<?php require_once(TEMA_INC.'inc/alt.php');?>
</body>
</html>
