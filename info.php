<?php
	include_once 'dbh.inc.php';



?> 

<!DOCTYPE html>
<html>


<head>
	<title> Welcome new user! </title> 
</head>

<body>
	<h1> Welcome new user! </h1>
	<p1> Enter in the information you would like to share with the PT community </p1>
	<form action="signup.inc.php" method="POST">
		<input type="text" name="first" placeholder="Firstname">
		<br>
		<input type="text" name="last" placeholder="Lastname">
		<br>
		<input type="text" name="title" placeholder=Title>
		<br>
		<input type="text" name="com" placeholder="Company">
		<br>
		<input type="text" name="uni" placeholder="University">
		<br>
		<input type="text" name="grad" placeholder="Graduation Year">
		<br>
		<input type="text" name="maj" placeholder="Major">
		<br>
		<input type="text" name="email" placeholder="Email">
		<br>
		<input type="text" name="lkd" placeholder="Linkedin link">
		<br>
		<input type="text" name="tw" placeholder="Twitter link">
		<br>
		<input type="text" name="fb" placeholder="Facebook link">
		<br>
		<input type="text" name="info" placeholder="About yourself">
		<button type ="submit" value="Submit">Submit</button>


	</form>


	<br>
	<br>
	<p1> Upload your profile image </p1>
	<form action="uploads.inc.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file" value = "" multiple="">
		<button type ="submit" name="submit">Upload</button>
	</form>



</body>
</html>