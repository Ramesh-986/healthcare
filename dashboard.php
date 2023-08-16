<!DOCTYPE html>
<html>
<head>
	<title>Patient Login for Appointment</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
		}

		.login-container {
			max-width: 400px;
			margin: 100px auto;
			text-align: center;
			background-color: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
		}

		h1 {
			font-size: 28px;
			margin-bottom: 20px;
			color: #a83252;
		}

		label {
			display: block;
			margin-bottom: 8px;
			text-align: left;
			color: #666;
		}

		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 15px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 12px 20px;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.2s ease;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}

	</style>
</head>
<body>
	<div class="login-container">
		<h1>Patient Login for Appointment</h1>
		<form method="post" action="login.php" onsubmit="return validateLogin()">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
			<input type="submit" value="Login">
		</form>
	</div>
	<script src="script.js"></script>
</body>
</html>
