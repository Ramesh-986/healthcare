<!DOCTYPE html>
<html>
<head>
	<title>Services - Online Healthcare</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-image: url('1.jpg');
			background-color: white; /* Used if the image is unavailable */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover; /* Resize the background image to cover the entire container */
		}

		header {
			background-color: #e03fbd;
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
			margin-top: 0;
			font-size: 24px;
			text-align: center;
		}

		.services {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			margin-top: 20px;
		}

		.service {
			flex-basis: calc(33.33% - 40px);
			background-color: #f8f8f8;
			padding: 20px;
			margin: 20px;
			text-align: center;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			border-radius: 10px;
			transition: transform 0.3s, box-shadow 0.3s;
		}

		.service:hover {
			transform: translateY(-5px);
			box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
		}

		.service h3 {
			margin-top: 0;
			font-size: 20px;
			margin-bottom: 10px;
			color: #333;
		}

		.service p {
			margin: 0;
			line-height: 1.5;
			color: #666;
		}

		@media (max-width: 768px) {
			.service {
				flex-basis: calc(50% - 40px);
			}
		}

		@media (max-width: 480px) {
			.service {
				flex-basis: calc(100% - 40px);
			}
		}
	</style>
</head>

<body>
	<header>
		<h1>Services</h1>
	</header>
	<main>
		<div class="services">
			<div class="service">
				<h3>Telemedicine</h3>
				<p>Speak with a healthcare provider via video chat from the comfort of your own home.</p>
			</div>
			<div class="service">
				<h3>Prescription Refills</h3>
				<p>Refill your prescriptions quickly and easily through our online portal.</p>
			</div>
			<div class="service">
				<h3>Lab Testing</h3>
				<p>Get lab tests done at a nearby lab, with results delivered directly to your account.</p>
			</div>
			<div class="service">
				<h3>Chronic Care Management</h3>
				<p>We provide personalized care plans for patients with chronic conditions to help manage their health.</p>
			</div>
			<div class="service">
				<h3>Behavioral Health</h3>
				<p>Our mental health professionals are available to provide counseling and therapy services.</p>
			</div>
			<div class="service">
				<h3>Wellness Programs</h3>
				<p>We offer programs to help patients maintain and improve their overall health and wellbeing.</p>
			</div>
		</div>
	</main>
</body>
</html>
