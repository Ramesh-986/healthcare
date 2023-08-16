<!DOCTYPE html>
<html>
<head>
  <title>View Doctor Profile - MR Online Healthcare</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* basic styles for the page */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* styling for the header */
    header {
      background-color: #4842f5;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    /* styling for the main content area */
    main {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* styling for the doctor profile */
    .doctor-profile {
      display: flex;
      flex-direction: column;
      background-color: #f2f2f2;
      border-radius: 10px;
      padding: 20px;
      margin: 20px 0;
    }

    .doctor-profile img {
      width: 30%;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .doctor-profile h2 {
      margin-top: 0;
      font-size: 28px;
      font-weight: bold;
      color: #333;
    }

    .doctor-profile p {
      margin-top: 0;
      font-size: 16px;
      line-height: 1.5;
      color: #666;
    }

    .doctor-profile ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .doctor-profile ul li {
      margin-bottom: 10px;
    }

    .doctor-profile ul li span {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <!-- header section -->
  <header>
    <h1>MR Online Healthcare</h1>
    <nav>
      <ul>
        <li><a href="homepage.html">Home</a></li>
        <li><a href="learnmore.php">Our Doctors</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
    </nav>
  </header>

  <!-- main content area -->
  <main>
    <div class="doctor-profile">
     <img src="https://thumbnails.yayimages.com/1600/1/7f7/17f724e.jpg" alt="Doctor 2"width="100" height="200">
      <h2>Dr. Surendra reddy</h2>
      <p>Specialization: Pediatrician</p>
      <ul>
        <li><span>Education:</span> AIMS, NEW DELHI</li>
        <li><span>Residency:</span> raj Clinic</li>
        <li><span>Board Certification:</span> All India Board of Internal Medicine - a board-certified pediatrician </li>
        <li><span>Experience:</span> 18 years</li>
        <li><span>Phone:</span> 0825522462</li>
        <li><span>Email:</span> surendra.reddy@mrhealthcare.com</li>
      </ul>
    </div>
  </main>
</body>
</html>
