<?php

	include 'BaseDAO.php';
	
	class SystemDAO extends BaseDAO{
		

		function addSports($Username, $sportsPost, $sportsTitle){
			
			$topic = 'Sports';
			
			$this->openConn();
			
			$stmt = $this->dbh->prepare("INSERT INTO Post (Username, Info, Title, Topic, Time) VALUES (?,?,?,?,now())");
			$stmt->bindParam(1, $Username);
			$stmt->bindParam(2, $sportsPost);
			$stmt->bindParam(3, $sportsTitle);
			$stmt->bindParam(4, $topic);

            $stmt->execute();
            $id = $this->dbh->lastInsertId();

			$this->closeConn();
			
			echo 
			"<fieldset class = 'borderClass'>
				<img src = 'images/arrow-down-icon2.png' style = 'float:right;' id = 'img_menu'></img>
				<a href = 'profile.php' class = 'same'>
				<strong style = 'font-size:12px;'>".$Username."</strong>
				</a>
				<fieldset class = 'borderClass2'><a><strong style = 'color:red;'>".$sportsTitle."</strong></a><br><br>"
				.$sportsPost.
				"</br></br></fieldset>
				<a style = 'font-size:11px;color:#448999;' class = 'unLike' title = 'Stop liking this item' onclick = 'UnLikePost(".$id.")'>Unlike</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Like' title = 'Like this item' onclick = 'likePost(".$id.")'>Like</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Comment' title = 'Leave a comment' onclick = 'viewComment(".$id.")'>Comment</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Share' title = 'Send this to friend or post it on your timeline.'>Share</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<img src = 'images/Thumb-up-icon.png'>
				<img src = 'images/bubble-chat-icon.png'>
				
				<div class = 'view_comment'></div>
				</br>
				<div class = 'div_comment'>
				</hr>
				<input id = 'input_comment' name = 'Comment' type = 'textbox' placeholder = 'Write a comment...' title = 'Write a comment...'>
				<button id = 'btn_comment'  onclick = 'addComment(".$id.")'>Done</button>
				</div>
				
				
				<script>
				$('.div_comment').hide();
				$('.unLike').hide();
				</script>
				

				</fieldset>
				<br />
				<hr></hr>";
			
		}
		
		
		function addInternational($username, $intPost, $intTitle){
		
			$topic = 'International';
		
			$this->openConn();
			
			$stmt = $this->dbh->prepare("INSERT INTO Post (Username, Info, Title, Topic, Time) VALUES (?,?,?,?,now())");
			$stmt->bindParam(1, $username);
			$stmt->bindParam(2, $intPost);
			$stmt->bindParam(3, $intTitle);
			$stmt->bindParam(4, $topic);
			
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			
			$this->closeConn();
			
			echo 
			"<fieldset class = 'borderClass'>
				<img src = 'images/arrow-down-icon2.png' style = 'float:right;' id = 'img_menu'></img>
				<a href = 'profile.php' class = 'same'>
				<strong style = 'font-size:12px;'>".$username."</strong>
				</a>
				<fieldset class = 'borderClass2'><a><strong style = 'color:#800000;'>".$intTitle."</strong></a><br><br>"
				.$intPost.
				"</br></br></fieldset>
				<a style = 'font-size:11px;color:#448999;' class = 'unLike' title = 'Stop liking this item' onclick = 'UnLikePost(".$id.")'>Unlike</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Like' title = 'Like this item' onclick = 'likePost(".$id.")'>Like</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Comment' title = 'Leave a comment' onclick = 'viewComment(".$id.")'>Comment</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Share' title = 'Send this to friend or post it on your timeline.'>Share</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<img src = 'images/Thumb-up-icon.png'>
				<img src = 'images/bubble-chat-icon.png'>
				
				<div class = 'view_comment'></div>
				</br>
				<div class = 'div_comment'>
				</hr>
				<input id = 'input_comment' name = 'Comment' type = 'textbox' placeholder = 'Write a comment...' title = 'Write a comment...'>
				<button id = 'btn_comment'  onclick = 'addComment(".$id.")'>Done</button>
				</div>
				
				<script>
				$('.div_comment').hide();
				$('.unLike').hide();
				</script>
				

				</fieldset>
				<br />
				<hr></hr>";
		
		
		}
		
		
		
		function addBusiness($Username, $bussPost, $bussTitle){
			
			$topic = 'Business';
			
			$this->openConn();
			
			$stmt = $this->dbh->prepare("INSERT INTO Post (Username, Info, Title, Topic, Time) VALUES (?,?,?,?,now())");
			$stmt->bindParam(1, $Username);
			$stmt->bindParam(2, $bussPost);
			$stmt->bindParam(3, $bussTitle);
			$stmt->bindParam(4, $topic);
			
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			
			echo 
			"<fieldset class = 'borderClass'>
				<img src = 'images/arrow-down-icon2.png' style = 'float:right;' id = 'img_menu'></img>
				<a href = 'profile.php' class = 'same'>
				<strong style = 'font-size:12px;'>".$Username."</strong>
				</a>
				<fieldset class = 'borderClass2'><a><strong style = 'color:#1E90FF;'>".$bussTitle."</strong></a><br><br>"
				.$bussPost.
				"</br></br></fieldset>
				<a style = 'font-size:11px;color:#448999;' class = 'unLike' title = 'Stop liking this item' onclick = 'UnLikePost(".$id.")'>Unlike</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Like' title = 'Like this item' onclick = 'likePost(".$id.")'>Like</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Comment' title = 'Leave a comment' onclick = 'viewComment(".$id.")'>Comment</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Share' title = 'Send this to friend or post it on your timeline.'>Share</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<img src = 'images/Thumb-up-icon.png'>
				<img src = 'images/bubble-chat-icon.png'>
				
				
				<div class = 'view_comment'></div>
				</br>
				<div class = 'div_comment'>
				</hr>
				<input id = 'input_comment' name = 'Comment' type = 'textbox' placeholder = 'Write a comment...' title = 'Write a comment...'>
				<button id = 'btn_comment'  onclick = 'addComment(".$id.")'>Done</button>
				</div>
				
				<script>
				$('.div_comment').hide();
				$('.unLike').hide();
				</script>
				

				</fieldset>
				<br />
				<hr></hr>";
			
			
		}
		
		
		function addHealth($Username, $healthPost, $healthTitle){
		
			$topic = 'Health';
				
			$this->openConn();
			
			$stmt = $this->dbh->prepare("INSERT INTO Post (Username, Info, Title, Topic, Time) VALUES (?,?,?,?,now())");
			$stmt->bindParam(1, $Username);
			$stmt->bindParam(2, $healthPost);
			$stmt->bindParam(3, $healthTitle);
			$stmt->bindParam(4, $topic);
			
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			
			echo 
			"<fieldset class = 'borderClass'>
				<img src = 'images/arrow-down-icon2.png' style = 'float:right;' id = 'img_menu'></img>
				<a href = 'profile.php' class = 'same'>
				<strong style = 'font-size:12px;'>".$Username."</strong>
				</a>
				<fieldset class = 'borderClass2'><a><strong style = 'color:#9ACD32;'>".$healthTitle."</strong></a><br><br>"
				.$healthPost.
				"</br></br></fieldset>
				<a style = 'font-size:11px;color:#448999;' class = 'unLike' title = 'Stop liking this item' onclick = 'UnLikePost(".$id.")'>Unlike</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Like' title = 'Like this item' onclick = 'likePost(".$id.")'>Like</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Comment' title = 'Leave a comment' onclick = 'viewComment(".$id.")'>Comment</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Share' title = 'Send this to friend or post it on your timeline.'>Share</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<img src = 'images/Thumb-up-icon.png'>
				<img src = 'images/bubble-chat-icon.png'>
				
				<div class = 'view_comment'></div>
				</br>
				<div class = 'div_comment'>
				</hr>
				<input id = 'input_comment' name = 'Comment' type = 'textbox' placeholder = 'Write a comment...' title = 'Write a comment...'>
				<button id = 'btn_comment'  onclick = 'addComment(".$id.")'>Done</button>
				</div>
				
				
				<script>
				$('.div_comment').hide();
				$('.unLike').hide();
				</script>
				

				</fieldset>
				<br />
				<hr></hr>";
			
		}
		
		
		function addWeather($Username, $weatherPost, $weatherTitle){
		
			$topic = 'Weather';
			
			$this->openConn();
			
			$stmt = $this->dbh->prepare("INSERT INTO Post (Username, Info, Title, Topic, Time) VALUES (?,?,?,?,now())");
			$stmt->bindParam(1, $Username);
			$stmt->bindParam(2, $weatherPost);
			$stmt->bindParam(3, $weatherTitle);
			$stmt->bindParam(4, $topic);
			
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			
			echo 
			"<fieldset class = 'borderClass'>
				<img src = 'images/arrow-down-icon2.png' style = 'float:right;' id = 'img_menu'></img>
				<a href = 'profile.php' class = 'same'>
				<strong style = 'font-size:12px;'>".$Username."</strong>
				</a>
				<fieldset class = 'borderClass2'><a><strong style = 'color:#4169E1;'>".$weatherTitle."</strong></a><br><br>"
				.$weatherPost.
				"</br></br></fieldset>
				<a style = 'font-size:11px;color:#448999;' class = 'unLike' title = 'Stop liking this item' onclick = 'UnLikePost(".$id.")'>Unlike</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Like' title = 'Like this item' onclick = 'likePost(".$id.")'>Like</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Comment' title = 'Leave a comment' onclick = 'viewComment(".$id.")'>Comment</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Share' title = 'Send this to friend or post it on your timeline.'>Share</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<img src = 'images/Thumb-up-icon.png'>
				<img src = 'images/bubble-chat-icon.png'>
				
				<div class = 'view_comment'></div>
				</br>
				<div class = 'div_comment'>
				</hr>
				<input id = 'input_comment' name = 'Comment' type = 'textbox' placeholder = 'Write a comment...' title = 'Write a comment...'>
				<button id = 'btn_comment'  onclick = 'addComment(".$id.")'>Done</button>
				</div>
				
				
				<script>
				$('.div_comment').hide();
				$('.unLike').hide();
				</script>
				

				</fieldset>
				<br />
				<hr></hr>";
		
		}
		
		
		function addEntertainment($Username, $entPost, $entTitle){
		
			$topic = 'Entertainment';
		
			$this->openConn();
			
			$stmt = $this->dbh->prepare("INSERT INTO Post (Username, Info, Title, Topic, Time) VALUES (?,?,?,?, now())");
			$stmt->bindParam(1, $Username);
			$stmt->bindParam(2, $entPost);
			$stmt->bindParam(3, $entTitle);
			$stmt->bindParam(4, $topic);
			
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			
			echo 
			"<fieldset class = 'borderClass'>
				<img src = 'images/arrow-down-icon2.png' style = 'float:right;' id = 'img_menu'></img>
				<a href = 'profile.php' class = 'same'>
				<strong style = 'font-size:12px;'>".$Username."</strong>
				</a>
				<fieldset class = 'borderClass2'><a><strong style = 'color:#C71585;>".$entTitle."</strong></a><br><br>"
				.$entPost.
				"</br></br></fieldset>
				<a style = 'font-size:11px;color:#448999;' class = 'unLike' title = 'Stop liking this item' onclick = 'UnLikePost(".$id.")'>Unlike</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Like' title = 'Like this item' onclick = 'likePost(".$id.")'>Like</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Comment' title = 'Leave a comment' onclick = 'viewComment(".$id.")'>Comment</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Share' title = 'Send this to friend or post it on your timeline.'>Share</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<img src = 'images/Thumb-up-icon.png'>
				<img src = 'images/bubble-chat-icon.png'>
				
				<div class = 'view_comment'></div>
				</br>
				<div class = 'div_comment'>
				</hr>
				<input id = 'input_comment' name = 'Comment' type = 'textbox' placeholder = 'Write a comment...' title = 'Write a comment...'>
				<button id = 'btn_comment'  onclick = 'addComment(".$id.")'>Done</button>
				</div>
				
				
				<script>
				$('.div_comment').hide();
				$('.unLike').hide();
				</script>
				

				</fieldset>
				<br />
				<hr></hr>";
			
		}
		
		
		
		
		function addComment($Username, $Comment, $id){

			$this->openConn();
	
			$stmt = $this->dbh->prepare("INSERT INTO comment (Username, Message, Post_id, Time) VALUES (?,?,?,now())");
			$stmt->bindParam(1, $Username);
			$stmt->bindParam(2, $Comment);
			$stmt->bindParam(3, $id);
			
			$stmt->execute();

			 
			$this->closeConn();
			
			echo "<fieldset class = 'fieldId'><strong style = 'font-size:10px;'>".$Username."</strong> ".$Comment."</fieldset>";
		
		}



        function viewComment($id){

            $this->openConn();

            $stmt = $this->dbh->prepare("SELECT * FROM comment WHERE Post_id = ?");
            $stmt->bindParam(1, $id);
            $stmt->execute();


            $this->closeConn();

            while($row = $stmt->fetch()){

                echo "<fieldset class = 'fieldId'><a class = 'same' href = 'profile.php'><strong style = 'font-size:10px;'>".$row[1]."</a></strong> ".$row[2]."</fieldset>";

            }


        }


        function viewLike(){

            $this->openConn();

            $stmt = $this->dbh->prepare("SELECT * FROM Likes");
            $stmt->execute();

            $this->closeConn();

            while($row = $stmt->fetch()){
                echo "<div>".$row[0]."</div>";
            }

        }
		
		
		
		
		function likePost($id, $Username){
			
			$this->openConn();
			
			$stmt = $this->dbh->prepare("INSERT INTO Likes (Username, Post_id) VALUES (?,?)");
            $stmt->bindParam(1, $id);
			$stmt->bindParam(2, $Username);
			$stmt->execute();

			$this->closeConn();
			
		
		}
		
		
		
		function UnLikePost($Message, $Username){
			
			$this->openConn();
			
			$stmt = $this->dbh->prepare("INSERT INTO Notification(Message) VALUES (?)");
			$stmt->bindParam(1, $Message);
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			
		
		}
		
		
		
		

		
		function addAccount($Firstname, $Lastname, $Username, $Gender, $Age, $Month, $Date, $Year, $Address, $Password, $Cnfrm_Password){
		
		   $this->openConn();
		   
		   $stmt = $this->dbh->prepare("INSERT INTO List_of_Account (Firstname, Lastname, Username, Gender, Age, Month, Date, Year, Address, Password, Cnfrm_Password) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
		   $stmt->bindParam(1, $Firstname);
		   $stmt->bindParam(2, $Lastname);
		   $stmt->bindParam(3, $Username);
		   $stmt->bindParam(4, $Gender);
		   $stmt->bindParam(5, $Age);
		   $stmt->bindParam(6, $Month);
		   $stmt->bindParam(7, $Date);
		   $stmt->bindParam(8, $Year);
		   $stmt->bindParam(9, $Address);
		   $stmt->bindParam(10, $Password);
		   $stmt->bindParam(11, $Cnfrm_Password);
		   $stmt->execute();
		   
		   $this->closeConn();
		  
		   
		}
		
		
		
		
		
		
		
		
		
		function viewList(){
		
			$this->openConn();
			$stmt = $this->dbh->prepare("SELECT * FROM List_of_Account");
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			
			while ($row = $stmt->fetch()){
			
				echo "<br><div ><b><a class = 'otherList' style = 'font-size:13px;' href = 'profile.php'>".$row[3]."</a></b></div>";
			
			}
			
		
		}

		
		
		
		
		function searchUser($Username, $search){
			
			$this->openConn();
			
			$stmt = $this->dbh->prepare("Select * From List_of_Account Where Firstname Like  '%".$search."%'");
			$stmt->bindParam(1, $search);
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			
				while($row = $stmt->fetch()){
			
			
					echo "<a href='profile.php'><fieldset style = 'color:#C7C777;'>".$row[1]."<a href = 'profile.php'> ".$row[2]."</a></fieldset></a>";
	 			}
			
		}
		
		
		function searchNews($searchNews){
			
			$this->openConn();
			
			$stmt = $this->dbh->prepare("SELECT * FROM Post WHERE Info Like '".$searchNews."%'");
			$stmt->bindParam(1, $searchNews);
            $stmt->execute();

            $this->closeConn();

            while($row = $stmt->fetch()){


                echo "<div id = 'resultTitle'>Title: <a id = 'titleForTool' title = 'Read this link.' onclick = 'readLink(".$row[0].")'>".$row[3]."</a><p id = 'editorName'>Editor: ".$row[1]."</p></div>";
            }

		
		}
		
		
		function readLink($id){

            $this->openConn();

            $stmt = $this->dbh->prepare("SELECT * FROM Post WHERE id = ?");
            $stmt->bindParam(1, $id);
            $stmt->execute();

            $this->closeConn();

            while($row = $stmt->fetch()){

                echo "<div>"."$row[2]"."</div>";

            }

        }
		
		
		
		
		
	}
?>
