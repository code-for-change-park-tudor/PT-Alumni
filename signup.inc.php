<?php

		include_once 'dbh.inc.php';

	$first= mysqli_real_escape_string($conn, $_POST['first']);
	$last= mysqli_real_escape_string($conn, $_POST['last']);
	$title	= mysqli_real_escape_string($conn, $_POST['title']);
	$com= mysqli_real_escape_string($conn, $_POST['com']);
	$uni= mysqli_real_escape_string($conn, $_POST['uni']);
	$grad= mysqli_real_escape_string($conn, $_POST['grad']);
	$maj= mysqli_real_escape_string($conn, $_POST['maj']);
	$email= mysqli_real_escape_string($conn, $_POST['email']);
	$lkd= mysqli_real_escape_string($conn, $_POST['lkd']);
	$tw= mysqli_real_escape_string($conn, $_POST['tw']);
	$fb= mysqli_real_escape_string($conn, $_POST['fb']);
	$info = mysqli_real_escape_string($conn, $_POST['info']);

	


	$sql = "INSERT INTO users (user_first, user_last, user_title, company, user_university, user_graduation, user_major, user_email,user_linkedin, user_twitter, user_facebook, user_info) VALUES ('$first','$last','$title','$com','$uni','$grad','$maj','$email','$lkd','$tw','$fb','$info');";
	mysqli_query($conn, $sql);


	header("Location: ../PT-Alumni-master/info.php?signup=succeess");

	 $result = mysql_query($query);

    /* Check for errors with query execution. */
    if (!$result) echo("Query Error! Process aborted.");
