<!DOCTYPE html>
<html>
<head>
	<title>Appointment Registration Form</title>
	<style>
.container {
	max-width: 600px;
	margin: 0 auto;
	padding: 20px;
}

h1 {
	text-align: center;
}

form {
	display: grid;
	grid-template-columns: 1fr 1fr;
	grid-gap: 10px;
}

label {
	font-weight: bold;
}

input, select {
	padding: 10px;
	border-radius: 5px;
	border: none;
}

input[type="submit"] {
	background-color: #008CBA;
	color: #fff;
	font-size: 16px;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #006F8C;
}

</style>
</head>
<body>
	<div class="container">
		<h1>Appointment Registration Form</h1>
		<form action="appointment.php" method="POST">
			<label for="name">Name:</label>
			<input type="text" name="name" required>

			<label for="email">Email:</label>
			<input type="email" name="email" required>

			<label for="phone">Phone:</label>
			<input type="tel" name="phone" required>

			<label for="date">Date:</label>
			<input type="date" name="date" required>

			<label for="time">Time:</label>
			<input type="time" name="time" required>
                  
			<label for="Problem">Problem</label>
			<input type="text" name="Problem" required>

			<label for="doctor">Doctor:</label>
			<select name="doctor" required>
				<option value="">--Select--</option>
				<option value="Dr. John">Dr. John</option>
				<option value="Dr. Jane">Dr. Jane</option>
				<option value="Dr. James">Dr. James</option>
			</select>

			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>
