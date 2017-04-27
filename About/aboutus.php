<?php
session_start();
//$local_host_name="http://192.168.43.169/Vivah_MDB";
require_once(join('//', array((dirname(dirname(__FILE__))), 'common', 'const.php')));

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Vivah</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		
		<link rel="icon" type="text/css" href="<?php echo"$local_host_name"?>/img/images/Logo_Tab.png">
		<!-- Font Awesome -->
		
		<link rel="stylesheet" href="<?php echo"$local_host_name"?>/css/bootstrap.font.css">
		<!-- Bootstrap core CSS -->
		<link href="<?php echo"$local_host_name"?>/css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="<?php echo"$local_host_name"?>/css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="<?php echo"$local_host_name"?>/css/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo"$local_host_name"?>/css/Style1.css">
		<link rel="stylesheet" type="text/css" href="<?php echo"$local_host_name"?>/css/Common.css">
		
		<style>
		.input[type="date"]:focus:not([readonly]), input[type="datetime-local"]:focus:not([readonly]), input[type="email"]:focus:not([readonly]), input[type="number"]:focus:not([readonly]), input[type="password"]:focus:not([readonly]), input[type="search-md"]:focus:not([readonly]), input[type="search"]:focus:not([readonly]), input[type="tel"]:focus:not([readonly]), input[type="text"]:focus:not([readonly]), input[type="time"]:focus:not([readonly]), input[type="url"]:focus:not([readonly]), textarea.md-textarea:focus:not([readonly])
		{
			border-bottom: 1px solid #F06F10;
			box-shadow: 0 1px 0 0 #F26106;
		}
			.navbar .navbar-nav .nav-item:active {
    margin-left: 0;
    background-color: black;
}
		.terms{
			margin-top:5%;
			margin-bottom :5%;
			margin-right: 15%;
			margin-left:5%;
		}
		.row {
			margin-right: 0px;
			margin-left: -15px;
			}
		.e {
			 padding: 0px 0px 0px 100px;
		}
		
		.op.active{
		background-color: green;
		}

		</style>

	</head>
	
	<body>

        <!--Header -->
  
        <?php
        include($header_file_path);?>
        <!--./Header -->
	
	
    <!--Card-->
<div class="card card-cascade space ">
	<div class="container terms">
	

    <h3><b>ABOUT VIVAH</h3></b><br>
    
    <i><e>We will find you the perfect match.</e><br><br>
    
    There are a million places where you can look for the one you want to share your life with. But do you really need to skim through millions of profiles, shortlist, compare and connect with each to find ?the One? for you?</i><br><br>
    
    Finding the right match can be a long-drawn process if you have to skim through millions of profiles. At Vivah Matrimony, we believe that your search<br> for the right match deserves the right start. That?s why we have built the most intuitive Compatibility Algorithm that will bring right to your inbox the <br>best of the most perfect choices.<br><br>
    
    As the most intuitive matrimonial website we make sure that you spend more time getting to know your prospective life partner, rather than searching.<br> Our intelligent matchmaking algorithms will simplify and quicken the process of finding the right match and get your quest on the right track from Day <br>One.<br><br>
    
    <h2><b>Why Vivah Will Work for You</b></h2><br>
    
    <b>Profile Validation</b><br>	
    
    All registered profiles are phone verified to ensure genuineness.<br><br>
    <b>Convenient</b><br>
    
    Receive perfectly matched and shortlisted profiles in your inbox.<br><br>
    <b>Safe And Secure</b><br>
    
    Confidentiality is maintained across our matrimonial website to ensure enhanced security.<br><br>
    <b>Intuitive Technology</b><br>
    
    Our proprietary Compatibility Meter utilises intelligent matchmaking algorithms to ensure that you only receive profiles with the highest<br> compatibility ratio.<br><br>
    <b>Comprehensive Support</b><br>
    
    Vivah Matrimony offers extensive assistance to ensure you have a seamless experience.<br><br>
    <b>Advanced Technology</b><br>
    
    Vivah Matrimony utilises advanced matchmaking technology to ensure quicker results and customised support.<br>
    
            
</div>                
</div>

</div>
</div>
						
        <!--Header -->
  
        <?php
        include($footer_file_path);?>
        <!--./Header -->


						<!--*********************        Script       ***********************-->
						<!-- JQuery -->
						
						<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
						<!-- Bootstrap tooltips -->
						<script type="text/javascript" src="js/tether.min.js"></script>
						<!-- Bootstrap core JavaScript -->
						<script type="text/javascript" src="js/bootstrap.min.js"></script>
						<!-- MDB core JavaScript -->
						<script type="text/javascript" src="js/mdb.min.js"></script>
						
						<!--**********************        /Script      **********************-->
					</body>
				</html>