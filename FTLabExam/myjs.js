function SearchForm()
{
	var Name=document.getElementById("Name").value;	
	var Interest=document.getElementById("Interest").value;
	var opt=document.getElementById("designation");
	var Designation = opt.options[opt.selectedIndex].value;

	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	 document.getElementById("view").innerHTML = this.responseText;
    	}
		else
		{
			 document.getElementById("view").innerHTML = this.status;
		}
  	};


   xhttp.open("POST", "/FTLabExam/control.php", true);
   xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
   xhttp.send("Name="+Name+"&Interest="+Interest+"&Designation="+Designation);
}