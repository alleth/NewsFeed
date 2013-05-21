<?php
	
	include 'dao/SystemDAO.php';
	
	session_start();
	$Username = $_SESSION['username'];
	
	$id = $_POST['id'];
	$Messages = $_POST['Messages'];
	
	$action = new SystemDAO();
	$action->chatMe($Messages, $Username, $id);
?>
