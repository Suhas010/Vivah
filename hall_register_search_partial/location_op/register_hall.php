<?php
require_once(join("\\", array(dirname(dirname(__FILE__)), 'common', 'lib_functions.php')));
require_once(join("\\", array(dirname(dirname(__FILE__)), 'common', 'db_connect.php')));

$prev_page = get_prev_page_base_url();
$ret_val = check_exists($_POST, array('country', 'state', 'city', 'hall_owner', 'hall_owner_contact', 'hall_owner_email'));
if(!is_null($ret_val)){
	redirect_to_page($prev_page."?error_msg=Please set $ret_val");
}
else{
	// Register Hall details
	$hall_insert_query = "insert into `hall_details` (country_id, state_id, city_id, address_details, owner_name, contact_no, contact_email) values 
						(".$_POST['country'].", ".$_POST['state'].", ".$_POST['city'].", '".$_POST['address_details']."', '".$_POST['hall_owner']."', '".$_POST['hall_owner_contact']."', '".$_POST['hall_owner_email']."')";
	try{
		$db_handle->exec($hall_insert_query);
		redirect_to_page($prev_page."?success_msg=Hall Registered Successfully");
	}
	catch(PDOException $e){
		redirect_to_page($prev_page."?error_msg=".$e->getMessage());
	}
}
?>