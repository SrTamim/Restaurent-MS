function valid() {
	// body...
	var userName = document.forms["form"]["userName"].value;
	var password = document.forms["form"]["password"].value;

	var flag = true;
    if(userName===""){
    	document.getElementById('userNameError').innerHTML="Field can't be empty";
    	flag = false;
    }
     if(password===""){
    	document.getElementById('passwordError').innerHTML="Field can't be empty";
    	flag = false;
    }
    return flag;
}