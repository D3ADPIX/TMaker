<?php
	session_start();
	if (!isset($_SESSION['loggedin']) or !isset($_SERVER['HTTP_REFERER'])) {
		header("Location: ../index.php?Error=True");
	}
?>