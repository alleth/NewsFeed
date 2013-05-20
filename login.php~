<?php
   ob_start();
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $db_name = "dazo_System";
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass)or die("Cannot connect!");
   mysql_select_db("$db_name")or die("cannot select DB");
      
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      $username = stripslashes($username);
      $password = stripslashes($password);
      $username = mysql_real_escape_string($username);
      $password = mysql_real_escape_string($password);
     
      $sql = "Select * From List_of_Account Where username = '$username' and password = '$password'";
      
      $result = mysql_query($sql);
      
      $count = mysql_num_rows($result);
      
      if($count==1){
      
      session_register("username");
      session_register("password");
      header("Location:home2.php");

      }
      else{
      session_start();
	   if (!isset ($_SESSION['username'])){
		header("location:errMsg.php");
	   }
     
     }
     
   ob_end_flush();   
?>
