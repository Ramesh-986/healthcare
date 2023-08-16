<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include_once 'navbar.php'; ?>
    
    <div class="container">
        <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                include_once "$page.php";
            } else {
                include_once 'home.php';
            }
        ?>
    </div>
</body>
</html>
