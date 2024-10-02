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
  <link href="custom.css" rel="stylesheet">
  <script type="text/javascript" src="LoginJS.js"></script>
  

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
              <a class="navbar-brand menu-icon" href="Login.php">
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

    <!-- Login -->
        <div class="col d-flex justify-content-center h-100">
        <div class="card card1">
          <div class="card-header black-border text-center" style="border-radius: 20px;">
            <h3>Log In</h3>
            
          </div>
          <div class="card-body">
                    
            <form id="loginform" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" id="Username" aria-describedby="UserHelp" placeholder="Login">
                    <span class="error" id="UserError"></span>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="Password" placeholder="Password">
                    <span class="error" id="passwordError"></span>
                </div>
                <input type="submit" class="btn float-right btn-success login" name="submit" id="submit" value="Zaloguj" />
            </form>    
       
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-center links">
              Don't have an account?<a href="Register.php">Sign Up</a>
            </div>
            <div class="links2 d-flex justify-content-center">
              <a href="ResetPswd.php">Forgot your password?</a>
            </div>
          </div>
        </div>
      </div>

  </div>
        
        

        
       <!-- <div class="col-6 spacer" id="logedin" style="display: none">
         <tbody id="roller">
            <tr>
                <td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>
            </tr>
         </tbody> -->
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
   
    <?php
    if(isset($_SESSION['user_id'])){
       $ID=$_SESSION['user_id'];
    $user = $pdo->prepare('SELECT * from reader WHERE ID='.$ID);
    $user->execute();
    list($ID,$imie,$nazwisko,$adr_zam,$nr_dok,$haslo) = $user->fetch( PDO::FETCH_NUM );
    
    if ($_SESSION['user_type']=="admin"){
        echo "<script> var admin_log = 1;</script>";
    }
    echo "<script> var ID = ", $_SESSION['user_id'],";prev_loged();";
    echo "document.getElementById('ID').value = ID;
    document.getElementById('named').value ='",$imie,
    "';document.getElementById('surname').value ='",$nazwisko,
    "';document.getElementById('haddress').value ='",$adr_zam,
    "';document.getElementById('doc').value ='",$nr_dok,
    "';</script>";
       
}
    
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="LoginJS.js"></script>
</body>
</html>   