<?php
require_once 'database.php';

    $ilosc=1;
            if (empty($_POST["InputName"])) {
                $ilosc = 0;
                echo "1";
            }
            if (empty($_POST["InputPrice"])) {
                $ilosc = 0;
                echo "2";
            }
              if (empty($_POST["InputMan"])) {
                $ilosc = 0;
                echo "3";
            }

            if (empty($_POST["InputDeliv"])) {
                $ilosc = 0;
                echo "4";    
            }
  
      if($ilosc == 1)
      {
        $stmt = $pdo->prepare('INSERT INTO products (`name`, `delivery_id`, `manufacturer_id`, `price`)  VALUES(
            \''.$_POST['InputName'].'\',
            \''.$_POST['InputDeliv'].'\',
            \''.$_POST['InputMan'].'\',
            '.$_POST['InputPrice'].')');
        $stmt->execute();
        echo 'Added';
            
            }

