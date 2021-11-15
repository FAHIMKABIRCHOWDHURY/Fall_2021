<!DOCTYPE html>
<html>
<head>
	<title>FTTTask1</title>
	<link rel="stylesheet" type="text/css" href="myStyle.css">
</head>
<body>
			<div class="top">
				<h1>ABC Management System</h1>
				<h4>We Create Future</h4>
			</div>

			<div class="menu">
					<a href="#">HOME</a>
					<a href="#">About Us</a>
					<a href="#">Shop</a>
			</div>

			<div class="registrationForm">
					<h2>Registration Form</h2>

			<br>

			<form>
				<div>
					<label>First Name</label>
      				<input type="text" id="fname" name="firstname">
    		</div>
    		<br>
    		<div>
					<label>Last Name</label>
      				<input type="text" id="lname" name="lastname">
    		</div>
    		<br>
    		<div>
    			<label>Age: </label>
    				  <input type="text" name="age">
    		</div>
    			<br>

				<div>
					<label>Designation:</label>
  						<input type="radio" id="junior" name="deg" value="Junior Programmer">
  				<label for="junior">Junior Programmer</label>
  						<input type="radio" id="senior" name="deg" value="Senior Programmer">
  				<label for="senior">Senior Programmer</label>
  						<input type="radio" id="lead" name="deg" value="Project Lead">
  				<label for="lead">Project Lead</label>
				</div>
				<br>
				<div>
					<label>Preferred language</label>
						<input type="checkbox" id="java" name="JAVA" value="java">
 						JAVA
						<input type="checkbox" id="php" name="PHP" value="php">
						PHP
						<input type="checkbox" id="cpp" name="C++" value="c++">
						 C++<br>
				</div>
				<br>
				<div>
					<label>Email:</label>
					  <input type="email" name="email"> 
				</div>
				<br>
				<div>
					<label>Password:</label>
					  <input type="password" name="password">
				</div>
				<br>
				<div >
					<label>Choose a file :</label>
					    <input type="file" name="filetoupload">
				</div>
				<br>
				<div>
					<input type="submit" value="Submit"><input type="reset" value="Reset">
				</div>

			</form>
			</div>

</body>
</html>