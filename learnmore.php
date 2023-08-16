<!DOCTYPE html>
<html>
<head>
  <title>MR Online Healthcare - Our Doctors</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* basic styles for the page */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* styling for the header */
    header {
      background-color: #f5da42;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
 nav {
            background-color: #e03fbd;
            text-align: center;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav li {
            display: inline-block;
            margin: 0;
        }

        nav a {
            display: block;
            padding: 15px 20px;
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color:#4257f5;
            color: #333;
        }




    /* styling for the main content area */
    main {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* styling for the doctor cards */
    .doctor-card {
      display: flex;
      flex-direction: column;
      background-color: #f2f2f2;
      border-radius: 10px;
      padding: 20px;
      margin: 20px 0;
    }

    .doctor-card img {
      width: 30%;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .doctor-card h2 {
      margin-top: 0;
      font-size: 28px;
      font-weight: bold;
      color: #333;
    }

    .doctor-card p {
      margin-top: 0;
      font-size: 16px;
      line-height: 1.5;
      color: #666;
    }

    .doctor-card a {
      color: #333;
      font-weight: bold;
      text-decoration: none;
      margin-top: 10px;
    }

    .doctor-card a:hover {
      text-decoration: underline;
    }

    footer {
      background-color: #4260f5; 
      padding: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
  <!-- header section -->
  <header>
    <h1>Venkata Ramesh Online Healthcare</h1>
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
    <h2>Our Doctors</h2>
    <div class="doctor-card">
      <img src="https://th.bing.com/th/id/OIP.RxhQ2nMqf7hwsx884qzCpAHaE8?pid=ImgDet&rs=1"alt="Doctor 1" width="100" height="200">
      <h2>Dr. John Smith</h2>
      <p>Specialization: Cardiology</p>
      <p>Dr. John Smith is a highly experienced cardiologist with over 20 years of experience in diagnosing and treating heart-related conditions. He received his medical degree from the University of California, Los Angeles and completed his residency in cardiology at the Mayo Clinic.</p>
      <a href="doctor1profile.php">View Profile</a>
    </div>

    <div class="doctor-card">
      <img src="https://thumbnails.yayimages.com/1600/1/7f7/17f724e.jpg" alt="Doctor 2"width="100" height="200">
      <h2>Dr. Surendra reddy</h2>
      <p>Specialization: Pediatrics</p>
      <p>Dr.Surendra reddy is a board-certified pediatrician with a passion for helping children and families. He received his medical degree from AIMS,NEW DELHI and completed his residency in pediatrics at the Children's Hospital of Los Angeles.</p>
      <a href="doctor2profile.php">View Profile</a>
    </div>

 
    <div class="doctor-card">
      <img src="https://visage-aesthetics.com/wp-content/uploads/2016/04/shutterstock-indian-doctor-.jpg" alt="doctor 3"width="100" height="200">
      <h2>Dr.Priyanka</h2>
      <p>Specialization: Orthopedics</p>
      <p>Dr.Priyanka is an expert in orthopedic medicine, with a focus on joint replacements and sports-related injuries. she received his medical degree from the University of Chicago and completed her residency at the Hospital for Special Surgery in New York City.</p>
      <a href="doctor3profile.php">View Profile</a>
    </div>

    <div class="doctor-card">
      <img src="doctor-1.jpg" "width="100" height="200">
      <!-- "https://thumbs.dreamstime.com/z/smiling-medical-doctor-23239260.jpg"width="100" height="200"> -->
      <h2>Dr. Sarah Lee</h2>
      <p>Specialization: Dermatology</p>
      <p>Dr. Sarah Lee is a board-certified dermatologist with a passion for helping patients achieve healthy, glowing skin. She received her medical degree from the University of California, San Francisco and completed her residency in dermatology at the New York University School of Medicine.</p>
      <a href="doctor4profile.php">View Profile</a>
    </div>

    <div class="doctor-card">
      <img src="https://www.pngitem.com/pimgs/m/194-1943739_indian-doctor-hd-png-download.png" height="200">
      <h2>Dr. David </h2>
      <p>Specialization: Neurology</p>
      <p>Dr. David  is a highly skilled neurologist with expertise in diagnosing and treating a wide range of neurological conditions. He received his medical degree from Harvard Medical School and completed his residency in neurology at the Johns Hopkins Hospital.</p>
      <a href="doctor5profile.php">View Profile</a>
    </div>

    <div class="doctor-card">
      <img src="https://i.pinimg.com/originals/7e/91/b7/7e91b721691322422919eec7dc039618.jpg" alt="Doctor 6"width="100" height="200">
      <h2>Dr. Maria Rodriguez</h2>
      <p>Specialization: Obstetrics & Gynecology</p>
      <p>Dr. Maria Rodriguez is a board-certified OB-GYN with over 15 years of experience providing comprehensive care for women at all stages of life. She received her medical degree from the University of Texas Southwestern Medical School and completed her residency in OB-GYN at the Parkland Memorial Hospital.</p>
      <a href="doctor6profile.php">View Profile</a>
    </div>
  </main>

  <!-- footer section -->
  <footer>
    <p>&copy; 2023 Venkata Ramesh Online Healthcare. All rights reserved.</p>
  </footer>

</body>
</html>