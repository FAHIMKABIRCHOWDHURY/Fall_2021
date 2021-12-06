<!DOCTYPE html>
<html>
<head>
<title>Search Page</title>
</head>
<body>
<h1>Search Faculty</h1>
Search By Faculty Name:</label><br>
<input type="text" name="Name" id="Name"><br>
<label>Search By Research Interest:</label><br>
<input type="text" name="Interest" id="Interest"><br>
<label for="Designation">Search By Designation:</label><br>
<select id="Designation">
<option value="">Select Designation</option>
<option value="Lecturer">Lecturer</option>
<option value="Assistant Professor">Assistant Professor</option>
<option value="Professor">Professor</option>
</select><br>
<input type="submit" name="Search" onclick="SearchForm()" value="Search">
<p id="view"></p>
<script type="text/javascript" src="myjs.js"></script>
</body>
</html>