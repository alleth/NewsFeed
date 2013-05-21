<?php
	
	include 'dao/SystemDAO.php';
	
	session_start();
	$username = $_SESSION['username'];

	$Post = $_POST['Post'];

	$action = new SystemDAO();
	$action->addPost($Post, $username);
?>
