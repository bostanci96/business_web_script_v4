<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<?php 
if (g("cins")=="ihale") {
    $secenek="3";
}elseif (g("cins")=="duyuru") {
   $secenek="2";
}elseif (g("cins")=="haber") {
   $secenek="1";
}else{
   $secenek=""; 
}
 ?>
<html id="ctl00_htmlid" xmlns="http://www.w3.org/1999/xhtml" lang="tr">
    <head>
        <title><?php echo $blok["baslik10"];?> - <?php echo $ayar[$lehce."site_title"];?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
        <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
        <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
        <meta name="classification" content="<?php echo $blok["baslik10"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
        <meta http-equiv="content-language" content="tr" />
        <meta name="distribution" content="Global" />
        <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
        <meta name="robots" content="all" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="7 days" />
        <meta name="country" content="Türkiye" />
        <link rel="canonical" href="<?php echo LURL;?>" />
        <meta property="og:title" content="<?php echo $blok["baslik10"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
        <meta property="og:locale" content="tr_TR" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
        <meta property="og:url" content="<?php echo LURL;?>" />
        <meta property="og:site_name" content="<?php echo $blok["baslik10"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
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
                        <li><a href="<?php echo LURL; ?>haberler/" title="<?php echo $blokRowdil["desc10"];?>"><?php echo $blokRowdil["desc10"];?></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="page">
            <div class="center p-20">
                <?php require_once(TEMA_INC.'inc/slidebar.php');?>
                <div class="content">
                    
                    <h1><?php echo $blokRowdil["desc10"];?></h1>
                    <div class="news">
                        <div id="searchresult" class="boxes col-3 gap-20 text-center">
                           <?php if ($secenek=="") { ?>
                               <?php
                            $split = explode("?page=", $_SERVER['REQUEST_URI']);
                            if($split[count($split)-1]>1){
                            $_GET['page']=$split[count($split)-1];
                            }
                            $limit = 12;
                            $query = "SELECT * FROM sayfalar WHERE sayfa_durum=1 AND secenekHaber=1 OR secenekHaber=2 OR secenekHaber=3  ORDER BY sayfa_id DESC";
                            $s = $db->prepare($query);
                            $s->execute();
                            $total_results = $s->rowCount();
                            $total_pages = ceil($total_results/$limit);
                            if (!isset($_GET['page'])) {
                            $page = 1;
                            } else{
                            $page = $_GET['page'];
                            }
                            $starting_limit = ($page-1)*$limit;
                            $show = "SELECT * FROM sayfalar WHERE sayfa_durum=1 AND secenekHaber=1 OR secenekHaber=2 OR secenekHaber=3    ORDER BY sayfa_id DESC LIMIT $starting_limit, $limit";
                            $r = $db->prepare($show);
                            $r->execute();
                            while($res = $r->fetch(PDO::FETCH_ASSOC)):
                            $haberUrl = LURL.$res["sayfa_url"].'/'
                            ?>
                            
                            <div class="box result" data-text="<?php if($res[$lehce."secenekHaber"]==1){ echo"Haber";}elseif($res[$lehce."secenekHaber"]==2){ echo "Duyuru";}else{ echo "İhale";} ?>">
                                <a href="<?php echo $haberUrl;?>" title="<?php echo $res[$lehce."sayfa_adi"];?>">
                                    <img src="<?php echo URL.'images/sayfalar/big/'.$res["sayfa_resim"];?>" alt="<?php echo $res[$lehce."sayfa_adi"];?>">
                                    <small><?php echo $res[$lehce."sayfa_adi"];?></small>
                                </a>
                            </div>
                            <?php endwhile; ?>
                            
                          <?php }else{ ?>




 <?php
                            $split = explode("?page=", $_SERVER['REQUEST_URI']);
                            if($split[count($split)-1]>1){
                            $_GET['page']=$split[count($split)-1];
                            }
                            $limit = 12;
                            $query = "SELECT * FROM sayfalar WHERE sayfa_durum=1 AND secenekHaber='$secenek' ORDER BY sayfa_id DESC";
                            $s = $db->prepare($query);
                            $s->execute();
                            $total_results = $s->rowCount();
                            $total_pages = ceil($total_results/$limit);
                            if (!isset($_GET['page'])) {
                            $page = 1;
                            } else{
                            $page = $_GET['page'];
                            }
                            $starting_limit = ($page-1)*$limit;
                            $show = "SELECT * FROM sayfalar WHERE sayfa_durum=1 AND secenekHaber='$secenek'   ORDER BY sayfa_id DESC LIMIT $starting_limit, $limit";
                            $r = $db->prepare($show);
                            $r->execute();
                            while($res = $r->fetch(PDO::FETCH_ASSOC)):
                            $haberUrl = LURL.$res["sayfa_url"].'/'
                            ?>
                            
                            <div class="box result" data-text="<?php if($res[$lehce."secenekHaber"]==1){ echo"Haber";}elseif($res[$lehce."secenekHaber"]==2){ echo "Duyuru";}else{ echo "İhale";} ?>">
                                <a href="<?php echo $haberUrl;?>" title="<?php echo $res[$lehce."sayfa_adi"];?>">
                                    <img src="<?php echo URL.'images/sayfalar/big/'.$res["sayfa_resim"];?>" alt="<?php echo $res[$lehce."sayfa_adi"];?>">
                                    <small><?php echo $res[$lehce."sayfa_adi"];?></small>
                                </a>
                            </div>
                            <?php endwhile; ?>
                            



















                          <?php } ?> 
                           
                        </div>
                    </div>
                    <div id="pagination" class="pager">
                        <div class="pagination">
                            <?php if($page>1){ ?>
                            <a href="?page=<?php echo $page-1;?>"> <span class="current prev" rel="prev">&lt;&lt;</span></a>
                            <?php } for ($i=$page; $i <=$total_pages ; $i++){ ?>
                            <?php if($i==$page){ ?>
                            <span class="current"><?php echo $i;?></span>
                            <?php }else{ ?>
                            <a href='?page=<?php echo $i;?>'><?php echo $i;?></a>
                            <?php   } } if ($total_pages>$page) { ?>
                            <a href="?page=<?php echo $page+1;?>" class="next" rel="next">&gt;&gt;</a>
                            <?php } ?>
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