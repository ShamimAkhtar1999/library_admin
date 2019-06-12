<!doctype html>
<html>
<head>
	<title>update book</title>
	<link rel="stylesheet" type="text/css" href="form-style.css">
	<style type="text/css">
		body
		{
			margin: 0;
		}
		#id01
		{
			//background:rgba(1,0,0,0.4);
			background:gray;
			height:25%;
			width:100%;
			position:absolute;
			top:35.5%;
			display:none;
		}
		#id02
		{
			height:80%;
			width:50%;
			margin:2% 25%;
			border:2px white solid;
		}
		#id02 p
		{
			color:white;
			font:29px ebrima;
		}
		span input
		{
			background:none;
			border:1px white solid;
			//border-style:none;
			color:white;
			padding:5px 20px;	
			cursor:pointer;
			//font-family:hack;	}
	</style>
</head>
<body align="center">
<?php
	$book_id = $_GET['book_id'];
	$query = "SELECT * FROM books WHERE id = {$book_id}";
	require_once "database-code-127.0.0.1.php";
	$rs = db_connection($query);
	$row = $rs->fetch_assoc();
?>
	<fieldset>
	<legend><h1>UPDATE BOOKS</h1></legend>
	<form action="books-update-controller-file.php" method="post" name="update">
		<label for="book_id"> Book Id</label>
		<input type="text" name="book_id" value="<?=$row['id']?>" readonly></br></br>
		
		<label for="book_title"> Book title</label>
		<input type="text" name="book_title" value="<?=$row['title']?>" required></br></br>
		
		<label for="author"> Author name</label>
		<input type="text" name="author" value="<?=$row['author']?>" required></br></br>
		
		<label for="published_date"> published date</label>
		<input type="date" name="published_date" value="<?=$row['date_of_published']?>" required></br></br>
		
		<label for="quantity"> quantity</label>
		<input type="text" name="quantity" value="<?=$row['quantity']?>" required></br></br>
		
		<label for="price"> Book price</label>
		<input type="text" name="price" value="<?=$row['price']?>" required></br></br>
		
		<label for="publisher_id"> Publisher Id</label>
		<select name="publisher_id" type="text" value="<?=$row['publisher_id']?>">
			<option value="">Select publisher name
			<option value="1">BPB
			<option value="2">Bloomspury
			<option value="3" >Tata Macgrow hill
			<option value="4">Scholastic
		</select></br></br>
		
		<input type="submit" value="UPDATE" onclick="return validation();"> &nbsp&nbsp&nbsp&nbsp<input type="button" value="Cancel" onclick=" return show table.php">

	</form>
	</fieldset>

			<!--=================Update Validation POP UP box  as ALERT MESSAGE====================-->

	<div id="id01">
		<div id="id02">
			<!--<svg height="30px" width="100px">
				<circle cx=50 cy=40 r=40 stroke="white" stroke-width=2px  fill="none"/>
			</svg>-->
			<p>Please Fill Publisher Name Field</p>
			<span><input type="submit" id="btn" value="Cancel"></span>
		</div>
		
	</div>
	
	<script>
				/*=================script for disappear popbox from window====================*/

		let popbox = document.getElementById('id01');
		window.onclick = disappear;

		function disappear(event)
		{
			if (event.target == popbox)
			{
				popbox.style.display = 'none';
			}
		}
			/*=================script for disappear popbox from window by button====================*/
		let btn = document.getElementById('btn');
		btn.addEventListener('click',() => {popbox.style.display = 'none';});
		
		function validation()
		{	
			let popbox = document.getElementById('id01'); 
			var a = document.update.publisher_id.value;
			if (a == "")
			{
				popbox.style.display = 'block';
				return false;
			}
			else 
			{
				alert("your data is updated !thank you.");
				return true;
			}
		}
	</script>
</body>
</html>