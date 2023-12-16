<div class="sidebar">
    <div class="side-menu sticky-side">
        <ul>
                       <?php
                                                    $url="https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                                                    $menuQuery = $db->query("SELECT * FROM menuler WHERE menu_durum=1 and menu_ust=0 and menu_type=3 ORDER BY menu_sira ASC");
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