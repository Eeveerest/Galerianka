$(document).ready(function(){    
    Login();
    Out();
});
var admin_log;

function Login(){
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
                      else if (response.match("admin"))
                      {
                        window.location.href = "/AdminPanel.php";
                      }
                          else{
                              if (response.match("username")){
                               $('#UserError').html('Niepoprawny login ):');
                              }else{
                               $('#UserError').html('');
                              }
                              if (response.match("password")){
                               $('#passwordError').html('Niepoprawne hasło D:');
                              }else{
                               $('#passwordError').html('');
                              }
                           }
                        
                    }
            });  
       });
      }
    



function Out(){
    $('#log_out_ref').on('click',function(e) {
        e.preventDefault();
            $.ajax({
                url: 'log_out.php',
                success: function(){
                    window.location.href = "/LogIn.php";
                }
            });
           
    })
}

function prev_loged(){
  e.preventDefault();
       window.location.href = "/UserPanel.php";                           
    
  if (admin_log==1){
        window.location.href = "/AdminPanel.php";  
        
    }

}
