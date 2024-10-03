<?php
require_once 'database.php';

    $ilosc=1;
            if (empty($_POST["Username"])) {
                $ilosc= 0;
                echo "1";
            } else {
                $Username = $_POST["Username"]; // add check if not already taken
              }
            if (empty($_POST["Email"])) {
                $ilosc = 0;
                echo "2";
            } else {
                $Email = $_POST["Email"];
              }
              if (empty($_POST["FirstName"])) {
                $ilosc = 0;
                echo "3";
            } else {
                $FirstName = $_POST["FirstName"];
              }                      
            if (empty($_POST["LastName"])) {
                $ilosc = 0;
                echo "4";
            } else {
                $LastName = $_POST["LastName"];
              }
            if (empty($_POST["City"])) {
                $ilosc = 0;
                echo "5";
            } else {
                $City = $_POST["City"];
              }
            if (empty($_POST["Postcode"])) {
                $ilosc = 0;
                echo "6";         
            } else {
                $Postcode = $_POST["Postcode"];      
              }
          if (empty($_POST["HouseNumber"])) {
                $ilosc = 0;
                echo "7";         
            } else {
                $HouseNumber = $_POST["HouseNumber"];      
              }
          if (empty($_POST["Password"])) {
                $ilosc = 0;
                echo "8";         
            } else {
                $Password = $_POST["Password"];      
              }
          if (empty($_POST["RepPassword"])) {
                $ilosc = 0;
                echo "9";         
            } else {
              if ($_POST["RepPassword"]!=$_POST["Password"]){
                $ilosc = 0;
                echo "9";
              }else{
                $RepPassword = $_POST["RepPassword"];      
                }
              }
  if (!isset($_POST['Rules'])) {
                $ilosc = 0;
                echo "10";         
            }
      
      if($ilosc == 1)
      {
        $_POST["Password"] = md5(sha1($_POST["Password"]));
        
        $stmt = $pdo->prepare('INSERT INTO users (`login`, `name`, `surname`, `password`, `email`, `city`, `code`, `house`, `acc_type`)  VALUES(
            \''.$_POST['Username'].'\',
            \''.$_POST['FirstName'].'\',
            \''.$_POST['LastName'].'\',
            \''.$_POST['Password'].'\',
            \''.$_POST['Email'].'\',
            \''.$_POST['City'].'\',
            '.$_POST['Postcode'].',
            '.$_POST['HouseNumber'].',
            "user")');
        $stmt->execute();
        echo 'Pomyślnie dodano rekord';
            
            }
    
