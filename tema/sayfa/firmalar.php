<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html id="ctl00_htmlid" xmlns="http://www.w3.org/1999/xhtml" lang="tr">
  <head>
    <title><?php echo $blok["baslik11"];?> - <?php echo $ayar[$lehce."site_title"];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
    <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
    <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
    <meta name="classification" content="<?php echo $blok["baslik11"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta http-equiv="content-language" content="tr" />
    <meta name="distribution" content="Global" />
    <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
    <meta name="robots" content="all" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
    <meta name="country" content="Türkiye" />
    <link rel="canonical" href="<?php echo LURL;?>" />
    <meta property="og:title" content="<?php echo $blok["baslik11"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
    <meta property="og:url" content="<?php echo LURL;?>" />
    <meta property="og:site_name" content="<?php echo $blok["baslik11"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
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
                        <li><a href="<?php echo LURL; ?>firmalar/" title="<?php echo $blokRowdil["desc11"];?>"><?php echo $blokRowdil["desc11"];?></a></li>
                    </ul>
                </div>
            </div>
        </section>
<section class="page">
    <div class="center p-20">
      <h1><?php echo $blokRowdil["desc11"];?></h1>
      <div class="brands">
        <table id="brands" class="stripe row-border order-column">
          <div id="select">
            <span>FİRMA SEÇİN</span>
          </div>
            <thead>
                <tr>
                  <th>İŞ</th>
                  <th>İŞLEM</th>
                    <th>FİRMA İSMİ</th>
                    <th>TELEFON</th>
                    <th>ADRES</th>
                    
                </tr>
            </thead>
            <tbody>
      
                          
                            <?php
                            $galQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=8547 AND fotograf_durum=1");
                            if($galQuery->rowCount()){
                            foreach($galQuery as $galRow){
                                  $link = URL.sef_link($galRow["fotograf_shortDesc"]).'-'.$galRow["fotograf_id"]."/firma/";
                            ?>
                            
                            
                          
                            
                         
                         <tr>
                          <td><?php echo $galRow["fotograf_sayfa_id"];?></td>
                          <td><a href="<?php echo $link;?>">İNCELEYİN</a></td>
                  
                    <td><strong><?php echo $galRow["fotograf_shortDesc"];?></strong></td>
                    <td><?php echo $galRow["fotograf_href"];?></td>
                    <td><?php echo $galRow["fotograf_longDesc"];?></td>
                    
                </tr>
                          <?php }}?>
                            
                                
                                
      
            </tbody>
            
        </table>
        <?php require_once(TEMA_INC.'inc/paylas.php');?>
      </div>
  
    </div>
  </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="<?php echo TEMA_URL;?>ast/js/datatables.js"></script> 

  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
  <script src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
    <script src="https://cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
    

  <script type="text/javascript">
  jQuery.extend( jQuery.fn.dataTableExt.oSort, {
      "turkish-pre": function ( a ) {
        var special_letters = {
                "C": "Ca", "c": "ca", "Ç": "Cb", "ç": "cb",
                "G": "Ga", "g": "ga", "Ğ": "Gb", "ğ": "gb",
                "I": "Ia", "ı": "ia", "İ": "Ib", "i": "ib",
                "O": "Oa", "o": "oa", "Ö": "Ob", "ö": "ob",
                "S": "Sa", "s": "sa", "Ş": "Sb", "ş": "sb",
                "U": "Ua", "u": "ua", "Ü": "Ub", "ü": "ub"
                };
            for (var val in special_letters)
               a = a.split(val).join(special_letters[val]).toLowerCase();
            return a;
      },

      "turkish-asc": function ( a, b ) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
      },

      "turkish-desc": function ( a, b ) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
      }
    } );

  
    var table = $('#brands').DataTable( {
      
      //columnDefs: [{ type: 'turkish', targets: '_all' }],
      aaSorting: [[2, "asc"]],
        "scrollX":        true,
        "scrollCollapse": true,
        "fixedColumns":   {
            leftColumns: 2
        },
        "bLengthChange": false
    });

  



    $(document).ready(function() {

  

    var alphabet = $('<div class="alphabet"/>').append('');

    $('<span class="clear active"/>')
            .data('letter', '')
            .html('')
            .appendTo(alphabet);

        $('<span/>').data('letter', 'A').html('A').appendTo(alphabet);
        $('<span/>').data('letter', 'B').html('B').appendTo(alphabet);
        $('<span/>').data('letter', 'C').html('C').appendTo(alphabet);
        $('<span/>').data('letter', 'Ç').html('Ç').appendTo(alphabet);
        $('<span/>').data('letter', 'D').html('D').appendTo(alphabet);
        $('<span/>').data('letter', 'E').html('E').appendTo(alphabet);
        $('<span/>').data('letter', 'F').html('F').appendTo(alphabet);
        $('<span/>').data('letter', 'G').html('G').appendTo(alphabet);
        $('<span/>').data('letter', 'Ğ').html('Ğ').appendTo(alphabet);
        $('<span/>').data('letter', 'H').html('H').appendTo(alphabet);
        $('<span/>').data('letter', 'I').html('I').appendTo(alphabet);
        $('<span/>').data('letter', 'İ').html('İ').appendTo(alphabet);
        $('<span/>').data('letter', 'J').html('J').appendTo(alphabet);
        $('<span/>').data('letter', 'K').html('K').appendTo(alphabet);
        $('<span/>').data('letter', 'L').html('L').appendTo(alphabet);
        $('<span/>').data('letter', 'M').html('M').appendTo(alphabet);
        $('<span/>').data('letter', 'N').html('N').appendTo(alphabet);
        $('<span/>').data('letter', 'O').html('O').appendTo(alphabet);
        $('<span/>').data('letter', 'Ö').html('Ö').appendTo(alphabet);
        $('<span/>').data('letter', 'P').html('P').appendTo(alphabet);
        $('<span/>').data('letter', 'Q').html('Q').appendTo(alphabet);
        $('<span/>').data('letter', 'R').html('R').appendTo(alphabet);
        $('<span/>').data('letter', 'S').html('S').appendTo(alphabet);
        $('<span/>').data('letter', 'Ş').html('Ş').appendTo(alphabet);
        $('<span/>').data('letter', 'T').html('T').appendTo(alphabet);
        $('<span/>').data('letter', 'U').html('U').appendTo(alphabet);
        $('<span/>').data('letter', 'Ü').html('Ü').appendTo(alphabet);
        $('<span/>').data('letter', 'V').html('V').appendTo(alphabet);
        $('<span/>').data('letter', 'W').html('W').appendTo(alphabet);
        $('<span/>').data('letter', 'X').html('X').appendTo(alphabet);
        $('<span/>').data('letter', 'Y').html('Y').appendTo(alphabet);
        $('<span/>').data('letter', 'Z').html('Z').appendTo(alphabet);


    alphabet.insertBefore(table.table().container());

    alphabet.on('click', 'span', function () {
        alphabet.find('.active').removeClass('active');
        $(this).addClass('active');

        _alphabetSearch = $(this).data('letter');
        table.draw();
    });


    });//document ready

        $("#select span").each( function ( i ) {
        
        if ($(this).text() !== '') {
              var isStatusColumn = (($(this).text() == 'Status') ? true : false);
          var select = $('<select><option value="">Tüm Sektörler</option></select>')
                  .appendTo( $(this).empty() )
                  .on( 'change', function () {
                      var val = $(this).val();
              
                      table.column( i )
                          .search( val ? '^'+$(this).val()+'$' : val, true, false )
                          .draw();
                  } );
          
          // Get the Status values a specific way since the status is a anchor/image
          if (isStatusColumn) {
            var statusItems = [];
            
                    /* ### IS THERE A BETTER/SIMPLER WAY TO GET A UNIQUE ARRAY OF <TD> data-filter ATTRIBUTES? ### */
            table.column( i ).nodes().to$().each( function(d, j){
              var thisStatus = $(j).attr("data-filter");
              if($.inArray(thisStatus, statusItems) === -1) statusItems.push(thisStatus);
            } );
            
            statusItems.sort();
                    
            $.each( statusItems, function(i, item){
                select.append( '<option value="'+item+'">'+item+'</option>' );
            });

          }
                // All other non-Status columns (like the example)
          else {
            table.column( i ).data().unique().sort().each( function ( d, j ) {  
              select.append( '<option value="'+d+'">'+d+'</option>' );
                } );  
          }
              
        }
        } );

  
        
      var _alphabetSearch = '';

      $.fn.dataTable.ext.search.push(function (settings, searchData) {
          if (!_alphabetSearch) {
              return true;
          }

          if (searchData[2].charAt(0) === _alphabetSearch) {
              return true;
          }

          return false;
      });


  
          //var table = $('#brands').DataTable();

     
      
        
   </script>
  



    
    <?php require_once(TEMA_INC.'inc/footer.php');?>
  </body>
  <a href="#0" class="cd-top js-cd-top">Top</a>
  <?php require_once(TEMA_INC.'inc/alt.php');?>
</html>