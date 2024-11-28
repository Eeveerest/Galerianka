<?php
session_start();
require_once 'database.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galerianka</title>

    <script src="https://kit.fontawesome.com/06d4f426f5.js" crossorigin="anonymous">
      </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="custom.css" rel="stylesheet">
  <script type="text/javascript" src="BasketPage.js"></script>

</head>

<body>
  <div class="main">
    <!-- Header -->
    <?php include('Header.php'); ?>
    
    <!--Separator-->
    <nav class="navbar navbar-expand blue-border d-none d-md-block">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active link-border" aria-current="page" href="Tactical.php">Tactical</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active link-border" aria-current="page" href="Hunting.php">Hunting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active link-border" aria-current="page" href="AllKnives.php">All Knives</a>
            </li>
          </ul>
        </div>
        </div>
      </nav>
    <!--End Separator-->
    <div class="container" style="margin-top: 1rem; margin-bottom: 1rem;">
      <div class="col justify-content-center align-items-center red-border" id="productData">
        
        
    </div>
    </div>
    
    <div class="container" id="OrderForm" style="margin-top: 1rem; margin-bottom: 1rem; display: none">
      <div class="col justify-content-center align-items-center red-border" id="orderData">
        

        
     </div>
    </div>   
    

  </div>

    <footer>
      <?php include('Footer.php'); ?>    
    </footer>

  
  <script>
    function Del_basket(id, index){
      $.ajax({
        url: "delItemCart.php",
        method: 'POST',
         data: {
          id: id,
          index: index
        },
    }).done(function( data ) {
        getBasket();
        
    })
    }
    
    function Calc_total(iden){
      var checkout = document.getElementById("checkout").innerHTML;
      checkout = checkout.substring(0, checkout.length-2);
      var pay = parseFloat(checkout);
      
      var quan = document.getElementById("quantity"+iden).value;
      var str = document.getElementById("price"+iden).innerHTML;
       str = str.substring(0, str.length-2);
      var price = parseFloat(str);
      
      pay -= price*(quan-1);
      pay += price * quan;
      document.getElementById("total"+iden).innerHTML = price * quan + " zł";
      document.getElementById("checkout").innerHTML = pay + " zł";
      document.getElementById("value").innerHTML = pay + " zł";
      document.getElementById("sub"+iden).style.display = "block";
      if (quan == 10) {
        document.getElementById("add"+iden).style.display = "none";
      }
      
    }
    
    function Calc_Sub(iden){
      var checkout = document.getElementById("checkout").innerHTML;
      checkout = checkout.substring(0, checkout.length-2);
      var pay = parseFloat(checkout);
      
      var quan = document.getElementById("quantity"+iden).value;
      var str = document.getElementById("price"+iden).innerHTML;
       str = str.substring(0, str.length-2);
      var price = parseFloat(str);
      
      pay -= price
      document.getElementById("total"+iden).innerHTML = price * quan + " zł";
      document.getElementById("checkout").innerHTML = pay + " zł";
      document.getElementById("value").innerHTML = pay + " zł";
      document.getElementById("add"+iden).style.display = "block";
      if (quan == 1) {
        document.getElementById("sub"+iden).style.display = "none";
      }   
    }
    
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="BasketPage.js"></script>

</body>
</html>

