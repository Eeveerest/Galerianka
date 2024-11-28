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
  <script type="text/javascript" src="ProductTactical.js"></script>
  

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
      </div>
    </nav>      
    <!--End Separator-->
    
    <!-- Products -->
    <section class="section-products">
      <div class="container">
        <!-- Product Class Title -->
        <nav class="navbar navbar-expand black-border">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
              <a class="navbar-brand brand1"><b>Tactical Knives</b></a>
              <ul class="navbar-nav ms-auto">
                
                <form action="" method="post" id="searchform" class="d-flex">
                  <input type="text" class="form-control me-2" id="search" name="search" placeholder="Product name" aria-label="Search">
                  <!-- Sort products -->                 
                  <select class="nav-item dropdown link-border cat-dropdown nav-link active dropdown-toggle filter-dropdown" id="product_sort">
                    <option class="select-item" value="none">Sort</option>
                    <option class="select-item" value="filter_one">Least expensive</option>
                    <option class="select-item" value="filter_two">Most expensive</option>
                    <option class="select-item" value="filter_three">A-Z</option>
                    <option class="select-item" value="filter_four">Z-A</option>
                  </select>
                  <input type="submit" class="btn btn-success category-link" style="margin-right: 0.5rem" name="submit" value="Search">
                </form>
              </ul>
            </div>
          </div>
        </nav>
        
        
        <!-- Product List -->
        <div class="row" id="productData">
          <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
        
        
      </div>
    </section>
    <!-- Pagination-->
    <nav aria-label="page-navigation">
      <ul class="pagination justify-content-center" style="margin: 2rem;">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
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
    <script type="text/javascript" src="ProductTactical.js"></script>

</body>
</html>  

