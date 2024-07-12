<?php 
session_start();

if ($_SESSION['username'] !== "david" && $_SESSION['password'] !== "groscon") {
	header("Location: http://localhost:8888/php/views/connection.php");
	exit();
}


    file_put_contents('../articles.txt', '');

	
