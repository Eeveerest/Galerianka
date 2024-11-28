$(document).ready(function(){

    getAll();
    getAllFilter();
});

function getAll(){
    $.ajax({
        url: "getProductAll.php",
        method: 'POST'
    }).done(function( data ) {
        $('#productData').html(data);
        
    })
}




function getAllFilter(){
    $('#searchform').on('submit',function(e){
        e.preventDefault();
        $('#productData').html('<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>');
        $.ajax({
                url: "getProductAllFilter.php",
                method: 'POST',
                data: {
                    search: $('#search').val(),
                    filter: $('#product_sort').val(),
                    category: $('#product_categ').val()
                }
            }).done(function( data ) {
                $('#productData').html(data);
                $('#productData').html(data);
            });
    });

}

function Favorite(id) {
  let elem = document.getElementById("heart_product_"+id);
  let isMainPresent = elem.classList.contains("fa-heart-o");
  if (isMainPresent) {
    elem.className = "fa-solid fa-heart";
    $.ajax({
      url: "addProductrFavorites.php",
      method: 'POST',
      data: {
        id: id
      },
    }).done(function( data ) {           
    })
      }
  else {
    elem.className = "fa fa-heart-o";
    $.ajax({
      url: "delProductFavorites.php",
      method: 'POST',
      data: {
        id: id
      },
    }).done(function( data ) {          
    })
      }
}






