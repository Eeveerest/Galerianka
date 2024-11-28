<?php
session_start();
require_once 'database.php';
  if(!isset($_SESSION['user_login'])){
   echo "<script>window.location.href = '/LogIn.php';   </script>";
    }
  else if ($_SESSION['user_type'] != "admin") {
    echo "<script>window.location.href = '/LogIn.php';   </script>";
  
  
  }
  $dataprod = $pdo -> query('SELECT * from orders where id='.$_GET['id']);
  $dataprod = $dataprod -> fetch();
  $orderdata = $pdo -> query('SELECT product_id, quantity from order_products where id='.$_GET['id']);
  //$productdata = $pdo->query('SELECT name,price FROM products WHERE id in '.$orderdata['product_id']);
 // $productdata = $productdata-> fetch();
  $paydata = $pdo->query('SELECT name FROM payment_types WHERE id = '.$dataprod['payment_type_id']);
  $paydata = $paydata -> fetch();
  $delivdata = $pdo->query('SELECT name FROM delivery WHERE id = '.$dataprod['delivery_id']);
  $delivdata = $delivdata -> fetch();
  
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
  <script type="text/javascript" src="editAdminOrdersJS.js"></script>
  
  

</head>

<body>

  <div class="main">
    <!--menu-->
        <footer>
      <?php include('Header.php'); ?>    
    </footer>
    <!--Separator-->
    <nav class="navbar navbar-expand blue-border d-none d-md-block">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active link-border" aria-current="page" href="AdminOrders.php">Back</a>
            </li>
          </ul>
      </div>
     </div>
    </nav>      
    <!--End Separator-->
    
    <div class="container list">
      <h3>Order</h3>
          <form action="" method="post" id="editform">    
        <div class="modal-body">
          <input typr="text" id="ProductId" value="<?php echo $_GET['id'];?>" style="visibility: hidden;">
       <div class="form-group">
            <label for="InputLogin">Customer login</label>
            <select class="form-control" id="InputLogin" name="InputLogin">
                <option value="<?php echo $dataprod['client_login']?>"><?php echo $dataprod['client_login'];?> </option>
                <option value=""> </option>
                        <?php  
                         $publish = $pdo->query('SELECT login FROM users');
                        foreach ($publish as $row) {
                        echo '<option value="'.$row['login'].'">'.$row['login'].'</option>"';
                            }
                        ?>
            </select>
            <span class="error" id="loginError"></span>
        </div>   
        <div class="form-group">
            <label for="InputPrice">Total price</label>
            <input type="number" class="form-control" step="0.01" name="InputPrice" id="InputPrice" value="<?php echo $dataprod['price']?>">
            <span class="error" id="priceError"></span>
        </div>
        <div class="form-group">
            <label for="InputType">Payment type</label>
            <select class="form-control" id="InputType" name="InputType">
                <option value="<?php echo $dataprod['payment_type_id']?>"><?php echo $paydata['name'];?> </option>
                        <?php  
                         $publish = $pdo->query('SELECT id, name FROM payment_types where id not like '.$dataprod['payment_type_id'].'');
                        foreach ($publish as $row) {
                        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>"';
                            }
                        ?>
            </select>
            <span class="error" id="typeError"></span>
        </div> 
        <div class="form-group">
            <label for="InputDeliv">Delivery</label>
            <select class="form-control" id="InputDeliv" name="InputDeliv">
                <option value="<?php echo $dataprod['delivery_id']?>"><?php echo $delivdata['name'];?> </option>
                        <?php  
                         $publish = $pdo->query('SELECT id, name FROM delivery where id not like '.$dataprod['delivery_id'].'');
                        foreach ($publish as $row) {
                        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>"';
                            }
                        ?>
            </select>
            <span class="error" id="delivError"></span>
        </div>
        <div class="form-group">
            <label for="InputDatePlaced">Date placed</label>
            <input type="date" class="form-control" step="0" name="InputDatePlaced" id="InputDatePlaced" value="<?php echo $dataprod['date_placed']?>">
            <span class="error" id="placedError"></span>
        </div>
        <div class="form-group">
            <label for="InputDateShipped">Date shipped</label>
            <input type="date" class="form-control" step="0" name="InputDateShipped" id="InputDateShipped" value="<?php echo $dataprod['date_shipped'];?>">
            <span class="error" id="shippedError"></span>
        </div>  
       <div class="form-group">
            <label for="InputDetails">Details</label>
            <input type="text" class="form-control" name="InputDetails" id="InputDetails" value="<?php echo $dataprod['delivery_data'];?>">
            <span class="error" id="detailsError"></span>
        </div>
             
        <div class="modal-footer">
        <a href=AdminOrders.php><button type="button" class="btn btn-secondary" style="margin-top: 1rem; margin-right: 1rem;" data-bs-dismiss="modal">Close</button></a>
        <input type="submit" class="btn btn-success btn-whitesmoke" style="color: white; margin-top: 1rem;" name="submit-edit" id="submit-edit" value="Edit" > 
      </div>    
    </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="editAdminOrdersJS.js"></script>
    
    
</body>
</html>   