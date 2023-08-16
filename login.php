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

// Retrieve entered username and password
$username = $_POST["username"];
$password = $_POST["password"];

// Verify username and password against database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	// Redirect user to main page of banking website
	header("Location: registration.php");
	exit;
} else {
	echo "Invalid username or password";
}

mysqli_close($conn);
?>