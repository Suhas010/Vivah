<?php
session_start();
//$local_host_name="http://192.168.43.169/Vivah_MDB";
require_once(join('//', array(dirname(dirname(dirname(__FILE__))), 'common', 'const.php')));
$mb=$_GET['mb'];
$ot=$_SESSION['otp'];
?>
<!--User Registration Page
Author: Suhas More
-->
<!--
--------------
| version 0.2|
----------------
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Confirm OTP <?php echo "$mb";?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" type="text/css" href="<?php echo"$local_host_name"?>/img/images/Logo_Tab.png">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo"$local_host_name"?>/css/bootstrap.font.css">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo"$local_host_name"?>/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="<?php echo"$local_host_name"?>/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="<?php echo"$local_host_name"?>/css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo"$local_host_name"?>/css/Style1.css">
        <link rel="stylesheet" type="text/css" href="<?php echo"$local_host_name"?>/css/Common.css">
        <style type="text/css" media="screen">
        .container{
        }
        .RForm{
        margin-top: 100px;
        margin-left: 50px;
        margin-right: 50px;
        }
        
        .Ltr{
        letter-spacing:5px;
        }
        /*Lable*/
        .md-form label {
        color: #847F7D;
        }
        .input[type="date"]:focus:not([readonly]), input[type="datetime-local"]:focus:not([readonly]), input[type="email"]:focus:not([readonly]), input[type="number"]:focus:not([readonly]), input[type="password"]:focus:not([readonly]), input[type="search-md"]:focus:not([readonly]), input[type="search"]:focus:not([readonly]), input[type="tel"]:focus:not([readonly]), input[type="text"]:focus:not([readonly]), input[type="time"]:focus:not([readonly]), input[type="url"]:focus:not([readonly]), textarea.md-textarea:focus:not([readonly])
        {
        border-bottom: 2px solid #F06F10;
        box-shadow: 0 1px 0 0 #F26106;}
        .input[type="datetime-local"], input[type="email"], input[type="number"], input[type="password"],input[type="search-md"], input[type="search"], input[type="tel"], input[type="text"], textarea.md-textarea {
        background-color: #1a070700;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0;
        outline: 0;
        height: 1.4rem;
        width: 75%;
        font-size: 1.5rem;
        }
        .input[type="number"],input[type="search-md"], input[type="search"], input[type="tel"], input[type="text"], textarea.md-textarea {
        text-transform:uppercase
        }
        .input[typee="email"], textarea.md-textarea{
        text-transform: lowercase;
        }
        /* Gender Radio Buttons*/
        
        [type="radio"]:checked + label::after{   top: -4px;
        top: -4px;
        left: -7px;
        width: 12px;
        height: 26px;
        border-top: 2px solid transparent;
        border-left: 2px solid transparent;
        border-right: 4px solid #1AB90F;
        border-bottom: 7px solid #10AD18;
        -webkit-transform: rotate(40deg);
        -moz-transform: rotate(40deg);
        -ms-transform: rotate(40deg);
        -o-transform: rotate(40deg);
        transform: rotate(40deg);
        -webkit-backface-visibility: hidden;
        -webkit-transform-origin: 100% 100%;
        -moz-transform-origin: 100% 100%;
        -ms-transform-origin: 100% 100%;
        -o-transform-origin: 100% 100%;
        transform-origin: 100% 100%;}
        .up{
        background-color: #F80;
        color:white;
        align-content: center;
        }
        @media only screen and (min-width: 1020px) {
        .card{
        margin: 5%;
        }
        .RForm {
        margin-top: 100px;
        margin-left: 185px;
        margin-right: 50px;
        }
        .cbtn{
            margin-left: 20%;
        }
        .ttl{
         margin-left: 10%; 
         margin-top: 5%;  
        }
}
        </style>
    </head>
    <body>
        
        <!--Header -->
        <?php
        include($header_file_path);?>
        <!--./Header -->
        <!--Main Content -->
        
        <div class="Rfrm">
            
            <div class="card-cascade wider regform space md-form RForm">
                <!-- start version 0.2 -->
                   <!-- end version 0.2 -->
                    <h1 class="ttl"> Enter Registration Code Recieved On Mobile <font color=red>
                    </font></h1>
                    <!--First row-->
                    
                    <div class="row card">
                        <div class=card-title>
                            <br/>
                        </div>
                        <!--First column-->

                        <div class="col-md-2">
                           
                            
                        </div>
                    <form action="otpconf.php" method="POST">        
                        <div class="col-md-4 ">
                            <h1>Enter OTP :  cc</h1>
                            
                        </div>
                        <div class="col-md-4">
                            <div class="md-form">
                                <input type="number" id="OTP" name="newotp" class="form-control"  name="first_name" >
                                <label for="OTP" class="Ltr" title="Enter 6 Digit No Only">V-XXXXXX</label>
                            </div>
                        </div>
                    </div>
                    <?php
                    $msg=$_GET['msg'];
                    if(strcmp($msg,'Please Enter Otp in atleast 6 charcter')==0){
                        echo "<center><font color='red' size=3>Please Enter 6 digit OTP</font></center>";
                    }
                    else{
                        if(strcmp($msg,'Entered Wrong OTP')==0){
                        echo "<center><font color='red' size=3>Please Enter Correct OTP code</font></center>";
                    }
                  }
                    ?>
                    <div class="row">
                        <div class="col-lg-2 cbtn">
                            <a href="" title="">
                            <button type="submit" class="btn btn-success Frm"> Submit</button>
                            <!--Send On Success To Personal.php-->

                            </a>
                            </form>
                        </div>
                        <div class="col-lg-4 cbtn">

                            <button type="submit" class="btn btn-success Frm not" id="not" disabled="true" data-toggle='modal' data-target='#Again-otp'>Request New OTP</button>
                            <p id="timeer"></p>
                       
                        </div>
                        
                    </div>
                
            </div>
        </div>
<div class="modal fade modal-ext" id="Again-otp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
              <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h3>Request OTP</h3>
              </div>
                   <div class="modal-body">
                     <form action="<?php echo"$local_host_name"?>/PHP/againotp.php" method="get">
                            
                            
                        <div class="md-form">
                            
                            <input type="tel" id="otpno" name="mobile" class="form-control" required>
                            <label for="otpno">Mobile No</label>
                        </div>
                        <div class="text-xs-center">
                            <button class="btn btn-primary btn-lg" type="submit" data-toggle="tooltip" data-placement="top" title="Request New OTP">Get OTP</button>
                        </div>


                      </form>

                    </div>

            </div>
          </div>
  </div>          
  
        <script  type="text/javascript" charset="utf-8" async defer>
          
var myVar = setInterval(myTimer, 1000);
var time=60;
var btn=document.getElementById("not");
var timeer=document.getElementById("timeer");
function myTimer() {

    timeer.innerHTML = "Request new OTP in :".concat(time--);
    if(time==0)
     {
        timeer.innerHTML="";
        btn.disabled=false;
        clearInterval(myVar);
     } 
     
}


          // resend OTP
   function sendotp(){
    alert("asdjk");
     $.ajax({url: "http://localhost:8080/Vivah_MDB/PHP/againotp.php", success: function(result){
        alert("result");
    }});
}



        </script>
        <!--Footer-->
        <?php
        include($footer_file_path);?>
        <!--/.Footer-->
        <!-- JQuery -->
        <script type="text/javascript" src="<?php echo"$local_host_name"?>/js/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="<?php echo"$local_host_name"?>/js/tether.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="<?php echo"$local_host_name"?>/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="<?php echo"$local_host_name"?>/js/mdb.min.js"></script>
        
    </body>
</html>