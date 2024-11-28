$(document).ready(function(){
    getProduct();
});

function getProduct(){
    $.ajax({
        url: "getProductPage.php",
        method: 'POST',
        data: {
          id: $('#id').val()
        },
    }).done(function( data ) {
        $('#productData').html(data);               
    })
}

