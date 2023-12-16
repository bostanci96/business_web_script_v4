<section class="social p-60">
    <div class="center text-center">
        <h3><?php echo $blokRowdil["baslik1"]; ?></h3>
        <div class="social-btns">
            <a class="btns facebook" href="<?php echo $ayar["facebook_url"];?>" target="_blank"><i class="fa fa-facebook"></i></a>
            <a class="btns twitter" href="<?php echo $ayar["twitter_url"];?>" target="_blank"><i class="fa fa-twitter"></i></a>
            <a class="btns linkedin" href="<?php echo $ayar["linkedin_url"];?>" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a class="btns instagram" href="<?php echo $ayar["instagram_url"];?>" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</section>
<section class="logos p-60">
    <div class="center col-6 gap-20">
        <?php
        $cozumQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=58 && fotograf_durum=1");
        if($cozumQuery->rowCount()){
        $sayac = 0;
        foreach($cozumQuery as $cozumRow){
        $sayac++;
        ?>
        
        
        <div class="logo">
            <a href="<?php echo $cozumRow[$lehce."fotograf_shortDesc"];?>" title="" target="_blank">
                <img src="<?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?>" alt="">
            </a>
        </div>
        
        <?php
        }
        }
        ?>
    </div>
</section>
<footer class="f-language-TR">
    <div class="center col-4">
        <div class="box">
            <ul>
                <?php
                                                    $url="https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                                                    $menuQuery = $db->query("SELECT * FROM menuler WHERE menu_durum=1 and menu_ust=0 and menu_type=1 ORDER BY menu_sira ASC LIMIT 0,4");
                                                    if($menuQuery->rowCount()){
                                                        $numb  = 0;
                                                        foreach($menuQuery as $menuRow){
                                                            if ($url==$menuRow[$lehce."menu_href"]) {$linkactive="current-menu-item page_item";}else{$linkactive=null;}
                                                            echo '<li><a href="'.$menuRow[$lehce."menu_href"].'">'.$menuRow[$lehce."menu_baslik"].'</a></li>';
                                                        }
                                                        $numb++;
                                                    }
                ?>
            </ul>
        </div>
        <div class="box">
            <ul>
                <?php
                                                    $url="https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                                                    $menuQuery = $db->query("SELECT * FROM menuler WHERE menu_durum=1 and menu_ust=0 and menu_type=1 ORDER BY menu_sira ASC LIMIT 4,4");
                                                    if($menuQuery->rowCount()){
                                                        $numb  = 0;
                                                        foreach($menuQuery as $menuRow){
                                                            if ($url==$menuRow[$lehce."menu_href"]) {$linkactive="current-menu-item page_item";}else{$linkactive=null;}
                                                            echo '<li><a href="'.$menuRow[$lehce."menu_href"].'">'.$menuRow[$lehce."menu_baslik"].'</a></li>';
                                                        }
                                                        $numb++;
                                                    }
                ?>
            </ul>
        </div>
        <div class="box">
            <ul>
                <?php
                                                $url="https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                                                $menuQuery = $db->query("SELECT * FROM menuler WHERE menu_durum=1 and menu_ust=0 and menu_type=1 ORDER BY menu_sira ASC LIMIT 8,4");
                                                if($menuQuery->rowCount()){
                                                    $numb  = 0;
                                                    foreach($menuQuery as $menuRow){
                                                        if ($url==$menuRow[$lehce."menu_href"]) {$linkactive="current-menu-item page_item";}else{$linkactive=null;}
                                                        echo '<li><a href="'.$menuRow[$lehce."menu_href"].'">'.$menuRow[$lehce."menu_baslik"].'</a></li>';
                                                    }
                                                    $numb++;
                                                }
                ?>
            </ul>
        </div>
        <div class="box">
            <ul>
                <?php
                                                $url="https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                                                $menuQuery = $db->query("SELECT * FROM menuler WHERE menu_durum=1 and menu_ust=0 and menu_type=1 ORDER BY menu_sira ASC LIMIT 12,4");
                                                if($menuQuery->rowCount()){
                                                    $numb  = 0;
                                                    foreach($menuQuery as $menuRow){
                                                        if ($url==$menuRow[$lehce."menu_href"]) {$linkactive="current-menu-item page_item";}else{$linkactive=null;}
                                                        echo '<li><a href="'.$menuRow[$lehce."menu_href"].'">'.$menuRow[$lehce."menu_baslik"].'</a></li>';
                                                    }
                                                    $numb++;
                                                }
                ?>
            </ul>
        </div>
    </div>
    <div class="bottom">
        <div class="center col-2 gap-20">
            <div class="copyright">
                <p><?php echo $blokRowdil["desc3"]; ?></p>
                <p>
                    
                    <?php
                                                    $url="https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                                                    $menuQuery = $db->query("SELECT * FROM menuler WHERE menu_durum=1 and menu_ust=0 and menu_type=2 ORDER BY menu_sira ASC");
                                                    if($menuQuery->rowCount()){
                                                        $numb  = 0;
                                                        foreach($menuQuery as $menuRow){
                                                            if ($url==$menuRow[$lehce."menu_href"]) {$linkactive="current-menu-item page_item";}else{$linkactive=null;}
                                                            echo '<a href="'.$menuRow[$lehce."menu_href"].'">'.$menuRow[$lehce."menu_baslik"].'</a>';
                                                        }
                                                        $numb++;
                                                    }
                    ?>
                </p>
            </div>
            <div class="f-address">
                <p>
                    <strong><?php echo $blokRowdil["desc1"]; ?></strong>
                    <a href="javascript:void(0)" target="_blank"><?php echo $ayar["adres"];?></a>
                </p>
                <p>
                    <strong><?php echo $blokRowdil["baslik2"]; ?></strong>
                    <a href="tel:<?php echo $ayar["telefon"];?>"><?php echo $ayar["telefon"];?></a> -
                    <strong><?php echo $blokRowdil["desc2"]; ?></strong>
                    <a href="tel:<?php echo $ayar["faks"];?>"><?php echo $ayar["faks"];?></a> -
                    <strong><?php echo $blokRowdil["baslik3"]; ?></strong>
                    <a href="mailto:<?php echo $ayar["email"];?>"><?php echo $ayar["email"];?></a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!--
<section class="cookie">
    <div class="center">
        <strong>Aydınlatma Metni</strong>
        <p>Daha iyi bir kullanıcı deneyimi sunabilmek için çerezler (cookie) kullanılmaktadır. Çerezler hakkında detaylı bilgi almak için <a href="http://aosb.org.tr/35/cerez-politikasi">Çerez Politikası</a>'nı inceleyebilirsiniz. Çerez ayarlarını değiştirmeniz
    durumunda internet sitesinin bazı özelliklerinin işlevselliğini kaybedebileceğini dikkate alınız.</p>
    <span class="agree">Kabul Ediyorum</span>
</div>
</section>-->