<?php
session_start();
require_once(join("//", array((dirname(dirname(__FILE__))), 'common', 'const.php')));

?><!DOCTYPE html>
<html lang='en'>
	<head>
		<title>My Profile</title>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta http-equiv='x-ua-compatible' content='ie=edge'>

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

		<link href='<?php echo"$local_host_name"?>/css/rotating-card.css' rel='stylesheet' />
<style>
		.row {
			margin-right: 0px;
			margin-left: -15px;
			}

		.input[type="date"]:focus:not([readonly]), input[type="datetime-local"]:focus:not([readonly]), input[type="email"]:focus:not([readonly]), input[type="number"]:focus:not([readonly]), input[type="password"]:focus:not([readonly]), input[type="search-md"]:focus:not([readonly]), input[type="search"]:focus:not([readonly]), input[type="tel"]:focus:not([readonly]), input[type="text"]:focus:not([readonly]), input[type="time"]:focus:not([readonly]), input[type="url"]:focus:not([readonly]), textarea.md-textarea:focus:not([readonly])
		{
			border-bottom: 1px solid #F06F10;
			box-shadow: 0 1px 0 0 #F26106;
		}
		.green-gradient, .green-skin .side-nav {
		background: #000;
		background: -moz-linear-gradient(-45deg,#000 0,#003830 100%);
		background: -webkit-linear-gradient(-45deg,#000 0,#003830 100%);
		background: linear-gradient(135deg,#ffb101 0,#fe6306 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#003830', GradientType=1 );
		}
		.md-form label {
		color: #757575;
		position: absolute;
		top: 0.8rem;
		letter-spacing: 5px;
		font-weight: 400;
		left: 16px;
		font-size: 1em;
		cursor: text;}
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

		.card .form-header {
		color: #fff;
		align-content: center;
		text-align: center;
		margin-top: -60px;
		margin-bottom: 3rem;
		padding: 0.1%;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		-ms-border-radius: 2px;
		-o-border-radius: 2px;
		border-radius: 25px;
		}
		.cn {
		margin-left: 6%;
		margin-right: 5%;
		}
		.nav-tabs {
		border: 0;
		padding: .7rem;
		margin-left: 1rem;
		padding-left: 29%;
		margin-right: 1rem;
		margin-bottom: -20px;
		z-index: 2;
		position: relative;
		}
		.opt {
			font-size: 15px;
				letter-spacing: 6px;
			}
			.bg{background-image: url(http://192.168.43.169/Vivah_MDB/img/images/FormImg.jpg); }
			.op {
		font-size: 22px;
		letter-spacing: 9px;
		font-weight: 400;
		}
		.op.active{
		background-color: green;
		}
		.bst1 {
			background: #F9271D;
			color: #fff;
			float: left;
			font-family: arial;
			font-size: 15px;
			width: 125px;
			letter-spacing: -1px;
			padding: 0px;
			position: relative;
			right: 10px;
			text-align: center;
			font-weight: bold;
		}
		.bst2 {
			background: #509c0b;
			color: #fff;
			float: left;
			font-family: arial;
			font-size: 15px;
			width: 125px;
			letter-spacing: -1px;
			padding: 0px;
			position: relative;
			right: 10px;
			text-align: center;
			font-weight: bold;
		}
		.bst3 {
			background: #509c0b;
			color: #fff;
			float: left;
			font-family: arial;
			font-size: 15px;
			width: 125px;
			letter-spacing: -1px;
			padding: 0px;
			position: relative;
			right: 10px;
			text-align: center;
			font-weight: bold;
		}
		.bst4 {
			background: #509c0b;
			color: #fff;
			float: left;
			font-family: arial;
			font-size: 15px;
			width: 125px;
			letter-spacing: -1px;
			padding: 0px;
			position: relative;
			right: 10px;
			text-align: center;
			font-weight: bold;
		}
		.pro_font
		{
			font-color:grey;
			font-family: sans-serif;
		}
		</style>

		</script>
	</head>
	<body>



<?php include($header_file_path);?>
<!-- header End -->
<div class="container pro_font" style="margin-top:7%;">
		<div class="row">
			<div class="col-lg-4">
				<img alt="" src="<?php echo"$local_host_name"?>/img/profile_icon.jpg">
				<br>
				<input type="file">
			</div>

			<div class="col-lg-4">
				<h3>Suhas More</h3>
				<br>
				22 years<br>
				Hindu<br>
				Pune City

				</p>
			</div>
			<div class="col-lg-4">

			</div>

		</div>
</div>

<div class="container" style="margin-top:3%;">
<div class="col-lg-4">
	<h3>
		 Basic details
	</h3>
	<i class="fa fa-fw fa-edit"></i>
	<div class="view-mode view-mode1">
		<table width="100%">
			<tbody><tr class="tabletr">
				<td class="widthforfirsttd"><b> Age </b></td>
				<td>:</td>
				<td class="widthfortd">22 yrs</td>
			</tr>
			<tr class="tabletr">
				<td><b> Height</b></td>
				<td>:</td>
				<td>5ft 2in</td>
			</tr>
			<tr class="tabletr">
				<td><b> Weight</b></td>
				<td>:</td>
				<td>74 kgs</td>
			</tr>

			<tr class="tabletr">
				<td><b> Marital Status </b></td>
				<td>:</td>
				<td>Never Married</td>
			</tr>
			<tr class="tabletr">
				<td><b> Body Type </b></td>
				<td>:</td>
				<td>Average</td>
			</tr>
			<tr class="tabletr">
				<td><b> Complexion </b></td>
				<td>:</td>
				<td>Wheatish Brown</td>
			</tr>
			<tr class="tabletr">
				<td><b> Physical Status </b></td>
				<td>:</td>
				<td>Normal</td>
			</tr>

		</tbody></table>
	</div>
	</div>

	<div class="col-lg-4">
	<h3>
		 Religious Details
	</h3>

	<i class="fa fa-fw fa-edit"></i>

	<div class="view-mode">
		<table width="100%">
			<tbody><tr class="tabletr">
				<td class="widthforfirsttd"><b> Religion </b></td>
				<td>:</td>
				<td class="widthfortd">Hindu</td>
			</tr>

			<tr class="tabletr">
				<td><b>Mother Tongue</b></td>
				<td>:</td>
				<td>Marathi</td>
			</tr>

			<tr class="tabletr">
				<td><b> Caste</b></td>
				<td>:</td>
				<td>Maratha</td>
			</tr>

			<tr class="tabletr">
				<td><b> Sub-Caste</b></td>
				<td>:</td>

					<td>96 Kuli</td>

			</tr>


		</tbody></table>
	</div>

</div>

<div class="col-lg-4">
<h3>
  Family Details
</h3>

<i class="fa fa-fw fa-edit"></i>

<div class="view-mode">
	<table width="100%">
		<tbody><tr class="tabletr">
			<td class="widthforfirsttd"><b> Family Status </b></td>
			<td>:</td>
			<td class="widthfortd">Middle Class
			</td>

		</tr>
		<tr class="tabletr">
			<td><b> Family Type </b></td>
			<td>:</td>
			<td>Joint Family
			</td>

		</tr>
		<tr class="tabletr">
			<td><b> Family Values </b></td>
			<td>:</td>
			<td>Moderate
			</td>
		</tr>
	</tbody></table>

</div>

</div>
</div>

<!-- footer start -->
<?php include($footer_file_path);?>

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
