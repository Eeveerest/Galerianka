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
              <a class="navbar-brand menu-icon" href="BasketPge.php">
                <span><i class="fa-solid fa-basket-shopping" alt="Basket"></i></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Separator-->
    <nav class="navbar navbar-expand blue-border d-none d-md-block">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active link-border" aria-current="page" href="#">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active link-border" aria-current="page" href="#">Add product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active link-border" aria-current="page" href="AdminPanel.php">Back</a>
            </li>
          </ul>
      </div>
     </div>
    </nav>      
    <!--End Separator-->
    
    
    <!-- Table and search-->
    <div class="container list">
        <form action="" method="post" id="searchform">
        <div class="row my-5">
            <div class="col-md-4">
                <input type="text" class="form-control" name="search" id="search" placeholder="ID or name"/>
            </div>
            <div class="col-md-8 text-left">
                <input type="submit" class="btn btn-success" style="margin: 0; border-color: whitesmoke;" name="submit" value="Szukaj" />
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-12">

            <h3>Products</h3>
                <table class="table table1">
                    <thead>
                    <tr>
                        <th class="th1">ID</th>
                        <th class="th1">Name</th>
                        <th class="th1">Price</th>
                        <th class="th1">Manufacturer</th>
                        <th class="th1">Delivery</th>
                        
                      
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody id="productsData">
                    <tr>
                        <td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="UserPanelJS.js"></script>
</body>
</html>   
