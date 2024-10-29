$(document).ready(function(){

    getProducts();
    AddProduct();

});

function getProducts(){
    $.ajax({
        url: "getAdminAsigned.php",
        method: 'POST',
        data: {
                id: $('#iden').val()            
            }
    }).done(function( data ) {
        $('#productsData').html(data);
        $('td').css( 'padding-bottom', "1rem" );
        $('td').css( 'padding-top', "1rem" );
        $('td').css( 'color', "whitesmoke" );
        $('td').css( 'border-bottom', "1px solid whitesmoke" );
        
    })
}


function AddProduct(){
  $('#addform').on('submit',function(e) {
    e.preventDefault();
        $.ajax({
           url: "addAdminAssign.php",
            method: 'POST',
            data: {
                InputId: $('#InputId').val(),
                CategoryId: $('#iden').val() 
            },
            success: function (response)
                {
                    
                    if (response=="Added")
                    {
                      $("#addModal").modal('hide');
                        $('#productsData').html('<tr>\n' +
                        '<td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>\n' +
                        '</tr>');
                            $.ajax({
                                url: "getAdminAsigned.php",
                                method: 'POST',
                                data: {
                                 id: $('#iden').val()            
                                }  
                            }).done(function( data ) {
                                
                                $('#productsData').html(data);
                                $('td').css( 'padding-bottom', "1rem" );
                                $('td').css( 'padding-top', "1rem" );
                                $('td').css( 'color', "whitesmoke" );
                                $('td').css( 'border-bottom', "2px solid whitesmoke" );
                                $('#InputId').val('');
                                getLatest();
                            });  
                    }
                    else{
                       if (response.match("1")){
                        $('#productError').html('Must choose product');
                       }else{
                        $('#productError').html('');
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





