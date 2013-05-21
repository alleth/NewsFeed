<?php
	
	include 'dao/coverDAO.php';


    session_start();
    $Username = $_SESSION['username'];


	$action = new coverDAO();
	$action->viewSports($Username);


?>
