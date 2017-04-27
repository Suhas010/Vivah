<!-- 
	Suresh Thite
Main Master page pointing to Vivah Hall Booking BandBooking Etc-->

<?php
session_start();
require_once(join("//", array(dirname(__FILE__), 'common', 'const.php')));
if($_GET[par]==0){
	echo "<script>alert('You Are Not Following legal Registration Process if You Want To Register then Click Below Botton')</script>";
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Master Main Page</title>
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

		.text{
			margin-top: 10%;
		}
		</style>
		<script src="" type="text/javascript" charset="utf-8" async defer>
			colnsole.log("test");
		</script>
</head>

<body>

		<?php
			include($master_header_path);
		?>
		<!--Main Content-->
		<div class="container-fluid space" style="margin-top: 5%;">
		<div class="container-fluid row">
			<div class="text col-lg-6">
				<h1>A stylish event begins long before the guests arrive. It begins with masterful planning.</h1>

			</div>
			<div class="crosel col-lg-6">
				<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="carousel-inner" role="listbox" style="margin-left:20%;margin-right: 20%;">
						<!--First slide-->
						<div class="carousel-item active">
							<img src="<?php echo"$local_host_name"?>/images/vivah/2.jpg" alt="First slide" height="150" width="300">
						</div>
						<!--/First slide-->
						<!--Second slide-->
						<div class="carousel-item">
							<img src="<?php echo"$local_host_name"?>/images/vivah/a.jpeg" alt="Second slide"  height="150" width="300">
						</div>
						<!--/Second slide-->
						<!--Third slide-->
						<div class="carousel-item">
							<img src="<?php echo"$local_host_name"?>/images/vivah/qq.jpg" alt="Third slide"  height="150" width="300">
						</div>
						<!--/Third slide-->
					</div>
				</div>	
		
			</div>

		</div>

		<div class="cardss">
				<div class="row">
				<div class="col-xl-3">
					<div class="card">
						<div class="card-block" style="text-align: center;">
						<!-- <h3>Search Groom</h3> -->
						<a href="VivahIndex.php" class="btn btn-warning">Vivah.com</a>
						<p class="card-text">Browse Grooms and brides hear and find perfect match for you with millions of options</p>
						</div>
					</div>
				</div>
			
			<div class="col-xl-3">
				<div class="card">
					<div class="card-block" style="text-align: center;">
							<!-- <h2>Search Groom</h2> -->
						<a href="HallBooking/" class="btn btn-warning">Hall Registration</a>
						<p class="card-text">Need a marriage meeting hall ? CLICK hear we provide thousand of ceremony hall across india</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3">
				<div class="card">
					<div class="card-block" style="text-align: center;">
					<!-- <h2>Search Groom</h2> -->
					<a href="#" class="btn btn-warning">Photographer</a>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3">
				<div class="card">
					<div class="card-block" style="text-align: center;">
					<!-- <h2>Search Groom</h2> -->
					<a href="#" class="btn btn-warning">Decorator</a>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
		  </div>
		</div>


		<div class="features row" style="margin-top: 5%;">
			<div class="col-lg-6">
				<div class="">
					<h2>YOU DESERVE A VIVAH EXPERIENCE</h2>
					<p>It is not how many you meet but who you meet. And we
						believe in giving you the best start.</p>
					<form action="http://localhost/Vivah_MDB/Profile/Register/" class=" waves-effect waves-light">
						<button type="submit" class="btn btn-warning waves-effect waves-light">
						Register
						</button>
					</form>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="">
					<h2>
						WHY Vivah WORKS <br> FOR YOU
					</h2>
					<ul class="list-style">
						<li class="inlinelst fa fa-heart-o "> Fits your busy lifestyle</li><br>
						<li class="inlinelst fa fa-heart-o"> Match reviews across multiple
						criteria</li><br>
						<li class="inlinelst fa fa-heart-o"> Phone-verified matches</li><br>
						<li class="inlinelst fa fa-heart-o"> Intelligent matchmaking</li><br>
						<li class="inlinelst fa fa-heart-o"> All interactions are private, secure
						and confidential</li><br>
						<li class="inlinelst fa fa-heart-o"> An experienced team backed by
						technology works with you</li><br>
					</ul>
				</div>
			</div>
		</div>
		<!- Overview Dummy Stories-->
		<div class="row space" style="margin-top: 10%;">
			<div class="row ">

                    <!--First column-->
                    <div class="col-md-12 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">

                        <div class="flex-center mb-2">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs md-pills pills-default" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-toggle="tab" href="#panel31" role="tab" aria-expanded="false"><i class="fa fa-sun-o fa-2x"></i><br>Hall Registration</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-toggle="tab" href="#panel32" role="tab" aria-expanded="false"><i class="fa fa-diamond fa-2x"></i><br>Vivah Registration</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-toggle="tab" href="#panel34" role="tab" aria-expanded="false"><i class="fa fa-star fa-2x"></i><br>Payment Mode</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link " data-toggle="tab" href="#panel32" role="tab" aria-expanded="true"><i class="fa fa-coffee fa-2x"></i><br> Harmony</a>
                                </li>
                            </ul>

                        </div>

                        <!--Tab panels-->
                        <div class="tab-content">

                            <!--Panel 1-->
                            <div class="tab-pane fade" id="panel31" role="tabpanel" aria-expanded="false">
                                <br>

                                <!--First row-->
                                <div class="row">

                                    <!--First column-->
                                    <div class="col-lg-5 col-md-12 mb-3">

                                        <!--Featured image-->
                                        <div class="view overlay hm-white-slight z-depth-2">
                                            <img src="images/a1.jpg">
                                        </div>
                                    </div>
                                    <!--/First column-->

                                    <!--Second column-->
                                    <div class="col-lg-6 offset-lg-1 col-md-12 text-xs-left">

                                        <!--Title-->
                                        <h4 class="mb-3">Hall Registration</h4>

                                        <!--Description-->
                                        <p class="grey-text page-description info-section">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                                    </div>
                                    <!--/Second column-->
                                </div>
                                <!--/First row-->

                            </div>
                            <!--/.Panel 1-->

                            <!--Panel 2-->
                            <div class="tab-pane fade active in" id="panel32" role="tabpanel" aria-expanded="true">
                                <br>

                                <!--First row-->
                                <div class="row">

                                    <!--First column-->
                                    <div class="col-lg-5 col-md-12 mb-3">

                                        <!--Featured image-->
                                        <div class="view overlay hm-white-slight z-depth-2">
                                            <img src="http://mdbootstrap.com/img/Photos/Horizontal/Relax/4-col/img%20%286%29.jpg">
                                        </div>
                                    </div>
                                    <!--/First column-->

                                    <!--Second column-->
                                    <div class="col-lg-6 offset-lg-1 col-md-12 text-xs-left">

                                        <!--Title-->
                                        <h4 class="mb-3">Vivah Registration</h4>

                                        <!--Description-->
                                        <p class="grey-text page-description info-section">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                                    </div>
                                    <!--/Second column-->
                                </div>
                                <!--/First row-->

                            </div>
                            <!--/.Panel 2-->

                            <!--Panel 3-->
                            <div class="tab-pane fade" id="panel33" role="tabpanel">
                                <br>

                                <!--First row-->
                                <div class="row">

                                    <!--First column-->
                                    <div class="col-lg-5 col-md-12 mb-3">

                                        <!--Featured image-->
                                        <div class="view overlay hm-white-slight z-depth-2">
                                            <img src="http://mdbootstrap.com/img/Photos/Horizontal/Relax/4-col/img%20%2810%29.jpg">
                                        </div>
                                    </div>
                                    <!--/First column-->

                                    <!--Second column-->
                                    <div class="col-lg-6 offset-lg-1 col-md-12 text-xs-left">

                                        <!--Title-->
                                        <h4 class="mb-3">Pyment Modes</h4>

                                        <!--Description-->
                                        <p class="grey-text page-description info-section">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                                    </div>
                                    <!--/Second column-->
                                </div>
                                <!--/First row-->

                            </div>
                            <!--/.Panel 3-->

                            <!--Panel 4-->
                            <div class="tab-pane fade" id="panel34" role="tabpanel" aria-expanded="false">
                                <br>

                                <!--First row-->
                                <div class="row">

                                    <!--First column-->
                                    <div class="col-lg-5 col-md-12 mb-3">

                                        <!--Featured image-->
                                        <div class="view overlay hm-white-slight z-depth-2">
                                            <img src="http://mdbootstrap.com/img/Photos/Horizontal/Relax/4-col/img%20%287%29.jpg">
                                        </div>
                                    </div>
                                    <!--/First column-->

                                    <!--Second column-->
                                    <div class="col-lg-6 offset-lg-1 col-md-12 text-xs-left">

                                        <!--Title-->
                                        <h4 class="mb-3">Harmony</h4>

                                        <!--Description-->
                                        <p class="grey-text page-description info-section">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                                    </div>
                                    <!--/Second column-->
                                </div>
                                <!--/First row-->

                            </div>
                            <!--/.Panel 4-->

                        </div>
                        <!--/Tab panels-->

                    </div>
                    <!--/First column-->

        	</div>
		</div>

		<!- Overview Dummy Stories-->


		<!--Main Content-->            

            <?php
			if(array_key_exists('error', $_GET)){
				echo $_GET['error'];
			}
		?>

		<?php include($footer_file_path);
		?>			<!--*********************        Script       ***********************-->
	
		</div>	

				<!-- JQuery -->
		<script type="text/javascript" src="<?php echo"$local_host_name"?>/js/jquery-2.2.3.min.js"> </script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="<?php echo"$local_host_name"?>/js/tether.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="<?php echo"$local_host_name"?>/js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="<?php echo"$local_host_name"?>/js/mdb.min.js"></script>

		<!--**********************        /Script      **********************-->
	</body>
</html>
