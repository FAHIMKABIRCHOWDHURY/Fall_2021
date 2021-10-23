<?php
include('db.php');
$validatefname="";
$validateuname="";
$validatenumber="";
$validatebirthday="";
$validatepass="";
$validateresult="";
$validatemajor="";
$validatedegree="";
$validateuni="";
$validateresult="";
$validatepyear="";
$uname=$pass=$fname=$number=$birthday=$uni=$degree=$major=$result=$pyear="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

if(strlen($_REQUEST["fname"])<3)
{
    $validatefname= "First Name can not be less than 3 ";

}
else
{
   $fname=$_REQUEST["fname"];
}


if(strlen($_REQUEST["uname"])<3)
{
    $validateuname= "Last Name can not be less than 3 ";

}
else
{
    $uname=$_REQUEST["uname"];
}


if(empty($REQUEST["email"]) || !preg_match("/^([a-z0-9\+\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["email"]))
{
    $validateemail="Please enter email";
}
else
{
    $email = $_REQUEST["email"];
}

if(strlen($_REQUEST["number"])<11)
{
    $validatenumber= "Phone Number can not be less than 11 ";

}
else
{
    $pnumber=$_REQUEST["number"];
}

if(!isset($_REQUEST["birthday"]))
{
    $validatebirthday= "Select date of birth";
}
else
{
    $birthday=$_REQUEST["birthday"];
}

if(!isset($_REQUEST["pyear"]))
{
    $validatepyear= "Select Passing year";
}
else
{
    $validatepyear=$_REQUEST["pyear"];
}

if (empty($_REQUEST["result"])) {
    $validateresult = "Enter your result";
}
else
{
    $validateresult=$_REQUEST["result"];
}

if (empty($_REQUEST["major"])) {
    $validatemajor = "Enter your major";
}
else
{
    $validatemajor=$_REQUEST["major"];
}


if (empty($_REQUEST["degree"])) {
    $validatedegree = "Enter your degree";
}
else
{
    $validatedegree=$_REQUEST["degree"];
}

if (empty($_REQUEST["uni"])) {
    $validateuni = "Enter your university name";
}
else
{
    $validateuni=$_REQUEST["uni"];
}

if(empty($_REQUEST["pass"]))
{
    $validatepass= "you must enter a valid Password";

}
elseif(strlen($_REQUEST["pass"])<8 )
{
    $validatepass= "you must Password must be greater than 8";
}
else
{
    $pass= $_REQUEST["pass"];
}
    $_SESSION["uname"] = $uname;
    $_SESSION["password"] = $pass;
    $_SESSION["fname"] = $fname;
    $_SESSION["number"] = $pnumber;
    $_SESSION["birthday"] = $birthday;


    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->InsertNewEmp($conobj,"Employee",$_SESSION["uname"],$_SESSION["password"],$_SESSION["fname"],$_SESSION["number"],$_SESSION["birthday"],$uni,$degree,$major,$result,$pyear);

    if($userQuery)
    {
        echo "Registration Successfully.";
    }
    else
    {
        echo "Failed.";
    }

  
}

?>