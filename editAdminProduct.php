<?php
session_start();
require_once 'database.php';
  if(!isset($_SESSION['user_login'])){
   echo "<script>window.location.href = '/LogIn.php';   </script>";
    }
  else if ($_SESSION['user_type'] != "admin") {
    echo "<script>window.location.href = '/LogIn.php';   </script>";
  
  
  }
  $dataprod = $pdo -> query('SELECT * from products where id='.$_GET['id']);
  $dataprod = $dataprod -> fetch();
  $mandata = $pdo->query('SELECT name FROM manufacturers WHERE id = '.$dataprod['manufacturer_id']);
  $mandata = $mandata -> fetch();

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
  <script type="text/javascript" src="editAdminProductJS.js"></script>
  
  

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
              <a class="nav-link active link-border" aria-current="page" href="AdminProduct.php">Back</a>
            </li>
          </ul>
      </div>
     </div>
    </nav>      
    <!--End Separator-->
    
    <div class="container list">
      <h3>Product</h3>
          <form action="" method="post" id="editform" enctype="multipart/form-data">    
        <div class="modal-body">
          <input typr="text" id="ProductId" value="<?php echo $_GET['id'];?>" style="visibility: hidden;">
       <div class="form-group">
            <label for="InputName">Name</label>
            <input type="text" class="form-control" name="InputName" id="InputName" value="<?php echo $dataprod['name']?>">
            <span class="error" id="nameError"></span>
        </div>   
      <div class="form-group">
            <label for="InputPrice">Price</label>
            <input type="number" class="form-control" step="0.01" name="InputPrice" id="InputPrice" value="<?php echo $dataprod['price']?>">
            <span class="error" id="priceError"></span>
        </div>
        <div class="form-group">
            <label for="InputMan">Manufacturer</label>
            <select class="form-control" id="InputMan" name="InputMan">
                <option value="<?php echo $dataprod['manufacturer_id']?>"><?php echo $mandata['name'];?> </option>
                        <?php  
                         $publish = $pdo->query('SELECT id, name FROM manufacturers');
                        foreach ($publish as $row) {
                        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>"';
                            }
                        ?>
            </select>
            <span class="error" id="manError"></span>
        </div>
        <div class="form-group">
            <label for="InputPrice">Photo</label>
            <input type="file" class="form-control" name="InputPhoto" id="InputPhoto" value="" accept="image/png, image/jpg, image/jpeg">
            <span class="error" id="priceError"></span>
        </div>
      </div>   
    <div class="modal-footer">
        <a href=AdminProduct.php><button type="button" class="btn btn-secondary" style="margin-top: 1rem; margin-right: 1rem;" data-bs-dismiss="modal">Close</button></a>
        <input type="submit" class="btn btn-success btn-whitesmoke" style="color: white; margin-top: 1rem;" name="submit-edit" id="submit-edit" value="Edit" />
      </div>          
    </form>
    </div>

        <div class="container list">
      <h3>Parameters</h3>
      <textarea rows="4" style="width: 100%; border-radius: 0.5rem" name="comment" id="comment" form="noteform" placeholder="Enter parameters here..."> </textarea>
      <form id="noteform" method="post">
        
        <input type="submit" class="btn float-right btn-success login" name="submit-note" id="submit-note" value="Save" />
      </form>
    </div>

<?php
    $user = $pdo->prepare('SELECT parameters from products WHERE id = '.$_GET['id'].'');
    $user->execute();
    list($parameters) = $user->fetch( PDO::FETCH_NUM );  
      echo " <script>
      document.getElementById('comment').value ='".$parameters."';  
        </script>";
  
  ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="editAdminProductJS.js"></script>
    
    
</body>
</html>   
