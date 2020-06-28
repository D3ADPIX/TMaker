<?php
if (isset($_POST['LogInButton'])) {
    require 'DBHandler/DBController.php';
    //echo '<p> Hello: ' . $_ENV['DATABASE_HOST'] . '</p><br>';
    session_start();

    $id  = '';
    $password = '';
    $stmt = null;
    $connection = new DBController();
    if (!isset($_POST['username'], $_POST['password'])) {
        die('Please fill both the username and password field!');
    }
    if ($connection->checkLogIn($_POST['username'])) {
        session_regenerate_id();
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['id'] = $id;
        header("Location: ../index.php");
    } else {
        header("Location: ../index.php?Auth=failedTEST");
        exit();
    }
} else {
    header("Location: ../LogIn/logInPage.html");
}