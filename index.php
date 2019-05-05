<?php
// require 'db_connection.php';
// $conn = OpenCon();
// echo "Connected Successfully";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$db = "mysql";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//nl2br shows the line breaks online
echo nl2br("Connected successfully\n");

// sql to create table
// $sql = "CREATE TABLE student(
//     student_id INT AUTO_INCREMENT,
//     name VARCHAR(20),
//     major VARCHAR(20) DEFAULT 'Undecided',
//     PRIMARY KEY(student_id)
// )";

//spl to insert students
// $sql = "INSERT INTO student(name, major) VALUES('Kate', 'Sociology'),
// 	('Claire', 'Chemistry'), ('Jack', 'Biology'), ('Mike', 'Computer Science')";

//sql to return selected data
$sql = "SELECT student_id, name, major FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>ID</th><th>Name</th><th>Major</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["student_id"]."</td><td>".$row["name"]."</td><td>".$row["major"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// if ($conn->query($sql) === TRUE) {
//     echo "Table student created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }
// echo nl2br("\n");

$conn->close();

?>
<html>
	<head></head>
	<body>
	</body>
</html>