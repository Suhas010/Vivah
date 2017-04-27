<?php
require_once(join("//", array(dirname(__FILE__), 'common', 'const.php')));
require_once(join("//", array(dirname(__FILE__), 'common', 'lib_functions.php')));

	//Connection To DB
	list($ret_val, $conn) = get_db_connection($db_config_file);

	if(!$ret_val){	// No Database connection
		
		die("No database connection. Please try again");
	}
$email=$_POST['email'];
$sql="select * from Registration where email='$email';"
$result=$conn->query($sql);
if($result->num_rows>0)
	$row=$result->fetch_assoc();
	//$newpass=$row['password'];
	$random=rand(10000000,100000000);
	$newpass=$random;
	$sql1="update Registraion set password=$newpass where email=$email;";
	$result1=$conn->query($sql1);
$message="your new password is $newpass";
$header="from:-prashantbangar03@gmail.com";
$to="$email";
$subject="forget password update";
$ret=mail($to,$subject,$message,$header);
if($ret=="True"){
	echo "send successfully";

}
else
{
	echo "failed";
}
?>