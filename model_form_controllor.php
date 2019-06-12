<?php
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(isset($_POST['password']))
	{
		$query = "SELECT name, login_password FROM login_details WHERE login_password = '{$password}' AND name = '{$username}'";
		require_once "database-code-127.0.0.1.php";
		$rs = db_connection($query);
		
		if ($rs->num_rows === 1)
		{
			header("Location:show table.php");
			//return false;
		}
		else
		{
			die("<h1 style=\"color:red;font-size:100px;font-family:BIRTH OF A HERO;background:gray;text-align:center;margin-top:25%;\">Try Again :(<h1>");
		}
		
		//die("data is transfered");
	}
	
	
	


?>