function plsql1(val){
	//value initialization
    var B_NAME = val.B_NAME.value;
    var M_ID = val.M_ID.value;
	var R_ID = val.R_ID.value;
 
	var flag = true;
// js validation
    if(B_NAME==="")
	{
	   document.getElementById('B_NAMEError').innerHTML="Field can't be empty";
		flag = false;
	}
    if(M_ID==="")
	{
	   document.getElementById('M_IDError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(R_ID==="")
	{
	   document.getElementById('R_IDError').innerHTML="Field can't be empty";
		flag = false;
	}
  	
return flag; //if validate then return true if not then false;
}
//ajax part
function ajax1(pform) {
	// body...
	var isValid=plsql1(pform);
	if(isValid){
		var fd = new FormData();
        fd.append("submit1",pform.submit1.value);
        fd.append("B_NAME",pform.B_NAME.value);
		fd.append("M_ID",pform.M_ID.value);
		fd.append("R_ID",pform.R_ID.value);

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg1").innerHTML = this.responseText; //msg id jekhane oikhane php theke ja echo hoito ota show korbe
			}
		}
		xhttp.open("POST","../controller/sequenceAction.php"); //connected with backend
		xhttp.send(fd);
	}
	
}
//////////////////////////////////////////////////////////////
function plsql2(val){
	//value initialization
    var fname = val.fname.value;
    var amount = val.amount.value;
	var quantity = val.quantity.value;
	var des = val.des.value;
 
	var flag = true;
// js validation
    if(fname==="")
	{
	   document.getElementById('bnameError').innerHTML="Field can't be empty";
		flag = false;
	}
    if(amount==="")
	{
	   document.getElementById('amountError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(quantity==="")
	{
	   document.getElementById('quantityError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(des==="")
	{
	   document.getElementById('desError').innerHTML="Field can't be empty";
		flag = false;
	}
  	
return flag; //if validate then return true if not then false;
}
//ajax part
function ajax2(pform) {
	// body...
	var isValid=plsql2(pform);
	if(isValid){
		var fd = new FormData();
        fd.append("submit2",pform.submit2.value);
        fd.append("fname",pform.fname.value);
		fd.append("amount",pform.amount.value);
		fd.append("quantity",pform.quantity.value);
		fd.append("des",pform.des.value);

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg2").innerHTML = this.responseText; //msg id jekhane oikhane php theke ja echo hoito ota show korbe
			}
		}
		xhttp.open("POST","../controller/sequenceAction.php"); //connected with backend
		xhttp.send(fd);
	}
	
}
//////////////////////////////////////////////////////////////////////////////////////////
