<!doctype html>
<html>
<head>
	<title>Registeration Form</title>
	<style>
		body{
			background:rgba(0,0,0,0.4);
			margin:0%;
		}
		form
		{
			width:40%;
			height:700px;
			background:white;
			margin:5% 30%;
			//border-radius:4%;
			box-shadow:2px 2px 25px #5A7B40;
		}
		.formhead
		{
			background:#f1f1f1;
			height:25%;
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
			height:75%;
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
<body>
	<div class="main">
		
	

		<form action="newuser_register_controllor.php" method="post">
			<div class="formhead">		<!--form-headimage-->
				<img src="img_avatar2.png"></img>
				
			</div>
			
			<div class="formdata">			<!--formdata-->
			<label>Type your name :</label></br>
			<input type="text" name="name" placeholder="Type your name" required ></input></br></br>
			
			<label>Type your contact no :</label></br>
			<input type="text" name="contact_no" placeholder="Type your contact no" required ></input></br></br>
			
			<label>Type your gmail id :</label></br>
			<input type="email" name="gmail_id" placeholder="Type your gmail id"  ></input></br></br>
			
			<label>Type your Login Password :</label></br>
			<input type="text" name="login_password" placeholder="Type your password" required ></input></br></br>
			
			<label>
				
				<input type="submit" value="SUBMIT" class="submit_data" ></input>
			</label>
			</div>
			
		</form>
	</div>
</body>
</html>