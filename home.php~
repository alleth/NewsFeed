<?php
   session_start();
   if (!isset ($_SESSION['username'])){
      header("location:errMsg.php");
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
<title>NewsFeed</title>
<link rel = "stylesheet" href = "css/style.css"/>
<script src="js/jquery-1.8.2.min.js"></script>
<script src = "js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/homepage.js"></script>

</head>

<body>

<fieldset id = "logo3"><div><h1>NewsFeed</h1></div></fieldset>

<fieldset id = "IdForField">
<div class = "userStyle">
	<fieldset id = "userTxtStyle">
		<b ><?php if (isset($username)){ echo $username;}?></b>
		<img style = "float:right;" src = "images/arrow-down-icon2.png">
	</fieldset>
	<fieldset id = "fieldmenu">
		<a class = "fieldSlct" href = "logout.php"><strong>Sign out</strong></a>
		<hr>
		<a class = "fieldSlct"><strong>Settings</strong></a>
	</fieldset>
</div>
<input id = "forSearch" placeholder = "   Search ..."><input type = "button" value = "Search" id = "btn_search">
</fieldset>


<div class = "userList" >
<div class = "userListTitle"><b>Editor</b><a id = "remember">(the follwing name below is only their username)</a></div>
<div id = "allList"></div>
</div>

<div id = "others">
<div id = "otherTitle"><b>Others</b></div>
<br><a class = "otherList" href = "">Love Quotes</a></br>
<br><a class = "otherList" href = "">Horoscope</a></br>
<br><a class = "otherList" href = "">Jokes</a></br>
<br><a class = "otherList" href = "">Advertisement</a></br>
</div>




<div id = "cover">
<p id = "menuTitle"><b>Pages</b></p>

<div>
	<a >
		<img class = "Features" id = "sports" href = "sports.php" title = "Sports"  src = "images/basketball.jpeg"/>
	</a>
</div>

<div >
	<a >
		<img class = "Features" id = "international" title = "International"  src = "images/international.jpeg">
	</a>
</div>

<div >
	<a >
		<img class = "Features" id = "business" title = "Business" src = "images/business.jpeg"/>
	</a>
</div>

<div>
	<a>
		<img class = "Features" id = "health" title = "Health"  src = "images/health.jpeg">
	</a>
</div>

<div >
	<a >
		<img class = "Features" id = "weather" title = "Weather" src = "images/weather.jpeg">
	</a>
</div>

<div >
	<a>
		<img class = "Features" id = "featureArticle" title = "Feature Article" src = "images/featureArticle.jpeg">
	</a>
</div>

</div>

<div id = "back_post">
			
			<fieldset id = "slctMenu">
			<a>|</a>
			<a class = "menuInput">Sports</a> </a>|</a>
			<a class = "menuInput">International</a> <a>|</a>
			<a class = "menuInput">Business</a> <a>|</a>
			<a class = "menuInput">Health</a> <a>|</a>
			<a class = "menuInput">Weather</a> <a>|</a>
			<a class = "menuInput">Entertainment</a> <a>|</a>
			<a class = "menuInput">others</a> <a>|</a>
			</fieldset>
			
			<textarea id = "Post" name = "Post" placeholder = "What's on your mind?..."></textarea></br>
			<br>
			<input type = "submit" value = "POST" id = "btn_post">
			</br>
			
</div>

<hr id = "lineBreak">

<fieldset></fieldset>




</body>

</html>
