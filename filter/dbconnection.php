<?php
function OpenCon(){
$dbhost = "localhost";
$dbuser = "online";
$dbpass = "Cyberpatriot1!";
$db = "PT_Alumni";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>