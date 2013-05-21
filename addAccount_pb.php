<?php
	
	include 'dao/SystemDAO.php';

	$Firstname = $_POST['Firstname'];
	$Lastname = $_POST['Lastname'];
	$Username = $_POST['Username'];
	$Gender = $_POST['Gender'];
	$Age = $_POST['Age'];
	$Month = $_POST['Month'];
	$Date = $_POST['Date'];
	$Year = $_POST['Year'];
	$Address = $_POST['Address'];
	$Password = $_POST['Password'];
	$Cnfrm_Password = $_POST['Cnfrm_Password'];

	$action = new SystemDAO();
	$action->addAccount($Firstname, $Lastname, $Username, $Gender, $Age, $Month, $Date, $Year, $Address, $Password, $Cnfrm_Password);
?>
