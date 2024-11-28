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
          if (empty($_POST["Password"])) {
                $ilosc = 0;
                echo "8";         
            }
          if (empty($_POST["RepPassword"])) {
                $ilosc = 0;
                echo "9";         
            } else {
              if ($_POST["RepPassword"]!=$_POST["Password"]){
                $ilosc = 0;
                echo "9";
              }
             }
      
      if($ilosc == 1)
      {
        $_POST["Password"] = md5(sha1($_POST["Password"]));
           $stmt = $pdo->prepare('UPDATE users SET
          `name`=\''.$_POST["FirstName"].'\',
          `surname`=\''.$_POST["LastName"].'\',
          `email`=\''.$_POST["Email"].'\',
          `city`=\''.$_POST["City"].'\',
          `code`=\''.$_POST["Code"].'\',
          `password` = \''.$_POST["Password"].'\',                  
          `house`=\''.$_POST["House"].'\'
          WHERE login like \''.$_POST["ClientID"].'\'');
        $stmt->execute();
        echo 'Edited';

            
            }
    
  
