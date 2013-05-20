<?php
	
	include 'dao/SystemDAO.php';
	
	session_start();
	$username = $_SESSION['username'];

	$bussPost = $_POST['bussPost'];
	$bussTitle = $_POST['bussTitle'];

	$action = new SystemDAO();
	$action->addBusiness($username, $bussPost, $bussTitle);
?>
