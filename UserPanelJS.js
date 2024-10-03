$(document).ready(function(){    

    Change();
    Out();
});
var admin_log;



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
                    window.location.href = "/LogIn.php";
                }
            });
           
    })
}

function prev_loged(){
    e.preventDefault();
      window.location.href = "/UserPanel.php";                           
    
  //if (admin_log==1){
    //    setTimeout(admin, 1500);
        
    //}
//    else{

  //  }

}
