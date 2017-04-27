<?php
session_start();
$Newotp=$_POST['newotp'];
if($Newotp<99999){
	$msg="Please Enter Otp in atleast 6 charcter";
	header('location:http://localhost/Vivah_MDB/Profile/Register/confirm.php?msg='.$msg);
}
else{
	if($Newotp==$_SESSION['otp']){
		
		header('location:http://localhost/Vivah_MDB/Profile/Register/Next/Personal.php');
		
	}
else{
	$msg="Entered Wrong OTP";
	header('location:http://localhost/Vivah_MDB/Profile/Register/confirm.php?msg='.$msg);
}

}
?>