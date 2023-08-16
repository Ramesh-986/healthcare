<?php
// Connect to the database
$db = new mysqli('localhost', 'root', '', 'healthcare');

// Check for errors
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Query the database for appointments
$sql = "SELECT * FROM appointments";
$result = $db->query($sql);

// Check if any results were found
if ($result->num_rows > 0) {
    // Create an array to hold the appointment data
    $appointments = array();

    // Loop through each row and add the data to the array
    while($row = $result->fetch_assoc()) {
        $appointments[] = $row;
    }
} else {
    echo "No appointments found.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Healthcare Appointments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #5d42f5;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Healthcare Appointments</h1>
    <?php if (!empty($appointments)): ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Time</th>
            <th>Reason for Visit</th>
        </tr>
        <?php foreach ($appointments as $appointment): ?>
        <tr>
            <td><?php echo $appointment['name']; ?></td>
            <td><?php echo $appointment['email']; ?></td>
            <td><?php echo $appointment['phone']; ?></td>
            <td><?php echo $appointment['date']; ?></td>
            <td><?php echo $appointment['time']; ?></td>
            <td><?php echo $appointment['reason']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
    <p>No appointments found.</p>
    <?php endif; ?>
</body>
</html>
