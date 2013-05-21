<?php

	$id = $_POST['id'];
	$Firstname = $_POST['Firstname'];
	$Lastname = $_POST['Lastname'];
	$Email_Address = $_POST['Email_Address'];
	$Address = $_POST['Address'];
	$Contact_Number = $_POST['Contact_Number'];
	
	include 'dao/phonebookDAO.php';

	session_start();
	$Username = $_SESSION['username'];

	$action = new phonebookDAO();
	$action->save($id, $Firstname, $Lastname, $Email_Address, $Address, $Contact_Number, $Username);

?>
