<?php
session_start();
require_once 'database.php';
  if(!isset($_SESSION['user_login'])){
   echo "<script>window.location.href = '/LogIn.php';   </script>";
    }
  else if ($_SESSION['user_type'] != "admin") {
    echo "<script>window.location.href = '/LogIn.php';   </script>";
  
  
  }
  $datadeliv = $pdo -> query('SELECT * from delivery where id='.$_GET['id']);
  $datadeliv = $datadeliv -> fetch();
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
  <script type="text/javascript" src="editAdminDeliveryJS.js"></script>
  
  

</head>

<body>

  <div class="main">
    <!--menu-->
      <?php include('Header.php'); ?>    
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
     </div>
    </nav>      
    <!--End Separator-->
    
    <div class="container list">
      <h3>Delivery</h3>
          <form action="" method="post" id="editform">    
        <div class="modal-body">
          <input typr="text" id="DelivId" value="<?php echo $_GET['id'];?>" style="visibility: hidden;">
       <div class="form-group">
            <label for="InputName">Name</label>
            <input type="text" class="form-control" name="InputName" id="InputName" value="<?php echo $datadeliv['name']?>">
            <span class="error" id="nameError"></span>
        </div>
      <div class="form-group">
            <label for="InputEmail">E-mail</label>
            <input type="email" class="form-control" name="InputEmail" id="InputEmail" value="<?php echo $datadeliv['email']?>">
            <span class="error" id="emailError"></span>
        </div>
       <div class="form-group">
            <label for="InputPhone">Phone</label>
            <input type="tel" class="form-control" name="InputPhone" id="InputPhone" pattern="[0-9]{9}" required value="<?php echo $datadeliv['phone']?>">
            <span class="error" id="phoneError"></span>
        </div>    
      <div class="form-group">
            <label for="InputPrice">Price</label>
            <input type="number" class="form-control" step="0.01" name="InputPrice" id="InputPrice" value="<?php echo $datadeliv['price']?>">
            <span class="error" id="priceError"></span>
        </div>
      
        
      </div>   
    <div class="modal-footer">
        <a href=AdminDelivery.php><button type="button" class="btn btn-secondary" style="margin-top: 1rem; margin-right: 1rem;" data-bs-dismiss="modal">Close</button></a>
        <input type="submit" class="btn btn-success btn-whitesmoke" style="color: white; margin-top: 1rem;" name="submit-edit" id="submit-edit" value="Edit" />
      </div>          
    </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="editAdminDeliveryJS.js"></script>
    
    
</body>
</html>   
