<?php
session_start();	
require_once(join("//", array(dirname(__FILE__), 'common', 'const.php')));
require_once(join("//", array(dirname(__FILE__), 'common', 'lib_functions.php')));
try{
	//Connection To DB


	list($ret_val,$conn) = get_db_connection($db_config_file);

	if(!$ret_val){	// No Database connection
		echo $conn;
		die("No database connection. Please try again");
	}
/*
	if(!array_key_exists('degree', $_POST)||!array_key_exists('ugdegree', $_POST)||!array_key_exists('ugcollege', $_POST)||!array_key_exists('pgcollege', $_POST)||!array_key_exists('special', $_POST))
	{
		// Redirectt to Login Page
		redirect_to_home();
	}
	else{
		
*/		$heighestdegree=$employeementtype=$occupation=$monthlyincome=$familytype=$familystatus=$familyvalues=$description=$noofmem=$totalmarriedbrother=$totlamarriedsister=$realtivesurname="";
		$heighestdegree=$_POST['education'];
		$employeementtype=$_POST['employeement'];
		$occupation=$_POST['occupation'];
		$monthlyincome=$_POST['monthly_income'];
		$familytype=$_POST['familytype'];
		$familystatus=$_POST['familystatus'];
		$familyvalues=$_POST['familyvalues'];
		$description=$_POST['description'];
		$noofmem=$_POST['noofmem'];
		$totalmarriedbrother=$_POST['totalmarriedbrother'];
		$totlamarriedsister=$_POST['totlamarriedsister'];
		$realtivesurname=$_POST['realtivesurname'];
		$reg_id=$_SESSION['lid'];

		if($noofmem==NULL){
			$noofmem=0;
		}
		if($totlamarriedsister==NULL){
			$totlamarriedsister=0;
		}
		if($totalmarriedbrother==NULL){
			$totalmarriedbrother=0;
		}


		$sql1="insert into `Education_info`(heighest_education,employee_type,occupation,monthly_income,reg_id) values ('$heighestdegree','$employeementtype','$occupation','$monthlyincome',$reg_id)";
		$is_Education=insertData($sql1,$conn);
		$insertsql="insert into Family_info(family_status,family_type,family_values,description,no_of_family_member,total_married_brother,total_married_sister,relatives_surname,reg_id)values('$familystatus','$familytype','$familyvalues','$description',$noofmem,$totalmarriedbrother,$totlamarriedsister,'$realtivesurname',$reg_id)";
		$is_family=insertData($insertsql,$conn);
		if($is_family){
		
			header('location:http://localhost/Vivah_MDB/');
		}
}
catch(PDOException $err){
	redirect_to_home("Error connecting database ".$err->getMessage()." Please try again later!");
}
// 0.1 End
// 0.2 End
?>