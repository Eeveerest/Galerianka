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
  <link href="./custom.css" rel="stylesheet">

</head>

<body>
  <div class="main">
    <!--menu-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(23, 23, 23, 0.6)">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" center>
          <img
            src="https://img.freepik.com/premium-zdjecie/kapibara-hydrochoerus-hydrochaeris-najwiekszy-zywy-gryzon-na-swiecie_45756-348.jpg?w=740"
            alt="" width="70" height="54">Galerianka</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1"
          aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent1">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="Fundations.php">Fundations</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link menu1 dropdown-toggle" id="Dropdown1" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <b>Shop</b>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="Dropdown1">
                <li><a class="dropdown-item" href="Hunting.php">Hunting</a></li>
                <li><a class="dropdown-item" href="Tactical.php">Tactical</a></li>
                <li><a class="dropdown-item" href="BigKnives.php">Big Knives</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="navbar-brand menu-icon" href="LogIn.php">
                <span><i class="fa-solid fa-user" alt="User"></i></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand menu-icon" href="BasketPge.php">
                <span><i class="fa-solid fa-basket-shopping alt="Basket"></i></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Separator-->
    <nav class="navbar navbar-expand blue-border d-none d-md-block">
      <div class="container-fluid">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">
              <img src="Pictures\SearchIcon.png" alt="User" width="25" height="25">
            </button>
          </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active link-border" aria-current="page" href="Tactical.php">Tactical</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active link-border" aria-current="page" href="Hunting.php">Hunting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active link-border" aria-current="page" href="BigKnives.php">Big Knives</a>
            </li>
          </ul>
      </div>
    </nav>      
    <!--End Separator-->
    
    <section class="section-products">
      <div class="container">
        <!-- Product Class Title -->
        <<nav class="navbar navbar-expand black-border">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
              <a class="navbar-brand brand1"><b>Big Knives</b></a>
              <ul class="navbar-nav ms-auto">
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-success" style="margin-right: 1rem;" type="submit">
                    <img src="Pictures\SearchIcon.png" alt="User" width="25" height="25">
                  </button>
                  </form>
                  <li class="nav-item dropdown link-border">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="Pictures\SortIcon.png" alt="User" width="20" height="20">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                      <li><a class="dropdown-item" href="#">Least expensive</a></li>
                      <li><a class="dropdown-item" href="#">Most expensive</a></li>
                      <li><a class="dropdown-item" href="#">A-Z</a></li>
                      <li><a class="dropdown-item" href="#">Z-A</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
          </nav>

          <!-- Product List -->
          <div class="row">
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                      <div class="img-box picture-border">
                        <a href="Product1.php">
                          <img src="Pictures/Knife1.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                      </div>
                  </div>
                  <div class="thumb-content name-border text-center">
                    <a href="Product1.php">
                    <h4 >Sony Headphone</h4></a>
                    <p class="item-price"><b>$23.99</b></p>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                  </div>
              </div>
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                      <div class="img-box picture-border">
                        <a href="Product1.php">
                          <img src="Pictures/Knife1.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                      </div>
                  </div>
                  <div class="thumb-content name-border text-center">
                    <a href="Product1.php">
                    <h4 >Sony Headphone</h4></a>
                    <p class="item-price"><b>$23.99</b></p>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                  </div>
              </div>
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                      <div class="img-box picture-border">
                        <a href="Product1.php">
                          <img src="Pictures/Knife1.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                      </div>
                  </div>
                  <div class="thumb-content name-border text-center">
                    <a href="Product1.php">
                    <h4 >Sony Headphone</h4></a>
                    <p class="item-price"><b>$23.99</b></p>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                  </div>
              </div>
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                      <div class="img-box picture-border">
                        <a href="Product1.php">
                          <img src="Pictures/Knife1.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                      </div>
                  </div>
                  <div class="thumb-content name-border text-center">
                    <a href="Product1.php">
                    <h4 >Sony Headphone</h4></a>
                    <p class="item-price"><b>$23.99</b></p>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                  </div>
              </div>
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                      <div class="img-box picture-border">
                        <a href="Product1.php">
                          <img src="Pictures/Knife1.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                      </div>
                  </div>
                  <div class="thumb-content name-border text-center">
                    <a href="Product1.php">
                    <h4 >Sony Headphone</h4></a>
                    <p class="item-price"><b>$23.99</b></p>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                  </div>
              </div>
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                      <div class="img-box picture-border">
                        <a href="Product1.php">
                          <img src="Pictures/Knife1.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                      </div>
                  </div>
                  <div class="thumb-content name-border text-center">
                    <a href="Product1.php">
                    <h4 >Sony Headphone</h4></a>
                    <p class="item-price"><b>$23.99</b></p>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                  </div>
              </div>
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                      <div class="img-box picture-border">
                        <a href="Product1.php">
                          <img src="Pictures/Knife1.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                      </div>
                  </div>
                  <div class="thumb-content name-border text-center">
                    <a href="Product1.php">
                    <h4 >Sony Headphone</h4></a>
                    <p class="item-price"><b>$23.99</b></p>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                  </div>
              </div>
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                      <div class="img-box picture-border">
                        <a href="Product1.php">
                          <img src="Pictures/Knife1.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                      </div>
                  </div>
                  <div class="thumb-content name-border text-center">
                    <a href="Product1.php">
                    <h4 >Sony Headphone</h4></a>
                    <p class="item-price"><b>$23.99</b></p>
                    <a href="#" class="btn btn-success">Add to Cart</a>
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                  </div>
              </div>
              <!-- End Product -->
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
    <div class="container-fluid d-flex justify-content-between align-bottom" style="padding: .25rem; margin: .25rem;">
      <div class="col-xs-1 col-md-3 footer-icon">
        <hr style="width: 75%;">
        <span><i class="green-border fa-brands fa-facebook"></i></span>
        <span><i class="green-border fa-brands fa-twitter"></i></span>
        <span><i class="green-border fa-brands fa-instagram"></i></span>
        <span><i class="green-border fa-brands fa-youtube"></i></span>
      </div>

      <div class="col d-flex justify-content-end c-link" style="text-align: end;">
        <div class="col-3 f-col">
          <h5>Informtion</h5>
          <hr>
          <a href="#"><p>About Company</p></a>
          <a href="#"><p>Contact</p></a>
          <a href="#"><p>Usage remarks</p></a>
        </div>
        
        <div class="col-3 f-col">
          <h5>Order</h5>
          <hr>
          <a href="#"><p>Terms and Conditions</p></a>
          <a href="#"><p>Shipping</p></a>
          <a href="#"><p>Payments</p></a>
          <a href="#"><p>Right to cancel</p></a>
          <a href="#"><p>Privacy policy</p></a>
        </div>


        <div class="col-3 f-col" style="margin-right: 2rem;">
          <h5>Contact</h5>
          <hr>
          <a href="#"><p><b>Galerianka</b></p></a>
          <a href="#"><p>Veemkade 368</p></a>
          <a href="#"><p>1019 HE Amsterdam, Netherlnds</p></a>
          <a href="#"><p>+31 492 133 880</p></a>
          <a href="#"><p>info@glerinka.com</p></a>
        </div>
        
      </div>
    </div>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="customjs.js"></script>

</body>

</html>

<!-- Example product card
<div class="col-md-3 ">
  <div class="thumb-wrapper">
      <div class="img-box picture-border">
        <a href="Product1.html">
          <img src="Pictures/Knive1.jpg" class="img-fluid" alt="Headphone">
        </a>
    <div class="thumb-content name-border text-center">
      <a href="Product1.html">
                    <h4 >Sony Headphone</h4></a>
      <p class="item-price"><b>$23.99</b></p>
      <a href="#" class="btn btn-success">Add to Cart</a>
      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
    </div>
  </div>
</div>
-->
