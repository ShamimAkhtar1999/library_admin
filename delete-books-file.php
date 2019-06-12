<!doctype html>
<html>
<head>
<title></title>
</head>
<body>


</body>
</html>
<?php
	$book_id = $_GET['book_id'];
	$query = "DELETE  FROM books WHERE id = {$book_id} ";
	require_once "database-code-127.0.0.1.php";
	$rs = db_connection($query);
	
	if ($rs === true)
	{
		header("location:show table.php");
	}
	else
	{
		die("row is not deleted");
	}
?>