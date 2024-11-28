$(document).ready(function(){

    getFavorites();
});

function getFavorites(){
    $.ajax({
        url: "getUserFavorites.php",
        method: 'POST'
    }).done(function( data ) {
        $('#productData').html(data);
        
    })
}
