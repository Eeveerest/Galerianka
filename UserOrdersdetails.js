$(document).ready(function(){

    getFavorites();
});

function getFavorites(){
    
    $.ajax({
        url: "getUserOrdersDetails.php",
        method: 'POST',
        data: {
                order: $('#Order').val()
          }
    }).done(function( data ) {
        $('#productData').html(data);
        
    })
}