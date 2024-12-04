<?php
session_start();
require_once 'database.php';
    if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
    
  }
  //unset quantity
  unset($_SESSION['qty_array']);
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
  <script type="text/javascript" src="customjs.js"></script>
  

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
                <a class="nav-link active link-border category-link" aria-current="page" href="Tactical.php">Tactical</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active link-border category-link" aria-current="page" href="Hunting.php">Hunting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active link-border category-link" aria-current="page" href="AllKnives.php">All Knives</a>
              </li>
            </ul>
          </div>
        </nav>      
          
          
          
          <!---Slider 1-->
          <div class="col d-none d-md-block">
            <div id="FrontPageSlider" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#FrontPageSlider" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#FrontPageSlider" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#FrontPageSlider" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="Pictures\RainforestOne.jpeg" class="d-block w-100" alt="Rainforest1" height="800rem">
                  <div class="carousel-caption caption1">
                    <a href="Fundations.php">
                      <p class="sizelg">Support with us!</p>
                      <p class="sizesm">Check out the fundations we work with</p>
                    </a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="Pictures\RainforestTwo.jpg" class="d-block w-100" alt="Rainforest2" height="800rem">
                  <div class="carousel-caption caption1">
                    <a href="Fundations.php">
                      <p class="sizelg">Support with us!</p>
                      <p class="sizesm">Check out the fundations we work with</p>
                    </a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="Pictures\Rainforest5.jpg" class="d-block w-100" alt="Rainforest3" height="800rem">
                  <div class="carousel-caption caption2">
                    <a href="Fundations.php">
                      <p class="sizelg">Support with us!</p>
                      <p class="sizesm">Check out the fundations we work with</p>
                    </a>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#FrontPageSlider"
              data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
                <button class="carousel-control-next" type="button" data-bs-target="#FrontPageSlider"
                data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
                </div>
                </div>
                  <!--knives-->
                  <!--Divider1 -->
                  <div class="row justify-content-center text-center" style="margin: 2%;">
                    <div class="col-md-8 col-lg-5">
                      <div class="header black-border">
                        <p style="font-size: 25px; margin: 0%;"><b>New Products</b></p>
                      </div>
                    </div>
                  </div>
                  <!--End Divider1-->
                  <!-- Carousel1-->
                  <div class="container text-center my-3">
                    <div class="row mx-auto my-auto justify-content-center">                               
                      <!-- Product List One -->
                      <div class="row" id="Newest">
                        <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                      </div>               
                    </div>
                  </div>
                  <!--Divider2 -->
                  <div class="row justify-content-center text-center" style="margin: 2%;">
                    <div class="col-md-8 col-lg-5">
                      <div class="header black-border">
                        <p style="font-size: 25px; margin: 0%;"><b>Bestsellers</b></p>
                      </div>
                    </div>
                  </div>
                  <!--End Divider2 -->
                  
                  <!-- Carousel2-->
                  <div class="container text-center my-3">
                    <div class="row mx-auto my-auto justify-content-center">           
                      <!-- Product List -->
                      <div class="row" id="Best">
                        <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                      </div>
                    </div>
                  </div>
                  <!--fetured picture-->
                  <div class="carousel-item active">
                    <img src="Pictures\RainforestAdd.jpg" class="d-none d-md-block w-100" alt="Rainforest3" height="850rem">
                    <img src="Pictures\Generated2.jpg" class="d-xs-block d-md-none w-100" alt="Rainforest3" height="700rem">
                    <div class="carousel-caption caption2">
                      <a href="Fundations.php">
                        <p class="sizelg">Support with us!</p>
                        <p class="sizesm">Check out the fundations we work with</p>
                      </a>
                    </div>
                  </div>
                  
                </div>
                  
                  <footer>
                    <?php include('Footer.php'); ?>    
                  </footer>


    <script>
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
      
    function Add_To(ids){
      $.ajax({
        url: "addToCart.php",
        method: 'POST',
        data: {
          ids: ids
        },
        success: function (response)
        {
          if (response.match("1")) {
            alert("Product added to cart");
          }
          else if (response.match("2")){
            alert("Product already in cart");
          }
        }
      });
      
    }
  </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="customjs.js"></script>

</body>
</html>  
