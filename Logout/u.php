<?php
//function GetAbsolutePath(){
echo $_SERVER['HTTP_HOST'].rtrim(dirname(dirname($_SERVER['PHP_SELF'])), '//');
	//$uri   = rtrim(dirname(dirname($_SERVER['PHP_SELF'])), '//');
	//$home_page = "http://$host/";
//	return $home_page;	
//echo "$home_page";
//}
?>