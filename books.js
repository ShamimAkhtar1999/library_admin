/*function admin()
	{
		alert("you have to login first");
	}*/
		
		var model = document.getElementById('id01');
		
		/*window.onclick = function(event)
		{
			if (event.target == model)
			{
				model.style.display = "none";
			}
		}*/
		/*model.addEventListener("click",disapear);
		function disapear(event)
		{
			if (event.target == model)
			model.style.display = 'none';
		}*/

		model.addEventListener("click",(event) =>
		{
			if (event.target == model)
			model.style.display = 'none';
		});

		var form = document.getElementById('id02');
		function zoomcss()
		{
			form.style.transform = "scale(1)";
			
		}
		function resize()
		{
			form.style.transform = "scale(0.9)";
			//form.style.display = "none";
			
		}
					/*--------------------validation for module form --------------------*/
		function uniquevalid()
		{
			let a = document.getElementById('id03');
			let b = document.getElementById('id04');

			let name_error = document.getElementById('name_error');
			let password_error = document.getElementById('password_error');
			b.value.toString();
			/*if (a == "")
			{
				alert("please fill username");
				return false;
			}
			else if (b == "")
			{
				alert("please fill password");
				return false;
			}
			else{
				aler("data transfered");
				return true;
			}*/

			/*---------------------Modern validation*--------------------*/

			if (a.value == "")
			{
				a.style.border = '1px red solid';
				name_error.textContent = "Username is required";
				a.focus();
				return false;
			}
			else if (b.value == "")
			{
				b.style.border = '1px red solid';
				password_error.textContent = "Password is required";
				b.focus();
				return false;
			}
			
			 else if (b.value.length < 8 )
			{
				b.style.border = '1px red solid';
				password_error.textContent = "You should have 8 digit password";
				b.focus();
				return false;
			}

		}

			/*========================Event Manager scripting==========================*/

		let a = document.getElementById('id03');
		function userfriend(){
		if (a.focus())
		{
			form.style.transform = "scale(1)";
		}
		else
		{
			form.style.transform = "none";
		}}
		let b = document.getElementById('id04');

		let name_error = document.getElementById('name_error');
		let password_error = document.getElementById('password_error');

		a.addEventListener('input',() => {a.style.border = '1px black solid';
											name_error.innerHTML = "";},true );
		b.addEventListener('input',() => {
			if (b.value.length < 8)
			{
				b.style.border = '1px red solid';
				password_error.textContent = "You should have 8 digit password";
				b.focus();
				return false;
			}
			else
			{
				b.style.border = '1px black solid';
				password_error.innerHTML = "";};
				
			},true )


		/*==============================User friendly message scripting=============================*/

		/*a.addEventListener('input',(event) => 
			{
				//if (event.select() == a)
				//{
					form.style.transform = "scale(1)";
				//}
			});
		
	*/
		