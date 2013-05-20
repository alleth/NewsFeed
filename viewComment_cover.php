<?php
	
	include 'dao/coverDAO.php';

	$id = $_POST['id'];

	$action = new coverDAO();
	$action->viewComment($id);

	
	
	
?>
