<?php
require_once 'database.php';
  session_start();
  
 $pdo -> query('INSERT INTO `user_favorites`(`user_id`, `product`) VALUES ("'.$_SESSION['user_login'].'",'.$_POST['id'].')');
  
   
