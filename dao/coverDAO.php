<?php
	include 'BaseDAO.php';

    class coverDAO extends BaseDAO{

			function viewSports($Username){
			$this->openConn();
			$stmt = $this->dbh->prepare("SELECT * FROM Post WHERE Topic = 'Sports' order by id desc");
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			
			while($row = $stmt->fetch()){
			
			
				
				echo 
				"<fieldset class = 'borderClass' id = ".$row[0].">
				<img src = 'images/arrow-down-icon2.png' style = 'float:right;' id = 'img_menu'></img>
				<a href = 'profile.php' class = 'same'>
				<strong style = 'font-size:12px;margin:0 0 0 10px'>".$row[1]."</strong>
				</a>
				<fieldset class = 'borderClass2'><br><a><strong style = 'color:red;'>".$row[3]."</strong></a><br><br>"
				.$row[2].
				"</br></br></fieldset>
				<a style = 'font-size:11px;color:#448999;' class = 'unLike' title = 'Stop liking this item' onclick = 'UnLikePost(".$row[0].")'>Unlike</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Like' title = 'Like this item' onclick = 'likePost(".$row[0].")'>Like</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Comment' title = 'Leave a comment' onclick = 'viewComment(".$row[0].")'>Comment</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Share' title = 'Send this to friend or post it on your timeline.' onclick = 'share(".$row[0].")'>Share</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<img src = 'images/Thumb-up-icon.png'><div id = 'countLike'></div>
				<img src = 'images/bubble-chat-icon.png'>
				<div class = 'divTime'>".$row[5]."</div>
				
				<div class = 'view_comment' id = 'view_comment_".$row[0]."'></div>
				</br>
				<div class = 'div_comment'>
				</hr>
				<input class = 'input_comment' id = 'new_comment_".$row[0]."' name = 'Comment' type = 'textbox' placeholder = 'Write a comment...' title = 'Write a comment...'>
				<button id = 'btn_comment'  onclick = 'addComment(".$row[0].")'>Done</button>
				</div>


				<div id = 'tryModal' class = 'modal hide fade' tabindex = '-1' role = 'dialog' aria-labelledby='myModalLabel' aria-hidden = 'true'>
				    <div>
				        <div class = 'modal-header'>
				        <button type='button'' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
				        <strong><a>".$Username."</a></strong>
				        </div>
				        <div id = 'divModal'>
				            <strong><p>Share to:</p></strong>
				            <input type = 'text' placeholder = 'Find friends...' id = 'srchToShare' onclick = 'nptShare(".$row[0].")'><img id = 'iconId' src = 'images/users.png'>
				            <div id = 'srchFriends'>

				            </div>
				        </div>
				        <div class = 'modal-footer'>
                            <button class = 'btn' data-dismiss = 'modal' area-hidden='true'>Cancel</button>
                            <button class = 'btn btn-primary'>Share</button>
				        </div>
				    </div>
				</div>






				
				<script>
				$('.div_comment').hide();
				$('.unLike').hide();
				</script>
				

				</fieldset>
				<br />";
				
			}
			
			
		}
		
		
		
		
		function viewBusiness($Username){
			$this->openConn();
			$stmt = $this->dbh->prepare("SELECT * FROM Post WHERE Topic = 'Business' order by id desc");
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			
			while($row = $stmt->fetch()){
			
			
				
				echo 
				"<fieldset class = 'borderClass'>
				<img src = 'images/arrow-down-icon2.png' style = 'float:right;' id = 'img_menu'></img>
				<a href = 'profile.php' class = 'same'>
				<strong style = 'font-size:12px;margin: 0 0 0 10px'>".$row[1]."</strong>
				</a>
				<fieldset class = 'borderClass2'><br><a><strong style = 'color:#1E90FF;'>".$row[3]."</strong></a><br><br>"
				.$row[2].
				"</br></br></fieldset>
				<a style = 'font-size:11px;color:#448999;' class = 'unLike' title = 'Stop liking this item' onclick = 'UnLikePost(".$row[0].")'>Unlike</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Like' title = 'Like this item' onclick = 'likePost(".$row[0].")'>Like</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Comment' title = 'Leave a comment' onclick = 'viewComment(".$row[0].")'>Comment</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Share' title = 'Send this to friend or post it on your timeline.' onclick = 'share(".$row[0].")'>Share</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<img src = 'images/Thumb-up-icon.png'><div id = 'countLike'></div>
				<img src = 'images/bubble-chat-icon.png'>
				<div class = 'divTime'>".$row[5]."</div>

				<div class = 'view_comment' id = 'view_comment_".$row[0]."'></div>
				</br>
				<div class = 'div_comment'>
				</hr>
				<input class = 'input_comment' id = 'new_comment_".$row[0]."' name = 'Comment' type = 'textbox' placeholder = 'Write a comment...' title = 'Write a comment...'>
				<button id = 'btn_comment'  onclick = 'addComment(".$row[0].")'>Done</button>
				</div>




				<div id = 'tryModal' class = 'modal hide fade' tabindex = '-1' role = 'dialog' aria-labelledby='myModalLabel' aria-hidden = 'true'>
				    <div>
				        <div class = 'modal-header'>
				        <button type='button'' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
				        <strong><a>".$Username."</a></strong>
				        </div>
				        <div id = 'divModal'>
				            <strong><p>Share to:</p></strong>
				            <input type = 'text' placeholder = 'Find friends...' id = 'srchToShare' onclick = 'nptShare(".$row[0].")'><img id = 'iconId' src = 'images/users.png'>
				            <div id = 'srchFriends'>

				            </div>
				        </div>
				        <div class = 'modal-footer'>
                            <button class = 'btn' data-dismiss = 'modal' area-hidden='true'>Cancel</button>
                            <button class = 'btn btn-primary'>Share</button>
				        </div>
				    </div>
				</div>





				<script>
				$('.div_comment').hide();
				$('.unLike').hide();
				</script>


				</fieldset>
				<br />";
				
			}
			
			
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			function viewInternational($Username){
			$this->openConn();
			$stmt = $this->dbh->prepare("SELECT * FROM Post WHERE Topic = 'International' order by id desc");
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			
			while($row = $stmt->fetch()){
			
			
				
				echo 
				"<fieldset class = 'borderClass'>
				<img src = 'images/arrow-down-icon2.png' style = 'float:right;' id = 'img_menu'></img>
				<a href = 'profile.php' class = 'same'>
				<strong style = 'font-size:12px;'margin: 0 0 0 10px>".$row[1]."</strong>
				</a>
				<fieldset class = 'borderClass2'><br><a><strong style = 'color:#800000;'>".$row[3]."</strong></a><br><br>"
				.$row[2].
				"</br></br></fieldset>
				<a style = 'font-size:11px;color:#448999;' class = 'unLike' title = 'Stop liking this item' onclick = 'UnLikePost(".$row[0].")'>Unlike</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Like' title = 'Like this item' onclick = 'likePost(".$row[0].")'>Like</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Comment' title = 'Leave a comment' onclick = 'viewComment(".$row[0].")'>Comment</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Share' title = 'Send this to friend or post it on your timeline.' onclick = 'share(".$row[0].")'>Share</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<img src = 'images/Thumb-up-icon.png'><div id = 'countLike'></div>
				<img src = 'images/bubble-chat-icon.png'>
				<div class = 'divTime'>".$row[5]."</div>
				
				<div class = 'view_comment' id = 'view_comment_".$row[0]."'></div>
				</br>
				<div class = 'div_comment'>
				</hr>
				<input class = 'input_comment' id = 'new_comment_".$row[0]."' name = 'Comment' type = 'textbox' placeholder = 'Write a comment...' title = 'Write a comment...'>
				<button id = 'btn_comment'  onclick = 'addComment(".$row[0].")'>Done</button>
				</div>
				

				<div id = 'tryModal' class = 'modal hide fade' tabindex = '-1' role = 'dialog' aria-labelledby='myModalLabel' aria-hidden = 'true'>
				    <div>
				        <div class = 'modal-header'>
				        <button type='button'' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
				        <strong><a>".$Username."</a></strong>
				        </div>
				        <div id = 'divModal'>
				            <strong><p>Share to:</p></strong>
				            <input type = 'text' placeholder = 'Find friends...' id = 'srchToShare' onclick = 'nptShare(".$row[0].")'><img id = 'iconId' src = 'images/users.png'>
				            <div id = 'srchFriends'>

				            </div>
				        </div>
				        <div class = 'modal-footer'>
                            <button class = 'btn' data-dismiss = 'modal' area-hidden='true'>Cancel</button>
                            <button class = 'btn btn-primary'>Share</button>
				        </div>
				    </div>
				</div>










				<script>
				$('.div_comment').hide();
				$('.unLike').hide();
				</script>
				

				</fieldset>
				<br />";
				
			}
			
			
		}
		
		
		
		function viewHealth(){
			$this->openConn();
			$stmt = $this->dbh->prepare("SELECT * FROM Post WHERE Topic = 'Health' order by id desc");
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			
			while($row = $stmt->fetch()){
			
			
				
				echo 
				"<fieldset class = 'borderClass'>
				<img src = 'images/arrow-down-icon2.png' style = 'float:right;' id = 'img_menu'></img>
				<a href = 'profile.php' class = 'same'>
				<strong style = 'font-size:12px;' margin: 0 0 0 10px>".$row[1]."</strong>
				</a>
				<fieldset class = 'borderClass2'><br><a><strong style = 'color:#9ACD32;'>".$row[3]."</strong></a><br><br>"
				.$row[2].
				"</br></br></fieldset>
				<a style = 'font-size:11px;color:#448999;' class = 'unLike' title = 'Stop liking this item' onclick = 'UnLikePost(".$row[0].")'>Unlike</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Like' title = 'Like this item' onclick = 'likePost(".$row[0].")'>Like</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Comment' title = 'Leave a comment' onclick = 'viewComment(".$row[0].")'>Comment</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Share' title = 'Send this to friend or post it on your timeline.'>Share</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<img src = 'images/Thumb-up-icon.png'><div id = 'countLike'></div>
				<img src = 'images/bubble-chat-icon.png'>
				<div class = 'divTime'>".$row[5]."</div>
				
				<div class = 'view_comment' id = 'view_comment_".$row[0]."'></div>
				</br>
				<div class = 'div_comment'>
				</hr>
				<input class = 'input_comment' name = 'Comment' type = 'textbox' placeholder = 'Write a comment...' title = 'Write a comment...'>
				<button id = 'btn_comment'  onclick = 'addComment(".$row[0].")'>Done</button>
				</div>
				
				
				<script>
				$('.div_comment').hide();
				$('.unLike').hide();
				</script>
				

				</fieldset>
				<br />";
				
			}
			
			
		}
		
		
		function viewWeather(){
		
			$this->openConn();
			$stmt = $this->dbh->prepare("SELECT * FROM Post WHERE Topic = 'Weather' order by id desc");
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			
			while($row = $stmt->fetch()){
			
			
				
				echo 
				"<fieldset class = 'borderClass'>
				<img src = 'images/arrow-down-icon2.png' style = 'float:right;' id = 'img_menu'></img>
				<a href = 'profile.php' class = 'same'>
				<strong style = 'font-size:12px;'margin:0 0 0 10px;>".$row[1]."</strong>
				</a>
				<fieldset class = 'borderClass2'><br><a><strong style = 'color:#4169E1;'>".$row[3]."</strong></a><br><br>"
				.$row[2].
				"</br></br></fieldset>
				<a style = 'font-size:11px;color:#448999;' class = 'unLike' title = 'Stop liking this item' onclick = 'UnLikePost(".$row[0].")'>Unlike</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Like' title = 'Like this item' onclick = 'likePost(".$row[0].")'>Like</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Comment' title = 'Leave a comment' onclick = 'viewComment(".$row[0 ].")'>Comment</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Share' title = 'Send this to friend or post it on your timeline.'>Share</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<img src = 'images/Thumb-up-icon.png'><div id = 'countLike'></div>
				<img src = 'images/bubble-chat-icon.png'>
				<div class = 'divTime'>".$row[5]."</div>
				
				<div class = 'view_comment' id = 'view_comment_".$row[0]."'></div>
				</br>
				<div class = 'div_comment'>
				</hr>
				<input class = 'input_comment' id = 'new_comment_".$row[0]."' name = 'Comment' type = 'textbox' placeholder = 'Write a comment...' title = 'Write a comment...'>
				<button id = 'btn_comment'  onclick = 'addComment(".$row[0].")'>Done</button>
				</div>
				
				
				<script>
				$('.div_comment').hide();
				$('.unLike').hide();
				</script>
				

				</fieldset>
				<br />";
				
			}
			
			
		}
		
		
		function viewFeatureArticle(){
			$this->openConn();
			$stmt = $this->dbh->prepare("SELECT * FROM Post WHERE Topic = 'Entertainment' order by id desc");
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			
			while($row = $stmt->fetch()){
			
			
				
				echo 
				"<fieldset class = 'borderClass'>
				<img src = 'images/arrow-down-icon2.png' style = 'float:right;' id = 'img_menu'></img>
				<a href = 'profile.php' class = 'same'>
				<strong style = 'font-size:12px;' margin: 0 0 0 10px>".$row[1]."</strong>
				</a>
				<fieldset class = 'borderClass2'><br><a><strong style = 'color:#C71585;'>".$row[3]."</strong></a><br><br>"
				.$row[2].
				"</br></br></fieldset>
				<a style = 'font-size:11px;color:#448999;' class = 'unLike' title = 'Stop liking this item' onclick = 'UnLikePost(".$row[0].")'>Unlike</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Like' title = 'Like this item' onclick = 'likePost(".$row[0].")'>Like</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Comment' title = 'Leave a comment' onclick = 'viewComment(".$row[0].")'>Comment</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<a style = 'font-size:11px;color:#448999;' class = 'Share' title = 'Send this to friend or post it on your timeline.'>Share</a>
				<a style = 'font-size:11px;color:#448999;'>-</a>
				<img src = 'images/Thumb-up-icon.png'><a id = 'countLike'></a>
				<img src = 'images/bubble-chat-icon.png'>
				<div class = 'divTime'>".$row[5]."</div>
				
				<div class = 'view_comment' id = 'view_comment_".$row[0]."'></div>
				</br>
				<div class = 'div_comment'>
				</hr>
				<input class = 'input_comment' id = 'new_comment_".$row[0]."' name = 'Comment' type = 'textbox' placeholder = 'Write a comment...' title = 'Write a comment...'>
				<button id = 'btn_comment'  onclick = 'addComment(".$row[0].")'>Done</button>
				</div>
				
				
				<script>
				$('.div_comment').hide();
				$('.unLike').hide();
				$('#countLike').hide();
				</script>
				

				</fieldset>
				<br />";
				
			}
			
			
		}
		
		
		
		function viewComment($id){
			
			$this->openConn();
			
			$stmt = $this->dbh->prepare("SELECT * FROM comment WHERE Post_id = ?");
			$stmt->bindParam(1, $id);
			$stmt->execute();
			$id = $this->dbh->lastInsertId();
			
			$this->closeConn();
			while($row = $stmt->fetch()){
				
				echo "<fieldset class = 'fieldId'><a class = 'same' href = 'profile.php'><strong style = 'font-size:10px;'>".$row[1]."</a></strong> ".$row[2]."</fieldset>";
 				 
			}

			
		}
		
		
		
		
	}
?>
