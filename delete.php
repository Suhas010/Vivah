<?php
include('ajax.php');

mysql_select_db('testdb');

$id = $_GET['id'];

$sql = "select * from contacts";

$records = mysql_query($sql);

if(isset($_GET['id'])){

	$id = $_GET['id'];

	$delete = "delete from story where id = '$id'";

	$res = mysql_query($delete) or die ("FAILED".mysql_error());
}

?>