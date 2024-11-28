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
        $stmt = $pdo->prepare('INSERT INTO delivery (`name`, `email`, `phone`, `price`)  VALUES(
            \''.$_POST['InputName'].'\',
            \''.$_POST['InputEmail'].'\',
            \''.$_POST['InputPhone'].'\',
            '.$_POST['InputPrice'].')');
        $stmt->execute();
        echo 'Added';
            
            }