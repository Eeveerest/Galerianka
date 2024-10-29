<?php
require_once 'database.php';

    $ilosc=1;
            if (empty($_POST["Email"])) {
                $ilosc = 0;
                echo "2";
            }
              if (empty($_POST["FirstName"])) {
                $ilosc = 0;
                echo "3";
            }

            if (empty($_POST["LastName"])) {
                $ilosc = 0;
                echo "4";    
            }
  
  
      if($ilosc == 1)
      {
        $stmt = $pdo->prepare('UPDATE users SET
          `name`=\''.$_POST["FirstName"].'\',
          `surname`=\''.$_POST["LastName"].'\',
          `email`=\''.$_POST["Email"].'\',
          `city`=\''.$_POST["City"].'\',
          `code`=\''.$_POST["Code"].'\',
          `house`='.$_POST["House"].'
          WHERE login like \''.$_POST["ClientID"].'\'');
        $stmt->execute();
        echo 'Edited';
            
            }