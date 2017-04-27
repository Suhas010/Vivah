<?php
session_start();

require_once(join("//", array(dirname(__FILE__), 'common', 'const.php')));
require_once(join("//", array(dirname(__FILE__), 'common', 'lib_functions.php')));

$mb=$_GET['mobile'];
//echo "string";
//$ot=$_SESSION['otp'];
//$otp=$_SESSION['otp'];
echo $ot;
			$otp=mt_rand(99999,999999);
			//echo $_SESSION['otp'];
			$command = escapeshellcmd('python sms.py '.$mb.' '.$otp);
			$output = shell_exec($command);
			$_SESSION['otp']=$otp;
			$_SESSION['mb']=$mb;
//			echo $command;
			//echo "\n".$output;

			//header('Location:http://localhost/Vivah_MDB/Profile/Register/SendOTP.php?mobile=$mb');
			$link = 'location:'.$local_host_name.'/Profile/Register/confirm.php?mb='.$mb;
//			echo $output;

			header($link);
?>