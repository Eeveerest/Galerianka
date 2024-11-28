$(document).ready(function(){

    getDelivery();
    getDeliveryFilter();
    AddDelivery();

});

function getDelivery(){
    $.ajax({
        url: "getAdminDelivery.php",
        method: 'POST'
    }).done(function( data ) {
        $('#deliveryData').html(data);
        $('td').css( 'padding-bottom', "1rem" );
        $('td').css( 'padding-top', "1rem" );
        $('td').css( 'color', "whitesmoke" );
        $('td').css( 'border-bottom', "1px solid whitesmoke" );
        
    })
}

function getDeliveryFilter(){
    $('#searchform').on('submit',function(e){
        e.preventDefault();
        $('#deliveryData').html('<tr>\n' +
            '                        <td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>\n' +
            '                    </tr>');
        $.ajax({
                url: "getAdminDeliveryFilter.php",
                method: 'POST',
                data: {
                    search: $('#search').val(),
                }
            }).done(function( data ) {
                $('#deliveryData').html(data);
                $('#deliveryData').html(data);
                $('td').css( 'padding-bottom', "1rem" );
                $('td').css( 'padding-top', "1rem" );
                $('td').css( 'color', "whitesmoke" );
                $('td').css( 'border-bottom', "2px solid whitesmoke" );
            });
    });

}

function AddDelivery(){
  $('#addform').on('submit',function(e) {
    e.preventDefault();
        $.ajax({
           url: "addAdminDelivery.php",
            method: 'POST',
            data: {
                InputName: $('#InputName').val(),
                InputPrice: $('#InputPrice').val(),
                InputEmail: $('#InputEmail').val(),
                InputPhone: $('#InputPhone').val()             
            },
            success: function (response)
                {
                    
                    if (response=="Added")
                    {
                      $("#deliveryModal").modal('hide');
                        $('#deliveryData').html('<tr>\n' +
                        '<td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>\n' +
                        '</tr>');
                            $.ajax({
                                url: "getAdminDelivery.php",
                                method: 'POST'  
                            }).done(function( data ) {
                                
                                $('#deliveryData').html(data);
                                $('td').css( 'padding-bottom', "1rem" );
                                $('td').css( 'padding-top', "1rem" );
                                $('td').css( 'color', "whitesmoke" );
                                $('td').css( 'border-bottom', "2px solid whitesmoke" );
                                $('#InputName').val('');
                                $('#InputPrice').val('');
                                $('#InputEmail').val('');
                                $('#InputPhone').val('');
                                getLatest();
                            });  
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
                        $('#phoneError').html('');
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





