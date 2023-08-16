<!DOCTYPE html>
<html>
<head>
	<title>Contact Us - Online Healthcare</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f4f4f4;
		}
		
		header {
			background-color: #0077b6;
			color: #fff;
			padding: 20px;
		}
		
		h1 {
			margin: 0;
			font-size: 36px;
			text-align: center;
		}
		
		main {
			padding: 20px;
		}
		
		h2 {
			margin-top: 20px;
			font-size: 28px;
			color: #0077b6;
		}
		
		p {
			margin: 0;
			line-height: 1.5;
		}
		
		.contact-info {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			margin-top: 20px;
		}
		
		.contact-info div {
			flex-basis: calc(33.33% - 40px);
			background-color: #fff;
			padding: 30px;
			margin-bottom: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			transition: transform 0.3s, box-shadow 0.3s;
		}
		
		.contact-info div:hover {
			transform: translateY(-5px);
			box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
		}
		
		.contact-info div h3 {
			margin-top: 0;
			font-size: 24px;
			color: #0077b6;
		}
		
		.contact-info div p {
			margin-bottom: 10px;
		}
		
		form {
			margin-top: 30px;
			background-color: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}
		
		form label {
			display: block;
			font-weight: bold;
			color: #0077b6;
			margin-bottom: 5px;
		}
		
		form input[type="text"],
		form input[type="email"],
		form textarea {
			width: 100%;
			padding: 10px;
			margin-bottom: 15px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
		}
		
		form textarea {
			height: 150px;
		}
		
		form input[type="submit"] {
			background-color: #0077b6;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s;
		}
		
		form input[type="submit"]:hover {
			background-color: #005b8e;
		}
	</style>
</head>
<body>
	<header>
		<h1>Contact Us</h1>
	</header>
	
	<main>
		<h2>Our Locations</h2>
		<div class="contact-info">
			<div>
				<h3>Headquarters</h3>
				<p>123 Main St.</p>
				<p>Ramnagar, Bangalore 12345</p>
				<p>Phone: (+91) 8814567890</p>
				<p>Email: info@healthcare.com</p>
			</div>
			<div>
				<h3>West Coast Office</h3>
				<p>456 Oak St.</p>
				<p>Venkat Nagar, Gujarat 98765</p>
				<p>Phone:  8457956212</p>
				<p>Email: west@onlinehealthcare.com</p>
			</div>
			<div>
				<h3>East Coast Office</h3>
				<p>789 Kalam Street</p>
				<p>Bapuji Circle, Kolkata 54321</p>
				<p>Phone: 8412563711</p>
				<p>Email: east@onlinehealthcare.com</p>
			</div>
		</div>
		
		<h2>Contact Form</h2>
		<form>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			<label for="message">Message:</label>
			<textarea id="message" name="message" required></textarea>
			<input type="submit" value="Send">
		</form>
	</main>
</body>
</html>
