<?php
require_once('lib_functions.php');

list($result, $db_handle) = get_db_connection();
if(!$result){
	die($db_handle);
}
?>