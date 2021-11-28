
	
	$(document).ready(function(){
           
			$('#formdesk1').submit(function(event){
				
			event.preventDefault();
			var nameuser = $("#user").val();
			var emailuser = $("#email").val();
			var mobileuser = $('#mobile').val();
			var passuser = $('#password').val();
			var repassuser = $('#repass').val();
			var address=$('#address').val();
			var location=$('#location').val();
			$('#passDanger').hide();
			$('#emailDanger1').hide();
			$('#mobileDanger').hide();
			$("#img1").show();
			

		  $.post("signup_server.php", 
					{
						nameuser: nameuser,
						emailuser: emailuser,
						mobileuser: mobileuser,
						passuser: passuser,
						repassuser: repassuser,
						address: address,
						location:location
					},
					function(response,status){

						
							if(response.indexOf("success") != -1)
							{
									$("#img1").hide();
								  swal("User Registered","Please confirm the email link sent to your Mail","success");
									
									
							}

							if(response.indexOf("password_is_not_same") != -1 )
							{ 

									$("#img1").hide();
									$('#passDanger').show();
									
							}
							if(response.indexOf("email_is_present") != -1)
							{       

								    $("#img1").hide();
									$('#emailDanger1').show();
									
							}
							if(response.indexOf("number_already_exist") != -1)
							{
									$("#img1").hide();
									$('#mobileDanger').show();
									
							}

					},"text");
			});
			
		});
	