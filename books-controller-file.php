<?php
	
	$book_title = $_POST['book_title'];
	$author = $_POST['author'];
	$price = $_POST['price'];
	$publisher_id = $_POST['publisher_id'];
	$published_date = $_POST['published_date'];
	$book_quantity = $_POST['quantity'];
	
	// $conn = new mysqli("127.0.0.1","root","","shamim-test-database");
	// if($conn->connect_error)
	// {
		// die("<h1>there is some problem to connect with database</h1>".$conn->connect_error);
	// }
	
	$query = "INSERT INTO books(title, author, date_of_published, quantity, price, publisher_id)
				VALUES('{$book_title}', '{$author}', '{$published_date}', {$book_quantity}, {$price}, {$publisher_id})";
	
	require_once "database-code-127.0.0.1.php";
	$rs = db_connection($query);
	
	if($rs === true)
	{
		die("<h1>data is inserted succesfully</h1>");
		//header("Location:show table.php");
	}
	else
	{
		die("<h1>data is not inserted</h1>");
	}

?>