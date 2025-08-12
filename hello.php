<?php
    $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Guest';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello Page</title>
</head>
<body>
    <h1>Hello, <?php echo $name; ?>!</h1>
</body>
</html>
