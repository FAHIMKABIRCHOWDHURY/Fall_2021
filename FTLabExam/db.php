<?php
class db{
 
function OpenCon() {
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "mydb";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
return $conn;
}


function searchFaculty($conn,$table,$Name,$Interest,$Designation) {

     if($Name!="")
     {
          $sql = $conn->query("SELECT * FROM ". $table." WHERE Name='". $Name."'");
               return $sql;
     }
     else if($Interest!="")
     {
          $sql = $conn->query("SELECT * FROM ". $table." WHERE Interest='". $Interest."'");
               return $sql;
     }
     else if($Designation!="")
     {
          $sql = $conn->query("SELECT * FROM ". $table." WHERE Designation='". $Designation."'");
               return $sql;
     }    
}

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>