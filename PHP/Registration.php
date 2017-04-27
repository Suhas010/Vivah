<?php
session_start();
require_once(join("//", array(dirname(__FILE__), 'common', 'const.php')));
require_once(join("//", array(dirname(__FILE__), 'common', 'lib_functions.php')));


	list($return_value,$conn)=get_db_connection($db_config_file);
	if(!return_value){
	
		return $conn;
	die("No database connection. Please try again");
	}

	
	if(!array_key_exists('first_name', $_POST)||!array_key_exists('middle_name', $_POST)||!array_key_exists('last_name', $_POST)||!array_key_exists('Sex', $_POST)||!array_key_exists('Interested', $_POST)||!array_key_exists('email', $_POST)||!array_key_exists('mobile', $_POST) ||!array_key_exists('date', $_POST)|| !array_key_exists('password', $_POST))
	{
	
		// Redirectt to Login Page
		alert("Some Fields Are Missing");
	}
	else{
		// echo '@@';
		$first_name=$middle_name=$last_name=$sex=$interested=$email=$mobile=$date=$time=$password=$msg="";
			$first_name=$_POST['first_name'];
			$middle_name=$_POST['middle_name'];
			$last_name=$_POST['last_name'];
			$sex=$_POST['Sex'];
			$intrested=$_POST['Interested'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$date=$_POST['date'];
			$time=$_POST['time'];
			$password=$_POST['password'];
			$sqlquery="insert into Registration(first_name,middle_name,last_name,gender,intrested,email,mobile,date,password)values('$first_name','$middle_name','$last_name','$sex','$intrested','$email','$mobile','$date','$password')";
			$is_Register = insertData($sqlquery,$conn);
		
		if($is_Register){
			$_SESSION['chk']=1;
			
			
			$mb=$_POST['mobile'];
			$otp=mt_rand(99999,999999);
			
			$command = escapeshellcmd('python sms.py '.$mb.' '.$otp);
			$output = shell_exec($command);
			$_SESSION['otp']=$otp;
			$_SESSION['mb']=$mb;
			$_SESSION['counter']=1;
				
			$link = 'location:'.$local_host_name.'/Profile/Register/confirm.php?mb='.$mb;
				//echo "<script>window.location=".$link."</script>";
			header($link);

		}
		else{
			
			redirect_to_home(get_udne_message($_POST['first_name']));
		}
	}
// 0.1 End
// 0.2 End
?>