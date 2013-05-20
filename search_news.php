<?php
	include 'dao/SystemDAO.php';
	
	$searchNews = $_POST['Title'];
	
	$action = new SystemDAO();
	$action->searchNews($searchNews);
?>
