$(function(){
	$("#cnfrm_pass").hide();
	$("#srch_result").hide();
	$("#div_chat").hide();
	$("#Confirmation").hide();
	$("#div_send").hide();
	$("#indexLogin").hide();
	$("#errmsg").hide();
	
	
	$.ajax({
	type:"POST",
	url:"view_list.php",
	success: function(data){
		$("#allList").append(data);
	},
	error: function(data){}
	});
	
	
	$.ajax({
		type: "POST",
		url: "viewPost_cover.php",
		success: function(data){
			$("#field").append(data);		
		},
		error: function(data){

		}
	});
	
	
	
	$.ajax({
		type: "POST",
		url: "viewSports_cover.php",
		success: function(data){
			$("#field2").append(data);
			$("#viewSports").append(data);
		},
		error: function(data){

		}
	});
	
	
	
	$.ajax({
		type: "POST",
		url: "viewBusiness_cover.php",
		success: function(data){
			$("#field2").append(data);
			$("#viewBusiness").append(data);		
		},
		error: function(data){

		}
	});
	
	$.ajax({
		type: "POST",
		url: "viewInternational_cover.php",
		success: function(data){
			$("#field2").append(data);
			$("#viewInternational").append(data);		
		},
		error: function(data){

		}
	});
	
	
	$.ajax({
		type: "POST",
		url: "viewHealth_cover.php",
		success: function(data){
			$("#field").append(data);
			$("#viewHelth").append(data);	
		},
		error: function(data){

		}
	});
	
	
	$.ajax({
		type: "POST",
		url: "viewWeather_cover.php",
		success: function(data){
			$("#field").append(data);
			$("#viewWeather").append(data);		
		},
		error: function(data){

		}
	});
	
	$.ajax({
		type: "POST",
		url: "viewFeatureArticle_cover.php",
		success: function(data){
			$("#field").append(data);
			$("#viewFeatureArticle").append(data);		
		},
		error: function(data){

		}
	});
	
	
	
	
	$( "#sports" ).tooltip({
		show: {effect: "slideDown", delay: 250},
		hide:{effect:"explode", delay:250},
		track:true
		
	});
	
	$( "#business" ).tooltip({
		show: {effect: "slideDown", delay: 250},
		hide:{effect:"explode", delay:250},
		track:true
	});
	
	$( "#international" ).tooltip({
		show: {effect: "slideDown", delay: 250},
		hide:{effect:"explode", delay:250},
		track:true
	});
	
	
	$( "#health" ).tooltip({
		show: {effect: "slideDown", delay: 250},
		hide:{effect:"explode", delay:250},
		track:true
	});
	
	$( "#weather" ).tooltip({
		show: {effect: "slideDown", delay: 250},
		hide:{effect:"explode", delay:250},
		track:true
	});
	
	$( "#featureArticle" ).tooltip({
		show: {effect: "slideDown", delay: 250},
		hide:{effect:"explode", delay:250},
		track:true
	});
	


});


	function viewComment(id){
		
		$(".div_comment").fadeIn(2000);
		$(".view_comment").fadeIn(1000);
			
			var wordObj = {"id":id};
		
					$.ajax({
						type: "POST",
						url: "view_comment.php",
						data: wordObj,
						success: function(data){
							$(".view_comment").html(data);		
						},
						error: function(data){

						}
					});
		
	}

	function addComment(Comment){
		
		
			$("#indexLogin").dialog({
				resizable:false,
				show:{effect: "puff", duration: "1000"},
				hide:{effect: "explode", duration: "1000"},
				modal: true,
				buttons:{
				
					Cancel: function(){
					$(this).dialog("close");
					}
				}
				
			});
		
		
	}
	
	function likePost(){
		
			$("#indexLogin").dialog({
				resizable:false,
				show:{effect: "puff", duration: "1000"},
				hide:{effect: "explode", duration: "1000"},
				modal: true,
				buttons:{
				
					Cancel: function(){
						$(this).dialog("close");
					}
				}
				
			});
		
	}

