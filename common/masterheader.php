<!--Master Header-->
<header>
	<div class="container-fluid">
		
		<nav class="navbar animated fadeIn navbar-fixed-top">
			<!-- Collapse button-->
			<a class="navbar-brand " href="<?php echo"$local_host_name"?>/index.php"><img src="<?php echo"$local_host_name"?>/img/images/Logo5.png" alt="Vivah Brand Name"></a>
			<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#MobileView_Bar">
			<i class="fa fa-bars"></i>
			</button>
			<div class="container">
				<!--Collapse content-->
				<div class="collapse navbar-toggleable-xs" id="MobileView_Bar">
					<!--Navbar Brand-->
					<!--Links-->
					<ul class="nav navbar-nav pull-right">
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo"$local_host_name"?>/index.php"">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo"$local_host_name"?>/Profile/Browse/">Browse</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo"$local_host_name"?>/Enrollment/index.php">Enrollment</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo $local_host_name?>/About/aboutus.php">About</a>
							
						</li>
						
						<?php
						if($_SESSION['user']==NULL){
								echo "
						<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modal-login'>
						Login
						</button>
						
						<form action='$local_host_name/Profile/Register/'>
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
										<a class='dropdown-item' href='$local_host_name/EditProfile/index.php'>Edit Profile</a>
										<a class='dropdown-item' href='#'>Settings</a>
										<a class='dropdown-item button btn-link' href='$local_host_name/Logout/'>Logout</a>
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
	</div>
	<!-- Modal Login -->
	<div class="modal fade modal-ext" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<!--Content-->
			<div class="modal-content">
				
				<!-- Version 0.1 Start -->
				<form method='post' action="<?php echo"$local_host_name"?>/PHP/check_login.php">
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
							<input type="text" id="form2" name="user_name" class="form-control" required>
							<label for="form2">Your email</label>
						</div>
						<div class="md-form">
							<i class="fa fa-lock prefix"></i>
							<input type="password" id="form3" name="user_pswd" class="form-control" required>
							<label for="form3">Your password</label>
						</div>
						<div class="text-xs-center">
							<button class="btn btn-primary btn-lg" type="submit" data-toggle="tooltip" data-placement="top" title="Click Hear To Login">Login</button>
						</div>
					</div>
					
					<!--Footer-->
					<div class="modal-footer">
						<div class="options">
							<p class="loginF">Not a member? <a href="" data-toggle="tooltip" data-placement="top" title="Click Hear To Creat Account"><a href="<?php echo"$local_host_name"?>/Profile/Register/">sign up here</a> forget password ?
							<a data-toggle="modal" data-target="#modal-forget" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="forget password ? click here" href="#"> click here</a></p>
						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Click Hear To Close Login Screen">Close</button>
					</div>
					<!-- Version 0.1 Start -->
				</form>
				<!-- Version 0.1 End -->
				
			</div>
			<!--/.Content-->
		</div>
	</div>
	<div class="modal fade modal-ext" id="modal-forget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="padding-top:110px">
			<!--Content-->
			<div class="modal-content">
				<!--Header-->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					<h3 class="text-xs-center">Forget Password</h3>
				</div>
				<!--Body-->
				<div class="modal-body">
					<div class="md-form">
						<!-- <i class="fa fa-envelope prefix"></i> -->
						<input type="text" id="forget" name="mb" class="form-control" required>
						<label for="form2">Enter Mobile No </label>
					</div>
					
					<div class="text-xs-center">
						<button class="btn btn-primary btn-lg" id="sendmail" data-toggle="modal" data-dismiss="modal" data-target="#modal-createpass">SUBMIT</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- create password -->
	<div class="modal fade modal-ext" id="modal-createpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="padding-top:110px">
			<!--Content-->
			<div class="modal-content">
				<!--Body-->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					<h3 class="text-xs-center">Forget Password</h3>
				</div>
				<!--Body-->
				<div class="modal-body">
					<h3><center>Your password send your email...!!</center></h3>
					<br>
					<div class="text-xs-center">
						<button class="btn btn-primary btn-lg" id="login" data-dismiss="modal">ok</button>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- </div> -->
	<!-- Modal Login -->
</header>