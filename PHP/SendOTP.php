<?php 
$otp=mt_rand(99999,999999);
$mb=$_POST['mobile'];
echo "$mb";
$command = escapeshellcmd('python sms.py '.$mb.' '.$otp);
$output = shell_exec($command);
header('location:http://localhost/Vivah_MDB/Profile/Register/confirm.php?mb='.$mb);
?>