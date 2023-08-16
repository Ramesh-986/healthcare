<?php
session_start();
$error = '';

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is empty";
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Database connection
        $conn = mysqli_connect("localhost", "root", "", "healthcare");

        // SQL query to fetch information of registerd users and finds user match.
        $query = "SELECT * FROM doctors WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);

        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['login_user'] = $username;
            header("location: patientinformation.php"); // Redirecting to another page
        } else {
            $error = "Username or Password is invalid";
        }
        mysqli_close($conn); // Closing connection
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Doctor Login</title>
        <style>
            body {
                font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-image: url('b5.jpg');
			background-color: white; /* Used if the image is unavailable */
			background-position: center;
			/* background-repeat: no-repeat; */
			background-size: cover;
            }

            body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

            .container {
                margin: 0 auto;
                max-width: 500px;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                /* background-color: #f2f2f2; */
                background-color: #f542cb;
            }
            input[type=text], input[type=password] {
                width: 100%;
                padding: 10px;
                margin: 5px 0 15px 0;
                border: none;
                background-color: #fff;
                border-radius: 5px;
            }
            button[type=submit] {
                background-color: #333;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                text-decoration: none;
                display: inline-block;
                font-size: 18px;
                margin-top: 20px;
                cursor: pointer;
            }
            button[type=submit]:hover {
                background-color: #74992e;
                color: #333;
            }
            .error {
                color: red;
                font-size: 16px;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Doctor Login</h2>
            <form method="post">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter Username">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter Password">
                <button type="submit" name="submit">Login</button>
                <div class="error"><?php echo $error; ?></div>
            </form>
        </div>
    </body>
</html>
