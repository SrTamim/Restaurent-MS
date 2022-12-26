function validation(val){
	//value initialization
    var name = val.name.value;

    if (val.male.checked===true) {
        var gender = val.male.value;
    }
    else if (val.female.checked===true) {
        var gender = val.female.value;
    }
    else{
        gender="";
    }
	var email = val.email.value;
	var uname = val.uname.value;
	var pass = val.pass.value;
    var cpass = val.cpass.value;
	var flag = true;
// js validation
    if(name==="")
	{
	   document.getElementById('nameError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(gender==="")
	{
		document.getElementById('genderError').innerHTML="field can't be empty";
		flag = false;
	}
	if(email==="")
	{
		document.getElementById('emailError').innerHTML="field can't be empty";
		flag = false;
	}
	if(uname==="")
	{
		document.getElementById('unameError').innerHTML="field can't be empty";
		flag = false;
	}
	if(pass==="")
	{
		document.getElementById('passError').innerHTML="field can't be empty";
		flag = false;
	}
    if(cpass==="")
	{
		document.getElementById('cpassError').innerHTML="field can't be empty";
		flag = false;
	}
  
return flag; //if validate then return true if not then false;
}
//ajax part
function ajax(pform) {
	// body...
	var isValid=validation(pform);
	if(isValid){
		var fd = new FormData();
        fd.append("name",pform.name.value);
		fd.append("gender",pform.gender.value);
		fd.append("email",pform.email.value);
		fd.append("uname",pform.uname.value);
		fd.append("pass",pform.pass.value);
        fd.append("cpass",pform.cpass.value);
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg").innerHTML = this.responseText; //msg id 
		}
		xhttp.open("post","../controller/registerAction.php"); //con with backend
		xhttp.send(fd);
	}
	
 } 

}