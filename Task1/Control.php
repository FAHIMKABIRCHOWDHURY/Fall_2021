<?php
$validatename="";
$validateemail="";
$validatecheckbox="";
$validateradio="";
$d1=$d2=$d3="";
$fname=$lname=$email=$gender="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];

$email=$_REQUEST["email"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<5))
{
    $validatename= "you must enter first name";

}
elseif(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<5))
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

}
?>
