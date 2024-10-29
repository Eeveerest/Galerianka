<?php
require_once 'database.php';

    $ilosc=1;
            if (empty($_POST["InputName"])) {
                $ilosc = 0;
                echo "1";
            }
  
      if($ilosc == 1)
      {
        $stmt = $pdo->prepare('INSERT INTO categories (`name`)  VALUES(
            \''.$_POST['InputName'].'\')');
        $stmt->execute();
        echo 'Added';
            
            }