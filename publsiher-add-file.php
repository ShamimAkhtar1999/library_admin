<!doctype html>
<html>
<head>
	<title> add new publsihers</title>
	<link rel="stylesheet" type="text/css" href="form-style.css">
	<link rel="stylesheet" type="text/css" href="model-form.css">
</head>
<body align="center">
	<p><a href="publsiher-add-file.php">add publishers </a>&nbsp&nbsp&nbsp 
	<a href="books-add-file.php">add books </a>&nbsp&nbsp&nbsp 
	<a  onclick="document.getElementById('id01').style.display = 'block'" class="show_form">show books details </a> &nbsp&nbsp&nbsp <a href="show_publisher_table.php"> publishers id list </a></p>
	</br>
	</br>

	<fieldset>
	
	<legend><h1>ADD PUBLISHERS</h1></legend>
	<form action="publishers-controller-file.php" method="post" name="valid" onsubmit=" return validation();">
		<label for="publisher_name"> Publisher Name</label>
		<input type="text" name="publisher_name"  require></input></br></br>
		
		<label for="publisher_contact"> Publisher Contact</label>
		<input type="text" name="publisher_contact" require></input></br></br>
		
		<input type="submit" value="ADD" > &nbsp&nbsp&nbsp <input type="reset" value="RESET">

	</form>           
	</fieldset>
	                             <!--add publisher end-->
	
									<!--model form-->
	
	<div id="id01" class="main">
		
		<form class="model-form" action="model_form_controllor.php" id="id02" name="model_form" method="post" onmouseover="zoomcss();" onmouseout="resize();" onsubmit = " return uniquevalid();">
		
			<div class="image-container">
				<img src="img_avatar2.png" class="avatar"></img>
				<span  onclick="document.getElementById('id01').style.display='none'" style="width:30px;text-align:center;font-size:30px;float:right;position:relative;top:0%;right:0%;font-weight:bold;" class="close">
				<strong>&times;</strong>	
				</span>
			</div>
			</br>
			<div class="details">
				<label for="username">Username :</label></br>
				<input type="text" name="username"  onfocus="zoomcss();" placeholder="Type your username" class="field" />
				<div id="name_error"></div>
				</br>
				
				<label for="password">Password :</label></br>
				<input type="password" name="password" placeholder="Type your password" class="field" />
				<div id="password_error"></div>
				</br>

				<label>
				<input type="submit" class="submit" value="Login" />
				</label>
				
				</br>
				<label>
				<input type="checkbox" checked  style="margin-top:5%;"/>Remember me
				</label>
				
				
			</div>
			</br>
			<div class="bottom_container">
				
				<button type="button" onclick="document.getElementById('id01').style.display = 'none'">Cancel	</button>
				<span>Forgot <a href="forgot_password.php">Password?</a></br><a href="newuser_register.php" style="font-size:15px;">New User click</a></span>
			</div>
		</form>
	</div>
	
							<!--script for modernform-->
	<script src="publisher.js"></script>
	
		
	

</body>
</html>