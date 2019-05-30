function proveraUsername()
{
	var username = document.getElementById('tbUsername').value;
	var regUsername = /^[\w\d\s]{2,20}$/;
	
	if(!regUsername.test(username))
	{
		document.getElementById('tbUsername').style.color = 'red';
	}
	else
	{
		document.getElementById('tbUsername').style.border = '2px solid green';
		document.getElementById('tbUsername').style.color = 'black';
	}
}
function proveraFirstName()
{
	var fName = document.getElementById('tbFirstName').value;
	var regFName = /^[A-z]{3,20}$/;
	
	if(!regFName.test(fName))
	{
		document.getElementById('tbFirstName').style.color = 'red';
	}
	else
	{
		document.getElementById('tbFirstName').style.border = '2px solid green';
		document.getElementById('tbFirstName').style.color = 'black';
	}
}
function proveraLastName()
{
	var lName = document.getElementById('tbLastName').value;
	var regLName = /^[A-z]{4,25}$/;
	
	if(!regLName.test(lName))
	{
		document.getElementById('tbLastName').style.color = 'red';
	}
	else
	{
		document.getElementById('tbLastName').style.border = '2px solid green';
		document.getElementById('tbLastName').style.color = 'black';
	}
}
function proveraEmail()
{
	var email = document.getElementById('tbEmail').value;
	var regEmail = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
	
	if(!regEmail.test(email))
	{
		document.getElementById('email').style.color = 'red';
	}
	else
	{
		document.getElementById('email').style.border = '2px solid green';
		document.getElementById('email').style.color = 'black';
	}
}
function proveraPassword()
{
	var password = document.getElementById('tbPassword').value;
	var regPassword = /^[\w\d\s]{3,25}$/;
	
	if(!regPassword.test(password))
	{
		document.getElementById('tbPassword').style.color = 'red';
	}
	else
	{
		document.getElementById('tbPassword').style.border = '2px solid green';
		document.getElementById('tbPassword').style.color = 'black';
	}
}
function proveraPassword2()
{
	var password = document.getElementById('tbPassword').value;
	var password2 = document.getElementById('tbPassword2').value;
	
	if(!password.match(password2))
	{
		document.getElementById('tbPassword2').style.color = 'red';
	}
	else
	{
		document.getElementById('tbPassword2').style.border = '2px solid green';
		document.getElementById('tbPassword2').style.color = 'black';
	}
}