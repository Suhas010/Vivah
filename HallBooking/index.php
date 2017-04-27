<!--Home Page
Author: Suhas More
-->
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

	.space{
		margin-top: 10%;
	}

.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
	border-right:0; 
	box-shadow:0 0 0; 
	border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}
		
		</style>
		<script src="" type="text/javascript" charset="utf-8" async defer>
			colnsole.log("test");
		</script>
	</head>
	
	<body>

		<div class="space sp">
			<!-- <input type="text" name="" placeholder="">
			 -->
<div class="container">
   
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search </label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="Search Hall or Place Here..">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
              		

              		<!-- <div class="row">
  <div class="col-xs-7">
    <div class="form-group">
      <select class="selectpicker form-control">
        <option>Mustard</option>
        <option>Ketchup</option>
        <option>Relish</option>
      </select>
    </div>
  </div> -->

            	</div>
            </form>
        </div>
    </div>
    <div class="form-group">
                                            
         <div class="col-md-12">
             <div class="form-group row">

                    <div class="col-md-4">

                    	<select class="form-control input-xsmall input-inline">
                                <option>Select State</option>
                                <option>Maharashtra</option>     
                        </select>
                                 

                    </div>


                    <div class="col-md-4">

                     	<select class="form-control input-xsmall input-inline">
                                <option>Select District</option>
                                <option>Ahmadnagar</option>
                                <option>Mumbai</option>
                                <option>Pune</option>
                                <option>Solapur</option>
                                                            
                        </select>


                    </div>


                     <div class="col-md-4">

                          <select class="form-control input-xsmall input-inline">
                                <option>Select Taluka</option>
                                <option>Jamkhed</option>
                                <option>Washi</option>
                                <option>Indapur</option>
                                <option>Bhor</option>
                                <option>Pandharpur</option>
                                                            
                          </select>

                     </div>





                    </div>
                </div>
        </div>
</div>

   




<!--Carousel Wrapper-->


<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
  
    <!--/.Controls-->

    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

            <div class="col-md-4">
                <div class="card">
                    <img class="img-fluid" src="Halls/Hall2.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">सप्तपदी  मंगल कार्यालय</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="OneHall.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 hidden-sm-down">
                <div class="card">
                    <img class="img-fluid" src="Halls/Hall3.jpeg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">शिवराय मंगल कार्यालय</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 hidden-sm-down">
                <div class="card">
                    <img class="img-fluid" src="Halls/Hall4.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">शिवनेरी मंगल कार्यालय</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>

        </div>
        
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

            <div class="col-md-4">
                <div class="card">
                    <img class="img-fluid" src="Halls/Hall5.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">सिद्धार्थ हॉल</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 hidden-sm-down">
                <div class="card">
                    <img class="img-fluid" src="Halls/Hall10.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">गुलमोहर हॉल</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 hidden-sm-down">
                <div class="card">
                    <img class="img-fluid" src="Halls/Hall14.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">स्वराज्य मंगल कार्यालय</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

            <div class="col-md-4">
                <div class="card">
                    <img class="img-fluid" src="Halls/Hall8.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">हिंदवी मंगल कार्यालय</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 hidden-sm-down">
                <div class="card">
                    <img class="img-fluid" src="Halls/Hall9.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">रायगड मंगल कार्यालय</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 hidden-sm-down">
                <div class="card">
                    <img class="img-fluid" src="Halls/Hall13.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">राजगड मंगल कार्यालय</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>

        </div>
        <!--/.Third slide-->

    </div>
    <!--/.Slides-->
  <div class="controls-top">
        <a class="btn-floating btn-small" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating btn-small" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
    </div>
</div>
<!--/.Carousel Wrapper-->

		</div>

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