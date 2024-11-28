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
              if (empty($_POST["InputEmail"])) {
                $ilosc = 0;
                echo "3";
            }

            if (empty($_POST["InputPhone"])) {
                $ilosc = 0;
                echo "4";    
            }
  
      if($ilosc == 1)
      {
        $stmt = $pdo->prepare('UPDATE delivery SET
        name=\''.$_POST["InputName"].'\',price='.$_POST["InputPrice"].',email=\''.$_POST["InputEmail"].'\',phone=\''.$_POST["InputPhone"].'\'
        WHERE id='.$_POST["DelivID"]);
        $stmt->execute();
        echo 'Edited';
            
            }