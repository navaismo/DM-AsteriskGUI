$('#savetem').click(function(){
	$.ajax({
        	type: 'POST',
                url: 'helpers/echo.php',
                data: { val: $('#code').val() },
                success: function(data){
                if ( data == 0 ){
                    alert('Cannot Save Empty Data');
                }else{
                   	window.top.location.reload();
                       alert('Template Saved');
                }
            }
        });
});


$("#send").click(function(){//begin click
	$("#frame").html("");
        $("#frame").html( "Here is the preview of your code:<hr>" + $("#code").val() );
});//end click


$('#savemail').click(function(){
	$.ajax({
        type: 'POST',
        url: 'helpers/mailset.php',
        data: {
             	from: $('#from').val(),
                fromname: $('#fromname').val(),
                host: $('#host').val(),
                username: $('#username').val(),
                pwd: $('#password').val(),
              	port: $('#port').val(),
                subject: $('#subject').val()
               },
         success: function(data){
	         if ( data == 0 ){
                         alert('All Data Required');
                 }else{
                      	window.top.location.reload();
                        alert('Mail Settings Saved');
                 }
        }
       });
});



$("#showCode").click(function() {
	if($(this).is(":checked")){
        	$("#labelshhtml").text("Hide HTML Code");
                $.ajax({
                	type: "GET",
                        url: "helpers/showhtml.php",
                        success: function(data) {

		$("#showhtmlvmt").html(data);
                        }
                });
       }else{
              	$("#labelshhtml").text(" Show HTML Code");
		$("#showhtmlvmt").html("");

       }

});

