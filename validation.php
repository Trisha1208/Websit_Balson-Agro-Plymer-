<?php

    $nameErr = $emailErr = $mobileErr = $comptErr = $cityErr = "";

    $sender = '';
    $senderEmail = '';
    $mob = '';
    $city = '';
    $message = '';
    $product = '';
    $company='';

    if(isset($_POST["submit"])) {


        $recipient="malvi.mce18@sot.pdpu.ac.in";
        $subject="Form to email message";


        $sender=$_POST["sender"];
        $senderEmail=$_POST["senderEmail"];
        $message=$_POST["message"];
        $company=$_POST["fcomp"];
        $product =$_POST["fproduct"];
        $mob = $_POST["fnumber"];
        $city =$_POST["fcity"];

        $emailReg = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
        $mobReg = "/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/";
        $nameReg = "/^([a-zA-Z' ]+)$/";
        if(preg_match($nameReg, $sender))
        {
            if(preg_match($emailReg, $senderEmail)){
                if(preg_match($mobReg, $mob)){

                    if(preg_match($nameReg, $city)){
                        $mailBody="Name: $sender\nEmail: $senderEmail\nCompany Name:$company\nNumber:$mob\nCity:$city\nProduct Inquiry:$product\n\n$message";

                        mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
                        echo '<script>alert("Thank you! Your message has been sent.")</script>';
                        $sender="";
                        $senderEmail='';
                        $message='';
                        $company='';
                        $product ='';
                        $mob = '';
                        $city ='';


                    }
                    else{
                        $cityErr="Enter Valid City name!";
                    }

                }
                else{
                    $mobileErr ="Please Enter Valid Number!";
                }


            }
            else{
                $emailErr="Please Enter valid Email Id !";
            }
        }
        else
        {
            $nameErr="Please Enter Valid Name!";
        }
        
    }

?>