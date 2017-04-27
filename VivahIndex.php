<!--Vivah Home Index Page
Author: Suhas More
-->
<?php
session_start();
require_once(join("//", array(dirname(__FILE__), 'common', 'const.php')));
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Vivah</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel='icon' type='text/css' href='<?php echo"$local_host_name"?>/img/images/Logo_Tab.png'>
		<!-- Font Awesome -->
		<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
		<link rel='stylesheet' href='<?php echo"$local_host_name"?>/css/bootstrap.font.css'>
		<!-- Bootstrap core CSS -->
		<link href='<?php echo"$local_host_name"?>/css/bootstrap.min.css' rel='stylesheet'>
		<!-- Material Design Bootstrap -->
		<link href='<?php echo"$local_host_name"?>/css/mdb.min.css' rel='stylesheet'>
		<!-- Your custom styles (optional) -->
		<link href='<?php echo"$local_host_name"?>/css/style.css' rel='stylesheet'>
		<link rel='stylesheet' type='text/css' href='<?php echo"$local_host_name"?>/css/Style1.css'>
		<link rel='stylesheet' type='text/css' href='<?php echo"$local_host_name"?>/css/Common.css'>

		<style>
		.input[type="date"]:focus:not([readonly]), input[type="datetime-local"]:focus:not([readonly]), input[type="email"]:focus:not([readonly]), input[type="number"]:focus:not([readonly]), input[type="password"]:focus:not([readonly]), input[type="search-md"]:focus:not([readonly]), input[type="search"]:focus:not([readonly]), input[type="tel"]:focus:not([readonly]), input[type="text"]:focus:not([readonly]), input[type="time"]:focus:not([readonly]), input[type="url"]:focus:not([readonly]), textarea.md-textarea:focus:not([readonly])
		{
			border-bottom: 1px solid #F06F10;
			box-shadow: 0 1px 0 0 #F26106;
		}
		.a{
		color: red;
		}
		.row{
			margin:0px;
		}

		</style>
		<script src="" type="text/javascript" charset="utf-8" async defer>
			colnsole.log("test");
		</script>
	</head>

	<body>

	<div class="space" style="margin-top: 5%" >
		<h1 align="center" >
		<img src="img/GANESHA.png" height="300" width="300" alt="">
			<p><br>॥ ॐ वक्रतुण्ड महाकाय सूर्यकोटिसम्स्प्रभः ॥ <p>॥ निर्विघ्नं कुरु मे देव सर्वकार्येषु सर्वदा ॥ </p>
			<p><br>Welcome To vivah</p>
			<sup class="wow fadeIn" data-wow-delay="0.7s" style="">A project by<com style=" color:#FF410A;
					font-family: 'Merienda', cursive; font-weight:800;font-size:22px;"> Gravity Computings
					</com></sup>

		</h1>
	</div>


		


		<!- Some Features Here-->
		<div class="container-fluid space">

			<section class="section feature-box">
				<!--Section heading-->
				<h1 class="section-heading wow fadeIn" style="visibility: visible; animation-name: fadeIn;">Some Features Vivah Provides</h1>
				<!--First row-->
				<div class="row features-big wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
					<!--First column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-internet-explorer red-text"></i>
						<h4 class="feature-title">Its a Unique in all terms</h4>
						<p class="grey-text">With Vivah, you don't have to worry about how your display quality on different browsers.</p>
					</div>
					<!--/First column-->
					<!--Second column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-search green-text"></i>
						<h4 class="feature-title">Hall Finder</h4>
						<p class="grey-text">Need Mangal karyalay ? Don't worry at all we provide 1000+ hall across the india </p>
					</div>
					<!--/Second column-->
					<!--Third column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-level-up blue-text"></i>
						<h4 class="feature-title">10000 + profiles</h4>
						<p class="grey-text">we have daily 500+ unique visits and millions of profile registered till the date</p>
					</div>
					<!--/Third column-->
				</div>
				<!--/First row-->
				<!--Second row-->
				<div class="row features-big wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
					<!--First column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-question teal-text"></i>
						<h4 class="feature-title">Secure Profile Information</h4>
						<p class="grey-text">we provide our own encrypttion technolodgy to secure your card details and information.</p>
					</div>
					<!--/First column-->
					<!--Second column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-comments-o lime-text"></i>
						<h4 class="feature-title">Hide contact information</h4>
						<p class="grey-text">We do not share contact inforation to anyone rather not to our own employees third person is miles away.</p>
					</div>
					<!--/Second column-->
					<!--Third column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-th purple-text"></i>
						<h4 class="feature-title">Authenticity of profiles</h4>
						<p class="grey-text">We personally belive in authentecity.And strongly recommand authentic user informatin </p>
					</div>
					<!--/Third column-->
				</div>


			</section>
		</div>
		<!- Some Features Here-->

		<!--Header Contents-->
		<!--*********************      Menu Header   ***********************-->
		<?php
		include($header_file_path);
		?>
		<!--********************       /Menu Header   ************************-->
		<!--Header Contents-->

		<!--Main Contents-->
		<br>
		<?php
			if(array_key_exists('error', $_GET)){
				echo $_GET['error'];
			}
		?>

		<?php include($footer_file_path);
		?>			<!--*********************        Script       ***********************-->
		<!-- JQuery -->
		<script type="text/javascript" src="<?php echo"$local_host_name"?>/js/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="<?php echo"$local_host_name"?>/js/tether.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="<?php echo"$local_host_name"?>/js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="<?php echo"$local_host_name"?>/js/mdb.min.js"></script>

		<!--**********************        /Script      **********************-->
	</body>
</html>
