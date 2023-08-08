<?php



$servername = "localhost";
$server_username= "root";
$pass = "";
$db="customer";

// Create connection
$conn = mysqli_connect($servername, $server_username, $pass,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$conn1 = new mysqli($servername, $server_username, $pass, $db); 


?>