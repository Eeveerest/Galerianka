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
  <script type="text/javascript" src="editAdminClientJS.js"></script>
  
  

</head>

<body>

  <div class="main">
    <!--menu-->
     <!-- Header -->
    <?php include('Header.php'); ?>

    <!--Separator-->
    <nav class="navbar navbar-expand blue-border d-none d-md-block">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active link-border" aria-current="page" href="AdminClients.php">Back</a>
            </li>
          </ul>
      </div>
     </div>
    </nav>      
    <!--End Separator-->
    
    <div class="container list">
      <h3 id="login">Client</h3>
           <form id="editform" method="post">              
              <div class="mb-3 acc_data">
                <input type="email" class="form-control input1" id="Email" placeholder="Email">
                <span class="error" id="EmailError"></span>
              </div>
              
             <div class="mb-3 acc_data">
                <input type="text" class="form-control input1" id="FirstName" placeholder="First name">
                <span class="error" id="FNameError"></span>
              </div>
              
              <div class="mb-3 acc_data">
                <input type="text" class="form-control input1" id="LastName" placeholder="Last name">
                <span class="error" id="LNameError"></span>
              </div>
              
             <div class="mb-3 acc_data">
                <input type="text" class="form-control input1" id="City" placeholder="City">
              </div>
              
              <div class="mb-3 acc_data">
                <input type="text" class="form-control input1" id="Postcode" placeholder="Postcode">
              </div>
              
             <div class="mb-3 acc_data">
                <input type="number" class="form-control input1" id="House" placeholder="House number">
              </div>
              
              <div class="mb-3 acc_data">
                <input id="ClientID" type="hidden" value="<?php echo $_GET['id']; ?>" />
                <input type="submit" class="btn float-right btn-success login" name="submit" id="submit" value="Edit" />
              </div>     
            </form>

    </div>

    <div class="container list">
      <h3>Note</h3>
      <textarea rows="4" style="width: 100%; border-radius: 0.5rem" name="comment" id="comment" form="noteform" placeholder="Enter note here..."> </textarea>
      <form id="noteform" method="post">
        
        <input type="submit" class="btn float-right btn-success login" name="submit-note" id="submit-note" value="Save" />
      </form>
    </div>

<?php
    $user = $pdo->prepare('SELECT login, name, surname, email, city, code, house, notes from users WHERE login like "'.$_GET['id'].'"');
    $user->execute();
    list($login,$name,$surname,$email,$city,$code,$house,$notes) = $user->fetch( PDO::FETCH_NUM );
    
      echo " <script>
      document.getElementById('login').innerHTML = 'Client ".$login."';
      document.getElementById('FirstName').value ='".$name."';
      document.getElementById('LastName').value ='".$surname."';
      document.getElementById('Email').value ='".$email."';
      document.getElementById('City').value ='".$city."';
      document.getElementById('Postcode').value ='".$code."';
      document.getElementById('House').value ='".$house."';
      document.getElementById('comment').innerHTML ='".$notes."';  
        </script>";
  
  ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="editAdminClientJS.js"></script>
    
    
</body>
</html>   
