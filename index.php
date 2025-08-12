<?php
    $currentTime = date('H:i:s');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Server Time & Form</title>
</head>
<body>
    <h1>Current Server Time: <?php echo $currentTime; ?></h1>

    <form action="handle_form.php" method="POST">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="color">Favorite Color:</label>
        <input type="color" id="color" name="color" required>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
