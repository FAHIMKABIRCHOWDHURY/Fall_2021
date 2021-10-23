<?php
class db{
 
function OpenCon() {
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "CV";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
return $conn;
}


function InsertNewEmp($conn,$table,$uname,$pass,$fname,$number,$birthday,$uni,$degree,$major,$result,$pyear) {

     $sql = "INSERT INTO $table (uname,pass,fname,numbers,birthday,uni,degree,major,result,pyear ) VALUES ('$uname','$pass','$fname','$number','$birthday','$uni','$degree','$major','$result','$pyear')";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}




function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>