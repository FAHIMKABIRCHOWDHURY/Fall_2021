<?php
   	

	   
	   $formdata = array(
	      'firstName'=> $_POST["fname"],
	      'lastName'=> $_POST["lname"],
	      'age'=>$_POST["age"],
	      'Designation'=> $_POST["Designation"],
	      <?php $PreferredLanguage = array($d1,$d2,$d3);?>
	      'Email'=>$_POST["email"]

	   );
       $existingdata = file_get_contents('mydata.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents("mydata.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("mydata.json");
	 $mydata = json_decode($data);

    
	 echo "my value: ".$mydata[1]->lastName;