$(function(){

	$("#button").click(function(){
		
		var name = "Juan";
		var age = "19";
		
		$.ajax({
			type: "POST",
			url: "addStudent.php",
			data: {name: "Juan", age:"19"},
			success: function(data){
				alert("Added Successfully!");
			}
		});
	});
	
});
