<!doctype html>
<html>
<head>
	<title> forgot password</title>
	
	<style>
		body{
			background:rgba(0,0,0,0.4);
			margin:0%;
		}
		form
		{
			width:30%;
			height:500px;
			background:white;
			margin:10% 35%;
			//border-radius:4%;
			box-shadow:2px 2px 25px #5A7B40;
		}
		.formhead
		{
			background:#f1f1f1;
			height:30%;
			width:100%;
			
		}
		.formhead img
		{
			border-radius:50%;
			height:90%;
			position:relative;
			left:30%;
			padding:10px;
		}
		.formdata
		{
			height:70%;
			font-size:25px;
			margin:5% 5%;
			//width:100%;
			//background:white;
			color:#5A7B40;
		}
		.formdata input
		{
			height:7%;
			width:100%;
			border:1px black solid;
			//border-color:#5A7B40;
		}
		.submit_data, .submit_data a
		{
			background:#f44336;
			color:white;
			width:100%;
			font-size:20px;
			border-style:none;
			text-decoration:none;
		}
		.submit_data:hover
		{
			opacity:0.7;
			cursor:pointer;
		}
		.goback
		{
			background:#f44336;
			border-style:none;
			height:25px;
			padding:5px 10px;
			margin-left:40%;

		}
		.goback a
		{
			color:white;
			text-decoration:none;
		}
		
	</style>


</head>
<body>
	<form>
		<div class="formhead">		<!--form-headimage-->
			<img src="img_avatar2.png"></img>
				
		</div>
			
		<div class="formdata">			<!--formdata-->
		<?php
	
		$name = $_POST['name'];
		$gmail_id = $_POST['gmail_id'];
		
		$query = "SELECT * FROM login_details WHERE name = '{$name}' AND gmail_id = '{$gmail_id}'";
		
		require_once "database-code-127.0.0.1.php";
		$rs = db_connection($query)->fetch_assoc();
		
		if ($rs == 0 )
		{
			die("<h1 style='color:red'>Your <i><u>Username</u></i> and <i><u>Gmail Id</u></i> does not match</h1><button class='goback'><a href=\"forgot_password.php\">Cancel</a></button>");
			//echo"<button><a href=\"forgot_password.php\">afjasfdjslkdf</a></button>";
		}
		else
		{
			echo"
			<label>Your Username :</label></br>
		<input type=\"text\" name=\"name\" value={$rs['name']} ></input></br></br>
			
		<label>Your Password :</label></br>
		<input type=\"text\" name=\"gmail_id\" value={$rs['login_password']} ></input></br></br>
			";
			
		}
		?>
		
			
		<label>
				
		<button type="button" class="submit_data" ><a href="books-add-file.php">Cancel</a></button>
		</label>
		</div>
			
	</form>
	
		

<script>
  var a = <?=$rs['name']?>;
 var b = <?=$rs['login_password']?>;
 
 alert("Your username = "+a+ "and password = "+b);
 document.write(a b);
 
// document.write('hello');
</script>
</body>
</html>
<?php
	
		// $name = $_POST['name'];
		// $gmail_id = $_POST['gmail_id'];
		
		// $query = "SELECT * FROM login_details WHERE name = '{$name}' AND gmail_id = '{$gmail_id}'";
		
		// require_once "database-code-127.0.0.1.php";
		// $rs = db_connection($query)->fetch_assoc();
		
		// if ($rs == 0 )
		// {
			// die("<h1 style='color:red'>Your <i>Username</i> and <i>Gmail Id</i> does not match</h1>");
		// }
		// else
		// {
			// echo"
			// <form>
		// <div class=\"formhead\">		
			// <img src=\"img_avatar2.png\"  ></img>
				
		// </div>
			
		// <div class=\"formdata\">	
			// <label>Your Username :</label></br>
		// <input type=\"text\" name=\"name\" value={$rs['name']} ></input></br></br>
			
		// <label>Your Password :</label></br>
		// <input type=\"text\" name=\"gmail_id\" value={$rs['login_password']} ></input></br></br>
		// <label>
				
		// <input type=\"button\" value=\"Cancel\" class=\"submit_data\" ></label>
		// </label>
		// </div>
			
	// </form>
	
			// ";
			
		//}
		?>
		