function validateForm()
{
	var fname=document.getElementById('fname').value;	
	var lname=document.getElementById('lname').value;
	var age=document.getElementById('age').value;
	var jp=document.getElementById('jp').value;
	var sp=document.getElementById('sp').value;
	var pl=document.getElementById('pl').value;
	var java=document.getElementById('java').value;
	var php=document.getElementById('php').value;
	var cpp=document.getElementById('cpp').value;
	var email=document.getElementById('email').value;
	var password=document.getElementById('password').value;
	var file=document.getElementById('file').value;
	var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var designation;

	if(fname.length<5)
	{
		document.grtElementById('firstNameValidation').innerHTML="First Name must be more than 5 characters";
		return false;
	}
	else if(lname.length<5)
	{
		document.getElementById('laststNameValidation').innerHTML="Last Name must be more than 5 characters";
		return false;
	}
	else if(!is_int(age))
	{
		document.getElementById('ageValidation').innerHTML="Age must be integer";
		return false;
	}
	else if(jp.checked==true || sp.checked == true || pl.checked==true)
	{
		document.getElementById('designationValidation').innerHTML="Please Select at least one designation";
		return false;
	}
	else if(jp.checked==true && (sp.checked == true || pl.checked==true))
	{		
		document.getElementById('designationValidation').innerHTML="Can not select more than one designation";
		return false;
	}
	else if(sp.checked == true && (jp.checked==true || pl.checked==true))
	{		
		document.getElementById('designationValidation').innerHTML="Can not select more than one designation";
		return false;

	}
	else if(pl.checked==true && (jp.checked==true || sp.checked == true))
	{		
		document.getElementById('designationValidation').innerHTML="Can not select more than one designation";
		return false;

	}
	else if(java.checked==false && php.checked == false && cpp.checked==false)
	{
		document.getElementById('langValidation').innerHTML="Please Select at least one Language";
		return false;
	}
	else if(!email.match(mailformat))
	{
		document.getElementById('emailValidation').innerHTML="Email must contain @ and . ";
		return false;
	}
	else if(lname.length<8)
	{
		document.getElementById('password').innerHTML="Password can not be less than 8 characters";
		return false;
	}
	else if(!isset(file))
	{
		document.getElementById('file').innerHTML="Please upload a file";
		return false;		
	}

	if(!isset(jp))
	{
		jp="";
	}
	if(!isset(sp))
	{
		sp="";
	}
	if(!isset(sp))
	{
		pl="";
	}
	if(!isset(java))
	{
		java="";
	}
	if(!isset(php))
	{
		php="";
	}
	if(!isset(cpp))
	{
		cpp="";
	}
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	 document.getElementById("data").innerHTML = this.responseText;
    	}
		else
		{
			 document.getElementById("data").innerHTML = this.status;
		}
  	};
  xhttp.open("POST", "/FTTask2/control/data.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("fname="+fname+"&lname="+lname+"&age="+age+"&jp="+jp+"&sp="+sp+"&pl="+pl+"&java="+java+"&php="+php+"&cpp="+cpp+"&email="+email+"&password="+password+"&file="+file);

