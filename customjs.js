$(document).ready(function(){

    getNewest();
    getBest();

});

function getNewest(){
    $.ajax({
        url: "getProductNewest.php",
        method: 'POST'
    }).done(function( data ) {
        $('#Newest').html(data);
        
    })
}

function getBest(){
    $.ajax({
        url: "getProductBestSell.php",
        method: 'POST'
    }).done(function( data ) {
        $('#Best').html(data);
        
    })
}

function Favorite(id) {
  let elem = document.getElementById("heart_product_"+id);
  let elem2 = document.getElementById("heart_product_two_"+id);
  let isMainPresent = elem.classList.contains("fa-heart-o");
  if (elem2){
  let isMainPresent2 = elem2.classList.contains("fa-heart-o");
   }
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
    if (isMainPresent2) {
    elem2.className = "fa-solid fa-heart";
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
    elem2.className = "fa fa-heart-o";
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


