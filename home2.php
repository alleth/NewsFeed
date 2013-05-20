<?php
   session_start();
   if (!isset ($_SESSION['username'])){
      header("location:errMsg.php");
      
   }else {
    	$username = $_SESSION['username'];
    	
   }
      
?>

<!DOCTYPE html>
<html>
    <head>
    <title>NewsFeed</title>
    <link rel = "shortcut icon" href = "images/newspaper.jpeg"/>

    <link rel = "stylesheet" href="css/jquery-ui.css"/>
    <link rel = "stylesheet" href="css/bootstrap.css"/>
    <link rel = "stylesheet" href = "css/style2.css"/>
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src = "js/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/style4.css"/>
    <script src="js/profile.js"></script>
    <script src="js/homepage.js"></script>
    </head>

<body>
<div id = "titleId">
	<fieldset id = "fieldhome">
		
		<strong id = "titleText">NewsFeed</strong>
		<input type = "text" name = "Search" id = "ForSearch" placeholder = " Search ">
        <button  id = "srchClick" class="btn btn-success"><i class = "icon-search"></i></button>
		
		<fieldset id = "srchResult"></fielset>
		
	</fieldset>
	
</div>
<br></br>
<br>


<hr id = "menuHome"> 


<div>
	<a class = "profileId" href = "#profileId"><?php if (isset($username)){ echo $username;}?></a>
	<a class="editPro" href = "profile.php">Edit Profile</a>
</div>


<div>
	<a href = "home2.php" style = "color:red;">
	<strong style = "cursor:pointer;
		background:-webkit-linear-gradient(top,DarkRed, red);
		background:-moz-linear-gradient(top,DarkRed, red);
		color:white;
		width:110px;
		height: 20px;
		text-align:center;
		margin: 75px 0 0 80px;"  
		id = "homeId">Home</strong></a>
</div>

<div >
		<a class = "featStyle" href = "HomeSports.php"><strong class = "divMenu" id = "sportsId">Sports</strong></a> 
</div>

<div>
		<a class = "featStyle" href = "HomeInternational.php"><strong class = "divMenu" id = "intId">International</strong></a>
</div>

<div>
		<a class = "featStyle" href = "HomeBusiness.php"><strong class = "divMenu" id = "bussId">Business</strong></a>
</div>

<div>
		<a class = "featStyle" href = "HomeHealth.php"><strong class = "divMenu" id = "healthId">Health</strong></a>
</div>

<div>
		<a class = "featStyle" href = "HomeWeather.php"><strong class = "divMenu" id = "weatherId">Weather</strong></a>
</div>

<div>
		<a class = "featStyle" href = "HomeEntertainment.php"><strong class = "divMenu" id = "EntertainmentId">Entertainment</strong></a>
</div>


	
</hr>

<hr id = "breakStyle"></hr>
<a class = "moreMenu">
	<li>
		<strong>More</strong>
	</li>
</a>
<div class = "logSlct">

	<a id = "menuLog" class = "slctMore" href = "logout.php">Logout</a>
	<a id = "othersMenu" class = "slctMore">Others</a>

</div>


			<div id = "tpicSlctor">
				<a><strong>Select Topic: </strong></a>
				<a class = "slctor" id = "sportsSlct">Sports </a><a>|</a>
				<a class = "slctor" id = "intSlct">International </a><a>|</a>
				<a class = "slctor" id = "busSlct">Business </a><a>|</a>
				<a class = "slctor" id = "healthSlct">Health </a><a>|</a>
				<a class = "slctor" id = "weatherSlct">Weather </a><a>|</a>
				<a class = "slctor" id = "entSlct">Entertainment </a>
			</div>
			
			
			<div id = "sportsTpc" class = "back_post2">
				
				<input type = "text" placeholder = " Title" name = "sportsTitle" class = "titlePost"></input>
				
				<textarea type = "text" id = "sportsPost" name = "sportsPost" class = "postStyle" placeholder = "Sports..."></textarea></br>
				<br>
				<input type = "submit" value = "POST" class = "btn btn-danger" id = "btn_sports">
				</br>
			</div>
			
			<div id = "intTpc" class = "back_post2">
				
				<input type = "text" placeholder = " Title" name = "intTitle" class = "titlePost"></input>
				
				<textarea type = "text" id = "intPost" class = "postStyle" name = "intPost" placeholder = "International..."></textarea></br>
				<br>
				<input type = "submit" value = "POST" class = "btn btn-inverse" id = "btn_international">
				</br>
			</div>
			
			<div id = "busTpc" class = "back_post2">
				<input type = "text" placeholder = " Title" name = "bussTitle" class = "titlePost"></input>
				<textarea type = "text" id = "busPost" class = "postStyle" name = "bussPost" placeholder = "Business..."></textarea></br>
				<br>
				<input type = "submit" value = "POST" class = "btn btn-info" id = "btn_business">
				</br>
			</div>
			
			<div id = "healthTpc" class = "back_post2">
				<input type = "text" placeholder = " Title" name = "healthTitle" class = "titlePost"></input>
				<textarea type = "text" id = "healthPost" class = "postStyle" name = "Post" placeholder = "Health..."></textarea></br>
				<br>
				<input type = "submit" value = "POST" class = "btn btn-success" id = "btn_health">
				</br>
			</div>
			
			
			<div id = "weatherTpc" class = "back_post2">
				<input type = "text" placeholder = " Title" name = "weatherTitle" class = "titlePost"></input>
				<textarea type = "text" id = "weatherPost" class = "postStyle" name = "Post" placeholder = "Weather..."></textarea></br>
				<br>
				<input type = "submit" value = "POST" class = "btn btn-primary" id = "btn_weather">
				</br>
			</div>
			
			<div id = "entTpc"  class = "back_post2">
				<input type = "text" placeholder = " Title" name = "entTitle" class = "titlePost"></input>
				<textarea type = "text" id = "entPost" class = "postStyle" name = "Post" placeholder = "Entertainment..."></textarea></br>
				<br>
				<input type = "submit" value = "POST" class = "btn btn-warning" id = "btn_entertainment">
				</br>
			</div>
			
			
			
	<div class = "back_post" id = "area">
			
			<textarea id = "Post" name = "Post" placeholder = "What's on your mind?..."></textarea></br>
			<br>
			<input id="btn_post" type = "submit" value = "POST" class = "btn btn-primary">
			</br>
			
	</div>

</div>
</fieldset>

<hr id = "lineBreak">

	<div id = "field"></div>

		<fieldset id = "commentPost">

	<div id = "postTitle"><a>Comment</a>
        <a class = "idBack">Back</a>
    </div>

<br>

</br>

<div id = "view_comment"></div>

</fieldset>


    <div id="profileId" >
        <div class = "forBack">
            <i class = "icon-chevron-left"></i>
            <strong><a class="idBack">Back</a></strong>
        </div>

        <table id = 'tblProfile' class="table table-hover">
            <tr>
                <th>Username</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Month</th>
                <th>Day</th>
                <th>Year</th>
                <th>Address</th>
                <th>Action</th>
            </tr>

        </table>

    </div>

</body>

</html>
