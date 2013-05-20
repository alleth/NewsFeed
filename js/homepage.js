$(function() {

	$("#srch_result").hide();
	$("#Confirmation").hide();
	$("#fieldmenu").hide();
	$("#slctSettings").hide();
	$("#tpicSlctor").hide();
	$("#sportsTpc").hide();
	$("#intTpc").hide();
	$("#busTpc").hide();
	$("#healthTpc").hide();
	$("#weatherTpc").hide();
	$("#entTpc").hide();
	$(".logSlct").hide();
	$("#commentPost").hide();
	$("#srchResult").hide();
    $("#profileId").hide();
    $("#coverLogin").hide();
    $("#tblSignUp").hide();
    
    $("#forSignUp").click(function(){
    		$("#tblLogin").hide();
    		$("#tblSignUp").fadeIn(1000);
    
    });
    
    $("#backToLogin").click(function(){
    		$("#tblSignUp").hide();
    		$("#tblLogin").fadeIn(1000);
    });
	
	$(".moreMenu").click(function(){
		$(".logSlct").fadeIn(1000);
	});
	
	$("#userTxtStyle").click(function(){
		$("#fieldmenu").slideDown(1000);
		$("#fieldmenu").fadeOut(5000);
	});
	
	$(".idBack").click(function(){
		$("#commentPost").hide();
		$("#field").fadeIn(1000);
        $(".back_post").fadeIn(1000);
        $("#viewSports").fadeIn(1000);
        $("#back").fadeIn(1000);
        $("#profileId").hide();
        $("#viewInternational").fadeIn(1000);
        $("#viewBusiness").fadeIn(1000);
        $("#viewWeather").fadeIn(1000);
        $("#viewHealth").fadeIn(1000);
        $("#viewFeatureArticle").fadeIn(1000);
	});


    $(".profileId").click(function(){

        $("#field").hide();
        $(".back_post").hide();
        $("#lineBreak").hide();
        $("#tpicSlctor").hide();
        $("#back").hide();
        $("#viewSports").hide();
        $("#viewInternational").hide();
        $("#viewBusiness").hide();
        $("#viewWeather").hide();
        $("#viewHealth").hide();
        $("#viewFeatureArticle").hide();
        $("#sportsTpc").hide();
        $("#intTpc").hide();
        $("#busTpc").hide();
        $("#healthTpc").hide();
        $("#weatherTpc").hide();
        $("#entTpc").hide();

        $("#profileId").fadeIn(1000);



    });

	
	$.ajax({
	type:"POST",
	url:"view_list.php",
	success: function(data){
		$("#allList").append(data);
	},
	error: function(data){
		alert(data);
	}
	});
	
	
		$.ajax({
		type: "POST",
		url: "viewSports_cover.php",
		success: function(data){
			$("#field").append(data);
			$("#viewSports").append(data);
		},
		error: function(data){
			alert(data);	
		}
	});
	
	
	
	$.ajax({
		type: "POST",
		url: "viewBusiness_cover.php",
		success: function(data){
			$("#field").append(data);
			$("#viewBusiness").append(data);		
		},
		error: function(data){
			alert(data);	
		}
	});
	
	$.ajax({
		type: "POST",
		url: "viewInternational_cover.php",
		success: function(data){
			$("#field").append(data);
			$("#viewInternational").append(data);		
		},
		error: function(data){
			alert(data);	
		}
	});
	
	
	$.ajax({
		type: "POST",
		url: "viewHealth_cover.php",
		success: function(data){
			$("#field").append(data);
			$("#viewHealth").append(data);	
		},
		error: function(data){
			alert(data);	
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
			alert(data);	
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
			alert(data);	
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


    $("#titleForTool").tooltip({

        show: {effect: "slideDown", delay: 250},
        hide:{effect:"explode", delay:250},
        track:true

    });
	
	


	$("#btn_post").click(function(){
		
		var wordObj = {
					"Post":$("textarea[name='Post']").val()
					};
		
		$.ajax({
			type: "POST",
			url: "add_post.php",
			data: wordObj,
			success: function(data){
				$("#field").append(data);		
			},
			error: function(data){
				alert(data);		
			}
		});	

	});	
	
	$("#btn_sports").click(function(){
		var wordObj = {
			"sportsTitle":$("input[name = 'sportsTitle']").val(),
			"sportsPost":$("textarea[name = 'sportsPost']").val()
			};
			
		$.ajax({
			type: "POST",
			url: "add_sports.php",
			data: wordObj,
			success: function(data){
				$("#field").append(data);
				$("#viewSports").append(data);
			},
			error: function(data){
				alert(data);
			}
		});
	});
	
	
	$("#btn_international").click(function(){
		
		var wordObj = {
			"intTitle":$("input[name = 'intTitle']").val(),
			"intPost":$("textarea[name = 'intPost']").val()
		};
		
		$.ajax({
			type: "POST",
			url: "add_international.php",
			data: wordObj,
			success: function(data){
				$("#field").append(data);
				$("#viewInternational").append(data);
			},
			error: function(data){
				alert(data);
			}
		});
	});
	
	
	$("#btn_business").click(function(){
		var wordObj = {
			"bussTitle":$("input[name = 'bussTitle']").val(),
			"bussPost":$("textarea[name = 'bussPost']").val()
		};
		
		$.ajax({
			type: "POST",
			url: "add_business.php",
			data: wordObj,
			success: function(data){
				$("#field").append(data);
				$("#viewBusiness").append(data);
			},
			error: function(data){
				alert(data);
			}
		});
	});
	
	
	$("#btn_health").click(function(){
		
		var wordObj = {
			"healthTitle":$("input[name = 'healthTitle']").val(),
			"healthPost":$("textarea[name = 'healthPost']").val()
		};
		
		$.ajax({
			type: "POST",
			url: "add_health.php",
			data: wordObj,
			success: function(data){
				$("#field").append(data);
				$("#viewHealth").append(data);
			},
			error: function(data){
				alert(data);
			}
			
		});
		
	});
	
	
	$("#btn_weather").click(function(){
		
		var wordObj = {
			"weatherTitle":$("input[name = 'weatherTitle']").val(),
			"weatherPost":$("textarea[name = 'weatherPost']").val()
		};
		
		$.ajax({
			type: "POST",
			url: "add_weather.php",
			data: wordObj,
			success: function(data){
				$("#field").append(data);
				$("#viewWeather").append(data);
			},
			error: function(data){
				alert(data);
			}
		});
	});
	
	$("#btn_entertainment").click(function(){
		
		var wordObj = {
			"entPost":$("textarea[name = 'entPost']").val(),
			"entTitle":$("input[name = 'entTitle']").val()
		};
		
		$.ajax({
			type: "POST",
			url: "add_entertainment.php",
			data: wordObj,
			success: function(data){
				$("#field").append(data);
				$("#viewFeatureArticle").append(data);
			},
			error: function(data){
				alert(data);
			}
		});
		
	});
	
	
	
	$("#ForSearch").keyup(function(){
	
	
	
		var srchCond = $("#ForSearch").val();
		
		if (srchCond == ""){
			
			$("#srchResult").slideUp(500);
		
		}else{
		
		$("#srchResult").slideDown(500);
		
		var names = $("input[name='Search']").val();
			var compare = {"Firstname":names};
	
				$.ajax({
						type: "POST",
						url: "search_user.php",
						data: compare,
						success: function(data){
						$("#srchResult").html(data);		
						},
						error: function(data){
						alert(data);	
						}
				});
		
		}
		
	});
	
	
	$("#ForSearchNews").keyup(function(){
	
	
	
		var srchCond = $("#ForSearchNews").val();
		
		if (srchCond == ""){
			
			$("#newsResult").slideUp(500);
		
		}else{
		
		$("#newsResult").slideDown(500);
		
		var names = $("input[name='SearchNews']").val();
			var compare = {"Title":names};
	
				$.ajax({
						type: "POST",
						url: "search_news.php",
						data: compare,
						success: function(data){
						$("#newsResult").html(data);		
						},
						error: function(data){
						alert(data);	
						}
				});
		
		}
		
	});
	
	
	
	
	// =================== TRYING =============
	$("#btn_signUp").click(function(){
		
		$("#cnfrm_pass").dialog({
			resizable: false,
			show:{effect: "explode", duration: 1000},
			height: 250,
			width: 320,
			modal: true,
			buttons:{
				"Done": function(){
				
		var a = $("#Firstname").val();
		var b = $("#Lastname").val();
		var c = $("#Username").val();
		var d = $("#Gender").val();
		var e = $("#Age").val();
		var f = $("#Month").val();
		var g = $("#Year").val();
		var h = $("#Address").val();
		var i = $("#Password").val();
		var j = $("#Cnfrm_Password").val();
		
		if (a=="" || b =="" || c=="" || d=="" || e=="" || f=="" || g=="" || h=="" || i=="" || j==""){

			alert ("Oops! You need to filled up all the fields.");
			
			
			
		}else if (i!=j){
		
				alert ("Cannot proceed. Error in confirmation.");
				
		
		}else {
		
		
		var  wordObj = {
			"Firstname":$("input[name='Firstname']").val(),
			"Lastname":$("input[name='Lastname']").val(),
			"Username":$("input[name='Username']").val(),
			"Gender":$("select[name='Gender']").val(),
			"Age":$("input[name='Age']").val(),
			"Month":$("select[name='Month']").val(),
			"Date":$("select[name='Date']").val(),
			"Year":$("select[name='Year']").val(),
			"Address":$("input[name='Address']").val(),
			"Password":$("input[name='Password']").val(),
			"Cnfrm_Password":$("input[name='Cnfrm_Password']").val()
		};
		
		$.ajax({
			type: "POST",
			url: "addAccount_pb.php",
			data: wordObj,
			success: function(data){
				alert("Congratulations! You are registered successfully.");
			},
			error: function(data){
				alert("an error occur!");
			}
		

		});
		}
				
				

				},

				Cancel: function(){

				$(this).dialog("close");
				}	

			}
		});
	});



	
	
	$("#Post").click(function(){

		

		$("#tpicSlctor").fadeIn(1000);
	});
	

	$("#sportsSlct").click(function(){

		$("#area").hide();

		$("#sportsTpc").fadeIn(1000);
		$("#intTpc").hide();

		$("#busTpc").hide();
		$("#healthTpc").hide();

		$("#weatherTpc").hide();
		$("#entTpc").hide();

		
	});

	

	$("#intSlct").click(function(){

		$("#intTpc").fadeIn(1000);
		$("#area").hide();
		$("#sportsTpc").hide();
		$("#busTpc").hide();
		$("#healthTpc").hide();
		$("#weatherTpc").hide();
		$("#entTpc").hide();
		
	});
	
	$("#busSlct").click(function(){
		$("#busTpc").fadeIn(1000);
		$("#area").hide();
		$("#sportsTpc").hide();
		$("#intTpc").hide();
		$("#healthTpc").hide();
		$("#weatherTpc").hide();
		$("#entTpc").hide();
		
	});
	
	$("#healthSlct").click(function(){
		$("#healthTpc").fadeIn(1000);
		$("#area").hide();
		$("#sportsTpc").hide();
		$("#busTpc").hide();
		$("#intTpc").hide();
		$("#weatherTpc").hide();
		$("#entTpc").hide();
	});
	
	$("#weatherSlct").click(function(){
		$("#weatherTpc").fadeIn(1000);
		$("#area").hide();
		$("#sportsTpc").hide();
		$("#busTpc").hide();
		$("#intTpc").hide();
		$("#entTpc").hide();
		$("#healthTpc").hide();
	});

	$("#entSlct").click(function(){
		$("#entTpc").fadeIn(1000);
		$("#area").hide();
		$("#sportsTpc").hide();
		$("#busTpc").hide();
		$("#intTpc").hide();
		$("#weatherTpc").hide();
		$("#healthTpc").hide();
	});



    $.ajax({
        type:"POST",
        url:"viewLike.php",
        success: function(data){
            $("#countLike").html(data);
        },
        error: function(data){
            alert(data);
        }
    });

});


    function viewComment(id){



        $("#commentPost").fadeIn(1000);

        $(".div_comment").fadeIn(1000);
        $(".view_comment").fadeIn(1000);

        var wordObj = {"id":id};

        $.ajax({
            type: "POST",
            url: "viewComment_cover.php",
            data: wordObj,
            success: function(data){
                $("#view_comment_"+id).html(data);
            },
            error: function(data){

            }
        });

    }

		

	function likePost(Like){
					
		$(".Like").hide();
		$(".unLike").fadeIn(1000);
        $("#countLike").fadeIn(1000);

        var wordObj = {
            "id":Like
        };

				$.ajax({
					type: "POST",
					url: "like.php",
					data: wordObj,
					success: function(data){
                        $("#countLike").append(data);
					},
					error: function(data){
						alert(data);
					}
				});



		}
		
		
		function UnLikePost(unlike){
					
					$(".unLike").hide();
					$(".Like").fadeIn(1000);
		
					var wordObj = {"id":unLike};

				$.ajax({
					type: "POST",
					url: "unLike.php",
					data: wordObj,
					success: function(data){
						$(document.getElementById(unLike));
						alert("You Unlike this");		
					},
					error: function(data){
						alert(data);		
					}
				});
		
		
		
		}
		
		
		
		
		
		
	function addComment(id){
				
		var wordObj = {
				"Comment":$("#new_comment_"+id).val(),
				"id":id
				};
				
				
		$.ajax({
			type: "POST",
			url: "add_comment.php",
			data: wordObj,
			success: function(data){
				$("#view_comment_"+wordObj.id).append(data);
				
			},
			error: function(data){
				alert(data);		
			}
		});
	
	}


    function readLink(id){

        $("#newsResult").slideUp(500);

        var wordObj = {
            "id":id
        };

        $("#readLink").scrollspy(

            $.ajax({
                type: "POST",
                url: "readLink.php",
                data: wordObj,
                success: function(data){
                    $("#readLink").append(data);

                },
                error: function(data){
                    alert(data);
                }
            })

    );



    }