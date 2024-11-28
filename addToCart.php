 <?php
        session_start();
   
 
        //check if product is already in the cart
        if(!in_array($_POST['ids'], $_SESSION['cart'])){
                array_push($_SESSION['cart'], $_POST['ids']);
                echo '1';
        }
        else{
                echo '2';
        }