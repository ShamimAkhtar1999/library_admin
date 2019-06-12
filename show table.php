<!doctype html>
<html>
<head>
	<title>data row</title>
	<link rel="stylesheet" type="text/css" href="table_style.css">
	<style>
	
	 table
	 {
		// border:2px black solid;
		// border-collapse:collapse;
		width:85%;
	 }
	
	</style>
	
</head>
<body>
<table  align="center">
<thead>
	<tr><td colspan="6" >Books Details</td></tr>
	<tr>
	<td>Books Title</td><td>Author Name</td><td>Price</td><td>Publisher Name</td><td>delete</td><td>update</td>
	</tr>
	
</thead>
<tbody>

	<?php
	
	// $conn = new mysqli("127.0.0.1", "root", "", "shamim-test-database");
	
	// if($conn->connect_error)
	// {
		// die("there is some problem to connect with database".$conn->connect_error);
	// }
	
	$query = "SELECT * FROM books, publishers WHERE books.publisher_id = publishers.publisher_id";
	require_once "database-code-127.0.0.1.php";
	$rs = db_connection($query);
	
	//$rs = $conn->query($query);
	 if($rs->num_rows === 0)
	 {
		 echo"
		 <tr><td colspan=\"4\">EMPTY RESULT</td></tr>
		 ";
	 }
	 else
	 {
		 while($row = $rs->fetch_assoc())
		 {
			 echo "
			 <tr>
			 <td>{$row['title']}</td>
			 <td>{$row['author']}</td>
			 <td class=\"num\" >{$row['price']}</td>
			 <td >{$row['publisher_name']}</td>
			 <td><button type=\"button\" class='delete' onclick = \" return confirm('Are you sure to delete {$row['title']} field ?');\" ><a href=\"delete-books-file.php?book_id={$row['id']}\">delete</a></button></td>
			 <td class='tdstylenone'><button type=\"button\" class='update'><a href=\"update-book-file.php?book_id={$row['id']}\">update</a></button></td>
			 
			 </tr>
			 ";
		 }
	 }
	
	?>
	
</tbody>
<tfoot>
	
	<tr><td colspan="6" ><button><a href="books-add-file.php" > click here to go back</a></button></td></tr>
</tfoot>

</table>
<script>

	//function notification_delete()
	//{
	//	alert("<h1 style=\"color:red\">Are you sure to delete this row</h1>");
	//}
</script>
</body>
</html>