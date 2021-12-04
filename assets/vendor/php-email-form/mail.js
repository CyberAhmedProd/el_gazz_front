$(document).ready(function(){
    $("#sendmailform").submit(function(e){    
    e.preventDefault();
    $.post("forms/sendmail.php" , $( this ).serializeArray(),function(r){
        alert("done")
    })
    })
    });