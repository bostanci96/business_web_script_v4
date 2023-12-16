
      <!--contact us section start-->
      <section class="contact-us-section ptb-100">
        <div class="container contact">
          <div class="col-12 pb-3 message-box d-none">
            <div class="alert alert-danger"></div>
          </div>
          <div class="row justify-content-around">
            <div class="col-md-6">
              <div class="contact-us-form gray-light-bg rounded p-5">
                <h4><?php echo $blokRowdil["baslik8"]; ?></h4>
                <form action="#" method="POST" id="contactForm" class="contact-us-form">
                  <div class="form-row">
                    <div class="col-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="<?php echo $blokRowdil["desc8"]; ?>" required="required">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="<?php echo $blokRowdil["baslik9"]; ?>" required="required">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="<?php echo $blokRowdil["desc9"]; ?>"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12 mt-3">
                      <button type="submit" class="btn secondary-solid-btn" id="btnContactUs">
                        <?php echo $blokRowdil["baslik10"]; ?>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-5">
              <div class="contact-us-content">
                <h2><?php echo $blokRowdil["desc10"]; ?></h2>
                <p class="lead"><?php echo $blokRowdil["baslik11"]; ?></p>



                <hr class="my-5">

                <h5><?php echo $blokRowdil["desc11"]; ?></h5>
                <address>
                 <?php echo $ayar["adres"]; ?>
               </address>
               <br>
               <span><?php echo $blokRowdil["baslik12"]; ?> <a href="tel:<?php echo $ayar["telefon"]; ?>"><?php echo $ayar["telefon"]; ?><a/></span> <br>
                <span><?php echo $blokRowdil["desc12"]; ?> <a href="tel:<?php echo $ayar["faks"]; ?>"><?php echo $ayar["faks"]; ?></a></span> <br>
                <span><?php echo $blokRowdil["baslik13"]; ?> <a href="mailto:<?php echo $ayar["email"]; ?>" class="link-color"><?php echo $ayar["email"]; ?></a></span>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!--contact us section end-->
