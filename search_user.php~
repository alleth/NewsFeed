<?php
	include 'dao/SystemDAO.php';
	
	session_start();
	$Username = $_SESSION['username'];
	
	$search = $_POST['Firstname'];
	
	$action = new SystemDAO();
	$action->searchUser($Username, $search);
?>
