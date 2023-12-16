<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<?php
if(isset($_GET["id"])){
$urlSef = g("id");
$sayfaControl = $db->prepare("SELECT * FROM fotograflar WHERE fotograf_id=:id AND fotograf_durum=:durum");
$sayfaControl ->bindParam("id",$urlSef,PDO::PARAM_STR,50);
$sayfaControl ->bindValue("durum",1,PDO::PARAM_INT);
$sayfaControl -> execute();
if($sayfaControl->rowCount()){
$sirketRow = $sayfaControl->fetch(PDO::FETCH_ASSOC);
}else{
header("Location:".LURL."404");exit();
}
}else{
header("Location:".LURL."404");exit();
}
?>
<!DOCTYPE html>
<html id="ctl00_htmlid" xmlns="http://www.w3.org/1999/xhtml" lang="tr">
  <head>
    <title><?php echo $sirketRow["fotograf_shortDesc"];?> - <?php echo $ayar[$lehce."site_title"];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
    <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
    <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
    <meta name="classification" content="<?php echo $sirketRow["fotograf_shortDesc"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta http-equiv="content-language" content="tr" />
    <meta name="distribution" content="Global" />
    <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
    <meta name="robots" content="all" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
    <meta name="country" content="Türkiye" />
    <link rel="canonical" href="<?php echo LURL;?>" />
    <meta property="og:title" content="<?php echo $sirketRow["fotograf_shortDesc"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
    <meta property="og:url" content="<?php echo LURL;?>" />
    <meta property="og:site_name" content="<?php echo $sirketRow["fotograf_shortDesc"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <link rel="icon" href="<?php echo LURL;?>images/favicon.ico">
    <?php require_once(TEMA_INC.'inc/ust.php');?>
    <script src="https://api-maps.yandex.ru/2.1/?lang=tr_TR" type="text/javascript"></script>
  </head>
  <body>
    
    <?php require_once(TEMA_INC.'inc/head.php');?>
    
    <section class="page-header">
      <div class="center">
        <div class="breadcrumbs">
          <ul>
            <li><a href="<?php echo LURL;?>" title="<?php echo $blokRowdil["desc9"];?>"><?php echo $blokRowdil["desc9"];?></a></li>
            <li><a href="<?php echo LURL; ?>firmalar/" title="<?php echo $blokRowdil["desc11"];?>"><?php echo $blokRowdil["desc11"];?></a></li>
            <li><a href="javascript:void(0);" title="<?php echo $sirketRow["fotograf_shortDesc"];?>"><?php echo $sirketRow["fotograf_shortDesc"];?></a></li>
          </ul>
        </div>
      </div>
    </section>
    <section class="page">
      <div class="center p-20">
        <div class="brand-logo">
          <img src="<?php echo URL.'images/photos/big/'.$sirketRow["fotograf_src"];?>" alt="<?php echo $sirketRow["fotograf_shortDesc"];?>">
        </div>
        <div class="brand-detail col-2 gap-40">
          <div class="brand-content">
            <h3><?php echo $sirketRow["fotograf_shortDesc"];?></h3>
            <div>
              <div><?php echo $blokRowdil["baslik12"]; ?>&nbsp;<?php echo $sirketRow["fotograf_longDesc"];?></div>
              <div><?php echo $blokRowdil["desc12"]; ?>&nbsp;<?php echo $sirketRow["fotograf_href"];?></div>
              <div><?php echo $blokRowdil["baslik13"]; ?>&nbsp;<?php echo $sirketRow["fotograf_bolum2"];?></div>
              <div><?php echo $blokRowdil["desc13"]; ?>&nbsp;<a href="<?php echo $sirketRow["fotograf_shortDesc2"];?>" style="background-color: #ffffff;"><?php echo $sirketRow["fotograf_shortDesc2"];?></a></div>
              <div><?php echo $blokRowdil["baslik14"]; ?>&nbsp;<span style="font-family: industry, sans-serif; font-size: 16px; color: #6b6b6b;"><?php echo $sirketRow["fotograf_sec"];?></span><br><?php echo $blokRowdil["baslik17"]; ?>&nbsp;<?php echo $sirketRow["fotograf_kordi"];?>
            </div>
          </div>
        </div>
        <div class="brand-about">
          <h3><?php echo $blokRowdil["desc14"]; ?></h3>
          <small><strong><?php echo $blokRowdil["baslik15"]; ?></strong> <?php echo $sirketRow["fotograf_sayfa_id"];?></small>
          <p></p>
        </div>
      </div>
      <div class="brand-tab">
        <div id="brand-tab" class="ui-tabs ui-corner-all ui-widget ui-widget-content">
          <div class="office-menu">
            <ul role="tablist" class="ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header">
              <li role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="office-288" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#office-288" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-1"><?php echo $blokRowdil["desc15"]; ?></a></li>
            </ul>
          </div>
          <div id="office-288" class="col-2 gap-40 ui-tabs-panel ui-corner-bottom ui-widget-content" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
            <div class="brand-address">
              <h4><?php echo $blokRowdil["baslik16"]; ?></h4>
              <div><?php echo $blokRowdil["baslik12"]; ?>&nbsp;<?php echo $sirketRow["fotograf_longDesc"];?></div>
              <div><?php echo $blokRowdil["desc12"]; ?>&nbsp;<?php echo $sirketRow["fotograf_href"];?></div>
              <div><?php echo $blokRowdil["baslik13"]; ?>&nbsp;<?php echo $sirketRow["fotograf_bolum2"];?></div>
              <div><?php echo $blokRowdil["desc13"]; ?>&nbsp;<a href="<?php echo $sirketRow["fotograf_shortDesc2"];?>" style="background-color: #ffffff;"><?php echo $sirketRow["fotograf_shortDesc2"];?></a></div>
              <div><?php echo $blokRowdil["baslik14"]; ?>&nbsp;<span style="font-family: industry, sans-serif; font-size: 16px; color: #6b6b6b;"><?php echo $sirketRow["fotograf_sec"];?></span><br><?php echo $blokRowdil["baslik17"]; ?>&nbsp;<?php echo $sirketRow["fotograf_kordi"];?>
            </div>
          </div>
           <div id="brand-map100" class="brand-map">
            <h4><?php echo $blokRowdil["desc16"]; ?></h4>

                             
                                
                                        <script>
                                            ymaps.ready(init);

                                            function init() {
                                                var myMap = new ymaps.Map("brand-map100", {
                                                    center: [<?php echo $sirketRow["fotograf_kordi"];?>],
                                                    zoom: 17
                                                }, {
                                                    searchControlProvider: 'yandex#search'
                                                }),
                                                    myPlacemark = new ymaps.Placemark([<?php echo $sirketRow["fotograf_kordi"];?>], {
                                                        // In order for the balloon and hint to open on the placemark, you need to set certain properties.
                                                        //balloonContentHeader: "The placemark balloon",
                                                        //balloonContentBody: "Content of the <em>placemark</em> balloon",
                                                        //balloonContentFooter: "Basement",
                                                        //hintContent: "The placemark hint"
                                                    });

                                                myMap.geoObjects.add(myPlacemark);

                                                // Opening the balloon on the map (without binding to the geo object).
                                                myMap.balloon.open([<?php echo $sirketRow["fotograf_kordi"];?>], "Merkez", {
                                                    // Option: do not show the close button.
                                                    closeButton: false
                                                });

                                                // Showing the hint on the map (without binding to the geo object).
                                                myMap.hint.open(myMap.getCenter(), "", {
                                                    // Option: delay before opening.
                                                    openTimeout: 1500
                                                });
                                            }

                                        </script>

                                </div>
        </div>
      </div>
      <?php require_once(TEMA_INC.'inc/paylas.php');?>
    </div>
  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="<?php echo TEMA_URL;?>ast/js/datatables.js"></script>
<script src="<?php echo TEMA_URL;?>ast/js/func.js"></script>
<script src="<?php echo TEMA_URL;?>ast/js/main.js"></script>
<script src="<?php echo TEMA_URL;?>ast/js/menu.js"></script>

<?php require_once(TEMA_INC.'inc/footer.php');?>
</body>
<a href="#0" class="cd-top js-cd-top">Top</a>
<?php require_once(TEMA_INC.'inc/alt.php');?>
</html>