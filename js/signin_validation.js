$(document).ready(function(){
        $('#formdesk').submit(function(event){
        event.preventDefault();
        var username = $("#username").val();
        var passuser = $("#pass").val();
        
        $('#img').show();
        $('#Danger').hide();
    
      $.post("signin_server.php", 
                {
                    username: username,
                    passuser: passuser
                },
                function(response,status){
                        
                        if(response == "success")
                        {
                                $("#img").hide();
                                window.location ="index.php";
                              
                        }
                        if(response.indexOf("1") != -1 )
                        {
                                $('#Danger').show();
                                $('#img').hide();
                               
                        }
    
                       
    
                },"text");
             });
    
    });