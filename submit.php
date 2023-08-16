<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthcare";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$reason = $_POST['reason'];

// Insert the form data into the database
$sql = "INSERT INTO appointments (name, email, phone, date, time, reason)
        VALUES ('$name', '$email', '$phone', '$date', '$time', '$reason')";

if ($conn->query($sql) === TRUE) {
    echo "New appointment created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
