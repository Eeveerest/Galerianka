$(document).ready(function(){
    
  EditProduct();

});


function EditProduct(){
  $('#editform').on('submit',function(e) {
    e.preventDefault();
        $.ajax({
           url: "editAdminProductValid.php",
            method: 'POST',
            data: {
                ProductID: $('#ProductId').val(),
                InputName: $('#InputName').val(),
                InputPrice: $('#InputPrice').val(),
                InputMan: $('#InputMan').val(),
                InputDeliv: $('#InputDeliv').val()             
            },
            success: function (response)
                {
                    
                    if (response=="Edited")
                    {
                           location.reload();
                           alert("Product updated"); 
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





