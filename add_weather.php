<?php
	
	include 'dao/SystemDAO.php';
	
	session_start();
	$username = $_SESSION['username'];

	$weatherPost = $_POST['weatherPost'];
	$weatherTitle = $_POST['weatherTitle'];

	$action = new SystemDAO();
	$action->addWeather($username, $weatherPost, $weatherTitle);
?>
