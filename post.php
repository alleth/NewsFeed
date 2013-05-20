<?php
	
	include 'dao/SystemDAO.php';
	
	session_start();
	$Username = $_SESSION['username'];

	$Post = $_POST['Post'];

	$action = new SystemDAO();
	$action->viewPost($Post);
?>
