<?php
session_start();
if (isset($_SESSION['name'])) 
{
    $name = $_SESSION['name'];
} else 
{
    $name = 'Guest';
}

if (isset($_SESSION['color'])) 
{
    $color = $_SESSION['color'];
} else 
{
    $color = 'black';
}

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
