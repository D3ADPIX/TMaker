<?php

include 'DBHandler/DBController.php';
session_start();
$pass = $_POST["password"];
$email = $_POST["email"];
$db = new DBController();
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $db->addUser($_POST["username"], $pass, $email);
	$_SESSION['loggedin'] = true;
	$_SESSION['name'] = $_POST["username"];
    header("Location: ../prefrences.php");
} else {
    header("Location: ../register.php?Reg=NotComplete");
}
