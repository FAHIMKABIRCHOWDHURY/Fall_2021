<?php include "Control.php"; ?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="" method="post">
First name: <input type="text" name="fname"> <?php echo $validatename; ?>
Last name: <input type="text" name="lname"> <?php echo $validatename; ?>
<br>
<br>
Age: <input type="value" name="age"> <?php echo $validateage; ?>
<br><br>

<p>Designation:</p>
  <input type="radio" id="Junior Programmer" name="Designation" value="Junior Programmer">
  <label for="Junior Programmer">Junior Programmer</label><br>
  <input type="radio" id="Senior Programmer" name="Designation" value="Senior Programmer">
  <label for="Senior Programmer">Senior Programmer</label><br>
  <input type="radio" id="Project Lead" name="Designation" value="Project Lead">
  <label for="Project Lead">Project Lead</label>
  <br>
  <?php echo $validateradio; ?>
<br>

Preferred language
<br>

<input type="checkbox" id="d1" name="d1" value="JAVA">
JAVA<br>
<input type="checkbox" id="d2" name="d2" value="PHP">
PHP<br>
<input type="checkbox" id="d3" name="d3" value="C++">
C++<br>
<br>
<?php echo $validatecheckbox; ?>

<?php echo $d1;?>

<?php echo $d2;?>

<?php echo $d3;?>
<br>
Email: <input type="text" name="email"> <?php echo $validateemail; ?>
<br><br>

<br>
Password: <input type="text" name="email"> <?php echo $validateemail; ?>
<br><br>



<input type="submit" value="SUBMIT">
</form>
</body>
</html>