$(document).ready(function(){
    
  EditDelivery();

});


function EditDelivery(){
  $('#editform').on('submit',function(e) {
    e.preventDefault();
        $.ajax({
           url: "editAdminDeliveryValid.php",
            method: 'POST',
            data: {
                DelivID: $('#DelivId').val(),
                InputName: $('#InputName').val(),
                InputPrice: $('#InputPrice').val(),
                InputEmail: $('#InputEmail').val(),
                InputPhone: $('#InputPhone').val()             
            },
            success: function (response)
                {
                    
                    if (response=="Edited")
                    {
                           location.reload();
                           alert("Delivery updated");
                    }
                    else{
                       if (response.match("1")){
                        $('#nameError').html('Must have name');
                       }else{
                        $('#nameError').html('');
                       }
                       if (response.match("2")){
                        $('#priceError').html('Must have price');
                       }else{
                        $('#priceError').html('');
                       }
                       if (response.match("3")){
                        $('#emailError').html('Must have e-mail');
                       }else{
                        $('#emailError').html('');
                       }
                       if (response.match("4")){
                        $('#phoneError').html('Must have phone');
                       }else{
                        $('#dphoneError').html('');
                       }
                    }
                    
                },
            error: function ()
            {
                alert("Error");
            }
        });
   });
   
  }





