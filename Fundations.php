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
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
              <a class="navbar-brand menu-icon" href="BasketPge.php#">
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
    <div class="container-fluid justify-content-center h-100">
      <div class="col-md-11 name-border" style="margin-top: 2rem;">
        <h3>Rainforests are disappearing at alarming rates.</h3>
      </div>
      <div class="col-md-11 fund-border">
        <p>Since the 1960s, nearly half of the world’s rainforests have been destroyed. What once covered 14% of the
          earth, now covers only 6%.
          Every day, the world loses about 81,000 hectares (200,000 acres) of rainforests.</p>
        <p>The good news is there are a lot of people who want to save rainforests. The bad news is that saving
          rainforests is not going to be easy.<br>
          It will take the efforts of many people working together in order to ensure that rainforests and their
          wildlife will survive for your children to appreciate, enjoy, and benefit from.</p>
        </p>
        <p><b>We want to do our part, so these are the fundations we work with to help.</b></p>
      </div>

      <div class="col-md-11 fund-border" style="margin-top: 2rem; ">
        <a href="https://www.rainforesttrust.org"><img src="Pictures\RainforestTrust.png"
            style="border-radius: 5px;"></a>
        <h3>Rainforest Trust</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Vivamus eu volutpat ex, id tempor libero.<br>In malesuada diam a enim posuere, ac malesuada nibh mollis.
          Nullam rutrum nisl interdum rhoncus commodo. Aliquam iaculis, ante sit amet eleifend hendrerit,
          libero nulla dignissim tortor, ac dignissim nisl nulla nec leo.
          Donec sit amet nibh turpis. Pellentesque at bibendum lorem, et facilisis tellus.<br>
          Nunc laoreet venenatis eros, ac tempor eros facilisis sagittis.
          Quisque venenatis gravida elit vitae consectetur.</p>

      </div>

      <div class="col-md-11 fund-border" style="margin-top: 2rem;">
        <a href="https://www.rainforest-alliance.org"><img src="Pictures\RainforestAlliance.png"
            style="border-radius: 5px;"></a>
        <h3>Rainforest Alliance</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Vivamus eu volutpat ex, id tempor libero.<br>In malesuada diam a enim posuere, ac malesuada nibh mollis.
          Nullam rutrum nisl interdum rhoncus commodo. Aliquam iaculis, ante sit amet eleifend hendrerit,
          libero nulla dignissim tortor, ac dignissim nisl nulla nec leo.
          Donec sit amet nibh turpis. Pellentesque at bibendum lorem, et facilisis tellus.<br>
          Nunc laoreet venenatis eros, ac tempor eros facilisis sagittis.
          Quisque venenatis gravida elit vitae consectetur.</p>

      </div>

      <div class="col-md-11 fund-border" style="margin-top: 2rem;">
        <a href="https://amazonwatch.org"><img src="Pictures\AamzonWatch.png" style="border-radius: 5px;"></a>
        <h3>Aamzon Watch</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Vivamus eu volutpat ex, id tempor libero.<br>In malesuada diam a enim posuere, ac malesuada nibh mollis.
          Nullam rutrum nisl interdum rhoncus commodo. Aliquam iaculis, ante sit amet eleifend hendrerit,
          libero nulla dignissim tortor, ac dignissim nisl nulla nec leo.
          Donec sit amet nibh turpis. Pellentesque at bibendum lorem, et facilisis tellus.<br>
          Nunc laoreet venenatis eros, ac tempor eros facilisis sagittis.
          Quisque venenatis gravida elit vitae consectetur.</p>

      </div>

      <div class="col-md-11 fund-border" style="margin-top: 2rem; margin-bottom: 2rem;">
        <a href="https://www.mossy.earth"><img src="Pictures\MossyEarth.jfif" style="border-radius: 5px;"></a>
        <h3>Mossy Earth</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Vivamus eu volutpat ex, id tempor libero.<br>In malesuada diam a enim posuere, ac malesuada nibh mollis.
          Nullam rutrum nisl interdum rhoncus commodo. Aliquam iaculis, ante sit amet eleifend hendrerit,
          libero nulla dignissim tortor, ac dignissim nisl nulla nec leo.
          Donec sit amet nibh turpis. Pellentesque at bibendum lorem, et facilisis tellus.<br>
          Nunc laoreet venenatis eros, ac tempor eros facilisis sagittis.
          Quisque venenatis gravida elit vitae consectetur.</p>

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
