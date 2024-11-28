<?php
session_start();
require_once 'database.php';

      if(isset($_SESSION['user_login'])){
      if ($_SESSION['user_type']=="admin"){
        echo "<script>window.location.href = '/AdminPanel.php';   </script>";
      }else {
        echo "<script>window.location.href = '/UserPanel.php';   </script>";
      }
       
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
  <script type="text/javascript" src="LoginJS.js"></script>
  

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
                <input type="submit" class="btn float-right btn-success login" name="submit" id="submit" value="Login" />
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
        



    <footer>
      <?php include('Footer.php'); ?>    
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="LoginJS.js"></script>

</body>
</html>   
