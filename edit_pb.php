<?php

	include 'dao/phonebookDAO.php';
	
	session_start();
	$Username = $_SESSION['username'];
		
	$id = $_POST['id'];

	$action = new phonebookDAO();
	$action->editContact($id,$Username);

?>
