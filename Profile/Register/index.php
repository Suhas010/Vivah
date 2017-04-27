<?php
session_start();

require_once(join('//', array(dirname(dirname(dirname(__FILE__))), 'common', 'const.php')));
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
        <title>Register to Vivah</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" type="text/css" href="<?php echo"$local_host_name"?>/img/images/Logo_Tab.png">
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
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
        @media only screen and (max-width: 500px) {
        .RForm{
        margin-top: 100px;
        margin-left: 30px;
        margin-right: 30px;
        }
        
        }@media only screen and (min-width: 1020px) {
        .RForm{
        margin-top: 100px;
        margin-left: 230px;
        margin-right: 230px;

        border:solid 1px black;
        }
        .regtitle{
        font-family: 'Droid Serif', serif;
        margin-left: 30%;
        margin-top: 5%;
        margin-bottom: 3%;
        }
        
        .card {
        border: 0;
        margin-left: 1%;
        margin-right: 1%;
        }
        
        }
        
        .Ltr{
        letter-spacing:5px;
        }
        /*Lable*/
        .md-form label {
        color: #847F7D;
        font-family: 'Courgette', cursive
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
        .space{
        margin-top: 35px;
        }
        h1{
        font-family: 'Lobster Two', cursive;
        }
        </style>
    </head>
    <body>
        
        <!--Header -->
        
        <?php
        include($header_file_path);?>
        <!--./Header -->
        <!--Main Content -->
          <div class="card-cascade wider regform">
           <!-- start version 0.2 -->
            <form class="md-form RForm" method="POST" action="<?php echo $local_host_name?>/PHP/Registration.php">
                <!-- end version 0.2 -->

                <h1 class="regtitle">Registration Form</h1>
                <!--First row-->
                <div class="row card">
                    <div class=card-title>
                        <br/>
                        
                        </div>
                                                
                          <!--First column-->
                        
                        <div class="col-md-3 ">
                            <h1>My Self
                            </h1>
                        </div>
                        <div class="col-md-3">
                            <div class="md-form">
                                <input type="text" id="LastName" class="form-control" name="last_name" Required	>
                                <label for="LastName" class="Ltr">Last Name</label>
                            </div>
                        </div>
                        <!--Second column-->
                        <div class="col-md-3">
                            <div class="md-form">
                                <input type="text" id="FirstName" class="form-control" name="first_name" Required>
                                <label for="FirstName" class="Ltr">First Name</label>
                            </div>
                        </div>
                        <!--Third column-->
                        <div class="col-md-3">
                            <div class="md-form">
                                <input type="text" id="MiddleName" class="form-control" name="middle_name" Required>
                                <label for="MiddleName" class="Ltr">Middle Name</label>
                            </div>
                        </div>
                        
                    </div>
                    <!--/.First row-->
                    <div class="row card ">
                        <div class=card-title>
                            <br>
                        </div>
                        <div class="col-md-3">
                            <h1>I am
                            <i class="fa fa-mail" aria-hidden="true"></i></h1>
                        </div>
                        <div class="col-md-3">
                            <div class="md-form">
                                <fieldset class="form-group">
                                    <input name="Sex" type="radio" id="Boy" value="Boy">
                                    <label for="Boy">B o y</label>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="md-form">
                                <fieldset class="form-group">
                                    
                                    <input name="Sex" type="radio" id="Girl" value="Girl">
                                    <label for="Girl">G i r l</label>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="md-form">
                                <fieldset class="form-group">
                                    
                                    <input name="Sex" type="radio" id="Other" value="Other">
                                    <label for="Other">O t h e r</label>
                                </fieldset>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <!--Serching Grome For-->
                <div class="row card ">
                    <div class=card-title>
                        <br>
                    </div>
                    <div class="col-md-3">
                        <h1>Looking
                        <i class="fa fa-mail" aria-hidden="true"></i></h1>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form">
                            <fieldset class="form-group">
                                <input name="Interested" type="radio" id="Gromes" value="Gromes">
                                <label for="Gromes">G r o o m s </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form">
                            <fieldset class="form-group">
                                
                                <input name="Interested" type="radio" id="Brides" value="Brides">
                                <label for="Brides">B r i d e s</label>
                            </fieldset>
                        </div>
                    </div>
                </div>
                
                <!--Contact-->
                <div class="row card">
                    <div class=card-title>
                        <br>
                        
                    </div>
                    <div class="col-md-3">
                        <h1>Contact 
                        <i class="fa fa-mail" aria-hidden="true"></i></h1>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="email" id="Mail" class="form-control" name="email" title="Enter Valid Email Address" Required>
                            <label for="Mail" class="Ltr" title="Please Enter Valid Email Address">Email</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="tel" id="Mobile" maxlength="10" pattern="[0-9]{10}" name="mobile" title="Enter Valid Moblie Number" class="form-control" lenght="10" required>
                            <label for="Mobile" class="Ltr" >Mobile </label>
                        </div>
                    </div>
                </div>
                <!--Birthday-->
                <div class="row card">
                    <div class=card-title>
                        <br>
                    </div>
                    <div class=card-content>
                        
                        <div class="col-md-3">
                            <h1>DOB
                            <i class="fa fa-mail" aria-hidden="true"></i></h1>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="md-form">
                                <input alt="Date Of Birth"
                                type="date" id="DOB" class="form-control"  name="date" data-toggle="tooltip" data-placement="bottom" title="Date Of Birth" Required>
                                
                                <label for="DOB" class="Ltr"></label>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <!--Birthday-->
                <div class="row card">
                    <div class=card-title>
                        <br>
                        
                    </div>
                    <div class="col-md-4">
                        <h1>Password
                        <i class="fa fa-mail" aria-hidden="true"></i></h1>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="password" id="password" class="form-control" name="password">
                            <label for="password" class="Ltr">Password</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="password" id="confirm_password" class="form-control" name="confirmpass">
                            <label for="confirm_password" class="Ltr">Again Pleas </label>
                        </div>
                    </div>
                </div>
                <!-- Submit And Create Account Of User -->
                <div class="row ">
                    <div class=card-title>
                        <br>
                        
                    </div>
                    <div class="col-md-9 offset-md-3">
                         <div class="md-form">
                            <fieldset class="form-group">
                                
                                <input name="chek" type="checkbox" id="terms" value="Terms">
                                <label for="terms"><a href="<?php echo"$local_host_name"?>/About/terms.php">I Accept Terms And Conditions.</a></label>
                            </fieldset>
                        </div>
                    </div>
                    </div>
                    <!-- <div class="col-md-3">
                    </div> -->
                    <div class="row">
                        <div class="col-md-3 offset-md-3">
                            <div class="md-form">
                                <button type="submit" class="btn btn-success Frm">Register</button>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="md-form">
                                <a type="button" href="<?php echo"$local_host_name"?>/" class="btn btn-danger Frm">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                    </div> -->
            
           <!-- start version 0.2 -->

            </form>
           <!-- end version 0.2 -->

        </div>
    <!--./MainContent -->
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
    <script>
    // Material Select Initialization
    $(document).ready(function() {
    $('.mdb-select').material_select();
    });
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");
    function validatePassword(){
    if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
    confirm_password.setCustomValidity('');
    }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
    function init() {
    // Clear forms here
    document.getElementById("user").value = "";
    }
    window.onload = init;

    function able(){
        document.getElementById("Register").disabled="false";
    }

    </script>
</body>
</html>