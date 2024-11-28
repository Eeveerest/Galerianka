<?php
session_start();
require_once 'database.php';

 
$html = '';
list($login,$name,$surname,$email,$city,$code,$house)= "";
  
  if(!empty($_SESSION['cart'])){
    
 $payments = $pdo->prepare('SELECT id, name FROM `payment_types`');
 $payments ->execute();  
 
 $delivery =  $pdo->prepare('SELECT id, name FROM `delivery`');
 $delivery ->execute(); 
    
if(isset($_SESSION['user_login'])){
 $user=  $pdo->prepare('SELECT `login`, `name`, `surname`, `email`, `city`, `code`, `house` FROM `users` WHERE login like "'.$_SESSION['user_login'].'"');
 $user->execute();
 list($login,$name,$surname,$email,$city,$code,$house) = $user->fetch( PDO::FETCH_NUM );
 } 
  echo '<div class="col d-md-flex justify-content-between" style="margin-top: 1rem; ">';

  echo '<div class="col d-md-flex justify-content-end">';
  echo '<div class="col col-md-11 col-lg-9 " style="margin:0.25rem; padding: 1rem;">';
  echo '<form id="accountform" method="post" action="">';
  echo '<div class="mb-3 acc_data ">';
  echo '<input type="email" class="form-control input1" id="Email" placeholder="Email" value="'.$email.'">'; 
  echo '<span class="error" id="EmailError"></span>'; 
  echo '</div><div class="mb-3 acc_data">';
  echo '<input type="text" class="form-control input1" id="FirstName" placeholder="First name" value="'.$name.'">'; 
  echo '<span class="error" id="FirstNameError"></span>'; 
  echo '</div><div class="mb-3 acc_data">';
  echo '<input type="text" class="form-control input1" id="LastName" placeholder="Last name" value="'.$surname.'">'; 
  echo '<span class="error" id="LastNameError"></span>'; 
  echo '</div><div class="mb-3 acc_data">'; 
  echo '<input type="text" class="form-control input1" id="City" placeholder="City" value="'.$city.'">'; 
  echo '<span class="error" id="CityError"></span>'; 
  echo '</div><div class="mb-3 acc_data">'; 
  echo '<input type="number" class="form-control input1" id="Postcode" placeholder="Postcode" value="'.$code.'">'; 
  echo '<span class="error" id="PostcodeError"></span>'; 
  echo '</div><div class="mb-3 acc_data">'; 
  echo '<input type="number" class="form-control input1" id="HouseNumber" placeholder="House number" value="'.$house.'">';  
  echo '<span class="error" id="HouseNumberError"></span>';  
  echo '</div><div class="mb-3 acc_data"><select class="form-control input1" id="Payment" name="Payment">';
  echo '<option value="">Payment type</option>';
  foreach ($payments as $row) {
    echo '<option value="'.$row['id'].'">'.$row['name'].'</option>"';
  }
  echo '</select><span class="error" id="payError"></span>';
   
  echo '</div><div class="mb-3 acc_data"><select class="form-control input1" id="Delivery" name="Delivery">';
  echo '<option value="">Delivery</option>';
  foreach ($delivery as $row) {
    echo '<option value="'.$row['id'].'">'.$row['name'].'</option>"';
  }
  echo '</select><span class="error" id="delivError"></span>';
  echo '</div><div class="mb-3 acc_data justify-content-end">';   
  echo '<input type="submit" class="btn float-right btn-success login" name="submit" id="submit" value="Checkout" >'; 
  echo '</div></form></div></div>';
}   

  
  
echo $html;