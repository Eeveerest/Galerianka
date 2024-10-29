<?php
require_once 'database.php';

    $ilosc=1;
            if (empty($_POST["InputId"])) {
                $ilosc = 0;
                echo "1";
            }
  
      if($ilosc == 1)
      {
        $stmt = $pdo->prepare('INSERT INTO products_categories (`product_id`, `category_id`)  VALUES(
            '.$_POST['InputId'].',
            '.$_POST['CategoryId'].')');
        $stmt->execute();
        echo 'Added';
            
            }