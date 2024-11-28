<?php
session_start();
require_once 'database.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galerianka</title>
  <script src="https://kit.fontawesome.com/06d4f426f5.js" crossorigin="anonymous">
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="./custom.css" rel="stylesheet">
</head>

<!-- Holaaa :D
To do list:
 Add website icon
 Add page icon nex to name (the whole logo tbh)
 Fix main product slider
 Chgange pictures?
 Fix heart product?


-->



<body>
  <div class="main">
    <!-- Header -->
    <?php include('Header.php'); ?>
    
    <!--Separator-->
    <nav class="navbar navbar-expand blue-border d-none d-md-block">
      <div class="container-fluid">
        <form class="d-flex" role="search">
            <input class="form-control me-2" id="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">
              <img src="Pictures\SearchIcon.png" alt="User" width="25" height="25">
            </button>
          </form>
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
                  <img src="Pictures\Rainforest1.jpg" class="d-block w-100" alt="Rainforest1" height="700rem">
                  <div class="carousel-caption caption1">
                      <a href="Fundations.php">
                          <p class="sizelg">Support with us!</p>
                          <p class="sizesm">Check out the fundations we work with</p>
                      </a>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="Pictures\Rainforest2.webp" class="d-block w-100" alt="Rainforest2" height="700rem">
                  <div class="carousel-caption caption1">
                      <a href="Fundations.php">
                          <p class="sizelg">Support with us!</p>
                          <p class="sizesm">Check out the fundations we work with</p>
                      </a>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="Pictures\Rainforest5.jpg" class="d-block w-100" alt="Rainforest3" height="700rem">
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
<div class="col name-border2">Hello</div>
    <!--Divider1 -->
    <div class="row justify-content-center text-center" style="margin: 2%;">
      <div class="col-md-8 col-lg-5">
        <div class="header black-border">
          <p style="font-size: 25px; margin: 0%;"><b>New Products</b></p>
        </div>
      </div>
    </div>
    <!--End Divider1-->
    <!-- Carousel 1-->
    <div class="container text-center my-3">
      <div class="row mx-auto my-auto justify-content-center">
        <div id="NewProductCarousel" class="carousel slide carousel1" data-bs-ride="NewProductCarousel">
          <div class="carousel-inner inner1" role="listbox">
            <div class="carousel-item active item1 active1">
                <!-- Product 1 -->
                <div class="col-md-3 ">
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
                <!-- End Product 1-->
            </div>
            <div class="carousel-item item1">
              <!-- Product 2 -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                    <div class="img-box picture-border">
                        <a href="Product2.php">
                          <img src="Pictures/Knife2.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                      </div>
                    <div class="thumb-content name-border text-center">
                      <a href="Product2.php">
                      <h4>Samsung Galaxy S8</h4></a>
                      <p class="item-price"><b>$569.99</b></p>
                      <a href="#" class="btn btn-success">Add to Cart</a>
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    </div>
                </div>
              </div>
              <!-- End Product 2-->
            </div>
            <div class="carousel-item item1">
              <!-- Product 3 -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                    <div class="img-box picture-border">
                        <a href="Product3.php">
                          <img src="Pictures/Knife3.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                    </div>
                    <div class="thumb-content name-border text-center">
                      <a href="Product3.php">
                      <h4>Nikon DSLR</h4></a>
                      <p class="item-price"><b>$250.00</b></p>
                      <a href="#" class="btn btn-success">Add to Cart</a>
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    </div>
                </div>
              </div>
              <!-- End Product 3-->
            </div>
            <div class="carousel-item item1">
              <!-- Product 4 -->
              <div class="col-md-3 ">
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
              <!-- End Product 4-->
            </div>
            <div class="carousel-item item1">
              <!-- Product 5 -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                    <div class="img-box picture-border">
                        <a href="Product2.php">
                          <img src="Pictures/Knife2.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                    </div>
                    <div class="thumb-content name-border text-center">
                      <a href="Product2.php">
                      <a href="Product2.php">
                      <h4>Samsung Galaxy S8</h4></a></a>
                      <p class="item-price"><b>$569.99</b></p>
                      <a href="#" class="btn btn-success">Add to Cart</a>
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    </div>
                </div>
              </div>
              <!-- End Product 5-->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                    <div class="img-box picture-border">
                        <a href="Product3.php">
                          <img src="Pictures/Knife3.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                    </div>
                    <div class="thumb-content name-border text-center">
                      <a href="Product3.php">
                      <a href="Product3.php">
                      <h4>Nikon DSLR</h4></a></a>
                      <p class="item-price"><b>$250.00</b></p>
                      <a href="#" class="btn btn-success">Add to Cart</a>
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    </div>
                </div>
              </div>
              <!-- End Product 6-->
            </div>
            <div class="carousel-item item1">
              <!-- Product 7 -->
              <div class="col-md-3 ">
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
              <!-- End Product 7-->
            </div>
            <div class="carousel-item item1">
              <!-- Product 8 -->
               <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                    <div class="img-box picture-border">
                        <a href="Product2.php">
                          <img src="Pictures/Knife2.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                    </div>
                    <div class="thumb-content name-border text-center">
                      <a href="Product2.php">
                      <h4>Samsung Galaxy S8</h4></a>
                      <p class="item-price"><b>$569.99</b></p>
                      <a href="#" class="btn btn-success">Add to Cart</a>
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    </div>
                </div>
              </div>
              <!-- End Product 8-->
              
            </div>
              <a class="carousel-control-prev bg-transparent w-aut" href="#NewProductCarousel" role="button"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon prev-icon1" aria-hidden="true"></span>
              </a>
              <a class="carousel-control-next bg-transparent w-aut" href="#NewProductCarousel" role="button"
                data-bs-slide="next">
                <span class="carousel-control-next-icon next-icon1" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>
      </div>

    

    <!--knives2-->

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
        <div id="BestsellerCarousel" class="carousel slide carousel1" data-bs-ride="BestsellerCarousel">
          <div class="carousel-inner inner1" role="listbox">
            <div class="carousel-item active item1 active1">
                <!-- Product 1 -->
                <div class="col-md-3 ">
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
                <!-- End Product 1-->
            </div>
            <div class="carousel-item item1">
              <!-- Product 2 -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                    <div class="img-box picture-border">
                        <a href="Product2.php">
                          <img src="Pictures/Knife2.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                      </div>
                    <div class="thumb-content name-border text-center">
                      <a href="Product2.php">
                      <h4>Samsung Galaxy S8</h4></a>
                      <p class="item-price"><b>$569.99</b></p>
                      <a href="#" class="btn btn-success">Add to Cart</a>
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    </div>
                </div>
              </div>
              <!-- End Product 2-->
            </div>
            <div class="carousel-item item1">
              <!-- Product 3 -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                    <div class="img-box picture-border">
                        <a href="Product3.php">
                          <img src="Pictures/Knife3.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                    </div>
                    <div class="thumb-content name-border text-center">
                      <a href="Product3.php">
                      <h4>Nikon DSLR</h4></a>
                      <p class="item-price"><b>$250.00</b></p>
                      <a href="#" class="btn btn-success">Add to Cart</a>
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    </div>
                </div>
              </div>
              <!-- End Product 3-->
            </div>
            <div class="carousel-item item1">
              <!-- Product 4 -->
              <div class="col-md-3 ">
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
              <!-- End Product 4-->
            </div>
            <div class="carousel-item item1">
              <!-- Product 5 -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                    <div class="img-box picture-border">
                        <a href="Product2.php">
                          <img src="Pictures/Knife2.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                    </div>
                    <div class="thumb-content name-border text-center">
                      <a href="Product2.php">
                      <h4>Samsung Galaxy S8</h4></a>
                      <p class="item-price"><b>$569.99</b></p>
                      <a href="#" class="btn btn-success">Add to Cart</a>
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    </div>
                </div>
              </div>
              <!-- End Product 5-->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                    <div class="img-box picture-border">
                        <a href="Product3.php">
                          <img src="Pictures/Knife3.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                    </div>
                    <div class="thumb-content name-border text-center">
                      <a href="Product3.php">
                      <h4>Nikon DSLR</h4></a>
                      <p class="item-price"><b>$250.00</b></p>
                      <a href="#" class="btn btn-success">Add to Cart</a>
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    </div>
                </div>
              </div>
              <!-- End Product 6-->
            </div>
            <div class="carousel-item item1">
              <!-- Product 7 -->
              <div class="col-md-3 ">
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
              <!-- End Product 7-->
            </div>
            <div class="carousel-item item1">
              <!-- Product 8 -->
               <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="thumb-wrapper">
                    <div class="img-box picture-border">
                        <a href="Product2.php">
                          <img src="Pictures/Knife2.jpg" class="img-fluid rounded-img" alt="Headphone">
                        </a>
                    </div>
                    <div class="thumb-content name-border text-center">
                      <a href="Product2.php">
                      <h4>Samsung Galaxy S8</h4></a>
                      <p class="item-price"><b>$569.99</b></p>
                      <a href="#" class="btn btn-success">Add to Cart</a>
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    </div>
                </div>
              </div>
              <!-- End Product 8-->

            </div>
              <a class="carousel-control-prev bg-transparent w-aut" href="#BestsellerCarousel" role="button"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon prev-icon1" aria-hidden="true"></span>
              </a>
              <a class="carousel-control-next bg-transparent w-aut" href="#BestsellerCarousel" role="button"
                data-bs-slide="next">
                <span class="carousel-control-next-icon next-icon1" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>
      </div>

    <!--fetured picture-->
    <div class="carousel-item active">
      <img src="Pictures\Generated1.jpg" class="d-none d-md-block w-100" alt="Rainforest3" height="700rem">
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
        <a href="Product1.php">
          <img src="Pictures/Knive1.jpg" class="img-fluid rounded-img" alt="Headphone">
        </a>
    <div class="thumb-content name-border text-center">
      <a href="Product1.php">
                    <h4 >Sony Headphone</h4></a>
      <p class="item-price"><b>$23.99</b></p>
      <a href="#" class="btn btn-success">Add to Cart</a>
      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
    </div>
  </div>
</div>
-->
