$(document).ready(function(){
    
  EditOrders();
  
});


function EditOrders(){
  $('#editform').on('submit',function(e) {
    e.preventDefault();
        $.ajax({
           url: "editAdminOrderValid.php",
            method: 'POST',
            data: {
                InputLogin: $('#InputLogin').val(),
                InputPrice: $('#InputPrice').val(), 
                InputType: $('#InputType').val(),
                InputDeliv: $('#InputDeliv').val(),
                InputDatePlaced: $('#InputDatePlaced').val(),
                InputDateShipped: $('#InputDateShipped').val(),
                Details: $('#InputDetails').val()
            },
            success: function (response)
                {
                    
                    if (response=="Edited")
                    {
                           location.reload();
                           alert("Order updated");
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
                        $('#manError').html('Must have manufacturer');
                       }else{
                        $('#manError').html('');
                       }
                       if (response.match("4")){
                        $('#delivError').html('Must have delivery');
                       }else{
                        $('#delivError').html('');
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




