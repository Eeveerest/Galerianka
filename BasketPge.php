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
        <a class="navbar-brand" href="index.html" center>
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
              <a class="nav-link" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="Fundations.html">Fundations</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link menu1 dropdown-toggle" id="Dropdown1" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <b>Shop</b>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="Dropdown1">
                <li><a class="dropdown-item" href="Hunting.html">Hunting</a></li>
                <li><a class="dropdown-item" href="Tactical.html">Tactical</a></li>
                <li><a class="dropdown-item" href="BigKnives.html">Big Knives</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="navbar-brand menu-icon" href="Login.php">
                <span><i class="fa-solid fa-user" alt="User"></i></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand menu-icon" href="BasketPge.html">
                <span><i class="fa-solid fa-basket-shopping alt=" Basket"></i></span>
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
              <a class="nav-link active link-border" aria-current="page" href="Tactical.html">Tactical</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active link-border" aria-current="page" href="Hunting.html">Hunting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active link-border" aria-current="page" href="BigKnives.html">Big Knives</a>
            </li>
          </ul>
        </div>
    </nav>
    <!--End Separator-->
    <div class="container" style="margin-top: 1rem; margin-bottom: 1rem;">
      <div class="col justify-content-center align-items-center red-border">

        <div class="table-responsive">
          <table class="table table2">
            <thead class="black-border">
              <tr>
                <th scope="col " class="h5">Shopping Bag</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <div class="d-flex align-items-center">
                    <img src="Pictures\Knife1.jpg" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                    <div class="flex-column ms-4">
                      <p class="mb-2">Thinking, Fast and Slow</p>
                      <p class="mb-0">Daniel Kahneman</p>
                    </div>
                  </div>
                </th>
                <td class="align-middle">
                  <div class="d-flex flex-row">
                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>

                    <input id="form1" min="0" name="quantity" value="1" type="number"
                      class="form-control form-control-sm" style="width: 50px;" />

                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </td>
                <td class="align-middle">
                  <p class="mb-0" style="font-weight: 500;">$9.99</p>
                </td>
              </tr>
              <tr>
                <th scope="row" class="border-bottom-1">
                  <div class="d-flex align-items-center">
                    <img src="Pictures\Knife2.jpg" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                    <div class="flex-column ms-4">
                      <p class="mb-2">Homo Deus: A Brief History of Tomorrow</p>
                      <p class="mb-0">Yuval Noah Harari</p>
                    </div>
                  </div>
                </th>
                <td class="align-middle border-bottom-1">
                  <div class="d-flex flex-row">
                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>

                    <input id="form1" min="0" name="quantity" value="1" type="number"
                      class="form-control form-control-sm" style="width: 50px;" />

                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </td>
                <td class="align-middle border-bottom-1">
                  <p class="mb-0" style="font-weight: 500;">$13.50</p>
                </td>
              </tr>
              <tr>
                <th scope="row" class="border-bottom-1">
                  <div class="d-flex align-items-center">
                    <img src="Pictures\Knife3.jpg" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                    <div class="flex-column ms-4">
                      <p class="mb-2">Six of Crows</p>
                      <p class="mb-0">Leigh Bardugo</p>
                    </div>
                  </div>
                </th>
                <td class="align-middle border-bottom-1">
                  <div class="d-flex flex-row">
                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>

                    <input id="form1" min="0" name="quantity" value="1" type="number"
                      class="form-control form-control-sm" style="width: 50px;" />

                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </td>
                <td class="align-middle border-bottom-1">
                  <p class="mb-0" style="font-weight: 500;">$30.50</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>


        <div class="col d-md-flex justify-content-between" style="margin-top: 1rem;">

          <div class="col col-md-6 col-lg-5 black-border">
            <form>
              <div class="d-flex pb-3">
                <div class="d-flex align-items-center pe-2">
                  <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1v" value=""
                    aria-label="..." checked />
                </div>
                <div class="w-100 p-3">
                  <p class="d-flex align-items-center mb-0">
                    <i class="fab fa-cc-mastercard fa-2x icon3 pe-2"></i>Credit
                    Card
                  </p>
                </div>
              </div>
              <div class="d-flex pb-3">
                <div class="d-flex align-items-center pe-2">
                  <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2v" value=""
                    aria-label="..." />
                </div>
                <div class="w-100 p-3">
                  <p class="d-flex align-items-center mb-0">
                    <i class="fab fa-cc-visa fa-2x fa-lg icon3 pe-2"></i>Debit Card
                  </p>
                </div>
              </div>
              <div class="d-flex">
                <div class="d-flex align-items-center pe-2">
                  <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel3v" value=""
                    aria-label="..." />
                </div>
                <div class="w-100 p-3">
                  <p class="d-flex align-items-center mb-0">
                    <i class="fab fa-cc-paypal fa-2x fa-lg icon3 pe-2"></i>PayPal
                  </p>
                </div>
              </div>
            </form>
          </div>

          <div class="col col-md-6 col-lg-5 black-border justify-content-end">
            <div class="d-flex justify-content-between" style="font-weight: 500;">
              <p class="mb-2">Subtotal</p>
              <p class="mb-2">$23.49</p>
            </div>

            <div class="d-flex justify-content-between" style="font-weight: 500;">
              <p class="mb-0">Shipping</p>
              <p class="mb-0">$2.99</p>
            </div>

            <hr class="my-4 hr2">

            <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
              <p class="mb-2">Total (tax included)</p>
              <p class="mb-2">$26.48</p>
            </div>

            <button type="button" class="btn btn-success btn-block btn-lg" style="width: calc(100% - 5em); float: right;">
              <div class="d-flex justify-content-between">
                <span>Checkout</span>
                <span>$268.99</span>
              </div>
            </button>


          </div>

        </div>

      </div>
    </div>

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
          <a href="#">
            <p>About Company</p>
          </a>
          <a href="#">
            <p>Contact</p>
          </a>
          <a href="#">
            <p>Usage remarks</p>
          </a>
        </div>

        <div class="col-3 f-col">
          <h5>Order</h5>
          <hr>
          <a href="#">
            <p>Terms and Conditions</p>
          </a>
          <a href="#">
            <p>Shipping</p>
          </a>
          <a href="#">
            <p>Payments</p>
          </a>
          <a href="#">
            <p>Right to cancel</p>
          </a>
          <a href="#">
            <p>Privacy policy</p>
          </a>
        </div>


        <div class="col-3 f-col" style="margin-right: 2rem;">
          <h5>Contact</h5>
          <hr>
          <a href="#">
            <p><b>Galerianka</b></p>
          </a>
          <a href="#">
            <p>Veemkade 368</p>
          </a>
          <a href="#">
            <p>1019 HE Amsterdam, Netherlnds</p>
          </a>
          <a href="#">
            <p>+31 492 133 880</p>
          </a>
          <a href="#">
            <p>info@glerinka.com</p>
          </a>
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

<!-- Example item

                <tr>
                <th scope="row" class="border-bottom-1">
                  <div class="d-flex align-items-center">
                    <img src="Pictures\Knife2.jpg" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                    <div class="flex-column ms-4">
                      <p class="mb-2">Homo Deus: A Brief History of Tomorrow</p>
                      <p class="mb-0">Yuval Noah Harari</p>
                    </div>
                  </div>
                </th>
                <td class="align-middle border-bottom-1">
                  <p class="mb-0" style="font-weight: 500;">Paperback</p>
                </td>
                <td class="align-middle border-bottom-1">
                  <div class="d-flex flex-row">
                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>

                    <input id="form1" min="0" name="quantity" value="1" type="number"
                      class="form-control form-control-sm" style="width: 50px;" />

                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </td>
                <td class="align-middle border-bottom-1">
                  <p class="mb-0" style="font-weight: 500;">$13.50</p>
                </td>
              </tr>

-->
