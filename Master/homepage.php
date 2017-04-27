<?php
session_start();
require_once(join("//", array(dirname(dirname(__FILE__)), 'common', 'const.php')));
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

		<?php
			include($header_file_path);
		?>
		<!--Main Content-->
			<div class="container">
	<div class="row" style="margin-top:10%;">
		<!-- <div class="col-lg-6 offset-lg-3">
			<img src="img/marriage1.jpg" width="" height="">
		</div> -->
		<!--Carousel Wrapper-->
		<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
			<!--Indicators-->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-1z" data-slide-to="1"></li>
				<li data-target="#carousel-example-1z" data-slide-to="2"></li>
			</ol>
			<!--/.Indicators-->
			<!--Slides-->
			<div class="carousel-inner" role="listbox">
				<!--First slide-->
				<div class="carousel-item active">
					<img src="https://mdbootstrap.com/img/Photos/Slides/img%20(18).jpg" alt="First slide">
				</div>
				<!--/First slide-->
				<!--Second slide-->
				<div class="carousel-item">
					<img src="https://mdbootstrap.com/img/Photos/Slides/img%20(19).jpg" alt="Second slide">
				</div>
				<!--/Second slide-->
				<!--Third slide-->
				<div class="carousel-item">
					<img src="https://mdbootstrap.com/img/Photos/Slides/img%20(20).jpg" alt="Third slide">
				</div>
				<!--/Third slide-->
			</div>
				<br>
			<div class="row">
				<div class="col-xl-3">
					<div class="card">
						<div class="card-block" style="text-align: center;">
						<!-- <h3>Search Groom</h3> -->
						<a href="template.html" class="btn btn-warning">Groom</a>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
			
			<div class="col-xl-3">
				<div class="card">
					<div class="card-block" style="text-align: center;">
							<!-- <h2>Search Groom</h2> -->
						<a href="template.html" class="btn btn-warning">Hall</a>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3">
				<div class="card">
					<div class="card-block" style="text-align: center;">
					<!-- <h2>Search Groom</h2> -->
					<a href="template.html" class="btn btn-warning">Photographer</a>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3">
				<div class="card">
					<div class="card-block" style="text-align: center;">
					<!-- <h2>Search Groom</h2> -->
					<a href="template.html" class="btn btn-warning">Decorator</a>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
		</div>
		</div> 
	</div>	     
		<!--Main Content-->            

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
