<?php
	
	include 'dao/SystemDAO.php';
	
	session_start();
	$Username = $_SESSION['username'];
	
	$Comment = $_POST['Comment'];
    $id = $_POST['id'];
	
	$action = new SystemDAO();
	$action->addComment($Username, $Comment, $id);
?>
