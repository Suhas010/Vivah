<?php
						require_once(join('//', array(dirname(__FILE__), 'common', 'const.php')));
						require_once(join('//', array(dirname(__FILE__), 'common', 'lib_functions.php')));
try{
	//Connection To DB
	list($ret_val, $conn) = get_db_connection($db_config_file);

	if(!$ret_val){	// No Database connection
		echo $conn;
		die('No database connection. Please try again');
	}
	$select_query="select first_name,last_name,date,religon,height,annual_income,iam,cast,degree from Registration,Personal_info,Education_info;";
    $stmt = $conn->prepare($select_query);
	$stmt->execute();
	$row = $stmt->fetchAll(PDO::FETCH_NUM);
	$result=$stmt->fetchAll();
	?>