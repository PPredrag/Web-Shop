
function validateForm()
{
	var isValid = true;
	
	var x = document.getElementById("ime").value;
	var y = document.getElementById("telefon").value;
	var z = document.getElementById("e_mail").value;
	
	if ( x == "" || y == "" || z == "" )
	{
		document.getElementById("error").innerHTML = "Unesite podatke obelezene zvezdicom";
		isValid = false;
	}
	return isValid;
}
function zvezdica()
{
	
	var x = document.getElementById("ime").value;
	var y = document.getElementById("telefon").value;
	var z = document.getElementById("e_mail").value;
	
	var popunjen = true ;
	if ( x == "")
	{
		document.getElementById("zvezdica_ime").innerHTML = "*";
		popunjen = false;
	}
	else
	{
		document.getElementById("zvezdica_ime").innerHTML = "";
	}
	if ( y == "")
	{
		document.getElementById("zvezdica_tel").innerHTML = "*";
		popunjen = false;
	}
	if ( z == "")
	{
		document.getElementById("zvezdica_mail").innerHTML = "*";
		popunjen = false;
	}
	
}