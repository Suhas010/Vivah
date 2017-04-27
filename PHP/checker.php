<?php
require_once(join('//', array(dirname(__FILE__), 'common', 'const.php')));
                        require_once(join('//', array(dirname(__FILE__), 'common', 'lib_functions.php')));

list($ret_val, $conn) = get_db_connection($db_config_file);




if(isset($_POST["username"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
    
    if ($conn->connect_error){
        die('Could not connect to database!');
    }
    
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
    $statement = $conn->prepare("SELECT email FROM Registration WHERE email=?");
    $statement->bind_param('s', $username);
    $statement->execute();
    $statement->bind_result($username);
    if($statement->fetch()){
        die('<img src="http://192.168.43.169/Vivah_MDB/img/wrong.png" />');
    }else{
        die('<img src="http://192.168.43.169/Vivah_MDB/img/correct.png" />');
    }
}