$(document).ready(function(){    

    Change();
    Out();
});
var admin_log;

function Change(){
    $('#accountform').on('submit',function(e) {
      e.preventDefault();
          $.ajax({
             url: "ChangeUserData.php",
              method: 'POST',
              data: {
                Email: $('#Email').val(),
                FirstName: $('#FirstName').val(),
                LastName: $('#LastName').val(),
                City: $('#City').val(),
                Code: $('#Postcode').val(),
                House: $('#HouseNumber').val(),
                Password: $('#Password').val(),
                RepPassword: $('#RepPassword').val(),
                ClientID: $('#Login').val()            
              },
              success: function (response)
                  {
                      
                      if (response=="Edited")
                      {  
                        location.reload();
                        alert("Saved changes");
                      }
                      else{
                        if (response.match("2")){
                         $('#EmailError').html('Wymagany email');
                        }else{
                         $('#EmailError').html('');
                        }
                        if (response.match("3")){
                         $('#FirstNameError').html('Wymagane imie');
                        }else{
                         $('#FirstNameError').html('');
                        }
                        if (response.match("4")){
                         $('#LastNameError').html('Wymagane nazwisko');
                        }else{
                         $('#LastNameError').html('');
                        }
                        
                        if (response.match("8")){
                         $('#PasswordError').html('Wymagane hasło');
                        }else{
                         $('#PasswordError').html('');
                        }
                        if (response.match("9")){
                         $('#RepPasswordError').html('Wymagane hasło');
                        }else{
                         $('#RepPasswordError').html('');
                        }
                     }
                      
                  },
              error: function ()
              {
                  alert("Wystąpił błąd");
              }
          });
     });
    };

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

}
