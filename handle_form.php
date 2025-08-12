<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $name = htmlspecialchars($_POST['name']);
        $color = htmlspecialchars($_POST['color']);

        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['color'] = $color;

        header("Location: result.php", true, 303);
        exit();
    } else {
        header("Location: index.php");
        exit();
    }
