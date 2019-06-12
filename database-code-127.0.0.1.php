 <?php
	function db_connection($query)
	{
	$conn = new mysqli("127.0.0.1","root","","library_admin");
	if($conn->connect_error)
	{
		die("<h1> page cannot connect with database please check again in database-code-127.0.0.1</h1>");
	}
	return $conn->query($query);
	}
	
	/* function db_connection($query)
	{
		$sever = "localhost";
		$user = "root";
		$password = "";
		$dbname = "shamim-test-database";

		$conn = new MySQLi($sever,$user,$password,$dbname);
		if($conn->connect_error)
		{
			die("<h1>there some problem to connect to database.....</h1>".$conn->connect_error);
		}
		return $conn->query($query);
	} */
	

?> 