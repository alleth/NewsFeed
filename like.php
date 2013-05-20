<?php
	
	include 'dao/SystemDAO.php';
	
	session_start();
	$Username = $_SESSION['username'];

	$id = $_POST['id'];

	$action = new SystemDAO();
	$action->likePost($Username, $id);
?>
