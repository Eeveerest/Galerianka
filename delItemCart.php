<?php 
session_start();
 
  //remove the id from our cart array
  $key = array_search($_POST['id'], $_SESSION['cart']);   
  unset($_SESSION['cart'][$key]);
  
  unset($_SESSION['qty_array'][$_POST['index']]);
  //rearrange array after unset
  $_SESSION['qty_array'] = array_values($_SESSION['qty_array']);
  