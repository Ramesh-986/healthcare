<!DOCTYPE html>
<html>
<head>
    <title>Contact Data - Online Healthcare</title>
    <!-- Your CSS styles and other head elements here -->
</head>
<body>
    <h2>Contact Data</h2>
    <?php
    $contactData = file_get_contents("contact_data.txt");
    echo "<pre>$contactData</pre>";
    ?>
</body>
</html>
