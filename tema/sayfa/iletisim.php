<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html id="ctl00_htmlid" xmlns="http://www.w3.org/1999/xhtml" lang="tr">
  <head>
    <title><?php echo $blok["baslik5"];?> - <?php echo $ayar[$lehce."site_title"];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
    <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
    <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
    <meta name="classification" content="<?php echo $blok["baslik5"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta http-equiv="content-language" content="tr" />
    <meta name="distribution" content="Global" />
    <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
    <meta name="robots" content="all" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
    <meta name="country" content="Türkiye" />
    <link rel="canonical" href="<?php echo LURL;?>" />
    <meta property="og:title" content="<?php echo $blok["baslik5"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
    <meta property="og:url" content="<?php echo LURL;?>" />
    <meta property="og:site_name" content="<?php echo $blok["baslik5"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <link rel="icon" href="<?php echo LURL;?>images/favicon.ico">
    <?php require_once(TEMA_INC.'inc/ust.php');?>
    
  </head>
  <body>
    
    <?php require_once(TEMA_INC.'inc/head.php');?>
    <section class="page">
      <div class="center p-20">
        <div class="col-2 gap-40">
          <div class="address">
            <h1><?php echo $blokRowdil["desc5"]; ?></h1>
              <p>
                    <strong><?php echo $blokRowdil["desc1"]; ?></strong>
                    <a href="javascript:void(0)" target="_blank"><?php echo $ayar["adres"];?></a>
                </p>
                <p>
                    <strong><?php echo $blokRowdil["baslik2"]; ?></strong>
                    <a href="tel:<?php echo $ayar["telefon"];?>"><?php echo $ayar["telefon"];?></a>
                  </p>
                   <p> <strong><?php echo $blokRowdil["desc2"]; ?></strong>
                    <a href="tel:<?php echo $ayar["faks"];?>"><?php echo $ayar["faks"];?></a> 
                  </p>
<p>
                    <strong><?php echo $blokRowdil["baslik3"]; ?></strong>
                    <a href="mailto:<?php echo $ayar["email"];?>"><?php echo $ayar["email"];?></a>

                </p>
            <p><?php echo $blokRowdil["baslik6"]; ?></p>
            <p><?php echo $blokRowdil["desc6"]; ?></p>
            <p><?php echo $blokRowdil["baslik7"]; ?></p>
          </div>




          <div class="information-form">
            <h1><?php echo $blokRowdil["baslik8"]; ?></h1>
            <form id="mainFormIletisim" data-toggle="validator" role="form" novalidate="true">
            <!--  <select class="form-control" id="birimsecimi" name="birimsecimi">
                <option value="info@aosb.org.tr">İLGİLİ BİRİMİ SEÇİNİZ</option>
                <option value="s.yesildogan@aosb.org.tr">ASO KOSGEB ÇEVRE LABORATUVARI</option>
                <option value="aosb@aosb.org.tr">ASO-SEM KOORDİNATÖRLÜĞÜ</option>
                <option value="d.ertemiz@aosb.org.tr">BİLGİ İŞLEM VE HABERLEŞME MÜDÜRLÜĞÜ</option>
                <option value="s.yesildogan@aosb.org.tr;m.soy@aosb.org.tr">ÇEVRE YÖNETİM BİRİMİ</option>
                <option value="m.soy@aosb.org.tr">ÇEVRE VE TEMİZLİK İŞLERİ MÜDÜRLÜĞÜ</option>
                <option value="s.yesildogan@aosb.org.tr">ÇEVRESEL RİSK DEĞERLENDİRME VE ATIK YÖNETİM MERKEZİ</option>
                <option value="a.tercan@aosb.org.tr">DOĞALGAZ İŞLETME MÜDÜRLÜĞÜ</option>
                <option value="l.sari@aosb.org.tr">EĞİTİM İŞTİRAKLERİ VE KURUMSAL İLETİŞİM KOORDİNATÖRLÜĞÜ</option>
                <option value="s.karapinar@aosb.org.tr">ENERJİ İŞLETME MÜDÜRLÜĞÜ</option>
                <option value="b.ozdemir@aosb.org.tr">İDARİ İŞLER ŞEFLİĞİ</option>
                <option value="a.kacar@aosb.org.tr">İMAR MÜDÜRLÜĞÜ</option>
                <option value="e.ugurluoglu@aosb.org.tr">İNŞAAT VE ALTYAPI İŞLERİ MÜDÜRLÜĞÜ</option>
                <option value="e.akyoler@aosb.org.tr">İŞKUR İSTİHDAM OFİSİ</option>
                <option value="s.korkmaz@aosb.org.tr">MALİ İŞLER MÜDÜRLÜĞÜ</option>
                <option value="c.yilmaz@aosb.org.tr">PERSONEL VE ÖZLÜK İŞLERİ ŞEFLİĞİ</option>
                <option value="k.sunal@aosb.org.tr">PROJE YÖNETİM KOORDİNATÖRLÜĞÜ</option>
                <option value="e.erdal@aosb.org.tr">SATIN ALMA ŞEFLİĞİ</option>
                <option value="r.poyraz@aosb.org.tr">SİCİL VE YAZI İŞLERİ ŞEFLİĞİ</option>
                <option value="a.g.misirdali@aosb.org.tr">TİCARET MERKEZİ YÖNETİM İŞLETME MÜDÜRLÜĞÜ</option>
              </select>-->
              <div class="col-2 gap-20">
                <input type="text" class="form-control" placeholder="İsim Soyisim" id="isim" name="isim" required="">
                <input type="text" class="form-control" placeholder="Firma" id="firma" name="firma" required="">
              </div>
              <div class="col-2 gap-20">
                <input type="text" class="form-control" placeholder="Telefon" id="telefon" name="telefon" required="">
                <input type="text" class="form-control" placeholder="E-Mail" id="eposta" name="eposta" required="">
              </div>
              <div class="col-2 gap-20">
                <input type="text" class="form-control" placeholder="Adres" id="adres" name="adres">
                <select class="form-control" id="konusu" name="konusu">
                  <option>İletişim Konusu Seçiniz</option>
                  <option>Altyapı</option>
                  <option>Üstyapı</option>
                  <option>Temizlik İşleri</option>
                  <option>Firma Temsilcisi</option>
                  <option>Genel</option>
                </select>
              </div>
              <textarea class="form-control" placeholder="Mesaj" id="mesaj" name="mesaj"></textarea>
              <b>“Kişisel verilerimin neden ve nerelerden toplandığı, nasıl kullanıldığı ve diğer haklarımla ilgili olarak Kişisel Verilerin Korunması Kanunu uyarınca yapılan <a href="http://aosb.org.tr/34/aydinlatma-metni" target="_blank">bilgilendirmeyi</a> okudum. Bu kapsamda kişisel verilerimin, pazarlama süreçlerinin planlanması ve icrası amacıyla; ASO 1. OSB tarafından sunulan ürün ve hizmetlerin beğenilerime, kullanım alışkanlıklarıma ve ihtiyaçlarıma göre özelleştirilmesi için işlenmesini ve bu kapsamda aşağıda belirtilen iletişim bilgilerime reklam, promosyon, kampanya ve benzeri ticari elektronik iletilerin gönderilmesini kabul ediyorum.”</b>
              <label class="agree">
                <input type="checkbox" checked="" required="">
                Kabul Ediyorum
              </label>
              <button type="button" class="btn btn-blue disabled" onclick="form_validate('mainFormIletisim');">Gönder</button>
            </form>
            <div id="msjSuccess" style="color:#000;display:none">Form Başarı ile Gönderildi!</div>
            <div id="msjFail" style="display:none">Form gönderilemedi, lütfen tekrar deneyiniz!</div>
          </div>




        </div>
        <h1><?php echo $blokRowdil["desc7"]; ?></h1>
 <?php echo htmlspecialchars_decode($ayar["google_maps"]);?>
   
      </div>
    </section>
    
    <?php require_once(TEMA_INC.'inc/footer.php');?>
  </body>
  <a href="#0" class="cd-top js-cd-top">Top</a>
  <?php require_once(TEMA_INC.'inc/alt.php');?>
</html>