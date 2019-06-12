<?php
	
	$publisher_name = $_POST['publisher_name'];
	$publisher_contact = $_POST['publisher_contact'];
	
	// $conn = new mysqli("127.0.0.1","root","","shamim-test-database");
	// if($conn->connect_error)
	// {
		// die("<h1>there is some problem to connect with database</h1>".$conn->connect_error);
	// }
	
	$query = "INSERT INTO publishers (publisher_name, publisher_contact)
				VALUES ('{$publisher_name}', {$publisher_contact})";
	
	require_once "database-code-127.0.0.1.php";
	$rs = db_connection($query);
	
	if($rs === true)
	{
		header("Location:show_publisher_table.php");
	}
	else
	{
		die("data is not inserted");
	}

?>