<?php
	
	$book_title = $_POST['book_title'];
	$author = $_POST['author'];
	$published_date = $_POST['published_date'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$publisher_id = $_POST['publisher_id'];
	$id = $_POST['book_id'];
	
	$query = "UPDATE books SET title = '{$book_title}',
				author = '{$author}',
				date_of_published = '{$published_date}',
				quantity = {$quantity},
				price = {$price},
				publisher_id = {$publisher_id}  WHERE id = {$id}";
				
	require_once "database-code-127.0.0.1.php";
	$rs = db_connection($query);
	
	if ($rs === true)
	{
		header("location:show table.php");
	}
	else
	{
		die("<h1>NOT UPDATED</h1>");
	}

?>