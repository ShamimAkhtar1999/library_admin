<!doctype html>
<html>
<head>
	<title> add new book</title>
	<link rel="stylesheet" type="text/css" href="form-style.css">
	<link rel="stylesheet" type="text/css" href="model-form.css">

</head>
<body align="center">
	<p><a href="publsiher-add-file.php">add publishers </a>&nbsp&nbsp&nbsp 
	<a href="books-add-file.php" >add books </a>&nbsp&nbsp&nbsp 
	<a onclick="document.getElementById('id01').style.display = 'block'" class="show_form" style="hover;cursor:pointer;" >show book details </a></p>
	</br>
	</br>

	<fieldset>
	<legend align="center"><h1>ADD BOOKS</h1></legend>
	<form align="center" action="books-controller-file.php" method="post">
		<label for="book_title"> Book title</label>
		<input type="text" name="book_title" required></input></br></br>
		
		<label for="author"> Author name</label>
		<input type="text" name="author" required></input></br></br>
		
		<label for="published_date"> published date</label>
		<input type="date" name="published_date" required></input></br></br>
		
		<label for="quantity"> quantity</label>
		<input type="text" name="quantity" required></input></br></br>
		
		<label for="price"> Book price</label>
		<input type="text" name="price" required></input></br></br>
		
		<label for="publisher_id"> Publisher Id</label>
		<select name="publisher_id" type="text">
			<option value="">Select publisher name</option>
			<option value="1">BPB</option>
			<option value="2">Bloomspury</option>
			<option value="3" >Tata Macgrow hill</option>
			<option value="4">Scholastic</option>
		</select></br></br>
		
		<input type="submit" value="ADD"></input> &nbsp&nbsp&nbsp <input type="reset" value="RESET"></input>
             
	</form>
	</fieldset> 
										<!--modal_form starting-->
	<div id="id01" class="main">
		
		<form class="model-form" name  onsubmit=" return uniquevalid();" action="model_form_controllor.php" method="post" id="id02" onmouseover="zoomcss();" onmouseout="resize();">
		
			<div class="image-container">
				<img src="img_avatar2.png" class="avatar"></img>
				<span  onclick="document.getElementById('id01').style.display = 'none'" style="width:30px;text-align:center;font-size:30px;float:right;position:relative;top:0%;right:0%;font-weight:bold;hover;cursor:pointer;hover:background:red;" class="close">
				<strong>&times;</strong>	
				</span>
			</div></br>
			<div class="details">
				<label for="username">Username :</label></br>
				<input type="text" name="username" id="id03" onfocus="userfriend();" placeholder="Type your username" class="field" >
				<div id="name_error"></div>
				</br>
				
				<label for="password">Password :</label></br>
				<input type="password" name="password" id="id04" autocomplete  placeholder="Type your password" class="field" >
				<div id="password_error"></div>
				</br>
				
				<label>
				<input type="submit" class="submit" onfocus="return zoomcss();" value="Login" >
				</label>
				
				</br>
				<label>
				<input type="checkbox" checked value="Login" style="margin-top:5%;">Remember me
				</label>
				
				
			</div></br>
			<div class="bottom_container">
				
				<button type="button" onclick="document.getElementById('id01').style.display = 'none'">Cancel	</button>
				<span>Forgot <a href="forgot_password.php">Password?</a></br><a href="newuser_register.php" style="font-size:15px;">New User click</a></span>
			</div>
		</form>
	</div>
						<!--================starting script for model form=====================-->
	
	
	<script src="books.js"></script>

</body>
</html>