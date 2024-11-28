$(document).ready(function(){

    getPayments();
    getPaymentsFilter();
    AddPayments();

});

function getPayments(){
    $.ajax({
        url: "getAdminPayments.php",
        method: 'POST'
    }).done(function( data ) {
        $('#paymentsData').html(data);
        $('td').css( 'padding-bottom', "1rem" );
        $('td').css( 'padding-top', "1rem" );
        $('td').css( 'color', "whitesmoke" );
        $('td').css( 'border-bottom', "1px solid whitesmoke" );
        
    })
}

function getPaymentsFilter(){
    $('#searchform').on('submit',function(e){
        e.preventDefault();
        $('#paymentsData').html('<tr>\n' +
            '                        <td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>\n' +
            '                    </tr>');
        $.ajax({
                url: "getAdminPaymentsFilter.php",
                method: 'POST',
                data: {
                    search: $('#search').val(),
                }
            }).done(function( data ) {
                $('#paymentsData').html(data);
                $('#paymentsData').html(data);
                $('td').css( 'padding-bottom', "1rem" );
                $('td').css( 'padding-top', "1rem" );
                $('td').css( 'color', "whitesmoke" );
                $('td').css( 'border-bottom', "2px solid whitesmoke" );
            });
    });

}

function AddPayments(){
  $('#addform').on('submit',function(e) {
    e.preventDefault();
        $.ajax({
           url: "addAdminPayments.php",
            method: 'POST',
            data: {
                InputName: $('#InputName').val()             
            },
            success: function (response)
                {
                    
                    if (response=="Added")
                    {
                      $("#deliveryModal").modal('hide');
                        $('#paymentsData').html('<tr>\n' +
                        '<td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>\n' +
                        '</tr>');
                            $.ajax({
                                url: "getAdminPayments.php",
                                method: 'POST'  
                            }).done(function( data ) {
                                
                                $('#paymentsData').html(data);
                                $('td').css( 'padding-bottom', "1rem" );
                                $('td').css( 'padding-top', "1rem" );
                                $('td').css( 'color', "whitesmoke" );
                                $('td').css( 'border-bottom', "2px solid whitesmoke" );
                                $('#InputName').val('');
                                getLatest();
                            });  
                    }
                    else{
                       if (response.match("1")){
                        $('#nameError').html('Must have name');
                       }else{
                        $('#nameError').html('');
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





