var errors = [];

function IsFormValid()
{
	isValid = true;
	errMessage = "";
	
	if (document.konktaktForma.ime.value =="" || document.konktaktForma.brTel.value=="" || document.konktaktForma.poruka.value=="" || document.konktaktForma.mejl.value=="")
	{ 
		errMessage= "Sva polja su obavezna!";
		isValid = false;
	}
	
	document.getElementById("errorMessage").innerHTML = errMessage;
	return isValid;
}

function checkEmail(konktaktForma)
{
	var mail = konktaktForma.email.value;
	var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-] {1}[a-z0-9]+)*[\.]{1}(com|net|org|ba|co.ba|rs|co.rs|in.rs|me|co.me|hr)$', 'i');
	if(!reg.test(mail) || mail == "")
	{
		document.getElementById('emailSpan').innerHTML = '* Adresa nije validna';
		return false;
	}
	
	document.getElementById('emailSpan').innerHTML = '';
}

function CheckField(field)
{
	var errField = field.id + "Error";
	
	if (field.value == "")
	{
		document.getElementById(errField).innerHTML = "*";
		errors[errField] = 1; // ili errors.ImeSvojstva = 1
	}
	else
	{
		document.getElementById(errField).innerHTML = "";
		if (errors[errField] == 1)
		{
			delete errors[errField];
		}
	}
}

function IsFormValid2()
{
	isValid = true;
	
	var ime = document.getElementById('ime');
	CheckField(ime);
	
	var phone = document.getElementById('phone');
	CheckField(phone);
	
	var mail = document.getElementById('mail');
	CheckField(mail);
	
	var message = document.getElementById('message');
	CheckField(message);
	
	if (countProperties(errors) > 0)
	{
			isValid = false;
	}
	
	return isValid;
}

function countProperties(object)
{
    var count = 0;
	
    for(var property in object)
    {
        count++;
    }
	
    return count;
}