<!doctype html>
<html>
<head>
<title>Publisher's List</title>
<link rel="icon" type="image/png" href="img_avatar2.png">
<link rel="stylesheet" type="text/css" href="table_style.css">

	
	
</style>
</head>
<body>
<table  align="center" >
	<thead>
		
		<tr>
			<td>Publisher_id</td>    <td>Name</td>   <td>Contact Details</td>
		</tr>
	</thead>
	<tbody>
	
		<?php
			
			$query = "SELECT * FROM publishers";
			require_once "database-code-127.0.0.1.php";
			$rs = db_connection($query);
			
			if ($rs->num_rows === 0)
			{
				echo "
				<tr >
					<td colspan=\"3\"> Empty Result</td>
				</tr>
				";
			}
			else
			{
				while($row = $rs->fetch_assoc())
				{
					echo "
						<tr>
							<td class=\"num\">{$row['publisher_id']}</td>  <td>{$row['publisher_name']}</td>   <td class=\"num\">{$row['publisher_contact']}</td>
						</tr>
					";
				}
			}
			//phpinfo(shmaim);
		?>
	</tbody>
	<tfoot>
	
		<tr>
			<td class="foot" colspan="3"> <a href="publsiher-add-file.php">Click Here for go to back</a> </td>
		</tr>
	</tfoot>
</table>
</body>
</html>