<?php
	include 'DBHandler/DBController.php';
	session_start();
	if (!isset($_SESSION['loggedin']) or !isset($_SERVER['HTTP_REFERER'])) {
		header("Location: ../index.php?issueWtihPreSave=true");
	}
	$db = new DBController();
	$name = $_SESSION['username'];
	$id = $db->getID($name);
	
	
	//echo "<p>Name: " . $name . "\t ID: " . $id . " </p>"
	$db->setPref((int)$id, $_POST["categories"], $_POST["colour"], $_POST["size"]);
	header("Location: index.php");

?>