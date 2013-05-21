<?php
	
	include 'dao/SystemDAO.php';
	
	session_start();
	
	$Username = $_SESSION['username'];

	$action = new SystemDAO();
	$action->viewMessage($Username);


?>
