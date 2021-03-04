<!DOCTYPE html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="style/main_style.css?<?php echo time(); ?>">
      <link rel="stylesheet" href="style/cnt_style.css?<?php echo time(); ?>">

      
  </head>
  <body>

    <?php require 'header.php';?>



    <section>
      <div class=" con-outer container-fluid">
      
          
          <div class="google-map col-md-5">
              <div  class="map-frame">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.5764038935736!2d70.7792757!3d22.1039885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca72767baa9b%3A0xf85c9ac6ec690918!2sBalson%20Polyplast%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1605620900041!5m2!1sen!2sin"frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>

          </div>

          <div class="contact-form col-md-7">
          
            <div class="head-20">Get in Touch With Us</div>

            <div class="head-21">
              You can also reach us directly at (222) 400-630.
            </div>

            <form method="POST" action="contact_us.php" class="form-part" onsubmit="return validateForm()" name="myForm">
                    <div class="row">
                      <div class="part col-sm-3">
                        <input placeholder="Your Name"  class ="for-field" required type="text" id="fname" name="sender" value="<?php echo $sender; ?>" >
                        <small style="color:red"><?php echo $nameErr; ?>
                        </small>
                      </div>
                      <div class="part col-sm-3">
                        <input placeholder="Your Email" class ="for-field" required type="text" id="femail" name="senderEmail" value="<?php echo $senderEmail; ?>">
                        <small style="color:red"><?php echo $emailErr; ?></small>
                      </div>
                    </div>

                    <div class="row">
                      <div class="part col-sm-3">
                        <input  placeholder="Company Name" class ="for-field" type="text" id="fcomp" name="fcomp" value="<?php echo $company; ?>">
                      </div>
                      <div class="part col-sm-3">
                        <input placeholder="Phone Number" required class ="for-field" type="text" id="fnumber" name="fnumber" value="<?php echo $mob; ?>">
                        <small style="color:red"><?php echo $mobileErr; ?></small>
                      </div>
                    </div>

                    <div class="row">
                      <div class="part col-sm-3">
                        <input placeholder="City" class ="for-field" required type="text" id="fcity" name="fcity" value="<?php echo $city; ?>">
                        <small style="color:red"><?php echo $cityErr; ?></small>
                      </div>
                      <div class="part col-sm-3">
                        <select style="height: 45px; width: 100%; margin-top: 9%;" class ="for-field" type="text" id="fproduct" name="fproduct" value="<?php echo $product; ?>">
                          
                          <option value=" Drip Irrigation Accessories">Drip Irrigation Accessories</option>
                          <option value="Micro sprinkler Accessories">Micro sprinkler Accessories</option>
                          <option value="Sprinkler and Quick Action Accessories">Sprinkler and Quick Action Accessories</option>
                          <option value="Garden and Landscape Accessories">Garden and Landscape Accessories</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>

                    <div class="row">
                      <div class="part col-sm-12" id="message">
                        <textarea type="text" id="fmessage" name="message" placeholder="Your Message" rows="4" value="<?php echo $message; ?>"></textarea>
                      </div>
                    </div>

                    <div class="row">
                        <div class=" part col-sm-12" style="height:120px;  width: 90%;" >
                          <input id="send-btn" style="" class ="for-field" type="submit" value="SEND MESSAGE" name="submit">
                        </div>
                    </div>

            </form>

              
          </div>

      

      </div>

    </section>
    

    <?php require 'footer.php';?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="js/active_js.js?<?php echo time(); ?>"></script>
    <script>
      jQuery(document).ready(function(){
      $(".dropdown").hover(
          function() { $('.dropdown-menu', this).stop().fadeIn("fast");
          },
          function() { $('.dropdown-menu', this).stop().fadeOut("fast");
        });

      });

      $(window).scroll(function () {
      if(window.matchMedia("(min-width: 670px)").matches) {
        if ($(window).scrollTop() >= 50) {
          $('#topbar').css('display', 'none');
          $('.navbar').css('min-height', '100px');
        }
        else {
          $('#topbar').css('display', 'block');
          $('.navbar').css('min-height', '150px');
        }
      }
      });
    </script>

    <script>
      function validateForm() {
        var x = document.forms["myForm"]["sender"].value;
        if (x == "") {
          alert("Name must be filled out");
          return false;
        }
      }
    </script>

  </body>
</html>