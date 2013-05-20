<?php
	
	include 'dao/SystemDAO.php';
	
	session_start();
	$username = $_SESSION['username'];

	$entPost = $_POST['entPost'];
	$entTitle = $_POST['entTitle'];
	
	$action = new SystemDAO();
	$action->addEntertainment($username, $entPost, $entTitle);
?>
