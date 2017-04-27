<?php
session_start();
$local_host_name="http://192.168.43.169/Vivah_MDB";

?>
<!--Home Page
Author: Suhas More
-->
<!-- 
-------------------------------------------------------------------------------------------------

When User click on brows profile directed to this page...
may customise profile using filter

-------------------------------------------------------------------------------------------------
-->



<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Register To Vivah </title>
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
		<script type='text/javascript'>
		$().ready(function(){
		$('[rel="tooltip"]').tooltip();
		});
		function rotateCard(btn){
		var $card = $(btn).closest('.card-container');
		console.log($card);
		if($card.hasClass('hover')){
		$card.removeClass('hover');
		} else {
		$card.addClass('hover');
		}
		}
		</script>
		<style>
		.input[type='date']:focus:not([readonly]), input[type='datetime-local']:focus:not([readonly]), input[type='email']:focus:not([readonly]), input[type='number']:focus:not([readonly]), input[type='password']:focus:not([readonly]), input[type='search-md']:focus:not([readonly]), input[type='search']:focus:not([readonly]), input[type='tel']:focus:not([readonly]), input[type='text']:focus:not([readonly]), input[type='time']:focus:not([readonly]), input[type='url']:focus:not([readonly]), textarea.md-textarea:focus:not([readonly])
		{
			border-bottom: 1px solid #F06F10;
			box-shadow: 0 1px 0 0 #F26106;
		}
			/* Profile*/
		.card-wrapper .card-up {
							overflow: hidden;
								height: 9%;
								}
		.card-wrapper {
		margin: 2.5rem 0 1rem;
		position: relative;
		height: 500px;
		perspective: 800px;
			}
		.row {
		margin-right: 0px;
		margin-left: 0px;
					}
		.card-container, .front, .back {
    width: 100%;
    height: 477px;
    border-radius: 4px;
    box-shadow: 8px 11px 11px #666;
}
		.card .footer {
		border-top: 1px solid #EEEEEE;
		color: #999999;
		margin: -50px 0 0;
		padding: 10px 0 0;
		text-align: center;
		}
		.card .content {
		background-color: rgba(0, 0, 0, 0);
		box-shadow: none;
		padding: 10px 26px 90px;
		}
		
		.lf{
		text-align: left;
		}
		.rg{
		text-align: right;
		}
		.tit{
		font-family: Arial, Helvetica, sans-serif;
		font-size: 18px;
		font-weight: 800;
		}
		.sub{
		font-family: 'Arial Rounded MT Bold', 'Helvetica Rounded', Arial, sans-serif;
		font-size: 20px;
		}
		</style>
		
	</head>
	
	<body>
		
		<!--Header Contents-->
		<!--*********************      Menu Header   ***********************-->
		<header>
			<!--Navbar-->
			<nav class='navbar animated fadeIn navbar-fixed-top'>
				<!-- Collapse button-->
				
				<a class='navbar-brand ' href='<?php echo"$local_host_name"?>'><img src='<?php echo"$local_host_name"?>/img/images/Logo.png' alt='Vivah Brand Name'></a>
				<button class='navbar-toggler hidden-sm-up' type='button' data-toggle='collapse' data-target='#MobileView_Bar'>
				<i class='fa fa-bars'></i>
				</button>
				<div class='container'>
					<!--Collapse content-->
					<div class='collapse navbar-toggleable-xs' id='MobileView_Bar'>
						<!--Navbar Brand-->
						<!--Links-->
						<ul class='nav navbar-nav pull-right'>
							<li class='Ho nav-item active'>
								<a class='nav-link' href='#'>Home <span class='sr-only'>(current)</span></a>
							</li>
							<li class='nav-item'>
								<a class='nav-link' href='#'>Pricing</a>
							</li>
							<li class='nav-item'>
								<a class='nav-link' href='#'>About</a>
								
							</li>
							<?php 
							if($_SESSION['user']==NULL){
									echo "
							<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modal-login'>
							Login
							</button>
							
							<form action='http://192.168.43.169/Vivah_MDB/User/'>
								<button type='submit' class='btn btn-warning'>
								Register
							</button></form>
							";}
							
							else
							{
									
								echo "
<div class='btn-group'>
    <button type='button' class='btn btn-default'>".$_SESSION['user']."</button>
    <button type='button' class='btn btn-danger dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
        <span class='sr-only'>Toggle Dropdown</span>
    </button>
    <div class='dropdown-menu'>
        <a class='dropdown-item' href='#'>Action</a>
        <a class='dropdown-item' href='http://localhost/Vivah_MDB/User/Edit_Profile_Info.php'>Edit Profile</a>
        <a class='dropdown-item' href='#'>Settings</a>
        <div class='dropdown-divider'></div>
        <a class='dropdown-item' href='http://192.168.43.169/Vivah_MDB/Logout/'>Logout</a>
    </div>
</div>
							
							"
							;	
							}

							?>
										</ul>
						
					</div>
				</div>
			</nav>
			
			<!-- Modal Login -->
			<div class="modal fade modal-ext" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<!--Content-->
					<div class="modal-content">
                       
                    <!-- Version 0.1 Start -->
						<form method='post' action="http://192.168.43.169/Vivah_MDB/PHP/check_login.php">
						<!-- Version 0.1 End -->
													
						<!--Header-->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							<h3><i class="fa fa-user"></i> Login</h3>
						</div>
						
						<!--Body-->
						
						<div class="modal-body">
							<div class="md-form">
								<i class="fa fa-envelope prefix"></i>
								<input type="text" id="form2" name="user_name" class="form-control">
								<label for="form2">Your email</label>
							</div>
							<div class="md-form">
								<i class="fa fa-lock prefix"></i>
								<input type="password" id="form3" name="user_pswd" class="form-control">
								<label for="form3">Your password</label>
							</div>
							<div class="text-xs-center">
								<button class="btn btn-primary btn-lg">Login</button>
							</div>
						</div>
						
						<!--Footer-->
						<div class="modal-footer">
							<div class="options">
								<p class="loginF">Not a member? <a href="User/">Sign Up</a>
								<a data-toggle="modal" data-target="#modal-forget" data-dismiss="modal">Forget Password?</a></p>
							</div>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
						<!-- Version 0.1 Start -->
						</form>
						<!-- Version 0.1 End -->
						
					</div>
					<!--/.Content-->
				</div>
			</div>
			<!-- Modal Login -->
		</header>
		<!--********************       /Menu Header   ************************-->
		<!--Header Contents-->
		
		<!--Main Contents-->

		<!-- Down Hear ferch all users from DB and show accordingly as per filter values-->
		<div class='container-fluid' style="padding-top: 6%;">

			<div  class="row ">
			<h3>Filters</h3>
				<div class="col-lg-3">
					
					<div class="switch">
						<label>
							Off
							<input type="checkbox">
							<span class="lever"></span>
							On
						</label>
					</div>
				</div>
				<div class='col-lg-3'>
					<fieldset class="form-group">
						<input type="checkbox" id="checkbox1">
						<label for="checkbox1">Sort by Height</label>
					</fieldset>
				</div>
				
				
				<div class='col-lg-3'>
					<fieldset class="form-group">
						<input type="checkbox" id="checkbox2">
						<label for="checkbox2">Sort by Location</label>
					</fieldset>
				</div>
				<div class="col-lg-3">
		
					<fieldset class="form-group">
						<input type="checkbox" id="checkbox3">
						<label for="checkbox3">Sort by Age</label>
					</fieldset>
				</div>

			</div>
<div class='col-lg-10'>
	
<?php

						require_once(join('//', array(dirname(__FILE__), 'common', 'const.php')));
						require_once(join('//', array(dirname(__FILE__), 'common', 'lib_functions.php')));
try{
	//Connection To DB
	list($ret_val, $conn) = get_db_connection($db_config_file);

	if(!$ret_val){	// No Database connection
		echo $conn;
		die('No database connection. Please try again');
	}
	$select_query="select * from Registration,Personal_info,Education_info,Family_info where
	 Registration.reg_id=Personal_info.reg_id and  Registration.reg_id=Education_info.reg_id and 
	  Registration.reg_id = Family_info.reg_id;";
    
    $stmt = $conn->prepare($select_query);
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
	
	$result=$stmt->fetchAll();
  foreach($result as $k=>$v) { 
       $counter++;
       
       $age=isValid_To_Create_Account($v['date']);
        /*if($counter%3==0)
        {

        	echo"<br><br><br><br>";
        }
    	*/	echo"
		<div class='row'>
			
			<div class='col-lg-4 col-md-6 col-sm-6'>
				<div class='card-container manual-flip'>
					<div class='card'>
						<div class='front'>
							 <div class='view overlay hm-white-slight'>


           						 <img src='http://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%2840%29.jpg' class='img-fluid' alt=''>
            <a>
                <div class='mask'></div>
            </a>
        </div>
							<div class='content'>
								<div class='main'>
									<h1 class='name'>".$v['first_name']." ".$v['last_name']."</h3>
									<p class='profession'>(CEO)</p>
									<div class='stats-container'>
										<div class='stats'>
											<h4>".$age."</h4>
											<p>
												Age
											</p>
										</div>
										<div class='stats'>
											<h4>".$v['religon']."</h4>
											<p>
												Religon
											</p>
										</div>
										<div class='stats'>
											<h4>".$v['height']."</h4>
											<p>
												Height
											</p>
										</div>
									</div>
								</div>
								";
								if($_SESSION['user']!=NULL){
									echo"
								<div class='footer'>
									<button class='btn btn-success' onclick='rotateCard(this)'>
									<i class='fa fa-mail-forward'></i>Know More
									</button>
								</div>
							
							
							";
						}
						else {
							echo "<div class='footer'>
							<button class='btn btn-success' data-toggle='modal' data-target='#modal-login'>
							<i class='fa fa-mail-forward'></i>Know More
							</button>
							</div>";
						}
						echo "</div>
							</div> <!-- end front panel -->
							<div class='back'>
								<div class='header'>
									<h5 class='motto'>'Other Details'</h5>
								</div>
								<div class='content'>
									<div class='main'>
										<div class='row'>
											<div class='col-lg-6 tit'>
												Status
											</div>
											<div class='col-lg-6 sub'>
												".$v['iam']."
											</div>
											
										</div>
										<div class='row'>
											<div class='col-lg-6 tit'>
												Income
											</div>
											<div class='col-lg-6 sub'>
												".$v['annual_income']." lac/Year
											</div>
											
										</div>
										<div class='row'>
											<div class='col-lg-6 tit'>
												Current City
											</div>
											<div class='col-lg-6 sub'>
												Mumbai
											</div>
											
										</div>
										<div class='row'>
											<div class='col-lg-6 tit'>
												Cast
											</div>
											<div class='col-lg-6 sub'>
												".$v['cast']."
											</div>
											
										</div>
										
									<a type='button' class='btn-floating btn-sm btn-email'><i class='fa fa-facebook'></i></a>
									<a type='button' class='btn-floating btn-sm btn-email'><i class='fa fa-envelope'></i></a>
									</div>
								</div>
								<div class='footer'>
				<button class='btn btn-danger' rel='tooltip' title='' onclick='rotateCard(this)'data-original-title='Flip Card'>
									<i class='fa fa-reply'></i> Back
									</button>
									
								</div>
						    </div> <!-- end back panel -->
								
						</div> <!-- end card -->
					</div> <!-- end card-container -->
				</div>";
									}
		}
catch(PDOException $e) {
     echo 'Error: ' . $e->getMessage();
}
$conn = null;
?>			
	</div>
		</div>
		</div>
</div>
						<!--********************      Collapse     ************************-->
						
						
						
						<!--/.Rotating card-->
						<!--***********************     /Collapse        *********************-->
						
						<!--Main Contents-->
						<!--*******************    Footer       *************************-->
						<!--Footer-->
						<div class='footer'>
							<footer class='page-footer center-on-small-only'>
								<!--Footer Links-->
								<div class='container-fluid'>
									<div class='row'>
										<!--First column-->
										<div class='col-md-3 offset-md-1'>
											<h5 class='title'>Footer Content</h5>
											<p>Here you can use rows and columns here to organize your footer content.</p>
										</div>
										<!--/.First column-->
										<hr class='hidden-md-up'>
										<!--Second column-->
										<div class='col-md-2 offset-md-1'>
											<h5 class='title'>Links</h5>
											<ul>
												<li><a href='#!'>Link 1</a></li>
												<li><a href='#!'>Link 2</a></li>
												<li><a href='#!'>Link 3</a></li>
												<li><a href='#!'>Link 4</a></li>
											</ul>
										</div>
										<!--/.Second column-->
										<hr class='hidden-md-up'>
										<!--Third column-->
										<div class='col-md-2'>
											<h5 class='title'>Links</h5>
											<ul>
												<li><a href='#!'>Link 1</a></li>
												<li><a href='#!'>Link 2</a></li>
												<li><a href='#!'>Link 3</a></li>
												<li><a href='#!'>Link 4</a></li>
											</ul>
										</div>
										<!--/.Third column-->
										<hr class='hidden-md-up'>
										<!--Fourth column-->
										<div class='col-md-2'>
											<h5 class='title'>Links</h5>
											<ul>
												<li><a href='#!'>Link 1</a></li>
												<li><a href='#!'>Link 2</a></li>
												<li><a href='#!'>Link 3</a></li>
												<li><a href='#!'>Link 4</a></li>
											</ul>
										</div>
										<!--/.Fourth column-->
									</div>
								</div>
								<!--/.Footer Links-->
								<hr>
								<!--Social buttons-->
								<div class='social-section'>
									<ul>
										<li><a class='btn-floating btn-small btn-fb'><i class='fa fa-facebook'> </i></a></li>
										<li><a class='btn-floating btn-small btn-tw'><i class='fa fa-twitter'> </i></a></li>
									<li><a class='btn-floating btn-small btn-gplus'><i class='fa fa-google-plus'> </i></a></li>
										<li><a class='btn-floating btn-small btn-li'><i class='fa fa-linkedin'> </i></a></li>
										<li><a class='btn-floating btn-small btn-git'><i class='fa fa-github'> </i></a></li>
										<li><a class='btn-floating btn-small btn-pin'><i class='fa fa-pinterest'> </i></a></li>
										<li><a class='btn-floating btn-small btn-ins'><i class='fa fa-instagram'> </i></a></li>
									</ul>
								</div>
								<!--/.Social buttons-->
								<!--Copyright-->
								<div class='footer-copyright'>
									<div class='container-fluid'>
										© Developed With Pride at: <a href=''> Gravity Computings Pvt Ltd</a>
									</div>
								</div>
								<!--/.Copyright-->
							</footer>
							
						</div>
						<!--*********************    /Footer   ***********************-->
						<!--/.Footer-->
						
						<!--*********************        Script       ***********************-->
						<!-- JQuery -->
						<script type='text/javascript' src='<?php echo"$local_host_name"?>/js/jquery-2.2.3.min.js'></script>
						<!-- Bootstrap tooltips -->
						<script type='text/javascript' src='<?php echo"$local_host_name"?>/js/tether.min.js'></script>
						<!-- Bootstrap core JavaScript -->
						<script type='text/javascript' src='<?php echo"$local_host_name"?>/js/bootstrap.min.js'></script>
						<!-- MDB core JavaScript -->
						<script type='text/javascript' src='<?php echo"$local_host_name"?>/js/mdb.min.js'></script>
						
						<!--**********************        /Script      **********************-->
					</body>
				</html>