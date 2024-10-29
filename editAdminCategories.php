<?php
require_once 'database.php';
  
    $ilosc=1;
            if (empty($_POST["InputName"])) {
                $ilosc = 0;
                echo "1";
            }
  
      if($ilosc == 1)
      {
        $stmt = $pdo->prepare('UPDATE categories SET
        name=\''.$_POST["InputName"].'\' WHERE id='.$_POST['CategoryId']);
        $stmt->execute();
        echo 'Edited';
            
            }