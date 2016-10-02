function check()
{
	var user = document.forms["store"]["name"].value;
	var pass = document.forms["store"]["pass"].value;
	
	if(pass.length == 0)
	{
		alert("Must insert a password");
		return false;
	}
	
	if(user.indexOf('@') == -1 || user.indexOf(".") == -1)
	{
		alert("Invalid Username");
		return false;
	}
}