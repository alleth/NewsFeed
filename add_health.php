<?php
	
	include 'dao/SystemDAO.php';
	
	session_start();
	$username = $_SESSION['username'];

	
	$healthPost = $_POST['healthPost'];
	$healthTitle = $_POST['healthTitle'];

	$action = new SystemDAO();
	$action->addHealth($username, $healthPost, $healthTitle);
?>
