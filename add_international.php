<?php
	
	include 'dao/SystemDAO.php';
	
	session_start();
	$username = $_SESSION['username'];

	$intPost = $_POST['intPost'];
	$intTitle = $_POST['intTitle'];

	$action = new SystemDAO();
	$action->addInternational($username, $intPost, $intTitle);
?>
