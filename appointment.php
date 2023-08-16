<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthcare";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Get input data from form
$name = mysqli_real_escape_string($conn, $_POST['name']);

$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$time = mysqli_real_escape_string($conn, $_POST['time']);

$doctor = mysqli_real_escape_string($conn, $_POST['doctor']);

// Insert data into MySQL database
$sql = "INSERT INTO appointments (name,age, email, phone, date, time,Problem, doctor)
		VALUES ('$name', '$email', '$phone', '$date', '$time','$doctor')";
if (mysqli_query($conn, $sql)) {
	echo "Appointment registered successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
