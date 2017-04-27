<?php
session_start();
$const_file_path = join("//", array(dirname(dirname(dirname(__FILE__))), 'common', 'const.php'));
require_once(join('//', array(dirname(dirname(dirname(__FILE__))), 'common', 'const.php')));
require_once(join('//', array(dirname(dirname(dirname(__FILE__))), 'common', 'lib_functions.php')));
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
		$(document).ready(function(){
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
		function getresult()
		{
			 $.ajax({
				url:"http://localhost/Vivah_MDB/PHP/checkcount.php",  
				success:function(data) 
				{
					alert(data); 
				}
			});
		}

		
			
			
			
		
		</script>
		<style>
		.input[type='date']:focus:not([readonly]), input[type='datetime-local']:focus:not([readonly]), input[type='email']:focus:not([readonly]), input[type='number']:focus:not([readonly]), input[type='password']:focus:not([readonly]), input[type='search-md']:focus:not([readonly]), input[type='search']:focus:not([readonly]), input[type='tel']:focus:not([readonly]), input[type='text']:focus:not([readonly]), input[type='time']:focus:not([readonly]), input[type='url']:focus:not([readonly]), textarea.md-textarea:focus:not([readonly])
		{
			border-bottom: 1px solid #F06F10;
			box-shadow: 0 1px 0 0 #F26106;
		}
			
			/*Client Name*/
			.card .name {
    			font-size: 21px;
    			line-height: 25px;
    			margin: 0px 0 0;
    			text-align: center;
    			text-transform: capitalize;
				}

			.divider-new, .text-fluid, h1, h2, h3, h4, h5, h6 {
    			font-size: 18px;
				}

			.card .stats h4 {
    			font-weight: 400;
    			margin-bottom: 3px;
				}

/*Card back Font size sub for title tit for value*/
.sub {
    font-family: 'Arial Rounded MT Bold', 'Helvetica Rounded', Arial, sans-serif;
    font-size: 15px;
}.tit {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    font-weight: 400;
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
		font-weight: 400;
		border-right: dotted 0.7px black;
		}
		.sub{
		font-family: 'Arial Rounded MT Bold', 'Helvetica Rounded', Arial, sans-serif;
		font-size: 20px;
		
		}
		.knm{
			font-weight: 800;
		}
		</style>
		
	</head>
	
	<body>
		
		<!--Header Contents-->
		<!--*********************      Menu Header   ***********************-->
		<!--Main Contents-->
		
		<?php
		include($header_file_path);
		?>
		<!--********************       /Menu Header   ************************-->
		<!--Header Contents-->
		
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
			</div>
			<div class="container-fluid" class='col-lg-12'>
				
				<?php
										
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
						  <div class='col-lg-3 col-md-6 col-sm-6'>
							<div class='card-container manual-flip'>
						     <div class='card'>
								<div class='front'>
							     <div class='view overlay hm-white-slight'>
									<img src='$local_host_name/img/browse_profile/img (40).jpg' class='img-fluid' alt=''>
									<a><div class='mask'></div></a>
								  </div>
								  <div class='content'>
									<div class='main'>
								     <h1 class='name'>".$v['first_name']." ".$v['last_name']."</h1>
									  <p class='profession'>(CEO)</p>
									<div class='stats-container'>
									<div class='stats'>
									 <h4>".$age."</h4>
									 <p>Age</p>
									</div>
									<div class='stats'>
									 <h4>".$v['religon']."</h4>
									 <p>Religon</p>
									</div>
									<div class='stats'>
									 <h4>".$v['height']."</h4>
									 <p>Height</p>
									</div>
								   </div>
				            		</div>
																		";
																		if($_SESSION['user']!=NULL){
																			echo"
																		<div class='footer'>
																				<button class='btn btn-success' onclick='rotateCard(this);getresult()' >
																				<i class='fa fa-mail-forward'></i>Know More
																				</button>
																		</div>
																	
																	
																	";
																}
																else {
																	echo "<div class='footer'>
																		<button class='btn btn-success' data-toggle='modal' data-target='#modal-login'>
																		<i class='fa fa-mail-forward'></i>
																		<kn class='knm'>Know More</kn>
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
														".$v['annual_income']." &#8377;
													</div>
													
												</div>
												<div class='row'>
													<div class='col-lg-6 tit'>
														City
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
						
					<!--********************      Collapse     ************************-->
					
					
					
					<!--/.Rotating card-->
					<!--***********************     /Collapse        *********************-->
					
					<!--Main Contents-->
					<!--*******************    Footer       *************************-->
					<!--Footer-->
					<div class="container-fluid">
					<?php include($footer_file_path);?>
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
			
			