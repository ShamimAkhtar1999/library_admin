<?php
	$name = $_POST['name'];
	$gmail_id = $_POST['gmail_id'];
	$contact_no = $_POST['contact_no'];
	$password = $_POST['login_password'];
	
	$query = "INSERT INTO login_details (name, contact_no, gmail_id, login_password)
				VALUES ('{$name}', '{$contact_no}', '{$gmail_id}', '{$password}')
				";
	require_once "database-code-127.0.0.1.php";
	$rs = db_connection($query);
	
	if ($rs === true)
	{
		die("<h1>Username = {$name}</br>Password = {$password}</h1>" );
		
	}
	
	else
	{
		die("<h1 style='color:red'>You are not registered please try again :(</h1>");
	}

	/*$query = "SELECT * FROM login_details WHERE name = '{$name}' AND login_password = '{$password}'";
	require_once "database-code-127.0.0.1.php";
	$rs = db_connection($query);

	if ($rs === true)
	{
		die("<h1 style='color:red;'>YOU ARE ALLREADY REGISTERED</h1>");
	}
	*/
	
?>
<?php
	/*
	$name = $_POST['name'];
	$gmail_id = $_POST['gmail_id'];
	$contact_no = $_POST['contact_no'];
	$password = $_POST['login_password'];

	$query = "SELECT * FROM login_details WHERE name = '{$name}' AND login_password = '{$password}'";
	require_once "database-code-127.0.0.1.php";
	$rs = db_connection($query);

	if ($rs === true)
	{
		die("<h1 style='color:red;'>YOU ARE ALLREADY REGISTERED</h1>");
	}*/
	

?>