<?php
session_start();

class Functions
{
	function Connect()
	{
	$connection=new mysqli("localhost","root","welcome","Matrimonial");
	if(!$connection->connect_error)
	return $connection;
	}

	function Login($emailid,$password)
	{

		$con=Functions::Connect();
				$login="select first_name,last_name,email_id,password from User_basic_info where email_id='$emailid' and password='$password';";
		$result=$con->query($login);
	
		if($result->num_rows>0)
		{

			while ($row=$result->fetch_assoc()) {
			$name=$row["first_name"]." ".$row["last_name"];
			
			$_SESSION['user']=$name;
			}
		}
			
		
		else
		{
			$sqlw=$con->error;
			echo "$sqlw";
		}
	}


}
?>
