<?php
session_start();
require_once(join("//", array(dirname(__FILE__), 'common', 'const.php')));
require_once(join("//", array(dirname(__FILE__), 'common', 'lib_functions.php')));
try{
	//Connection To DB

	if($_SESSION['lid']==NULL){
		header('location:http://localhost/Vivah_MDB/Error/Error.php');
	}


	list($ret_val, $conn) = get_db_connection($db_config_file);

	if(!$ret_val){	// No Database connection
		echo $conn;
		die("No database connection. Please try again");
	}

	/*if(!array_key_exists('d', $_POST) ||!array_key_exists('ugdegree', $_POST) ||!array_key_exists('ugcollege', $_POST)||!array_key_exists('pgcollege', $_POST)||!array_key_exists('special', $_POST)||!array_key_exists('FamilyType', $_POST)||!array_key_exists('noofmem', $_POST)||!array_key_exists('motheris', $_POST)||!array_key_exists('fatheris', $_POST)||!array_key_exists('brother', $_POST)||!array_key_exists('sister', $_POST)||!array_key_exists('gothra', $_POST) ||!array_key_exists('familyincome', $_POST)||!array_key_exists('name',$_POST)||!array_key_exists('address', $_POST)||!array_key_exists('religon', $_POST)||!array_key_exists('cast', $_POST)||!array_key_exists('subcast', $_POST)||!array_key_exists('Relation', $_POST)||!array_key_exists('Work', $_POST) ||!array_key_exists('Height', $_POST)||!array_key_exists('income', $_POST) || !array_key_exists('mother_Tongue', $_POST) || !array_key_exists('adhar', $_POST))
	{
		// Redirectt to Login Page
		
		redirect_to_home();
	}
	else{*/
		$village=$taluka=$distric=$state=$country=$marital_status=$religon=$cast=$subcast=$mother_tounge=$height=$body_type=$complexion=$physically=$star=$rassi=$manglik=$food_habbits=$smoking=$drinking="na";
		

//echo $village.$taluka.$distric.$state.$country.$marital_status.$religon.$cast.$subcast.$mother_tounge.$height.$body_type.$complexion.$physically.$star.$rassi.$manglik.$food_habbits.$smoking.$drinking;
		
		$village=$_POST['Village'];
		$taluka=$_POST['Taluka'];
		$distric=$_POST['Distric'];
		$state=$_POST['State'];
		$country=$_POST['Contry'];
		$pin=$_POST['PIN'];
		$marital_status=$_POST['MaretialStatus'];
		$religon=$_POST['religon'];
		$cast=$_POST['cast'];
		$subcast=$_POST['subcast'];
		$height=$_POST['height'];
		$mother_tounge=$_POST['MotherTongue'];
		$weight=$_POST['weight'];
		$body_type=$_POST['body_type'];
		$complexion=$_POST['complexion'];
		$physically=$_POST['PysicalStatus'];
		$star=$_POST['star'];
		$rassi=$_POST['rassi'];
		$manglik=$_POST['Mangalik'];
		$food_habbits=$_POST['food_habbits'];
		$smoking=$_POST['smoking'];
		$drinking=$_POST['drinking'];
		$reg_id=$_SESSION['lid'];

			if($_POST['PIN']==NULL){
				$pin=0;
//			echo "enter";
			}
			else{
				$pin=$_POST['PIN'];
//			echo "enter";
			}
			if($_POST['weight']==NULL){
				$weight=0;
			}
			else{
				$weight=$_POST['weight'];
			}

		$sql="insert into Personal_info(village,taluka,district,state,country,pincode,marital_status,religon,cast,subcast,mother_tounge,height,weight,body_type,complexion,physically,star,rassi,mangalik,food_habbit,smoking,drinking,reg_id) values('$village','$taluka','$distric','$state','$country',$pin,'$marital_status','$religon','$cast','$subcast','$mother_tounge','$height',$weight,'$body_type','$complexion','$physically','$star','$rassi','$manglik','$food_habbits','$smoking','$drinking',$reg_id)";
		$is_personal=insertData($sql,$conn);
		//echo "enter";
		if($is_personal){
			$_SESSION['lid']=$reg_id;
			header('location:http://localhost/Vivah_MDB/Profile/Register/Next/Educational.php');
		}
else
{
	echo "fail";
}
		
}
catch(PDOException $err){
	redirect_to_home("Error connecting database ".$err->getMessage()." Please try again later!");
}
// 0.1 End
// 0.2 End
?>