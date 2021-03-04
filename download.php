<!DOCTYPE html>
<html>

    <head>
        <title>BALSON AGRO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/main_style.css?<?php echo time(); ?>">

        <style>
            .download-sec{
                background: url("images/about-us/about-us3.jpg") no-repeat;
                margin-top: 150px;
                height: 80vh;
                position: relative;
            }

            .panel{
                position: absolute;
                top: 10%;
                left: 5%;
                height: 420px;
                width: 297px;
            }

            .download-btn{
                position: absolute;
                top: 70%;
                left: 5%;
            }

            .download-sec h3{
                color: white;
                font-size: 35px;
                margin-left: 5%;
                margin-top: 155px;
            }

            @media (min-width: 768px) and (max-width: 1200px){
                .download-sec{
                    height: 70vh;
                }
            }

            @media (max-width: 767px){
                .download-sec{
                    height: 100vh;
                }
            }

            
        </style>
    </head>

    <body>
        <?php require 'header.php';?>

        <div class="download-sec">
            <h3>DOWNLOAD</h3>
            <div class="panel"> 
                <a href=""><img src="logo/logo.jpg" alt=""></a>
            </div>
            <a href="">
                <button id="download-btn" class="btn bro-btn" style="width: 297px; position: absolute; bottom: 15vh; left: 5%; margin-left: 0%;"><i class="fa fa-download"></i> &nbsp;Download</button>
              </a>
        </div>

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

    </body>
</html>