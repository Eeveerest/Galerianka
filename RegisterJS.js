$(document).ready(function(){    
    Login();
    Change();
    Out();
});
var admin_log;

function Login(){
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
                      RepPassword: $('#RepPassword').val()   
                },
                success: function (response)
                    {
                        
                        if (response.match("Pomyślnie dodano rekord"))
                        {
                          window.location.href = "/LogIn.php";

                        }
                        else{
                              if (response.match("1")){
                               $('#UserError').html('Niepoprawny login.');
                              }else{
                               $('#UserError').html('');
                              }
                            
                              if (response.match("2")){
                               $('#EmailError').html('Niepoprawny Email.');
                              }else{
                               $('#EmailError').html('');
                                   }
                            
                              if (response.match("3")){
                               $('#FirstNameError').html('Niepoprawne imie.');
                              }else{
                               $('#FirstNameError').html('');
                                   }
                            if (response.match("4")){
                               $('#LastNameError').html('Niepoprawne nazwisko.');
                              }else{
                               $('#LastNameError').html('');
                                   }
                            
                              if (response.match("5")){
                               $('#CityError').html('Niepoprawne miasto.');
                              }else{
                               $('#CityError').html('');
                                   }
                            
                              if (response.match("6")){
                               $('#PostcodeError').html('Niepoprawny kod pocztowy');
                              }else{
                               $('#PostcodeError').html('');
                                   }
                            
                              if (response.match("7")){
                               $('#HouseNumberError').html('Niepoprawny numer domu.');
                              }else{
                               $('#HouseNumberError').html('');
                                   }
                            
                              if (response.match("8")){
                               $('#PasswordError').html('Niepoprawne hasło D:');
                              }else{
                               $('#PasswordError').html('');
                                   }
                            
                              if (response.match("9")){
                               $('#RepPasswordError').html('Hasła nie są takie same.');
                              }else{
                               $('#RepPasswordError').html('');
                              }
                          if (response.match("10")){
                               $('#RulesError').html('Niezaznaczone pole.');
                              }else{
                               $('#RulesError').html('');
                              }
                           }
                        
                    }
            });  
       });
      }


function account(){
    var acc = document.getElementById("account");
    var roll = document.getElementById("logedin");
    var button = document.getElementById("acc_books");
    var res = document.getElementById("res_books");
    var out = document.getElementById("log_out");
    roll.style.display = "none";
    acc.style.display = "block";
    button.style.display = "block";
    res.style.display = "block";
    out.style.display = "block";

}      

function admin(){
    var bookton = document.getElementById("res_books_u");
    bookton.style.display = "block";
        $('#acc_books_ref').text('Rezerwacje i wyporzyczenia');
        $('#res_books_ref').text('Urzytkownicy');
        $('#book_books_ref').text('Książki');
        document.getElementById("acc_books_ref").href='admin_pan.php';
        document.getElementById("res_books_ref").href='users_pan.php';
        document.getElementById("book_books_ref").href='books_pan.php';
}

function Change(){
    $('#accountform').on('submit',function(e) {
      e.preventDefault();
          $.ajax({
             url: "changeData.php",
              method: 'POST',
              data: {
                InputName: $('#named').val(),
                InputSur: $('#surname').val(),
                InputAdres: $('#haddress').val(),
                InputNumber: $('#doc').val(),  
                InputPass: $('#password').val(),              
              },
              success: function (response)
                  {
                      
                      if (response=="Zapisano")
                      {
                            var acc = document.getElementById("account");
                            var button = document.getElementById("acc_books");
                            var res = document.getElementById("res_books");
                            var roll = document.getElementById("logedin");
                            button.style.display = "none";
                            res.style.display = "none";
                            acc.style.display = "none";
                            roll.style.display = "block";
                            setTimeout(account, 1500);
                            $('#nameError').html('');
                            $('#surError').html('');
                            $('#adrError').html('');
                            $('#numberError').html('');
                            $('#passError').html('');   
                      }
                      else{
                        if (response.match("1")){
                         $('#nameError').html('Wymagane imie');
                        }else{
                         $('#nameError').html('');
                        }
                        if (response.match("2")){
                         $('#surError').html('Wymagane nazwisko');
                        }else{
                         $('#surError').html('');
                        }
                        if (response.match("3")){
                         $('#adrError').html('Wymagany adres');
                        }else{
                         $('#adrError').html('');
                        }
                        if (response.match("4")){
                         $('#numberError').html('Wymagany numer dokumentu');
                        }else{
                         $('#numberError').html('');
                        }
                        if (response.match("5")){
                         $('#passError').html('Wymagane hasło');
                        }else{
                         $('#passError').html('');
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
                    window.location.href = "/account.php";
                }
            });
           
    })
}

function prev_loged(){
    var log = document.getElementById("login");
    var roll = document.getElementById("logedin");
                                                                              
    log.style.display = "none";
    roll.style.display = "block";
    setTimeout(account, 1500);                       
    if (admin_log==1){
        setTimeout(admin, 1500);
        
    }
    else{
        let ref = "books.php?id="+ID;
        let ref2 = "reserve.php?id="+ID;
        document.getElementById("acc_books_ref").href=ref;
        document.getElementById("res_books_ref").href=ref2;
    }

}
