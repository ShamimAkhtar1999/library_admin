<!doctype html>
<html>
<head>
	<title>forgot password</title>
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
		.submit_data
		{
			background:#f44336;
			color:white;
			font-size:20px;
			border-style:none;
		}
		.submit_data:hover
		{
			opacity:0.7;
			cursor:pointer;
		}
		
	</style>
</head>
</body>
	<div class="main">
		
	</div>
</body>
		<form action="forgot_password_controllor.php" method="post">
			<div class="formhead">		<!--form-headimage-->
				<img src="img_avatar2.png"  class="avatar"></img>
				
			</div>
			
			<div class="formdata">			<!--formdata-->
			<label>Type your name :</label></br>
			<input type="text" name="name" placeholder="Type your name" required ></input></br></br>
			
			<label>Type your gmail id :</label></br>
			<input type="email" name="gmail_id" placeholder="Type your gmail id" required ></input></br></br>
			
			<label>
				
				<input type="submit" value="SUBMIT" class="submit_data" ></input>
			</label>
			</div>
			
		</form>


</html>