/*function admin()
	{
		alert("you have to login first");
	}*/
		
		var model = document.getElementById('id01');
		
		window.onclick = function(event)
		{
			if (event.target == model)
			{
				model.style.display = "none";
			}
		}
		/*zoom function*/
		var form = document.getElementById('id02');
		function zoomcss()
		{
			form.style.transform = "scale(1)";
		}
		/*resize function*/
		function resize()
		{
			form.style.transform = "scale(0.9)";
		}
		/*================================ modernform validation================================================*/
		 function uniquevalid()
		{
			let c = document.forms["model_form"]["username"];
			let d = document.forms["model_form"]["password"];
			let name_error = document.getElementById('name_error');
			let password_error = document.getElementById('password_error');
			if (c.value == "")
			{
				c.style.border = '1px black solid';
				name_error.textContent = 'Username is required';
				c.focus();
				return false;
			}
			else if (d.value == "")
			{
				//lert("please fill password");
				d.style.border = '1px red solid';
				password_error.textContent = 'Password is required';
				return false;
			}
			
		} 
		/*==========================================Event handler=============================*/
		let c = document.forms["model_form"]["username"];
		let d = document.forms["model_form"]["password"];
		let name_error = document.getElementById('name_error');
		let password_error = document.getElementById('password_error');

		c.addEventListener('input',() => {c.style.border = '1px black solid';
											name_error.innerHTML = "";},true );
		d.addEventListener('input',() => {d.style.border = '1px black solid';
											password_error.innerHTML = "";},true );

		


		function validation()
		{
			var a = document.valid.publisher_name.value;
			var b = document.valid.publisher_contact.value;
			if (a == "")
			{
				alert("please fill the publisher_name details");
				return false;
			}
			else if (b == "")
			{
				alert("please fill the publisher_contact details");
				return false;
			}
			else{
				alert("form is submitted");
				return true;
			}
			
			
			
		}