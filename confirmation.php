<!DOCTYPE html>
<html>
  <head>
    <title>Doctor Appointment Registration</title>
<style>
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

form {
  max-width: 600px;
  margin: 40px auto;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
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
}

textarea {
  height: 100px;
}

button[type="submit"] {
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

button[type="submit"]:hover {
  background-color: #ccc;
  color: #333;
}

</style>
  </head>
  <body>
    <header>
      <h1>Doctor Appointment Registration</h1>
    </header>
    <main>
      <form id="appointment-form" action="connect.php" method="POST">
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
        <button type="submit" id="submit-btn">Submit</button>
      </form>
    </main>
    <script >
const form = document.querySelector('#appointment-form');
const submitBtn = document.querySelector('#submit-btn');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  
  const name = document.querySelector('#name').value;
  const email = document.querySelector('#email').value;
  const phone = document.querySelector('#phone').value;
const date = document.querySelector('#date').value;
const time = document.querySelector('#time').value;
const reason = document.querySelector('#reason').value;

// Create a new object to store the form data
const formData = {
name,
email,
phone,
date,
time,
reason
};

// Store the form data in local storage
localStorage.setItem('formData', JSON.stringify(formData));

window.location.href = 'connect.php';
});

submitBtn.addEventListener('click', () => {
const name = document.querySelector('#name').value;
const email = document.querySelector('#email').value;
const phone = document.querySelector('#phone').value;
const date = document.querySelector('#date').value;
const time = document.querySelector('#time').value;
const reason = document.querySelector('#reason').value;

// Check if all form fields have been filled out
if (!name || !email || !phone || !date || !time || !reason) {
alert('Please fill out all form fields');
return;
}
});

</script>
  </body>
</html>
