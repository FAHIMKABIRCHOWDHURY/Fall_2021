<?php
$validatename="";
$validateemail="";
$validatecheckbox="";
$validateradio="";
$validateage="";
$d1=$d2=$d3="";
$fname=$lname=$email=$gender=$age="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];

$email=$_REQUEST["email"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "you must enter first name";

}
elseif(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<3))
{
    $validatename= "you must enter last name";

}
else
{
    $name=$_REQUEST["lname"];
}

if(empty($age))
{
    $validateage= "you must enter age";
}
if(isset($_REQUEST["Designation"]))
{
    $validateradio= $_REQUEST["Designation"];
}
else{
    $validateradio= "please select at least one radio";
}
//
if(!isset($_REQUEST["d1"])&&!isset($_REQUEST["d2"])&&!isset($_REQUEST["d3"]))
{
    $validatecheckbox = "please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["d1"]))
   {
       $v1= $_REQUEST["d1"];
   }
   if(isset($_REQUEST["d2"]))
   { 
       $v2= $_REQUEST["d2"];
   }
   if(isset($_REQUEST["d3"]))
   {
    $v3= $_REQUEST["d3"];
   }
}
//
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email";
}
else{
    $validateemail= "your email is ".$email;
}

if(empty($Password) )
{
    $validateemail="you must enterPassword";
}
elseif(strlen($Password) < 8)
{
     $validateemail= "your Password must be gereater that 8  ".$Password;
}
else{
    $validateemail= "your Password is ".$Password;
}
$formdata = array(
          'firstName'=> $_POST["fname"],
          'lastName'=> $_POST["lname"],
          'age'=>$_POST["age"],
          'Designation'=> $_POST["Designation"],
          'Preferred language'=>$_POST["age"],
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

    
     
}
?>