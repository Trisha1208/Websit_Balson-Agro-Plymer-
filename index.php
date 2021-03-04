<!DOCTYPE html>
<html>

  <head>
    <title>BALSON AGRO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/main_style.css?<?php echo time(); ?>">
  </head>

  <body>
    <?php require 'header.php';?>

    <section class="main_slide">
      <div class="slideshow-container">
        
        <div class="mySlides fade">
          
          <img src="images/bg-images/carousel/drip-irrigation.jpg" >
          <div class="text w3-container w3-center w3-animate-opacity">
            A house of most advance drip irrigation system  
            <h1 class="head-cap">Drip Irrigation Accessories</h1>
            <button class="btn btn-main"  onclick="location.href = 'irrigation_p.php'">Learn more</button>
          </div>
          
          
        </div>

        <div class="mySlides fade">
          
          <img src="images/bg-images/carousel/sprinkler.jpg">
          <div class="text w3-container w3-center w3-animate-opacity">
            Let's together we know the value of water 
            <h1 class="head-cap">Sprinkler & Quick Action Accessories</h1>
            <button class="btn btn-main"  onclick="location.href = 'sprinkler_p.php'">Learn more</button>
          </div>
          
          
        </div>

        <div class="mySlides fade">
            
          <img src="images/bg-images/carousel/garden.jpg">
          <div class="text w3-container w3-center w3-animate-opacity">
            Garden, Landscape and GreenHouse Irrigation System.
            <h1 class="head-cap">Garden & Landscape Irrigation Accessories</h1>
            <button class="btn btn-main" onclick="location.href = 'garden_p.php'">Learn more</button>
          </div>
          
          
        </div>

        <div class="mySlides fade">
          
          <img src="images/bg-images/carousel/mini-sprinkler.jpg">
          <div class="text w3-container w3-center w3-animate-opacity">
            Like gentle “rain” it keeps your turf lush…&amp; your crop 
            <h1 class="head-cap">Mini Sprinkler Acc & Compression Fittings</h1>
            <button class="btn btn-main" onclick="location.href = 'mini_sprinkler_p.php'">Learn more</button>
          </div>
          
          
        </div>

        
        <a class="prev1" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next1" onclick="plusSlides(1)">&#10095;</a>

      </div>
    </section>
    
    <div class="col-md-12 text-center">
      <div class="prod">Our Products</div>
      <div class="sub-prod">Everything you need to create a precision irrigation system that works for your crops, your climate and your topography.</div>
    </div>
    <section class="orange-fade p-5 margin-top-xl pos-r">
      <div class="container">
           <div class="row">
            <div class="col-sm-12">
            
           <div class="mt-5 pos-r">
              <div class="carousel-controls testimonial-carousel-controls">
                <div class="control prev"><i class="fa fa-chevron-left">&nbsp;</i></div>
                <div class="control next"><i class="fa fa-chevron-right">&nbsp;</i></div>
              </div>
              <div class="testimonial-carousel">
                <div id="first" class="one-slide white">
                  <a href="irrigation_p.php">
                    <div class="product">
                      <a href="irrigation_p.php"><img src="images/products/main-products/drip-head.jpg" class="img-responsive"></a>
                      <div class="product_name">Drip Irrigation Accessories<br><br></div>
                      <div class="product_text">We provide the best and controlled irrigation to the cultivated land.</div>
                      <button class="pro_btn" onclick="location.href = 'irrigation_p.php'">READ MORE</button>
                  </div>
                  </a>
                </div>
                <div id="second" class="one-slide white">
                  <a href="valves_p.php">
                    <div class="product">
                      <a href="valves_p.php"><img src="images/products/main-products/valve-head.jpg" class="img-responsive"></a>
                      <div class="product_name">Drip Irrigation Accessories<br>Valves</div>
                      <div class="product_text">Valves are for regulating flow, preventing back flow and regulating pressure in fluid.</div>
                      <button class="pro_btn" onclick="location.href = 'valves_p.php'">READ MORE</button>
                  </div>
                  </a>
                </div>
                <div id="third" class="one-slide white">
                  <a href="filters_p.php">
                    <div class="product">
                      <a href="filters_p.php"><img src="images/products/main-products/filter-head.jpg" class="img-responsive"></a>
                      <div class="product_name">Drip Irrigation Accessories<br>Irrigation Filters</div>
                      <div class="product_text">Filters are used to separate very fine impurities of water for long life resistance of dripper clogging.</div>
                      <button class="pro_btn"  onclick="location.href = 'filters_p.php'">READ MORE</button>
                  </div>
                  </a>
                </div>
                <div id="fourth" class="one-slide white">
                  <a href="sprinkler_p.php">
                    <div class="product">
                      <a href="sprinkler_p.php"><img src="images/products/main-products/sprinkler-head.jpg" class="img-responsive"></a>
                      <div class="product_name">Sprinkler & Quick Action Accessories</div>
                      <div class="product_text">This system is easy to install & handling, covers large area with uniform distribution.</div>
                      <button class="pro_btn" onclick="location.href = 'sprinkler_p.php'">READ MORE</button>
                  </div>
                  </a>
                </div>
                <div class="one-slide white">
                  <a href="mini_sprinkler_p.php">
                    <div class="product">
                      <a href="mini_sprinkler_p.php"><img src="images/products/main-products/mini-sprinkler-head.jpg" class="img-responsive"></a>
                      <div class="product_name">Mini Sprinkler Acc & Compression Fittings</div>
                      <div class="product_text">These are specially designed as per suitability of different crops with lower cost and higher yield.</div>
                      <button class="pro_btn" onclick="location.href = 'mini_sprinkler_p.php'">READ MORE</button>
                  </div>
                  </a>
                </div>
                <div class="one-slide white">
                  <a href="garden_p.php">
                    <div class="product">
                      <a href="garden_p.php"><img src="images/products/main-products/garden-head.jpg" class="img-responsive"></a>
                      <div class="product_name">Garden & Landscape Irrigation Accessories</div>
                      <div class="product_text">This system enables convenient and cost effective maintenance, easily adaptable to changes.</div>
                      <button class="pro_btn" onclick="location.href = 'garden_p.php'">READ MORE</button>
                  </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="outer-cont">
      <section class = "intro">
        <div class = "map-part container-fluid">
          <div class="row">
            <div class="map-img col-sm-6 w3-container w3-center w3-animate-opacity">
              <img  id="img-anim" src="images/bg-images/map-img.png">
            </div>
            <div class="map-text col-sm-6 w3-container w3-animate-opacity">
              <h1 class="head-3">
                Welcome To Balson Agro Polymers
              </h1>
              We are a globally renowned name in the field of Irrigation technology.
              Balson Agro Polymer Pvt. Ltd. a leader in the development, manufacturing, and marketing of advanced irrigation systems, was established in 1999.
              <button id="btn-anim-1" class="btn wlcm-btn"  onclick="location.href = 'about_us.php'">Read more</button>
            </div>
          </div>
        </div>
      </section>

      <section class="about">
        <section class="bro-part">
          <div class="brochure container-fluid">
            <div class=" bro-text col-sm-8">
              <h2 class="head-4">Download Brochure for more Information</h2>
              For more details, visit our Products page 
            </div>
            <div class="col-sm-4" >
              <a href="">
                <button id="bro-btn-anim" class="btn bro-btn"><i class="fa fa-download"></i> &nbsp;Download</button>
              </a>
            </div>
            
          </div>
        </section>
        <div  class="about-outer container-fluid">
          <div class="about-text row">
            <div class="col-sm-12 top-abt">
                Helping hands for betterment since 1999. 
              <h1 class="head-5">About Balson Agro Polymers</h1>
            </div>
          </div>
          <div  class="row">
            <div class=" about-cont col-sm-4" >
              <div id ="cir-anim-3" class="circle3" >
                <div class="circle2">
                  <div class="circle1">
                    <img class="icon-img" src="icons/quality-icon.png" style="width: auto;">
                  </div>
                </div>
                
              </div>
              <div class="about-text">
                <h3 class="head-6">Our Quality</h3>
                At Balson Agro Polymer Pvt. Ltd., we are a team of professionals driven by quality.
                The quality control policy of our company is based on ISO and ISI quality norms.
                
              </div>
            </div>
            <div class=" about-cont col-sm-4">
              <div  id ="cir-anim-2" class="circle3" >
                
                <div class="circle2">
                  <div class="circle1">
                    <img class="icon-img" src="icons/strength-icon.png" style="width: 100%; height: 90%;">
                  </div>
                </div>
                
              </div>
              <div class="about-text">
                <h3 class="head-6">Our Strength</h3>
                We, at Balson Agro Polymer Pvt. Ltd., 
                are empowered by a well-established infrastructure that is robust enough to endow our business with stability.
              </div>
            </div>
            <div class=" about-cont col-sm-4">
              <div id ="cir-anim-1" class="circle3" >
                <div class="circle2">
                  <div class="circle1" style="padding-left: 7px;">
                    <img class="icon-img" src="icons/vision-mission-icon.png" style="width: auto;">
                  </div>
                </div>
                
              </div>
              <div class="about-text">
                <h3 class="head-6">Our Vision & Mission</h3>
                We aim to offer our valued customers high-quality solutions at 
                affordable rates to help them enjoy their life to the fullest.
                
              </div>
              
            </div>
            
            
          </div>
        </div>
      </section>
    </section>

    <section class="numbers">
      <div class="container-fluid main-numbers">
        <div class="row head-numbers">
          <h1 class="head-7">
            Our Global Outreach
          </h1>
          We maintain international quality standards with all our products and services and also endeavor to continually improve our performance incorporating the latest technology and bringing innovation into our research works.
        </div>
        <div class=" imp-col row">
          <div id ="col-anim-1" class=" small col-sm-4">
            <div class="head-9" >Experience</div>
            <img src="icons/experience.png" class="icon2 icon-small">
            <div class="head-10"><span class="e-count">30</span>+</div>
            <div class="numbers-text">Years of Experience</div>
          </div>
          <div id ="col-anim-2" class="bigger col-sm-4">
            <div class="head-8">Quality Assurance</div>
            <img src="icons/quality.png" class="icon2">
            <div class="head-10"><span class="q-count">100</span>%</div>
            <div class="numbers-text">Quality Assurance & Customer Satisfaction</div>
          </div>
          <div id ="col-anim-3" class=" small col-sm-4">
            <div class="head-9" >Customers</div>
            <img src="icons/customers.png" class="icon2 icon-small">
            <div class="head-10"><span class="c-count">1000</span>+</div>
            <div class="numbers-text">Number of Customers</div>
          </div>

        </div>
      </div>
    </section>

    <section class="parallax">
      <div class="motto">
        Our respect for one of nature’s most precious treasure…Water
      </div>
    </section>

    <?php require 'footer.php';?>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous"></script>
    <script src="js/main_js.js?<?php echo time(); ?>"></script>
    <script src="js/active_js.js?<?php echo time(); ?>"></script>

   

  </body>
</html> 
