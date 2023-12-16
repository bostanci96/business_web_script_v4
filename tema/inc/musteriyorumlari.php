
<!--testimonial section start-->
<section class="testimonial-section ptb-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9 col-lg-8">
        <div class="section-heading mb-5 text-center">
          <h2><?php echo $blokRowdil["baslik16"]; ?></h2>
          <p class="lead">
           <?php echo $blokRowdil["desc16"]; ?>
         </p>
       </div>
     </div>
   </div>

   <div class="row">





    <?php
    $mQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=6 AND fotograf_durum=1");
    if($mQuery->rowCount()){
      foreach($mQuery as $mRow){
        ?>
        <div class="col-md-6 col-lg-4">
          <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
            <blockquote>
              <?php echo $mRow[$lehce."fotograf_longDesc"];?>
            </blockquote>
            <div class="client-img d-flex align-items-center justify-content-between pt-4">
              <div class="d-flex align-items-center">
                <img src="<?php echo URL.'images/photos/big/'.$mRow["fotograf_src"];?>" alt="<?php echo $mRow[$lehce."fotograf_shortDesc"];?>" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                <div class="client-info">
                  <h5 class="mb-0"><?php echo $mRow[$lehce."fotograf_shortDesc"];?></h5>
                  <small class="mb-0"><?php echo $mRow[$lehce."fotograf_shortDesc2"];?></small>
                </div>
              </div>
            </div>
          </div>
        </div>



        <?php
      }
    }
    ?>





  </div>

</div>
</section>
<!--testimonial section end-->
