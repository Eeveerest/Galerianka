$(document).ready(function(){

    getOrders();
    getOrdersFilter();

});

function getOrders(){
    $.ajax({
        url: "getAdminOrders.php",
        method: 'POST'
    }).done(function( data ) {
        $('#ordersData').html(data);
        $('td').css( 'padding-bottom', "1rem" );
        $('td').css( 'padding-top', "1rem" );
        $('td').css( 'color', "whitesmoke" );
        $('td').css( 'border-bottom', "1px solid whitesmoke" );
        
    })
}

function getOrdersFilter(){
    $('#searchform').on('submit',function(e){
        e.preventDefault();
        $('#ordersData').html('<tr>\n' +
            '                        <td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>\n' +
            '                    </tr>');
        $.ajax({
                url: "getAdminOrdersFilter.php",
                method: 'POST',
                data: {
                    search: $('#search').val(),
                }
            }).done(function( data ) {
                $('#ordersData').html(data);
                $('#ordersData').html(data);
                $('td').css( 'padding-bottom', "1rem" );
                $('td').css( 'padding-top', "1rem" );
                $('td').css( 'color', "whitesmoke" );
                $('td').css( 'border-bottom', "2px solid whitesmoke" );
            });
    });

}







