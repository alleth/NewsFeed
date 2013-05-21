<?php
	
	include 'dao/SystemDAO2.php';

	$Comment = $_POST['Comment'];

	$action = new SystemDAO2();
	$action->addComment($Comment);
?>
