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
  <script type="text/javascript" src="RegisterJS.js"></script>
  

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
    </nav>      
    <!--End Separator-->

        <!-- Register-->
      <div class="col d-flex justify-content-center h-100">
        <div class="card card1">
          <div class="card-header black-border text-center" style="border-radius: 20px;">
            <h3>Sign Up</h3>
            
          </div>
          <div class="card-body">
                    
                    <!-- Register form -->
            <form id="formRegister" method="post">
             <div class="mb-3">
                <input type="text" class="form-control input1" id="Login" placeholder="Login">
                <span class="error" id="UserError"></span>
              </div>
              
              <div class="mb-3">
                <input type="email" class="form-control input1" id="Email" placeholder="Email">
                <span class="error" id="EmailError"></span>
              </div>
              
             <div class="mb-3">
                <input type="text" class="form-control input1" id="FirstName" placeholder="First name">
                <span class="error" id="FirstNameError"></span>
              </div>
              
              <div class="mb-3">
                <input type="text" class="form-control input1" id="LastName" placeholder="Last name">
                <span class="error" id="LastNameError"></span>
              </div>
           
              <div class="mb-3">
                <input type="password" class="form-control input1" id="Password" placeholder="Password">
                <span class="error" id="PasswordError"></span>
              </div>
              
              <div class="mb-3">
                <input type="password" class="form-control input1" id="RepPassword"  placeholder="Repeat password">
                <span class="error" style="margin-bottom: 25px;" id="RepPasswordError"></span>
              </div>
              
              <div class="mb-3 row align-items-center remember">
                <input type="checkbox" id="Rules"> I have read and agreed with the Terms of use, Rules and the Privacy policy.
                <span class="error" style="margin-bottom: 25px;" id="RulesError"></span>
                
              </div>
              
              <div class="mb-3">
                <input type="submit" class="btn float-right btn-success login" name="submit" id="submit" value="Register" />
              </div>     
            </form>
          </div>
          
          <div class="card-footer">
            <div class="d-flex justify-content-center links">
              <a href="LogIn.php">Go back</a>
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
      <?php include('Footer.php'); ?>    
    </footer>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="RegisterJS.js"></script>
</body>
</html>   
