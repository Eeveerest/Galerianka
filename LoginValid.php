<?php
session_start();
require_once 'database.php';

    $ilosc=1;
            if (empty($_POST["Username"])) {
                $ilosc = 0;
                echo "username";
            }
            if (empty($_POST["Password"])) {
                $ilosc = 0;
                echo "password";
            }

      if($ilosc == 1)
      {
        $stmt = $pdo->prepare("SELECT login,password,acc_type FROM users WHERE login like '".$_POST["Username"]."' ");
        $stmt->execute();
        list($login,$password,$acc_type) = $stmt->fetch( PDO::FETCH_NUM );

        if ($stmt){
          if ($login == $_POST["Username"]) {
            
            $_SESSION['user_type'] = "user";
            $hash = md5(sha1($_POST["Password"]));
            

                if ($hash === $password) {
                  if($acc_type=="admin"){
                    echo "admin";
                    $_SESSION['user_type'] = "admin";
                  }
                  
                  $_SESSION['user_login'] = $login;
                  

                  
                  echo 'Zalogowano';
                  

                }
                else{
                  echo "password";
                }
              
            }
          else{
            echo "username";
          }
        }
        
          
            }

