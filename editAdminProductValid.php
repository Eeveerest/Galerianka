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
        $stmt = $pdo->prepare('UPDATE products SET
        name=\''.$_POST["InputName"].'\',price='.$_POST["InputPrice"].',manufacturer_id='.$_POST["InputMan"].',delivery_id='.$_POST["InputDeliv"].'
        WHERE id='.$_POST['ProductID']);
        $stmt->execute();
        echo 'Edited';
            
            }