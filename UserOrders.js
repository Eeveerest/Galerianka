$(document).ready(function(){

    getFavorites();
});

function getFavorites(){
    $.ajax({
        url: "getUserOrders.php",
        method: 'POST'
    }).done(function( data ) {
        $('#productData').html(data);
        
    })
}