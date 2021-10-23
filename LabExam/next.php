<?php include "result.php"; ?>
<html>
<body>
<h1>Education </h1>
<form action="result.php" method="POST">
  <hr> 
University : <input type="text" name="uni"> <?php echo $validateuni; ?><br><br>
Degree: <input type="text" name="degree"> <?php echo $validatedegree; ?><br><br>
Major: <input type="text" name="major"> <?php echo $validatemajor; ?><br><br>
Result: <input type="text" name="result"> <?php echo $validateresult; ?><br><br>
Passing Year: <input type="date" name="pyear"> <?php echo $validatepyear; ?>
<input type="submit" value="Submit">


</form>
</body>
</html>