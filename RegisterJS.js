$(document).ready(function(){    
    Register();

});
var admin_log;

function Register(){
    $('#formRegister').on('submit',function(e) {
        e.preventDefault();
            $.ajax({
               url: "RegisterValid.php",
                method: 'POST',
                data: {
                      Username: $('#Username').val(),
                      Email: $('#Email').val(),     
                      FirstName: $('#FirstName').val(),   
                      LastName: $('#LastName').val(),   
                      City: $('#City').val(),
                      Postcode: $('#Postcode').val(),   
                      HouseNumber: $('#HouseNumber').val(),   
                      Password: $('#Password').val(),   
                      RepPassword: $('#RepPassword').val(),   
                },
                success: function (response)
                    {
                        
                        if (response.match("Pomyślnie dodano rekord"))
                        {
                          window.location.href = "/LogIn.php";

                        }
                        else{
                              if (response.match("1")){
                               $('#UserError').html('Nie poprawny login.');
                              }else{
                               $('#UserError').html('');
                              }
                            
                              if (response.match("2")){
                               $('#EmailError').html('Nie poprawny Email.');
                              }else{
                               $('#EmailError').html('');
                                   }
                            
                              if (response.match("3")){
                               $('#FirstNameError').html('Nie poprawne imie.');
                              }else{
                               $('#FirstNameError').html('');
                                   }
                            if (response.match("4")){
                               $('#LastNameError').html('Nie poprawne nazwisko.');
                              }else{
                               $('#LastNameError').html('');
                                   }
                            
                              if (response.match("5")){
                               $('#CityError').html('Nie poprawne miasto.');
                              }else{
                               $('#CityError').html('');
                                   }
                            
                              if (response.match("6")){
                               $('#PostcodeError').html('Nie poprawny kod pocztowy');
                              }else{
                               $('#PostcodeError').html('');
                                   }
                            
                              if (response.match("7")){
                               $('#HouseNumberError').html('Nie poprawny numer domu.);
                              }else{
                               $('#HouseNumberError').html('');
                                   }
                            
                              if (response.match("8")){
                               $('#PasswordError').html('Nie poprawne hasło D:');
                              }else{
                               $('#PasswordError').html('');
                                   }
                            
                              if (response.match("9")){
                               $('#RepPasswordError').html('Hasła nie są takie same.');
                              }else{
                               $('#RepPasswordError').html('');
                              }
                           }
                        
                    }
            });  
       });
      }


