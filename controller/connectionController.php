<?php 

require_once('../config/config.php');


function logUser() {
	session_start();
	$_SESSION['username'] = $_POST['username']; 
}

function redirectToAdmin() {
	header("Location: http://localhost:8888/php/views/adminCreateArticle.php");
}