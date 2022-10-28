$(document).ready(function(){  
      $('#btnSave').click(function(evt){  
		var first_name = $('#first_name').val();
		var last_name = $('#last_name').val();
		var phone_number = $('#phone_number').val();
		var email = $('#email').val();
		var password = $('#password').val();
		$('#btnSave').prop("disabled", true);
		  
	if(first_name !="" && last_name!="" && phone_number!="" && email !="" && password!=""){
    // Stop the button from submitting the form:
    evt.preventDefault();

    // Serialize the entire form:
    var data = new FormData(this.form);
			$.ajax({
				url: "save-profile",
				type: "post",
				data,
		       	processData: false,
				contentType: false,
				cache: false,
			success: function(data) { 
				$('#btnSave').html('Updating...');
				$('form').trigger("reset");
				window.location.reload();        
			},
			error: function(data) {
				window.scrollTo(0, 0);

				$("#error").show(); $("#error").html('');
					$.each(data.responseJSON.errors, function (key, value) {
						$('#error').append('<div class="alert alert-danger alert-dismissible" role="alert"><strong>'+value+'</strong></div');
						});

				 
				setTimeout(function(){  
					$('#error').fadeOut("slow");  
					$('#btnSave').prop("disabled", false); 
				}, 5000); 
			}
    });
	}else
	{
		   window.scrollTo(0, 0)
		   $("#error").show(); $("#error").html('');
		   $('#error').append('<div class="alert alert-danger alert-dismissible" role="alert"><strong>Fill up all the required Field</strong></div');
		  
		   setTimeout(function(){  
			   $('#error').fadeOut("slow");  
			   $('#btnSave').prop("disabled", false);
			    
		   }, 2000); 
	}
    
    }); 

	
	
	     	  
	   
 }); 
 
 


  