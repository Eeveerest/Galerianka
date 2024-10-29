$(document).ready(function(){

    getProducts();
    getProductsFilter();
    AddProduct();

});

function getProducts(){
    $.ajax({
        url: "getAdminProducts.php",
        method: 'POST'
    }).done(function( data ) {
        $('#productsData').html(data);
        $('td').css( 'padding-bottom', "1rem" );
        $('td').css( 'padding-top', "1rem" );
        $('td').css( 'color', "whitesmoke" );
        $('td').css( 'border-bottom', "1px solid whitesmoke" );
        
    })
}

function getProductsFilter(){
    $('#searchform').on('submit',function(e){
        e.preventDefault();
        $('#productsData').html('<tr>\n' +
            '                        <td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>\n' +
            '                    </tr>');
        $.ajax({
                url: "getAdminProductsFilter.php",
                method: 'POST',
                data: {
                    search: $('#search').val(),
                }
            }).done(function( data ) {
                $('#productsData').html(data);
                $('#productsData').html(data);
                $('td').css( 'padding-bottom', "1rem" );
                $('td').css( 'padding-top', "1rem" );
                $('td').css( 'color', "whitesmoke" );
                $('td').css( 'border-bottom', "2px solid whitesmoke" );
            });
    });

}

function AddProduct(){
  $('#addform').on('submit',function(e) {
    e.preventDefault();
        $.ajax({
           url: "addAdminProduct.php",
            method: 'POST',
            data: {
                InputName: $('#InputName').val(),
                InputPrice: $('#InputPrice').val(),
                InputMan: $('#InputMan').val(),
                InputDeliv: $('#InputDeliv').val()             
            },
            success: function (response)
                {
                    
                    if (response=="Added")
                    {
                      $("#productsModal").modal('hide'); 
                        $('#productsData').html('<tr>\n' +
                        '<td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>\n' +
                        '</tr>');
                            $.ajax({
                                url: "getAdminProducts.php",
                                method: 'POST'  
                            }).done(function( data ) {
                                
                                $('#productsData').html(data);
                                $('td').css( 'padding-bottom', "1rem" );
                                $('td').css( 'padding-top', "1rem" );
                                $('td').css( 'color', "whitesmoke" );
                                $('td').css( 'border-bottom', "2px solid whitesmoke" );
                                $('#InputName').val('');
                                $('#InputPrice').val('');
                                $('#InputMan').val('');
                                $('#InputDeliv').val('');
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





