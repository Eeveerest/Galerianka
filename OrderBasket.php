<?php
require_once 'database.php';

    $ilosc=1;
    $login ="";
  $today = date("Y-m-d");
            if (empty($_POST["Email"])) {
                $ilosc = 0;
                echo "1";
            }
            if (empty($_POST["FirstName"])) {
                $ilosc = 0;
                echo "2";
            }                     
            if (empty($_POST["LastName"])) {
                $ilosc = 0;
                echo "3";
            }
          if (empty($_POST["City"])) {
                $ilosc = 0;
                echo "4";         
            }
          if (empty($_POST["Code"])) {
                $ilosc = 0;
                echo "5";         
            }
          if (empty($_POST["House"])) {
                $ilosc = 0;
                echo "6";         
            }
          if (empty($_POST["Delivery"])) {
                $ilosc = 0;
                echo "7";         
            }
          if (empty($_POST["Payment"])) {
                $ilosc = 0;
                echo "8";         
            }
 

       

      
      if($ilosc == 1)
      {
        if (isset($_SESSION['user_login'])){
          $login = $_SESSION['user_login'];
        }
        
        
        $data= "Email: ".$_POST["Email"]."Name: ".$_POST["FirstName"]."Surname:".$_POST["LastName"];
        
         $stmt = $pdo->prepare('INSERT INTO orders (`client_login`, `price`, `payment_type_id`, `delivery_id`, `date_placed`, `delivery_data`)  VALUES(
            \''.$login.'\',
            '.$_POST['Price'].',
            '.$_POST['Payment'].',
            '.$_POST['Delivery'].',
            \''.$today.'\',        
            \''.$data.'\' )');
        $stmt->execute();
        
        $id = $pdo->prepare('SELECT id FROM `orders` WHERE price = '.$_POST['Price'].' and `date_placed` like "'.$today.'"');
        $id->execute();
        $one = $id->fetch();

       $value = "(".$one['id'].",".implode('),('.$one['id'].',',$_SESSION['cart']).")";

        $products = $pdo->prepare('INSERT INTO `order_products`(`id`, `product_id`)  VALUES'.$value.'');
        $products->execute();
        
        echo 'Added';

           
            }