$(function() {

    $.ajax({
        type: "POST",
        url: "viewProfile.php",
        success: function(data){
            $("#tblProfile").append(data);

        },
        error: function(data){
            alert(data);
        }

    });


});