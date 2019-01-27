function validate()
{
var name=document.getElementById("name").value;
//console.log(name);
var email=document.getElementById("email").value;
var username=document.getElementById("username").value;
var password=document.getElementById("password").value;
var confirm=document.getElementById("confirm").value;
var mob=document.getElementById("mob").value;
var count=0;
if(name=="")
	{
	document.getElementById("error-name").style.display=null;
	document.getElementById("error-name").innerHTML="<span class=\"close\" data-dismiss=\"alert\">&times;</span>Name cannot be empty.";
	count++;
	}
else{
if(!isNaN(name))
	{
	document.getElementById("error-name").style.display=null;
	document.getElementById("error-name").innerHTML="<span class=\"close\" data-dismiss=\"alert\">&times;</span>Name must not contain characters other than alphabets.";
	count++;
	}
}
if(mob=="")
{
document.getElementById("error-mob").style.display=null;
document.getElementById("error-mob").innerHTML="<span class=\"close\" data-dismiss=\"alert\">&times;</span>Mobile cannot be empty.";
count++;
}
else{
if(isNaN(mob))
{
document.getElementById("error-mob").style.display=null;
document.getElementById("error-mob").innerHTML="<span class=\"close\" data-dismiss=\"alert\">&times;</span>Mobile must not contain characters other than numerals.";
count++;
}
else{
if(/^\d{10}$/.test(mob))
	{
	
	}
else
	{
	document.getElementById("error-mob").style.display=null;
	document.getElementById("error-mob").innerHTML="<span class=\"close\" data-dismiss=\"alert\">&times;</span>Mobile number must be of 10 digits only.";
	count++;
	}
}
}
if(email=="")
	{
	document.getElementById("error-email").style.display=null;
	document.getElementById("error-email").innerHTML="<span class=\"close\" data-dismiss=\"alert\">&times;</span>Email cannot be empty.";
	count++;
	}
else
	{
	var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
	if(pattern.test(email))
		{
		
		}
	else
		{
		document.getElementById("error-email").style.display=null;
		document.getElementById("error-email").innerHTML="<span class=\"close\" data-dismiss=\"alert\">&times;</span>Email is not valid.";
		count++;
		}
	}
if(username=="")
	{
	document.getElementById("error-uname").style.display=null;
	document.getElementById("error-uname").innerHTML="<span class=\"close\" data-dismiss=\"alert\">&times;</span>Username cannot be empty.";
	count++;
	}
if(password=="")
	{
	document.getElementById("error-pass").style.display=null;
	document.getElementById("error-pass").innerHTML="<span class=\"close\" data-dismiss=\"alert\">&times;</span>Password cannot be empty.";
	count++;
	}
if(confirm=="")
	{
	document.getElementById("error-cpass").style.display=null;
	document.getElementById("error-cpass").innerHTML="<span class=\"close\" data-dismiss=\"alert\">&times;</span>Confirm Password cannot be empty.";
	count++;
	}
	if(password!=confirm)
		{
		document.getElementById("error-cpass").style.display=null;
		document.getElementById("error-cpass").innerHTML="<span class=\"close\" data-dismiss=\"alert\">&times;</span>Password do not match.";
		count++;
		}
	if(count==0)
		{
		document.getElementById("sub").click();
		}
}