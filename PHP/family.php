<?php

require_once(join("//", array(dirname(__FILE__), 'common', 'const.php')));
require_once(join("//", array(dirname(__FILE__), 'common', 'lib_functions.php')));
try{
	//Connection To DB
	list($ret_val, $conn) = get_db_connection($db_config_file);

	if(!$ret_val){	// No Database connection
		echo $conn;
		die("No database connection. Please try again");
	}

	if(!array_key_exists('FamilyType', $_POST)||!array_key_exists('noofmem', $_POST)||!array_key_exists('motheris', $_POST)||!array_key_exists('fatheris', $_POST)||!array_key_exists('brother', $_POST)||!array_key_exists('sister', $_POST)||!array_key_exists('gothra', $_POST) ||!array_key_exists('familyincome', $_POST))
	{
		// Redirectt to Login Page
		redirect_to_home();
	}
	else{
		
		$is_Family = Family_info($conn, $_POST['FamilyType'], $_POST['noofmem'],$_POST['motheris'],$_POST['fatheris'],$_POST['brother'],$_POST['sister'],$_POST['gothra'],$_POST['familyincome']);
		if($is_Family){

			echo "Successfuly";
		}
		else{
			
			"notdone";
		}
	}
}
catch(PDOException $err){
	redirect_to_home("Error connecting database ".$err->getMessage()." Please try again later!");
}
// 0.1 End
// 0.2 End
?>