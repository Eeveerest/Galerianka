<?php
session_start();
require_once 'database.php';
  if(!isset($_SESSION['user_login'])){
    echo "<script>window.location.href = '/LogIn.php';   </script>";
    }
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
  <script type="text/javascript" src="UserOrders.js"></script>
  

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
              <a class="nav-link active link-border category-link" aria-current="page" href="UserPanel.php">Back</a>
            </li>
          </ul>
      </div>
     </div>
    </nav>      
    <!--End Separator-->
    <!-- Account-->
    <div style="display: flex">
    
        </div>
    <!-- Logout -->
        <div class="col justify-content-center">
        <div class="card card1" style="width: 70%; margin: auto; margin-top: 1rem; margin-bottom: 1rem">
          <div class="card-header black-border text-center" style="border-radius: 20px;margin: auto; margin-bottom: 0.5rem; width: 35%; ">
            <h3>Order history</h3>  
          </div>
          <!-- Product List -->
          <div class="row" id="productData">
            <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
          </div>
          
          </div>
        </div>
    </div>



    <footer>
      <?php include('Footer.php'); ?>    
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="UserOrders.js"></script>

  </body>
</html>   