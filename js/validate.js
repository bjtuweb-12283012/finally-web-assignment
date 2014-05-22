// JavaScript Document

function validate()
{
	var name = document.getElementById("login-name");
	//var mail = document.getElementById("mail");
	//var content = document.getElementById("content");
	
	if (!name.value)
	{
		name.style.borderColor="red";
	}
}