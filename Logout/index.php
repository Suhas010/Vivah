<?php
session_start();
session_destroy();
$host  = $_SERVER['HTTP_HOST'];
	        $uri   = rtrim(dirname(dirname($_SERVER['PHP_SELF'])), '//');
	        $home_page = "http://$host$uri/index.php";
	        //echo $home_page ;
	        header('Location:'.$home_page);


?>