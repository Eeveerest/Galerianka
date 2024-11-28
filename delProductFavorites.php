<?php
require_once 'database.php';
  session_start();
  
 $pdo -> query('DELETE FROM user_favorites WHERE product = '.$_POST['id'].' and user_id like "'.$_SESSION['user_login'].'"');
  
$stmt = $pdo->query('SELECT id, name, price, picture FROM `products` inner JOIN user_favorites on products.id = user_favorites.product WHERE user_favorites.user_id like "'.$_SESSION['user_login'].'";');
