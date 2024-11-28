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
  <script type="text/javascript" src="ResetPswdJS.js"></script>

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
              <a class="nav-link active link-border category-link" aria-current="page" href="BigKnives.php">Big Knives</a>
            </li>
          </ul>
      </div>
    </nav>      
    <!--End Separator-->
    <!-- Chg Psswd-->
      <div class="col d-flex justify-content-center h-100">
        <div class="card card1">
          <div class="card-header black-border text-center" style="border-radius: 20px;">
            <h3>Reset Password</h3>
            
          </div>
          <div class="card-body">
            <h6 style="color: whitesmoke;">Enter your email</h6>
            <form id="resetform" method="post">
              <div class="input-group form-group" style="margin-bottom: 0.75rem">
                <input type="email" class="form-control input1" id="emailInput" name="emailInput" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="submit" value="Reset" class="btn float-right btn-success login">
              </div>     
            </form>
            
          <div class="card-footer">
            <div class="d-flex justify-content-center links">
              <a href="LogIn.php">Go back</a>
            </div>
          </div>
        </div>
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
  <script type="text/javascript" src="ResetPswdJS.js"></script>

</body>

</html>
