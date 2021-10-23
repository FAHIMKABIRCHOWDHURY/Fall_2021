<?php  
session_start();
include('result.php');
?>
<!DOCTYPE html>
<html>
<body>
<h1>Personal Details </h1>
<form action="result.php" method="POST">
  <hr> 
User Name: <input type="text" name="uname"> <?php echo $validateuname; ?>
<br><br>
Password: <input type="text" name="pass"> <?php echo $validatepass; ?>
<br><br>
Full Name: <input type="text" name="fname"> <?php echo $validatefname; ?>
<br><br>
<br><br>
Mobile No. <input type="text" name="number"> <?php echo $validatenumber; ?>
<br><br>
Date Of Birth: <input type="date" name="birthday"> <?php echo $validatebirthday; ?>
<button><a href="next.php">Next</a></button>
</form>
</body>
</html>