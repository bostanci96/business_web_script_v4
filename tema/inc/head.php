<?php $blokRowdil = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<?php $blokRow = $db->query("SELECT * FROM bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<?php $blokRowdil2 = $db->query("SELECT * FROM dil2_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>



<script>

        function search() {

        var key = $("#s").val();

        if (key != "") window.location.href = "./s/" + key + "/d";

        };

        function entersubmit() {

        if (window.event.keyCode == 13) {

        search();

        }

        }

        </script>

        <div class="top-search-bar">

            <div class="center-content">

                <input name="s" type="text" class="search-text" placeholder="Ne Aramıştınız?" value="" id="s" autofocus onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" onkeypress="entersubmit();" />

                <input type="submit" class="search-button submit" id="searchsubmit" onclick="search();" />

            </div>

        </div>

    <header>

        <section class="center">

         <div class="lang">

                <ul>

                  
<script src="<?php echo URL; ?>dil.js"></script>
                </ul>

            </div>

            <div class="logo">

                <a href="<?php echo LURL; ?>" title="<?php echo $ayar["site_title"];?>">

                    <img src="<?php echo URL;?>images/<?php echo $ayar["logo"];?>" alt="<?php echo $ayar["site_title"];?>">

                </a>

              <!--  <span class="text-animate">31. <i>Yıl</i></span>-->

            </div>

            <div class="top">

               <!-- <ul>

                    <li><a href="#" title="ARAMA YAP" id="arama" class="icon-search">ARAMA YAP</a></li>







                </ul>-->

            </div>

            <nav id="cssmenu" class="m-language-TR">

                <ul>

                      <?php

        $url="https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

        $menuQuery = $db->query("SELECT * FROM menuler WHERE menu_durum=1 and menu_ust=0 and menu_type=0 ORDER BY menu_sira ASC");

        if($menuQuery->rowCount()){

          $numb  = 0;

          foreach($menuQuery as $menuRow){

            if ($url==$menuRow[$lehce."menu_href"]) {$linkactive="active";}else{$linkactive=null;}              

            $menuId = $menuRow["menu_id"];

            $altMenuQuery = $db->query("SELECT * FROM menuler WHERE menu_ust='$menuId' and menu_durum=1 and menu_type=0 ORDER BY menu_sira ASC");

            $sayac=0;

            if($altMenuQuery->rowCount()){

              $sayac++;

              echo '<li>';

              echo '<a href="javascript:void(0);">'.$menuRow[$lehce."menu_baslik"].'</a>';

              echo '<ul>';

              $saya=0;

              foreach($altMenuQuery as $altMenuRow){

                $saya++;

                $menuIdone = $altMenuRow["menu_id"];

                

                echo '<li>';

                echo '<a href="'.$altMenuRow[$lehce."menu_href"].'">'.$altMenuRow[$lehce."menu_baslik"].'</a>';

                echo '</li>';





              }

              echo '</ul>';

              echo '</li>';

            }else{

              echo '<li class="'.$linkactive.'"><a href="'.$menuRow[$lehce."menu_href"].'">'.$menuRow[$lehce."menu_baslik"].'</a></li>';

            }

            $numb++;

          }

        }

        ?>

                </ul>

            </nav>

        </section>

    </header>



 