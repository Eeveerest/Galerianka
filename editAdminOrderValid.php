<?php
require_once 'database.php';

    $ilosc=1;
            if (empty($_POST["InputLogin"])) {
                $ilosc = 0;
                echo "1";
            }
            if (empty($_POST["InputPrice"])) {
                $ilosc = 0;
                echo "2";
            }
              if (empty($_POST["InputType"])) {
                $ilosc = 0;
                echo "3";
            }

            if (empty($_POST["InputDeliv"])) {
                $ilosc = 0;
                echo "4";    
            }
            if (empty($_POST["InputDatePlaced"])) {
                $ilosc = 0;
                echo "5";    
            }
  
      if($ilosc == 1)
      {
        $stmt = $pdo->prepare('UPDATE `orders` SET 
        `client_login`=\''.$_POST["InputLogin"].'\',
        `price`='.$_POST["InputPrice"].',
        `payment_type_id`='.$_POST["InputType"].',
        `delivery_id`='.$_POST["InputDeliv"].',
        `date_placed`=\''.$_POST["InputDatePlaced"].'\',
        `date_shipped`=\''.$_POST["InputDateShipped"].'\',
        `delivery_data` =\''.$_POST["Details"].'\'
        WHERE id='.$_POST["ProductID"]);
        $stmt->execute();
        echo 'Edited';
            
            }