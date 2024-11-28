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
    <!-- Account-->
    <div style="display: flex">
    <div class="col d-flex h-100" >
        <div class="card card1">
          <div class="card-header black-border text-center" style="border-radius: 20px; margin-bottom: 0.5rem">

            <h3>Account</h3>
            </div>
          
               <form id="accountform" method="post">
             <div class="mb-3 acc_data">
                <input type="text" class="form-control input1" id="Login" placeholder="Login" readonly>
                <span class="error" id="UserError"></span>
              </div>
              
              <div class="mb-3 acc_data">
                <input type="email" class="form-control input1" id="Email" placeholder="Email">
                <span class="error" id="EmailError"></span>
              </div>
              
             <div class="mb-3 acc_data">
                <input type="text" class="form-control input1" id="FirstName" placeholder="First name">
                <span class="error" id="FirstNameError"></span>
              </div>
              
              <div class="mb-3 acc_data">
                <input type="text" class="form-control input1" id="LastName" placeholder="Last name">
                <span class="error" id="LastNameError"></span>
              </div>
              
             <div class="mb-3 acc_data">
                <input type="text" class="form-control input1" id="City" placeholder="City">
                <span class="error" id="CityError"></span>
              </div>
              
              <div class="mb-3 acc_data">
                <input type="number" class="form-control input1" id="Postcode" placeholder="Postcode">
                <span class="error" id="PostcodeError"></span>
              </div>
              
             <div class="mb-3 acc_data">
                <input type="number" class="form-control input1" id="HouseNumber" placeholder="House number">
                <span class="error" id="HouseNumberError"></span>
              </div>
           
              <div class="mb-3 acc_data">
                <input type="password" class="form-control input1" id="Password" placeholder="Password">
                <span class="error" id="PasswordError"></span>
              </div>
              
              <div class="mb-3 acc_data">
                <input type="password" class="form-control input1" id="RepPassword"  placeholder="Repeat password">
                <span class="error" style="margin-bottom: 25px;" id="RepPasswordError"></span>
              </div>
              
              <div class="mb-3 acc_data">
                <input type="submit" class="btn float-right btn-success login" name="submit" id="submit" value="Save" />
              </div>     
            </form>

            </div>
        </div>
    <!-- Logout -->
        <div class="col d-flex justify-content-center h-100">
        <div class="card card1">
          <div class="card-header black-border text-center" style="border-radius: 20px; margin-bottom: 0.5rem">
            <h3>User Panel</h3>  
          </div>
          <button class="btn btn-success spacer panel-btn" id="client_btn"><a href="UserFavorites.php"  id="client_fav">Favorites</a></button>
          <button class="btn btn-success spacer panel-btn" id="client_btn"><a href="UserOrders.php"  id="client_order">Order history</a></button>
          <button class="btn btn-success"  id="log_out" style="margin-bottom: 1.5rem"><a id="log_out_ref" style="acc_data">Logout</a></button>
          
          </div>
        </div>
    </div>



    <footer>
      <?php include('Footer.php'); ?>    
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="UserPanelJS.js"></script>
<?php
    if(isset($_SESSION['user_login'])){

    $user = $pdo->prepare('SELECT login, name, surname, email, city, code, house from users WHERE login like "'.$_SESSION['user_login'].'"');
    $user->execute();
    list($login,$name,$surname,$email,$city,$code,$house) = $user->fetch( PDO::FETCH_NUM );
    
      
    echo " <script>
      document.getElementById('Login').value = '".$login."';
      document.getElementById('FirstName').value ='".$name."';
      document.getElementById('LastName').value ='".$surname."';
      document.getElementById('Email').value ='".$email."';
      document.getElementById('City').value ='".$city."';
      document.getElementById('Postcode').value ='".$code."';
      document.getElementById('HouseNumber').value ='".$house."';</script>";
       
}
    
?>
  </body>
</html>   
