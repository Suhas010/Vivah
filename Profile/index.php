<?php
session_start();
$local_host_name="http://vivah.niranarsinhpur.com/";

if($_SESSION['chk']==1){
echo"
<!--Home Page
Author: Suhas More
-->
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Next</title>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta http-equiv='x-ua-compatible' content='ie=edge'>
		
		<link rel='icon' type='text/css' href='$local_host_name/img/images/Logo_Tab.png'>
		<!-- Font Awesome -->
		<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
		<link rel='stylesheet' href='$local_host_name/css/bootstrap.font.css'>
		<!-- Bootstrap core CSS -->
		<link href='$local_host_name/css/bootstrap.min.css' rel='stylesheet'>
		<!-- Material Design Bootstrap -->
		<link href='$local_host_name/css/mdb.min.css' rel='stylesheet'>
		<!-- Your custom styles (optional) -->
		<link href='$local_host_name/css/style.css' rel='stylesheet'>
		<link rel='stylesheet' type='text/css' href='$local_host_name/css/Style1.css'>
		<link rel='stylesheet' type='text/css' href='$local_host_name/css/Common.css'>
		
		<style>
		.income{
			margin-left:29px;
		}
		.row {
			margin-right: 0px;
			margin-left: -15px;
			}
		
		.input[type='date']:focus:not([readonly]), input[type='datetime-local']:focus:not([readonly]), input[type='email']:focus:not([readonly]), input[type='number']:focus:not([readonly]), input[type='password']:focus:not([readonly]), input[type='search-md']:focus:not([readonly]), input[type='search']:focus:not([readonly]), input[type='tel']:focus:not([readonly]), input[type='text']:focus:not([readonly]), input[type='time']:focus:not([readonly]), input[type='url']:focus:not([readonly]), textarea.md-textarea:focus:not([readonly])
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
		.input[type='date']:focus:not([readonly]), input[type='datetime-local']:focus:not([readonly]), input[type='email']:focus:not([readonly]), input[type='number']:focus:not([readonly]), input[type='password']:focus:not([readonly]), input[type='search-md']:focus:not([readonly]), input[type='search']:focus:not([readonly]), input[type='tel']:focus:not([readonly]), input[type='text']:focus:not([readonly]), input[type='time']:focus:not([readonly]), input[type='url']:focus:not([readonly]), textarea.md-textarea:focus:not([readonly])
		{
		border-bottom: 2px solid #F06F10;
		box-shadow: 0 1px 0 0 #F26106;}
		.input[type='datetime-local'], input[type='email'], input[type='number'], input[type='password'],input[type='search-md'], input[type='search'], input[type='tel'], input[type='text'], textarea.md-textarea {
		background-color: #1a070700;
		border: none;
		border-bottom: 1px solid #ccc;
		border-radius: 0;
		outline: 0;
		height: 1.4rem;
		width: 75%;
		font-size: 1.5rem;
		}
		.input[type='number'],input[type='search-md'], input[type='search'], input[type='tel'], input[type='text'], textarea.md-textarea {
		text-transform:uppercase
		}
		.input[typee='email'], textarea.md-textarea{
		text-transform: lowercase;
		}
		/* Gender Radio Buttons*/
		
		[type='radio']:checked + label::after{   top: -4px;
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
			.bg{background-image: url($local_host_name/img/images/FormImg.jpg); }
			.op {
		font-size: 22px;
		letter-spacing: 9px;
		font-weight: 400;
		}
		.op.active{
		background-color: green;
		}
		</style>
		<script src='/javascripts/application.js' type='text/javascript' charset='utf-8' async defer>
			$(document).ready(function() {
		$('.mdb-select').material_select();
		});
		</script>
	</head>
	<body>
		
		<header>
			<!--Navbar-->
			<nav class='navbar-fixed-top navbar animated fadeIn'>
				<!-- Collapse button-->
				
				<a class='navbar-brand ' href='$local_host_name/'><img src='$local_host_name/img/images/Logo.png' alt='Vivah Brand Name'></a>
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
								<a class='nav-link' href='$local_host_name/Browse-Profile/browse-profile.html'>Browse</a>
							</li>
							<li class='nav-item'>
								<a class='nav-link' href='#'>Pricing</a>
							</li>
							<li class='nav-item'>
								<a class='nav-link' href='#'>About</a>
								
							</li>
							
						</ul>
						
					</div>
				</div>
			</nav>
			
			<!-- Modal Login -->
			<div class='modal fade modal-ext' id='modal-login' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
				<div class='modal-dialog' role='document'>
					<!--Content-->
					<div class='modal-content'>
						
						<!--Header-->
						<div class='modal-header'>
							<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							<h3><i class='fa fa-user'></i> Login</h3>
						</div>
						
						<!--Body-->
						<div class='modal-body'>
							<div class='md-form'>
								<i class='fa fa-envelope prefix'></i>
								<input type='text' id='form2' class='form-control'>
								<label for='form2'>Your email</label>
							</div>
							<div class='md-form'>
								<i class='fa fa-lock prefix'></i>
								<input type='password' id='form3' class='form-control'>
								<label for='form3'>Your password</label>
							</div>
							<div class='text-xs-center'>
								<button class='btn btn-primary btn-lg'>Login</button>
							</div>
						</div>
						
						<!--Footer-->
						<div class='modal-footer'>
							<div class='options'>
								<p class='loginF'>Not a member? <a href='$local_host_name/User/'>Sign Up</a>
								Forgot <a href='#'>Password?</a></p>
							</div>
							<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
						</div>
					</div>
					<!--/.Content-->
				</div>
			</div>
			<!-- Modal Login -->
		</header>
		
		<!-- Nav tabs -->
		<!-- Tab panels -->
		
		<!--*********************    Form   ***********************-->
		<div class='tab-content'>
			<!--Panel 1-->
			<div class='tab-pane fade in active' id='Personal' role='tabpanel'>
				<br>
				<div class='card bg'>
					<div class='card-block'>
						<!--Header-->
						<div class='form-header green-gradient'>
							<h3><i class='fa fa-user'></i> Personal Information</h3>
							<h5 style='color:red;text-align: center;'>	* Fields are mandetory</h5>
							
						</div>
						<form class='md-form RForm' method='POST' action='http://localhost/Vivah_MDB/PHP/Personal.php'>
							<div class='container-fluid cn'>
								
								
								<div class='row card'>
									<div class=card-title>
										<br/>
										
										</div>   <!--First column-->
										<div class='col-md-3 '>
											<h1>Address
											</h1>
										</div>
										<div class='col-md-3'>
											<div class='md-form'>
												<input type='text' id='Taluka' name='religon' class='form-control' required>
												<label for='Taluka' class='Ltr'>Taluka</label>
											</div>
										</div>	
										<div class='col-md-3'>
										<div class='md-form'>
											<input type='text' id='Distric' name='religon' class='form-control' required>
											<label for='Distric' class='Ltr'>Distric</label>
										</div>
									</div>

										<div class='col-md-3'>
											<div class='md-form'>
												<input type='text' id='State' name='religon' class='form-control' required>
												<label for='State' class='Ltr'>State</label>
											</div>
										</div>	
								</div>
								
								<!--Body-->
								<div class='row card'>
									<div class=card-title>
										<br/>
										
										</div>   <!--First column-->
										<div class='col-md-3 '>
											<h1>Religon
											</h1>
										</div>
										<div class='col-md-3'>
											<div class='md-form'>
												<input type='text' id='Religon' name='religon' class='form-control' required>
												<label for='Religon' class='Ltr'>Religon *</label>
											</div>
										</div>
										<!--Second column-->
										<div class='col-md-3'>
											<div class='md-form'>
												<input type='text' id='Cast' name='cast' class='form-control'>
												<label for='Cast' class='Ltr'>Cast</label>
											</div>
										</div>
										<!--Third column-->
										<div class='col-md-3'>
											<div class='md-form'>
												<input type='text' id='SubCast' name='subcast' class='form-control'>
												<label for='SubCast' class='Ltr'>Sub Cast</label>
											</div>
										</div>
										
									</div>
									<!--/.First row-->
									<div class='row card '>
										<div class=card-title>
											<br>
										</div>
										<div class='col-md-3'>
											<h1>I am
											<i class='fa fa-mail' aria-hidden='true'></i></h1>
										</div>
										<div class='col-md-3'>
											<div class='md-form'>
												<fieldset class='form-group'>
													<input type='radio' id='YetSingle' value='YetSingle'name='Relation'  required>
													<label for='YetSingle'>Yet Single</label>
												</fieldset>
											</div>
										</div>
										<div class='col-md-3'>
											<div class='md-form'>
												<fieldset class='form-group'>
													
													<input  type='radio' id='Devorcy' value='Devorcy' name='Relation'>
													<label for='Devorcy'>Devorcy</label>
												</fieldset>
											</div>
										</div>
										<div class='col-md-3'>
											<div class='md-form'>
												<fieldset class='form-group'>
													
													<input name='Relation' type='radio' id='Widow' value='Widow'>
													<label for='Widow'>Widow</label>
												</fieldset>
											</div>
										</div>
										
									</div>
									
									<div class='row card '>
										<div class=card-title>
											<br>
										</div>
										<div class='col-md-3'>
											<h1>Work Status
											<i class='fa fa-mail' aria-hidden='true'></i></h1>
										</div>
										<div class='col-md-2'>
											<div class='md-form'>
												<fieldset class='form-group'>
													<input name='Work' type='radio' id='Student' value='Student' required on-w-error='requiered'>
													<label for='Student'>Student</label>
												</fieldset>
											</div>
										</div>
										<div class='col-md-2'>
											<div class='md-form'>
												<fieldset class='form-group'>
													<input name='Work' type='radio' id='SearchingJob' value='SearchingJob'>
													<label for='SearchingJob'>Searching Job</label>
												</fieldset>
											</div>
										</div>
										
										<div class='col-md-2'>
											<div class='md-form'>
												<fieldset class='form-group'>
													<input name='Work' type='radio' id='Employee' value='Employee'>
													<label for='Employee'>Employee</label>
												</fieldset>
											</div>
										</div>
										<div class='col-md-3'>
											<div class='md-form'>
												<fieldset class='form-group'>
													<input name='Work' type='radio' id='BuisnessOwner' value='BuisnessOwner'>
													<label for='BuisnessOwner'>Buisness Owner</label>
												</fieldset>
											</div>
										</div>
										
									</div>
									<div class='row card '>
										<div class=card-title>
											<br>
										</div>
										<div class='col-lg-3'>
											<h1>Height
											<i class='fa fa-mail' aria-hidden='true'></i></h1>
										</div>
										<div class='col-lg-1'>
											<div class='md-form'>
											<input type='text' id='Foot' name='religon' class='form-control' required>
												<label for='Foot' class='Ltr'>Foot</label>
											</div>

										</div>
										
										<div class='col-lg-1'>
											<div class='md-form'>
											<input type='text' id='Inch' name='religon' class='form-control' required>
												<label for='Inch' class='Ltr'>Inch</label>
											</div>

										</div>
										<div class='col-lg-3'>
											<h1 class='income'>Income
											<i class='fa fa-mail' aria-hidden='true'></i></h1>
										</div>
										<div class='col-lg-3'>
											<div class='md-form'>
											<input type='text' id='Income' name='religon' class='form-control' required>
												<label for='Income' class='Ltr'>lac/year</label>
											</div>
										</div>
										
									</div>
									
									
									<div class='row card'>
									<div class=card-title>
										<br/>
										
										</div>   <!--First column-->
										<div class='col-md-3 '>
											<h1>Mother Tongue
											</h1>
										</div>
										<div class='col-md-3'>
											<div class='md-form'>
												<input type='text' id='Primary *' name='religon' class='form-control' required>
												<label for='Primary' class='Ltr'>Primary *</label>
											</div>
										</div>
										<!--Second column-->
										<div class='col-md-3'>
											<div class='md-form'>
												<input type='text' id='Secondry' name='cast' class='form-control'>
												<label for='Secondry' class='Ltr'>Secondry</label>
											</div>
										</div>
										<!--Third column-->
										<div class='col-md-3'>
											<div class='md-form'>
												<input type='text' id='Third' name='subcast' class='form-control'>
												<label for='Third' class='Ltr'>Third</label>
											</div>
										</div>
										
									</div>
									
									<div class='row card'>
										<div class=card-title>
											<br/>
											
											</div>   <!--First column-->
											<div class='col-md-3 '>
												<h1>Adhar Card
												</h1>
											</div>
											<div class='col-md-5'>
												<div class='md-form'>
													<input type='number' name='adhar' class='form-control' required>
													<label for='adharcard' class='Ltr'>Adhar Card No</label>
												</div>
											</div>
										</div>
										
										
										<div class='row' style='align-content: center;'>
											<div class='col-md-5'>
												
											</div>
											<div class='col-md-6'>
												<div class='md-form'>
													<button class='btn btn-success Frm' data-toggle='tab' href='#Educational' role='tab'>Next</button>
												</div>
											</div>
											
											
										</div>
										<!-- Submit And Create Account Of User -->
										
									</div>
									
									
								</div>
							</div>
							<!--/Form with header-->
						</div>
						<!--/.Panel 1-->
						
						<!--Panel 2-->
						<div class='tab-pane fade' id='Educational' role='tabpanel'>
							<div class='card bg'>
								<br>
								<div class='card-block'>
									<!--Header-->
									<div class='form-header green-gradient'>
										<h3><i class='fa fa-user'></i> Educational Information</h3>
										<h5 style='color:red;text-align: center;'>	* Fields are mandetory</h5>
										
									</div>
									<div class='container-fluid cn'>
										
										<!--Body-->
										
										
										<div class='row card'>
											<div class=card-title>
												<br/>
												
												</div>   <!--First column-->
												<div class='col-lg-4 '>
													<h1>Degree
													</h1>
												</div>
												<div class='col-lg-4'>
													<div class='md-form'>
														<div class='md-form'>
															<label for='Degree'></label>
															<select class='form-control opt' id='Degree' name='degree'>
																<option class='op' class='op' disabled selected>Highest Degree</option>
																<option class='op'  value='Bacholor'>Bachelor</option>
																<option class='op' value='Pg'>Post Graduate</option>
																<option class='op' value='En'>Engineer</option>
																<option class='op' value='Doc'>Doctor</option>
																<option class='op' value='Iti'>ITI</option>
																<option class='op' value='mba'>MBA</option>
																<option class='op' value='Other'>Something Different</option>
																
															</select>
														</div>
													</div>
												</div>
												<!--Second column-->
												<div class='col-lg-4'>
													<div class='md-form'>
														<input type='text' id='Ed' name='special'class='form-control'>
														<label for='Ed' class='Ltr'>Specialization</label>
													</div>
												</div>
												
												
											</div>
											
											<div class='row card'>
												<div class=card-title>
													<br/>
													
													</div>   <!--First column-->
													<div class='col-lg-4 '>
														<h1>UG Degree
														</h1>
													</div>
													<div class='col-lg-4'>
														<div class='md-form'>
															<div class='md-form'>
																<label for='Degree'></label>
																<select class='form-control opt' name='ugdegree' id='Degree'>
																	<option class='op' class='op' disabled selected>Not filled in</option>
																	<option class='op'  value='ba'>B.A</option>
																	<option class='op' value='bcom'>B.Com</option>
																	<option class='op' value='be'>B.E</option>
																	<option class='op' value='bsc'>B.Sc</option>
																	<option class='op' value='bhms'>BHMS</option>
																	<option class='op' value='bdms'>BDMS</option>								<option class='op' value='Other'>Something Different</option>
																	
																</select>
															</div>
														</div>
													</div>
												</div>
												
												<div class='row card'>
													<div class=card-title>
														<br/>
														</div>   <!--First column-->
														<div class='col-lg-4 '>
															<h1>UG College
															</h1>
														</div>
														<div class='col-lg-7'>
															<div class='md-form'>
																
																<input type='text' id='ugname' class='form-control' name='ugcollege'>
																<label for='Ed' class='Ltr'>College Name</label>
															</div>
														</div>
													</div>
													
													<div class='row card'>
														<div class=card-title>
															<br/>
															</div>   <!--First column-->
															<div class='col-lg-4 '>
																<h1>PG College
																</h1>
															</div>
															<div class='col-lg-7'>
																<div class='md-form'>
																	
																	<input type='text' id='pgname' name='pgcollege'class='form-control'>
																	<label for='Ed' class='Ltr'>College Name</label>
																</div>
															</div>
														</div>
														
														
														
														
														
														<div class='row' style='align-content: center;'>
															<div class='col-md-5'>
																
															</div>
															<div class='col-md-6'>
																<button class='btn btn-success Frm' data-toggle='tab' href='#Family' role='tab'>Next</button>
															</div>
															
															
														</div>
														
														
														<!-- Submit And Create Account Of User -->
													</div>
													
												</div>
											</div>
										</div>
										<!--/.Panel 2-->
										
										<!--Panel 3-->
										<div class='tab-pane fade' id='Family' role='tabpanel'>
											<br>
											<div class='card bg'>
												<div class='card-block'>
													<!--Header-->
													<div class='form-header green-gradient'>
														<h3><i class='fa fa-user'></i>Family Information</h3>
														<h5 style='color:red;text-align: center;'>	* Fields are mandetory</h5>
														
													</div>
													
													
													<div class='container-fluid cn'>
														<!--Body-->
														<div class='row card'>
															<div class=card-title>
																<br/>
																
																</div>   <!--First column-->
																<div class='col-md-3 '>
																	<h1>Family Type
																	</h1>
																</div>
																<div class='col-md-3'>
																	<div class='md-form'>
																		<fieldset class='form-group'>
																			<input name='FamilyType' type='radio' id='Nuclear' value='Nuclear'>
																			<label for='Nuclear'>Nuclear</label>
																		</fieldset>												</div>
																	</div>
																	<!--Second column-->
																	<div class='col-md-3'>
																		<div class='md-form'>
																			<fieldset class='form-group'>
																				<input name='FamilyType' type='radio' id='Joint' value='Joint'>
																				<label for='Joint'>Joint</label>
																			</fieldset>
																		</div>
																	</div>
																	<div class='col-md-3'>
																		<div class='md-form'>
																			<fieldset class='form-group'>
																				<input name='FamilyType' type='radio' id='Extended' value='Extended'>
																				<label for='Extended'>Extended</label>
																			</fieldset>
																		</div>
																	</div>
																	<!--Third column-->
																	
																</div>
																<!--/.First row-->
																<div class='row card '>
																	<div class=card-title>
																		<br>
																	</div>
																	<div class='col-md-3'>
																		<h1>No Of Members
																		<i class='fa fa-mail' aria-hidden='true'></i></h1>
																	</div>
																	<div class='col-md-6'>
																		<div class='md-form'>
																			<label for='Degree'></label>
																			<select class='form-control opt' name='noofmem' id='Degree' >
																				<option class='op'   disabled selected>Select No Of Members In Family</option>
																				<option class='op'  value='1'>1</option>
																				<option class='op' value='2'>2</option>
																				<option class='op' value='3'>3</option>
																				<option class='op' value='4'>4</option>
																				<option class='op' value='5'>5</option>
																				<option class='op' value='6'>6</option>				<option class='op' value='67'>More Than 6</option>
																				
																			</select>
																		</div>
																	</div>
																</div>
																
																<div class='row card '>
																	<div class=card-title>
																		<br>
																	</div>
																	<div class='col-md-3'>
																		<h1>Mother is
																		<i class='fa fa-mail' aria-hidden='true'></i></h1>
																	</div>
																	<div class='col-md-6'>
																		<div class='md-form'>
																			<label for='Degree'></label>
																			<select class='form-control opt' name='motheris' id='Degree'>
																				<option class='op' class='op' disabled selected>Select</option>
																				<option class='op'  value='housewife'>House Wife</option>
																				<option class='op' value='serviceprivate'>Service-Private</option>
																				<option class='op' value='teacher'>Teacher</option>
																				<option class='op' value='retired'>Retired</option>
																				<option class='op' value='civilservice'>Civil Services</option>
																				<option class='op' value='businessenterprener'>Business/Enterprener</option>
																			</select>
																		</div>
																	</div>
																</div>
																
																<div class='row card '>
																	<div class=card-title>
																		<br>
																	</div>
																	<div class='col-md-3'>
																		<h1>Father is
																		<i class='fa fa-mail' aria-hidden='true'></i></h1>
																	</div>
																	<div class='col-md-6'>
																		<div class='md-form'>
																			<label for='Degree'></label>
																			<select class='form-control opt' name='fatheris'id='Degree'>
																				<option class='op' class='op' disabled selected>Select</option>
																				<option class='op' value='serviceprivate'>Service-Private</option>
																				<option class='op' value='teacher'>Teacher</option>
																				<option class='op' value='retired'>Retired</option>
																				<option class='op' value='civilservice'>Civil Services</option>
																				<option class='op' value='businessenterprener'>Business/Enterprener</option>
																			</select>
																		</div>
																	</div>
																</div>
																<div class='row card'>
																	<div class=card-title>
																		<br/>
																		
																		</div>   <!--First column-->
																		<div class='col-md-3 '>
																			<h1>Brother
																			</h1>
																		</div>
																		<div class='col-md-5'>
																			<div class='md-form'>
																				<input type='number' name='brother' id='brother' class='form-control' required>
																				<label for='brother' class='Ltr'>How many Brothers ?</label>
																			</div>
																		</div>
																	</div>
																	<div class='row card'>
																		<div class=card-title>
																			<br/>
																			
																			</div>   <!--First column-->
																			<div class='col-md-3 '>
																				<h1>Sister
																				</h1>
																			</div>
																			<div class='col-md-5'>
																				<div class='md-form'>
																					<input type='number' id='sister' name='sister' class='form-control' required>
																					<label for='sister' class='Ltr'>How many Sisters ?</label>
																				</div>
																			</div>
																		</div>
																		<div class='row card'>
																			<div class=card-title>
																				<br/>
																				
																				</div>   <!--First column-->
																				<div class='col-md-3 '>
																					<h1>Gothra
																					</h1>
																				</div>
																				<div class='col-md-4'>
																					<div class='md-form'>
																						<input type='text' id='Gothra' class='form-control' name='gothra'  required>
																						<label for='Gothra' class='Ltr'>Gothra</label>
																					</div>
																				</div>
																			</div>
																			
																			<div class='row card'>
																				<div class=card-title>
																					<br/>
																					
																					</div>   <!--First column-->
																					<div class='col-md-3 '>
																						<h1>Family Income
																						</h1>
																					</div>
																					<div class='col-md-4'>
																						<div class='md-form'>
																							<input type='number' id='familyincome' name='familyincome' class='form-control' required>
																							<label for='familyincome' class='Ltr'>Not filled in</label>
																						</div>
																					</div>
																				</div>
																				
																				<div class='row' style='align-content: center;'>
																					<div class='col-md-5'>
																						
																					</div>
																					<div class='col-lg-6'>
																						
																						<button type='submit' class='btn btn-success btn-lg Frm'>SAVE INFO</button>
																					</div>
																					
																				</div>
																				
																				<!-- Submit And Create Account Of User -->
																				
																			</div>
																		</form>
																	</div>
																</div>
															</div>
															<!--/.Panel 3-->
															
														</div>
														<!--*********************    /Form   ***********************-->
														
														<!--Footer-->
														<!--*********************    /Footer   ***********************-->
														
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
														<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
														<!-- Bootstrap tooltips -->
														<script type='text/javascript' src='js/tether.min.js'></script>
														<!-- Bootstrap core JavaScript -->
														<script type='text/javascript' src='js/bootstrap.min.js'></script>
														<!-- MDB core JavaScript -->
														<script type='text/javascript' src='js/mdb.min.js'></script>
														
														<!--**********************        /Script      **********************-->
													</body>
												</html>";
												}
												else{
												header('location:http://192.168.43.169/Vivah_MDB/Error/error.html');
												}
												?>