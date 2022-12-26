function plsql1(val){
	//value initialization
    var mid = val.mid.value;
    var sal = val.sal.value;
 
	var flag = true;
// js validation
    if(mid==="")
	{
	   document.getElementById('midErr').innerHTML="Field can't be empty";
		flag = false;
	}
    if(sal==="")
	{
	   document.getElementById('salErr').innerHTML="Field can't be empty";
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
        fd.append("mid",pform.mid.value);
		fd.append("sal",pform.sal.value);

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg1").innerHTML = this.responseText; //msg id
			}
		}
		xhttp.open("POST","../controller/plsqlAction.php"); //con with backend
		xhttp.send(fd);
	}
	
}

function plsql2(val){
	//value initialization
    var cid = val.cid.value;
   
 
	var flag = true;
// js validation
    if(cid==="")
	{
	   document.getElementById('cidErr').innerHTML="Field can't be empty";
		flag = false;
	}
  	
return flag; //if validate then return true if not then false;
}
function ajax2(pform) {
	// body...
	var isValid=plsql2(pform);
	if(isValid){
		var fd = new FormData();
        fd.append("submit2",pform.submit2.value);
        fd.append("cid",pform.cid.value);

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg2").innerHTML = this.responseText; 
			}
		}
		xhttp.open("POST","../controller/plsqlAction.php"); 
		xhttp.send(fd);
	}
	
}
/////////////////////////////////
function plsql3(val){
	//value initialization
    var coid = val.coid.value;
    var coname = val.coname.value;
	var conumber = val.conumber.value;
	var coaddress = val.coaddress.value;
	var cozip = val.cozip.value;
 
	var flag = true;
// js validation
    if(coid==="")
	{
	   document.getElementById('coidErr').innerHTML="Field can't be empty";
		flag = false;
	}
    if(coname==="")
	{
	   document.getElementById('conameErr').innerHTML="Field can't be empty";
		flag = false;
	}
	if(conumber==="")
	{
	   document.getElementById('conumberErr').innerHTML="Field can't be empty";
		flag = false;
	}
	if(coaddress==="")
	{
	   document.getElementById('coaddressErr').innerHTML="Field can't be empty";
		flag = false;
	}
	if(cozip==="")
	{
	   document.getElementById('cozipErr').innerHTML="Field can't be empty";
		flag = false;
	}
  	
return flag; //if validate then return true if not then false;
}
//ajax part
function ajax3(pform) {
	// body...
	var isValid=plsql3(pform);
	if(isValid){
		var fd = new FormData();
        fd.append("submit3",pform.submit3.value);
        fd.append("coid",pform.coid.value);
		fd.append("coname",pform.coname.value);
		fd.append("conumber",pform.conumber.value);
		fd.append("coaddress",pform.coaddress.value);
		fd.append("cozip",pform.cozip.value);

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg3").innerHTML = this.responseText; //msg id
			}
		}
		xhttp.open("POST","../controller/plsqlAction.php"); //con with backend
		xhttp.send(fd);
	}
	
}
////////////////////////////////
function plsql4(val){
	//value initialization
    var mid = val.mid.value;
   
 
	var flag = true;
// js validation
    if(mid==="")
	{
	   document.getElementById('midSearchErr').innerHTML="Field can't be empty";
		flag = false;
	}
  	
return flag; //if validate then return true if not then false;
}
//ajax part
function ajax4(pform) {
	// body...
	var isValid=plsql4(pform);
	if(isValid){
		var fd = new FormData();
        fd.append("submit4",pform.submit4.value);
        fd.append("mid",pform.mid.value);

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg4").innerHTML = this.responseText; //msg id
			}
		}
		xhttp.open("POST","../controller/plsqlAction.php"); //con with backend
		xhttp.send(fd);
	}
	
}

///////////////////////////////////
function plsql5(val){
	//value initialization
    var wid = val.wid.value;
   
 
	var flag = true;
// js validation
    if(wid==="")
	{
	   document.getElementById('widErr').innerHTML="Field can't be empty";
		flag = false;
	}
  	
return flag; //if validate then return true if not then false;
}
//ajax part
function ajax5(pform) {
	// body...
	var isValid=plsql5(pform);
	if(isValid){
		var fd = new FormData();
        fd.append("submit5",pform.submit5.value);
        fd.append("wid",pform.wid.value);

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg5").innerHTML = this.responseText; //msg id
			}
		}
		xhttp.open("POST","../controller/plsqlAction.php"); //con with backend
		xhttp.send(fd);
	}
	
}