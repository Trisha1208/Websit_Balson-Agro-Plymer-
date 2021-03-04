<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="style/main_style.css?<?php echo time(); ?>">
        <link rel="stylesheet" href="style/pro_style.css?<?php echo time(); ?>">
    </head>

    <body>
        <?php require 'header.php';?>
        <div class="main-container container-fluid" style="background-image:url('images/bg-images/products/garden-bg.jpg');">
            <div class="main-head">
                Garden and Landsacpe Irrigation Accessories
            </div>
            <div class="main-outer">
                <div class="main-des">
                    <p>
                        Stable pressure & flow is key to a stable business and healthy yields.
                        Take complete control over your water management and productivity. 
                        With precise control at all times, in all conditions. Simply reliable control, by the world's experts.
                    </p>
                    
                </div>
                

            </div>
            
            
            

        </div>
        <div class="pro-inside container-fluid" style="position: relative; padding-top: 0%; padding: 0%;">
        <button class="mini-side" onclick="openNav()">Related Products</button>
            <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <ul class="nav-text">
                    <li class="head-16" >Mini Sprinkler Accessories</li>
                    <li><a href="#pro-28"><img src="images/thumbnails/garden/micro-sprinkler.jpg" class="thumb-img">Micro Sprinkler</a></li>
                    <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                    <li><a href="#pro-29"><img src="images/thumbnails/garden/misters.jpg" class="thumb-img">Misters</a></li>
                    <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                    <li><a href="#pro-30"><img src="images/thumbnails/garden/fogger-with-brab-end.jpg" class="thumb-img">Fogger-Brab End</a></li>
                    <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                    <li><a href="#pro-31"><img src="images/thumbnails/garden/butterfly.jpg" class="thumb-img">Butterfly</a></li>
                    <hr style="width: 80%; margin: 0%; margin-left: 5%; margin-right: 10%;">
                    <li><a href="#pro-32"><img src=".JPG" class="thumb-img">Pop Up</a></li>
                </ul>
            </div>
                
                

                
               <div id="pro-28" class="product-outer">
                <div  class="product-des type2 row" >
                    <div class="pro-row ty-2 row">
                        <div class="pro-img col-sm-4">
                            <img class="pro-img-inside" src="images/products/garden-accessories/micro-sprinkler.png">
                        </div>
                        <div class="des1 col-sm-8">
                            <h2 class="head-15">Micro Sprinkler</h2>
                            gfhjdvsfa
                        </div>

                    </div>
                    
                    
                </div>

               </div> 
               <div id="pro-29" class="product-outer" >
                <div  class="product-des type2 row">
                    <div class="pro-row ty-2 row">
                        <div class="pro-img col-sm-4">
                            <img class="pro-img-inside" src="images/products/garden-accessories/misters.png">
                        </div>
                        <div class="des1 col-sm-8">
                            <h2 class="head-15">Misters</h2>
                            gfhjdvsfa hgjhmdsz jbkbc
                        </div>

                    </div>
                    
                    
                </div>

               </div>
                
                
                
                    
                    
               <div id="pro-30" class="product-outer" >
                <div  class="product-des type2 row">
                    <div class="pro-row ty-2 row">
                        <div class="pro-img col-sm-4">
                            <img class="pro-img-inside" src="images/products/garden-accessories/fogger-with-brab-end.png">
                        </div>
                        <div class="des1 col-sm-8">
                            <h2 class="head-15">Fogger with Brab End</h2>
                            gfhjdvsfa
                        </div>

                    </div>
                    
                    
                </div>

               </div>
               <div id="pro-31" class="product-outer" >
                <div  class="product-des type2 row">
                    <div class="pro-row ty-2 row">
                        <div class="pro-img col-sm-4">
                            <img class="pro-img-inside" src="images/products/garden-accessories/butterfly.png">
                        </div>
                        <div class="des1 col-sm-8">
                            <h2 class="head-15">Butterfly</h2>
                            gfhjdvsfa
                        </div>

                    </div>
                    
                    
                </div>

               </div>
                
                <div id="pro-32" class="product-outer" >
                    <div   class="product-des type2 row" style="margin-bottom: 50px;">
                        <div class="pro-row ty-2 row">
                            <div class="pro-img col-sm-4">
                                <img class="pro-img-inside" src=".png">
                            </div>
                            <div class="des1 col-sm-8">
                                <h2 class="head-15">Pop Up
                        
                                </h2>
                                gfhjdvsfa
                            </div>
    
                        </div>
                        
                        
                    </div>

                </div>
                
                
        </div>

        <?php require 'footer.php';?>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="js/pro_js.js?<?php echo time(); ?>"></script>
        <script src="js/active_js.js?<?php echo time(); ?>"></script>
        <script>
            $(window).scroll(function () {
            if(window.matchMedia("(max-width: 1200px)").matches) {
                if ($(window).scrollTop() <= 500 || $(window).scrollTop() >= 6000) {
                $('.mini-side').css({'display': 'none'});
                }
                else {
                $('.mini-side').css({'display' : 'block', 'position' : 'fixed', 'top' : '40%', 'right' : '0px'});
                }
            }
            if(window.matchMedia("(max-width: 768px)").matches) {
                if ($(window).scrollTop() <= 300 || $(window).scrollTop() >= 1800) {
                $('.mini-side').css({'display': 'none'});
                }
                else {
                $('.mini-side').css({'display' : 'block', 'position' : 'fixed', 'top' : '40%', 'right' : '0px'});
                }
            }
            });
        </script>

    </body>
    </html>