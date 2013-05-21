<?php
	
	include 'dao/SystemDAO.php';
	
	session_start();
	$Username = $_SESSION['username'];

	$Message = $_POST['id'];

	$action = new SystemDAO();
	$action->UnLikePost($Message, $Username);
?>
