$(document).ready(function(){    
    Reset();
});
var admin_log;

function Reset(){
    $('#resetform').on('submit',function(e) {
        e.preventDefault();
            $.ajax({
               url: "ResetPswdValid.php",
                method: 'POST',
                data: {
                      Email: $('#emailInput').val()            
                },
                success: function (response)
                    {
                        
                        if (response.match("Sent"))
                        {
                          window.location.href = "/UserPanel.php";

                        }
                          else{
                              if (response.match("email")){
                               $('#EmailError').html('Niepoprawny e-mail):');
                              }else{
                               $('#EmailError').html('');
                              }
                           }
                        
                    }
            });  
       });
      }