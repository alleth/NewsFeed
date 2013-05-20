<?php
   session_start();
   if (!isset ($_SESSION['username'])){
      header("location:index.php");
      ?>
      <script>alert("Wrong username or password!");</script>
      <?php
   }
    else {
    	$username = $_SESSION['username'];
    	
    }
      
?>

<!DOCTYPE html>
<html>
<head>
<title>Messages</title>
<link rel = "stylesheet" href = "css/style.css"/>
<script src="js/jquery-1.8.2.min.js"></script>
<script src = "js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/homepage.js"></script>
</head>
<body id = "home_bdy">


	<div id = "logo2">
	<fieldset class = "logo">
		<h1>Findfriends</h1>
	</fieldset>
	
	<div id = "menu">
	
	<table id = "home_tbl" style = "border:30px;">
		<tr>
			<br>
			<a class = "same" href = "profile.php" ><strong><?php if (isset($username)){ echo $username;}?></strong></a>
			</br>
		</tr>
		<tr>
			<br>
			<a class = "same" href = "home.php" title = "This a home." id = "home">Home</a>
			</br>
		</tr>
		<tr>
			<br>
			<a class = "same" id = "msg" title = "This is for chat.">Chat</a>
			</br>
		</tr>
		<tr>
			<br>
			<a class = "same" id = "msges" href = "Messages.php" title = "This is for messaging."><strong style = "color:#C7C777;">Messages</strong></a>
			</br>
		</tr>
		<tr>
			<br>
			<a class = "same" >News</a>
			</br>
		</tr>
		<tr>
			<br>
			<a class = "same" >Notification</a>
			</br>
		</tr>
		<tr>
			<br>
			<a class = "same" href = "logout.php" >Logout</a>
			</br>
		</tr>
	</table>
	
	
	</div>
	
	</div>
	
	
	
	
	
	<div id = "srch_back" />
	<input type = "textbox" id = "search_nput" placeholder = "   Search friends..." title = "Search"><input id = "btn_srch" type = "submit" value = "Search"></input></input>
	</div>
	
	<br />

	
	<fieldset id = "view_messages">
	
	
	</fieldset>



<div id = "srch_result" title = "Search Result">
</div>


<div id = "div_chat" title = "Chat">
<input type = "text" id = "chat" name = "chat" placeholder = "Your message here..."></input>
</div>

<div id = "Confirmation" title = "Delete?"></div>

<div id = "div_send" title = "Send to:">
	<div id = "div_list"></div>
	<div id = "send_style">
		<input type = "text" id = "forSending" name = "Send" placeholder = "Select friends"></input>
	</div>
</div>


</body>
</html>
