<?php
session_start();
require_once(join("//", array(dirname(__FILE__), 'common', 'const.php')));
require_once(join("//", array(dirname(__FILE__), 'common', 'lib_functions.php')));

// 0.1 Start
try{
	// Connection To DB
	list($ret_val, $conn) = get_db_connection($db_config_file);

	if(!$ret_val){	// No Database connection
		echo $conn;
		die("No database connection. Please try again");
	}
$regid=$_SESSION['regid'];
$selectQuery="select view_profile from registration where reg_id=$regid;";
$data=getdata($conn,$selectQuery);
$count=$data['view_profile']+1;
$num=$data['view_profile'];

$updateQuery="UPDATE `registration` SET `view_profile`=$count WHERE reg_id=$regid;";

$isupdate=dataUpdate($conn,$updateQuery);
echo "$num";
if(!isupdate)
	echo "fail";
}
catch(PDOException $err){
	redirect_to_home("Error connecting database ".$err->getMessage()." Please try again later!");
}

?>
