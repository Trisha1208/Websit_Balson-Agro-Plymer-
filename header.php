<!DOCTYPE html>
<html>
    <head>
        <title>HEADER</title>
        <style>
          .sideheadnav {
            height: 100%;
            width: 0;
            position: fixed;
            top: 0;
            right: 0;
            background-color: #e2e2e2;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            z-index: 99999;
            opacity: 999;
          }
          
          .sideheadnav h3 {
            padding: 8px 8px 28px 32px;
            font-size: 20px;
            color: rgb(53, 53,53);
            display: block;
            transition: 0.3s;
            border-bottom: solid 1px rgba(151,151,151,.3);
            
          }

          .sideheadnav h3 .closebtn {
            float: right;
            text-decoration: none;
            margin-right: 10px;
            font-size: 20px;
            color: rgb(53, 53,53);
            display: inline;
          }
          
          .sideheadnav a:hover {
            color: white;
            background-color: rgb(85, 177, 48);
            text-decoration: none;
          }
          
          @media screen and (max-height: 450px) {
            .sideheadnav {padding-top: 15px;}
            .sideheadnav a {font-size: 18px;}
          }

          .short-info{
            display: inline;
          }

          .short-info .cln{
            background-color:#d6d6d6; 
            font-size: 12px; 
            margin-top: 20px;
            margin-left: 15px;
            float: left;
            width: auto;
            padding: 5px;
            color: rgb(85, 177, 48);
          }

          .cln:hover, ul.side-socials li:hover {
            color: white;
            background-color: rgb(85, 177, 48);
          }

          .short-info:after {
            content: "";
            display: table;
            clear: both;
          }

          .hpart{
              width: 50%;
          }

          .hpart input{
              width: 100%;
              margin-top: 9%;
              height: 35px;
              border: none;
          }

          .form-part{
              padding-top: 0%;
              padding-left: 5%;
          }

          #femail, #fnumber, #fproduct{
              margin-left: -10px;
          }

          #fheadmessage{
              margin-top: 15px;
              width: 215%;
              border: none;
          }

          #quicksend{
              background-color: rgb(85,177,48);
          }

          #quicksend:hover{
            background-color: #109202;
          }

          ul.side-socials{
            width: auto;
             margin-left: 15%;
          }

          ul.side-socials li{
            display: inline;
            float: left;
            background-color: #d6d6d6;
            padding: 8px 12px;
          }

          @media(max-width: 768px){
            .hpart{
              width: 90%;
            }

            #femail, #fnumber, #fproduct{
              margin-left: 0px;
            }

            #fheadmessage{
              margin-top: 15px;
              width: 260px;
              border: none;
            }

          }
       

        </style>

    </head>

    <body>
    <?php require 'validation.php';?>
        
        <header>
            <!--Navigation-->	 
            <nav class="navbar navbar-inverse  navbar-fixed-top shadow">
              <div class="topbar" id="topbar">
                <div class="topbar-container">
                  <div class="topbar-left">
                    <div class="topbar-contact">
                      <span class="topbar-phone">
                        <a href="tel:+917069313131"><i class="fas fa-phone-alt"></i>
                          <span>&nbsp;+917069313131</span>
                        </a>
                      </span>
                      <span class="topbar-email">
                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSDbvBzvDTGpnRKpJsVrDNLvslwPbdRlwSLVclZXgRLZfxFDrcNCPJpsRdCXXKfQsWHBMwpq" target="blank"><i class="far fa-envelope"></i>
                          <span>&nbsp;sales@balsonpolyplast.com</span>
                        </a>
                      </span>
                      <span class="topbar-opening-hours">
                        <span id="google_translate_element"></span>
                      </span>
                    </div>
                  </div>
                  <div class="topbar-right">
                    <div class="topbar-socials">
                      <ul class="redux-social-media-list clearfix">
                        <li style="list-style: none;"><a target="_blank" href="https://www.facebook.com/balsonpolyplastindia"><i class="fab fa-facebook-f" title=""></i></a></li>
                        <li style="list-style: none;"><a target="_blank" href="https://twitter.com/balsonIndia"><i class="fab fa-twitter" title=""></i></a></li>
                        <li style="list-style: none;"><a target="_blank" href="https://api.whatsapp.com/send?phone=917069323232" style=" border-right: none;"><i class="fab fa-whatsapp" title=""></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
                <div class="conatiner-fluid">
                  <!--page scroll button for -->
                    <div class="navbar-header" role="navigation">
                        <button id="nav-con" type="button" class="navbar-toggle" data-toggle="collapse" data-target= "#myNavbar" onclick="myFunction(this)"> 
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>			
                        </button>
                        <a class="navbar-brand" href="#"><img id="logo" src="logo/logo.jpg" alt="" style="color:black"></a>
                       
                    </div>	<!--page scroll button-->
                    <div>
                        <div class="collapse navbar-collapse" id="myNavbar" style="border: none; background-color:rgba(0, 0,0, 0);">
                            <ul class="nav navbar-nav">
                                <li><a  id="home-tab" href="index.php">Home</a></li>
                                <li><a  id="about-tab" href="about_us.php" class="selected">About Us</a></li> 
                                <li class="dropdown menu-large">
                                  <a  id="product-tab" href="#" class="dropdown-toggle" data-toggle="dropdown">Our Products <b class="caret"></b></a>				
                                  <ul class="dropdown-menu megamenu row">
                                      <li class="col-md-3 col-sm-6">
                                          <ul>
                                              <li class="dropdown-header">Drip Irrigation Accessories</li><br>
                                              
                                              <li><a href="irrigation_p.php#pro-7"><img src="images/thumbnails/header/drip-irrigation/ventury.jpg" class="thumb-img">Ventury Injector</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="irrigation_p.php#pro-8"><img src="images/thumbnails/header/drip-irrigation/gauge.jpg" class="thumb-img">Pressure Gauge</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="valves_p.php"><img src="images/thumbnails/header/drip-irrigation/valve.jpg" class="thumb-img">Valves</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="filters_p.php"><img src="images/thumbnails/header/drip-irrigation/filter.jpg" class="thumb-img">Irrigation Filters</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="irrigation_p.php"><img src="images/thumbnails/header/drip-irrigation/drip-other.jpg" class="thumb-img">Other Accessories</a></li>
      
                                              
                                              
                                          </ul>
                                      </li>
                                      <li class="col-md-3 col-sm-6">
                                          <ul>
                                              <li class="dropdown-header">Sprinkler & Quick Action Acc.</li><br>
                                              <li><a href="sprinkler_p.php#pro-22"><img src="images/thumbnails/header/sprinkler/coupler.jpg" class="thumb-img">Coupler</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="sprinkler_p.php#pro-23"><img src="images/thumbnails/header/sprinkler/end-stop.jpg" class="thumb-img">End Stop</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="sprinkler_p.php#pro-24"><img src="images/thumbnails/header/sprinkler/pump.jpg" class="thumb-img">Pump Connecting Nipple</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="sprinkler_p.php#pro-25"><img src="images/thumbnails/header/sprinkler/gi-riser-pipe.jpg" class="thumb-img">GI Riser Pipe</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="sprinkler_p.php#pro-26"><img src="images/thumbnails/header/sprinkler/clamp.jpg" class="thumb-img">Clamp</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="sprinkler_p.php#pro-27"><img src="" class="thumb-img">Rubber Ring</a></li>
                                          </ul>
                                      </li>
                                      <li class="col-md-3 col-sm-6">
                                          <ul>
                                              <li class="dropdown-header">Mini Sprinkler Accessories</li><br>
                                              <li><a href="mini_sprinkler_p.php#pro-1"><img src="images/thumbnails/header/mini-sprinkler/nozzle.jpg" class="thumb-img">Nozzle</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="mini_sprinkler_p.php#pro-2"><img src="images/thumbnails/header/mini-sprinkler/connection-tube.jpg" class="thumb-img">Connection Tube</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="mini_sprinkler_p.php#pro-3"><img src="images/thumbnails/header/mini-sprinkler/connector.jpg" class="thumb-img">Connectors</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="mini_sprinkler_p.php#pro-4"><img src="images/thumbnails/header/mini-sprinkler/com-fit.jpg" class="thumb-img">Compression Fittings</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="mini_sprinkler_p.php#pro-5"><img src="images/thumbnails/header/mini-sprinkler/servie-saddle.jpg" class="thumb-img">Service Saddle</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="mini_sprinkler_p.php"><img src="images/thumbnails/header/mini-sprinkler/ms-other.jpg" class="thumb-img">Other Accessories</a></li>
                                              
                                              
                                          </ul>
                                      </li>
                                      <li class="col-md-3 col-sm-6">
                                          <ul>
                                              <li class="dropdown-header">Garden & Lanscape Irrigation Acc.</li><br>
                                              <li><a href="garden_p.php#pro-28"><img src="images/thumbnails/header/garden/micro-sprinkler.jpg" class="thumb-img">Micro Sprinkler</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="garden_p.php#pro-29"><img src="images/thumbnails/header/garden/misters.jpg" class="thumb-img">Misters</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="garden_p.php#pro-30"><img src="images/thumbnails/header/garden/fogger-with-brab-end.jpg" class="thumb-img">Fogger With Brab End</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="garden_p.php#pro-31"><img src="images/thumbnails/header/garden/butterfly.jpg" class="thumb-img">Butterfly</a></li>
                                              <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                                              <li><a href="garden_p.php#pro-32"><img src="" class="thumb-img">Pop Up</a></li>
                                          </ul>
                                      </li>
                                  </ul>
                                </li>
                                
                                <li><a id="download-tab" href="download.php">Download</a></li>
                                <li><a  id="contact-tab" href="contact_us.php">Contact Us</a></li>
                                <li><button id="inquiry-btn" class="btn head-btn" onclick="openheadNav()">Quick Inquiry</button></li>
                            </ul>
                        </div> <!--ul-li-->
                    </div> <!--navbar collapse-->
                </div> <!--container-fluid-->
            </nav>
            <!--Navigation-->
        </header>
        
        
        <section>
          <div id="mySideHeadnav" class="sideheadnav">
            
            <h3>Quick Inquiry<a href="javascript:void(0)" class="closebtn" onclick="closeheadNav()">&times;</a></h3>

            <div class="short-info">
              <div class="cln">
                <a href="tel:+917069313131"><i class="fas fa-phone-alt"></i>
                  <span>&nbsp;7069313131</span>
                </a>
              </div>
              <div class="cln">
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSDbvBzvDTGpnRKpJsVrDNLvslwPbdRlwSLVclZXgRLZfxFDrcNCPJpsRdCXXKfQsWHBMwpq" target="blank"><i class="far fa-envelope"></i>
                  <span>&nbsp;sales@balsonpolyplast.com</span>
                </a>
              </div>
            </div>

            <form id="quick-inquiry-form" method="POST" action="#" class="form-part" onsubmit="return validateQuickForm()" name="myQuickForm" style="margin-top: 30px;"> 
              <div class="row">
                <div class="hpart col-sm-3">
                  <input style="font-size: 14px" placeholder="Your Name"class ="for-field" required type="text" id="fname" name="sender" value="<?php echo $sender; ?>" >
                  <small style="color:red"><?php echo $nameErr; ?>
                  </small>
                </div>
                <div class="hpart col-sm-3">
                  <input placeholder="Your Email" class ="for-field" required type="text" id="femail" name="senderEmail" value="<?php echo $senderEmail; ?>">
                  <small style="color:red"><?php echo $emailErr; ?></small>
                </div>
              </div>

              <div class="row">
                <div class="hpart col-sm-3">
                  <input style="font-size: 14px" placeholder="Company Name" class ="for-field" type="text" id="fcomp" name="fcomp" value="<?php echo $company; ?>">
                </div>
                <div class="hpart col-sm-3">
                  <input style="font-size: 14px" placeholder="Phone Number" required class ="for-field" type="text" id="fnumber" name="fnumber" value="<?php echo $mob; ?>">
                  <small style="color:red"><?php echo $mobileErr; ?></small>
                </div>
              </div>

              <div class="row">
                <div class="hpart col-sm-3">
                  <input style="font-size: 14px" placeholder="City" class ="for-field" required type="text" id="fcity" name="fcity" value="<?php echo $city; ?>">
                  <small style="color:red"><?php echo $cityErr; ?></small>
                </div>
                <div class="hpart col-sm-3">
                  <select style="height: 35px; width: 100%; margin-top: 9%; border: none; font-size: 14px" class ="for-field" type="text" id="fproduct" name="fproduct" value="<?php echo $product; ?>">
                    
                    <option value=" Drip Irrigation Accessories">Drip Irrigation Accessories</option>
                    <option value="Micro sprinkler Accessories">Micro sprinkler Accessories</option>
                    <option value="Sprinkler and Quick Action Accessories">Sprinkler and Quick Action Accessories</option>
                    <option value="Garden and Landscape Accessories">Garden and Landscape Accessories</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="hpart col-sm-12" id="message">
                  <textarea style="font-size: 14px" type="text" id="fheadmessage" name="message" placeholder="Your Message" rows="4" value="<?php echo $message; ?>"></textarea>
                </div>
              </div>

              <div class="row">
                  <div class="hpart col-sm-12" style="height:120px;  width: 90%;" >
                    <input id="quicksend" style="border-style:none;  font-weight: 545; color: white; height:54px;  width: 100%; margin-top: 5%; font-size: 1em;" class ="for-field" type="submit" value="SEND MESSAGE" name="submit">
                  </div>
              </div>

            </form>

            <ul class="side-socials">
                <li style="list-style: none;"><a target="_blank" href="https://www.facebook.com/balsonpolyplastindia"><i class="fab fa-facebook-f" title=""></i></a></li>
                <li style="list-style: none; margin-left: 5%;"><a target="_blank" href="https://twitter.com/balsonIndia"><i class="fab fa-twitter" title=""></i></a></li>
                <li style="list-style: none; margin-left: 5%;"><a target="_blank" href="https://api.whatsapp.com/send?phone=917069323232" style=" border-right: none;"><i class="fab fa-whatsapp" title=""></i></a></li>
            </ul>

            
            
            
          </div>
        </section>


        <script>
            function myFunction(x) {
                x.classList.toggle("change");
            }

            function openheadNav() {
                document.getElementById("mySideHeadnav").style.width = "320px";
                disableScroll();
            }
            
            function closeheadNav() {
                document.getElementById("mySideHeadnav").style.width = "0";
                enableScroll();
            }

            function preventDefault(e) {
                e.preventDefault();
            }

            function preventDefaultForScrollKeys(e) {
                if (keys[e.keyCode]) {
                    preventDefault(e);
                    return false;
                }
            }

            var supportsPassive = false;
            try {
                window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
                    get: function () { supportsPassive = true; } 
                }));
            } catch(e) {}

            var wheelOpt = supportsPassive ? { passive: false } : false;
            var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

            // call this to Disable
            function disableScroll() {
                window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
                window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
                window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
                window.addEventListener('keydown', preventDefaultForScrollKeys, false);
            }

            // call this to Enable
            function enableScroll() {
                window.removeEventListener('DOMMouseScroll', preventDefault, false);
                window.removeEventListener(wheelEvent, preventDefault, wheelOpt); 
                window.removeEventListener('touchmove', preventDefault, wheelOpt);
                window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
            }

            function validateQuickForm() {
              var x = document.forms["myQuickForm"]["sender"].value;
              if (x == "") {
                alert("Name must be filled out");
                return false;
              }
            }

        </script>


        
    </body>
</html>