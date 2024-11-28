<?php
session_start();
require_once 'database.php';
  if(!isset($_SESSION['user_login'])){
   echo "<script>window.location.href = '/LogIn.php';   </script>";
    }
  else if ($_SESSION['user_type'] != "admin") {
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
  <script type="text/javascript" src="UserPanelJS.js"></script>
  

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
            
          </ul>
      </div>
     </div>
    </nav>      
    <!--End Separator-->

    <!-- Logout -->
        <div class="col d-flex justify-content-center h-100">
        <div class="card card1">
          <div class="card-header black-border text-center" style="border-radius: 20px; margin-bottom: 0.5rem">
            <h3>Admin Panel</h3>  
          </div>
          
          <!-- Panel buttons -->
          <button class="btn btn-success spacer panel-btn" id="product_btn"><a href="AdminProduct.php" id="product_manage">Products and categories</a></button>
          <button class="btn btn-success spacer panel-btn" id="client_btn"><a href="AdminClients.php"  id="client_manage">Clients</a></button>
          <button class="btn btn-success spacer panel-btn" id="order_btn"><a href="AdminOrders.php"  id="order_manage">Orders</a></button>
          <button class="btn btn-success spacer panel-btn" id="shipping_btn"><a href="AdminDelivery.php"  id="shipping_manage">Delivery</a></button>
          <button class="btn btn-success spacer panel-btn" id="payment_btn"><a href="AdminPayments.php"  id="payment_manage">Payments</a></button>
          <!--<button class="btn btn-success spacer panel-btn" id="subpage_btn"><a href="#"  id="subpage_manage">Podstrony</a></button>-->
          
          <button class="btn btn-success "  id="log_out" style="margin-bottom: 1.5rem"><a id="log_out_ref">Logout</a></button>
        </div>
        </div>
        </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="UserPanelJS.js"></script>
</body>
</html>   
