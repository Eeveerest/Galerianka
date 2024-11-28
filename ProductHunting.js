$(document).ready(function(){

    getHunting();
    getHuntingFilter();
});

function getHunting(){
    $.ajax({
        url: "getProductHunting.php",
        method: 'POST'
    }).done(function( data ) {
        $('#productData').html(data);
        
    })
}




function getHuntingFilter(){
    $('#searchform').on('submit',function(e){
        e.preventDefault();
        $('#productData').html('<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');
        $.ajax({
                url: "getProductHuntingFilter.php",
                method: 'POST',
                data: {
                    search: $('#search').val(),
                    filter: $('#product_sort').val()
                }
            }).done(function( data ) {
                $('#productData').html(data);
                $('#productData').html(data);
            });
    });

}
