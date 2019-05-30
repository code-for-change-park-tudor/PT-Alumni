<?php

	include_once 'dbh.inc.php';

	if(isset($_POST['submit'])){
		$file = $_FILES['file'];

		$fileName= $_FILES['file']['name'];
		$fileTmpName= $_FILES['file']['tmp_name'];
		$fileSize= $_FILES['file']['size'];
		$fileError= $_FILES['file']['error'];
		$fileType= $_FILES['file']['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt=strtolower(end($fileExt));

		$allowed=array('jpg','jpeg','png');

		if(in_array($fileActualExt, $allowed)){
			if($fileError===0){
				if($fileSize< 1000000){
						$fileNameNew=uniqid('',true).".".$fileActualExt;
						$fileDestination='uploads/'.$fileNameNew;
						move_uploaded_file($fileTmpName, $fileDestination);
						header("Location: index.php?upload-success");
				}
				else{
					echo "Your file is too big";
				}

			}
			else{
				echo "There was an error uploading your file!";
			}

		}
		else{
			echo "You cannot upload files of this type";
		}


	}

	#$sql = "INSERT INTO users (image) VALUES ('$fileNameNew');";
	
	
	//$sql= "UPDATE users SET image = ('$fileNameNew') order by date_time_column desc
	//limit 1;";
	$ans=36;
	$sql="SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck>0){
        while($row =mysqli_fetch_assoc($result)){
            $ans= $row['user_id']."<br>";
        }

    }
	$num="SELECT MAX(user_id) FROM users;";

	$num= (int) $ans;
	$sql= "UPDATE users SET image = ('$fileNameNew') WHERE user_id= $num;";
	mysqli_query($conn, $sql);
	header("Location: ../PT-Alumni-master/info.php?signup=succeess");

	 $result = mysql_query($query);
