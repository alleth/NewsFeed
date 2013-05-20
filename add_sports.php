<?php
	
	include 'dao/SystemDAO.php';
	
	session_start();
	$username = $_SESSION['username'];

	$sportsPost = $_POST['sportsPost'];
	$sportsTitle = $_POST['sportsTitle'];

	$action = new SystemDAO();
	$action->addSports($username, $sportsPost, $sportsTitle);
?>
