<?php
   session_start();
   if (!isset ($_SESSION['username'])){
      header("location:index2.php");
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
    <title>International</title>
    <link rel = "stylesheet" href = "css/style2.css"/>
    <link rel = "stylesheet" href="css/style4.css">
    <link rel = "stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src = "js/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css" />
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
<br>
<br></br>

<hr id = "menuHome"> 


<div>
	<a class = "profileId" href = "#profileId"><?php if (isset($username)){ echo $username;}?></a>
	<a class = "editPro" href = "profile.php">Edit Profile</a>
</div>


<div>
	<a href = "home2.php" class = "featStyle">
	<strong id = "homeId" class = "divMenu">Home</strong></a>
</div>

<div >
		<a class = "featStyle" href = "HomeSports.php"><strong class = "divMenu" id = "sportsId">Sports</strong></a> 
</div>

<div>
		<a class = "featStyle" href = "HomeInternational.php"><strong 
		style = "cursor:pointer;
		background:-webkit-linear-gradient(top,DarkRed, red);
		background:-moz-linear-gradient(top,DarkRed, red);
		color:white;
		width:110px;
		height: 20px;
		text-align:center;
		margin: 140px 0 0 80px;" id = "intId">International</strong></a>
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

<a class = "moreMenu"><li><strong>More</strong></li></a>
<div class = "logSlct">
<a id = "menuLog" class = "slctMore" href = "logout.php">Logout</a>
<a id = "othersMenu" class = "slctMore">Others</a>
</div>



</body>

<body>


			
			

			
			<div  class = "back_post2" id = "back">
				
				<input type = "text" placeholder = " Title" name = "intTitle" class = "titlePost"></input>
				
				<textarea type = "text" id = "intPost" class = "postStyle" name = "intPost" placeholder = "International..."></textarea></br>
				<br>
				<input type = "submit" value = "POST" class = "btn btn-primary" id = "btn_international">
				</br>
			</div>
			


<hr id = "lineBreak">

<div class = "display">
<div id = "viewInternational"></div>
</div>


            <div id="profileId">
                <a class="idBack">Back</a>
                <table id = "tblForDisplay">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Gender</th>
                        <th>Birthday</th>
                        <th>Address</th>
                    </tr>
                </table>
            </div>


</body>

</html>
