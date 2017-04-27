<?php
//Include database configuration file
include('db_connect.php');

if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){
    //Get all state data
    $select_query = "SELECT * FROM states WHERE country_id = ".$_POST['country_id']." ORDER BY name ASC";
    $stmt = $db_handle->prepare($select_query);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	unset($stmt);
	
	//Display states list
	echo '<option value="">Select state</option>';
	foreach($rows as $row){ 
        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
    }
}

if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){
    //Get all city data
    $select_query = "SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." ORDER BY name ASC";
    $stmt = $db_handle->prepare($select_query);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	unset($stmt);
    
    //Display cities list
	echo '<option value="">Select city</option>';
	foreach($rows as $row){ 
        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
    }
}
?>