$(document).ready(function(){    
    Register();

});
var admin_log;

function Register(){
    $('#loginform').on('submit',function(e) {
        e.preventDefault();
            $.ajax({
               url: "LoginValid.php",
                method: 'POST',
                data: {
                      Username: $('#Username').val(),
                      Password: $('#Password').val()            
                },
                success: function (response)
                    {
                        
                        if (response.match("Zalogowano"))
                        {
                          window.location.href = "/UserPanel.php";

                        }
                        else{
                              if (response.match("username")){
                               $('#UserError').html('Nie poprawny login ):');
                              }else{
                               $('#UserError').html('');
                              }
                              if (response.match("password")){
                               $('#passwordError').html('Nie poprawne hasło D:');
                              }else{
                               $('#passwordError').html('');
                              }
                           }
                        
                    }
            });  
       });
      }


