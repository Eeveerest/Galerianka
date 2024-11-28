$(document).ready(function(){

    getTactical();
    getTacticalFilter();
});

function getTactical(){
    $.ajax({
        url: "getProductTactical.php",
        method: 'POST'
    }).done(function( data ) {
        $('#productData').html(data);
        
    })
}




function getTacticalFilter(){
    $('#searchform').on('submit',function(e){
        e.preventDefault();
        $('#productData').html('<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');
        $.ajax({
                url: "getProductTacticalFilter.php",
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
