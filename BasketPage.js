$(document).ready(function(){
    getBasket();
});

function getBasket(){
    $.ajax({
        url: "getBasketPage.php",
        method: 'POST'
    }).done(function( data ) {
        $('#productData').html(data);
        
    });
}

function Order() {
  document.getElementById("OrderForm").style.display = "block";
  $.ajax({
    url: "getOrderPage.php",
    method: 'POST'
  }).done(function( data ) {
    $('#orderData').html(data);
   Charge();
    
  });
}

function Charge(){
  $('#accountform').on('submit',function(e) {
    e.preventDefault();
    var checkout = document.getElementById("checkout").innerHTML;
    checkout = checkout.substring(0, checkout.length-2);
    var pay = parseFloat(checkout);
    var quan = 0;
        $.ajax({
          url: "OrderBasket.php",
          method: 'POST',
          data: {
            Email: $('#Email').val(),
            FirstName: $('#FirstName').val(),
            LastName: $('#LastName').val(),
            City: $('#City').val(),
            Code: $('#Postcode').val(),
            House: $('#HouseNumber').val(),
            Delivery: $('#Delivery').val(),
            Payment:  $('#Payment').val(),
            Price: pay
          },
          success: function (response)
          {
            
            if (response=="Added")
            {  
              $.ajax({
                url: "delCart.php",
                method: 'POST'
              }).done(function( data ) {
                
              });
              location.reload();
              alert("Order has been placed");
            }
            else{

                $('#EmailError').html('Wprowadzono złe dane');

              
            }
            
          },
          error: function ()
          {
            alert("Wystąpił błąd");
          }
        });
  });
};
