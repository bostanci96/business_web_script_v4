<?php
if(isset($_GET["url"])){
	$urlSef = g("url");
	$sayfaControl = $db->prepare("SELECT * FROM sayfalar WHERE sayfa_url=:url AND sayfa_durum=:durum");
	$sayfaControl ->bindParam("url",$urlSef,PDO::PARAM_STR,50);
	$sayfaControl ->bindValue("durum",1,PDO::PARAM_INT);
	$sayfaControl -> execute();
	if($sayfaControl->rowCount()){
		$sayfaRow = $sayfaControl->fetch(PDO::FETCH_ASSOC);
		$id=$sayfaRow["sayfa_id"];
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
		<title><?php echo $sayfaRow[$lehce."sayfa_adi"]." - ".$ayar[$lehce."site_title"];?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<meta name="description" itemprop="description" content="<?php echo $sayfaRow["sayfa_desc"];?>" />
		<meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
		<meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
		<meta name="classification" content="<?php echo $sayfaRow[$lehce."sayfa_adi"]." - ".$ayar[$lehce."site_title"];?>" />
		<meta http-equiv="content-language" content="tr" />
		<meta name="distribution" content="Global" />
		<meta name="robots" content="all" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="7 days" />
		<meta name="country" content="Türkiye" />
		<link rel="canonical" href="<?php echo LURL;?>" />
		<meta property="og:title" content="<?php echo $sayfaRow[$lehce."sayfa_adi"]." - ".$ayar[$lehce."site_title"];?>" />
		<meta property="og:locale" content="tr_TR" />
		<meta property="og:type" content="website" />
		<meta property="og:description" content="<?php echo $sayfaRow["sayfa_desc"];?>" />
		<meta property="og:url" content="<?php echo LURL;?>" />
		<meta property="og:site_name" content="<?php echo $sayfaRow[$lehce."sayfa_adi"]." - ".$ayar[$lehce."site_title"];?>" />
		<meta content="telephone=no" name="format-detection">
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
						<li><a href="javascript:void(0);" title="<?php echo $sayfaRow[$lehce."sayfa_adi"];?>"><?php echo $sayfaRow[$lehce."sayfa_adi"];?></a></li>
					</ul>
				</div>
			</div>
		</section>
		<section class="page">
			<div class="center p-20">
				<?php require_once(TEMA_INC.'inc/slidebar.php');?>
				<div class="content">
					<?php if ($sayfaRow["secenekHaber"]=="0") { ?>
					<div class="news">
						<h1><?php echo $sayfaRow[$lehce."sayfa_adi"];?></h1>
						<div class="admins">
						</div>
						<p><span style="color: #000000;"><img alt="<?php echo $sayfaRow[$lehce."sayfa_adi"];?>" src="<?php echo URL.'images/sayfalar/big/'.$sayfaRow["sayfa_resim"];?>"></span>
					</p>
					<div style="text-align: justify;">
						<span style="color: #000000;"><br>
						</span></div>
						<p><?php echo $sayfaRow[$lehce."sayfa_icerik"];?></p>
					</div>
					<?php }elseif ($sayfaRow["secenekHaber"]=="1") { ?>
					<div class="news">
						<span class="date"><?php echo tarih($sayfaRow["sayfa_tarih"]);?></span>
						<h1><?php echo $sayfaRow[$lehce."sayfa_adi"];?></h1>
						<p><?php echo $sayfaRow[$lehce."sayfa_icerik"];?></p>
					</div>
					<div id="ctl00_ContentPlaceHolder1_galeri" class="brand-product">
						<h4>Galeri</h4>
						<div class="products col-5 gap-20  text-center">
							<?php
																							$imgQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_sayfa_id='$id'");
																							if($imgQuery->rowCount()){
																								foreach($imgQuery as $imgRow){
							?>
							
							<div class="box">
								<a href="<?php echo URL;?>images/photos/big/<?php echo $imgRow["fotograf_src"];?>" title="" data-fancybox="gallery">
									<img src="<?php echo URL;?>images/photos/big/<?php echo $imgRow["fotograf_src"];?>">
								</a>
								<small></small>
							</div>
							<?php
																								}
																							}
							?>
						</div>
					</div>
					<?php }elseif($sayfaRow["secenekHaber"]=="4" OR $sayfaRow["secenekHaber"]=="3" OR $sayfaRow["secenekHaber"]=="2"){ ?>

<div class="news">
 	<h1><?php echo $sayfaRow[$lehce."sayfa_adi"];?></h1>

    <div class="admins">




    </div>
	<p><?php echo $sayfaRow[$lehce."sayfa_icerik"];?></p>

</div>




				<?php	}elseif($sayfaRow["secenekHaber"]=="5"){ ?>


  <div class="news">
        <h1><?php echo $sayfaRow[$lehce."sayfa_adi"];?></h1>

        <div class="admins">




        </div>

        <p></p>
    </div>

   <div class="information">
        <div id="information" class="ui-accordion ui-widget ui-helper-reset" role="tablist">


<?php 
                                                                $metin = $sayfaRow[$lehce."sayfa_icerik"];

                                                                $dizi = explode ("<div style=&quot;page-break-after:always&quot;><span style=&quot;display:none&quot;>&nbsp;</span></div>",$metin);

$adet=count($dizi); 
for($i=0; $i<$adet; $i++){
 $newdizi = explode ("<hr />",$dizi[$i]); ?>



        <?php echo $newdizi[0]; ?>




            <div class="acc-content ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-<?php echo $i+1; ?>" aria-labelledby="ui-id-<?php echo $i; ?>" role="tabpanel" aria-hidden="true" style="display: none;">
              <?php echo $newdizi[1]; ?>
            </div>

 <?php 
                                                                }
                                                               


                                                                ?>











          </div>
        </div>








			<?php	} ?>

		<?php require_once(TEMA_INC.'inc/paylas.php');?>
				</div>
			</div>

		</section>

		<?php require_once(TEMA_INC.'inc/footer.php');?>
	</body>
	<a href="#0" class="cd-top js-cd-top">Top</a>
	<?php require_once(TEMA_INC.'inc/alt.php');?>
</html>