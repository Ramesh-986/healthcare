<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "healthcare"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create table
$sql = "CREATE TABLE appointments (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
phone VARCHAR(20) NOT NULL,
date DATE NOT NULL,
time TIME NOT NULL,
reason VARCHAR(500) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table appointments created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
