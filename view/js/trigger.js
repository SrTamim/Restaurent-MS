function trigger1(val){
	//value initialization
    var fid = val.fid.value;
    var quantity = val.quantity.value;
	var flag = true;
// js validation
    if(fid==="")
	{
	   document.getElementById('fidErr').innerHTML="Field can't be empty";
		flag = false;
	}
    if(quantity==="")
	{
	   document.getElementById('quantityErr').innerHTML="Field can't be empty";
		flag = false;
	}
  
return flag; //if validate then return true if not then false;
}
//ajax part
function ajax1(pform) {
	// body...
	var isValid=trigger1(pform);
	if(isValid){
		var fd = new FormData();
        fd.append("submit1",pform.submit1.value);
        fd.append("fid",pform.fid.value);
		fd.append("quantity",pform.quantity.value);

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg1").innerHTML = this.responseText; //msg id jekhane oikhane php theke ja echo hoito ota show korbe
			}
		}
		xhttp.open("POST","../controller/triggerAction.php"); //connected with backend
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}
///////////
function trigger2(val){
	//value initialization
    var csid = val.csid.value;
    var address = val.address.value;
	var flag = true;
// js validation
    if(csid==="")
	{
	   document.getElementById('csidErr').innerHTML="Field can't be empty";
		flag = false;
	}
    if(address==="")
	{
	   document.getElementById('addressErr').innerHTML="Field can't be empty";
		flag = false;
	}
  
return flag; //if validate then return true if not then false;
}
//ajax part
function ajax2(pform) {
	// body...
	var isValid=trigger2(pform);
	if(isValid){
		var fd = new FormData();
        fd.append("submit2",pform.submit2.value);
        fd.append("csid",pform.csid.value);
		fd.append("address",pform.address.value);

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg2").innerHTML = this.responseText; //msg id jekhane oikhane php theke ja echo hoito ota show korbe
			}
		}
		xhttp.open("POST","../controller/triggerAction.php"); //connected with backend
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}
//////////////////////////////////////

function trigger3(val){
	//value initialization
    var csid = val.csid.value;
    var cname = val.cname.value;
	var flag = true;
// js validation
    if(csid==="")
	{
	   document.getElementById('csidErr').innerHTML="Field can't be empty";
		flag = false;
	}
    if(cname==="")
	{
	   document.getElementById('cnameErr').innerHTML="Field can't be empty";
		flag = false;
	}
  
return flag; //if validate then return true if not then false;
}
//ajax part
function ajax3(pform) {
	// body...
	var isValid=trigger3(pform);
	if(isValid){
		var fd = new FormData();
        fd.append("submit3",pform.submit3.value);
        fd.append("csid",pform.csid.value);
		fd.append("cname",pform.cname.value);

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg3").innerHTML = this.responseText; //msg id jekhane oikhane php theke ja echo hoito ota show korbe
			}
		}
		xhttp.open("POST","../controller/triggerAction.php"); //connected with backend
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}
///////////////////////////////////
function trigger4(val){
	//value initialization
    var fid = val.fid.value;
    var quantity = val.quantity.value;
	var flag = true;
// js validation
    if(fid==="")
	{
	   document.getElementById('fidErr').innerHTML="Field can't be empty";
		flag = false;
	}
    if(quantity==="")
	{
	   document.getElementById('quantityErr').innerHTML="Field can't be empty";
		flag = false;
	}
  
return flag; //if validate then return true if not then false;
}
//ajax part
function ajax4(pform) {
	// body...
	var isValid=trigger4(pform);
	if(isValid){
		var fd = new FormData();
        fd.append("submit4",pform.submit4.value);
        fd.append("fid",pform.fid.value);
		fd.append("quantity",pform.quantity.value);

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg4").innerHTML = this.responseText; //msg id jekhane oikhane php theke ja echo hoito ota show korbe
			}
		}
		xhttp.open("POST","../controller/triggerAction.php"); //connected with backend
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}