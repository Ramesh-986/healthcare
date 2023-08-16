<!DOCTYPE html>
<html>
<head>
    <title>Doctor Appointment Registration</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background-color: #0077b6;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 40px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }




        .form-group {
            margin-bottom: 20px;
display: flex;
            justify-content: space-between;
            align-items: center;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="time"],
        textarea {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #f2f2f2;
            font-size: 16px;
            margin-top: 5px;
            color: #333;
        }

        textarea {
            height: 100px;
        }

        button[type="submit"] {
            background-color: #0077b6;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #005b8e;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Doctor Appointment Registration</h1>
    </header>
    <main>
        <form id="appointment-form" action="submit.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="reason">Reason for Visit:</label>
                <textarea id="reason" name="reason" rows="5" required></textarea>
            </div>
<a href="homepage.html">Back</a><br>
            <button type="submit" id="submit-btn">Submit</button>
        </form>
    </main>
</body>
</html>
