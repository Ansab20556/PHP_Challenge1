<?php
session_start();
$name = $_SESSION['name'] ?? 'Guest';
$color = $_SESSION['color'] ?? 'black';

session_unset();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Result Page</title>
</head>
<body>
    <h1>Hello, <?php echo $name; ?>!</h1>
    <p style="color: <?php echo $color; ?>;">Your favorite color is <?php echo $color; ?>.</p>
</body>
</html>
