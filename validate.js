function validate()
{
//	alert("fgfgdf");
	var name = document.getElementById("name");
	//alert(name.value);
	var mail = document.getElementById("mail");
	var content = document.getElementById("content");
	if(!name.value)
	{
		name.style.borderColor="red";
		
		}
		if(!mail.value)
		{
			mail.style.borderColor="red";
			}
			if(!content.value)
			{
				content.style.borderColor="red";
				}
	}