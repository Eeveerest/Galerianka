<?php
require_once 'database.php';
  session_start();

$stmt = $pdo->query('SELECT id, price, payment_type_id, delivery_id, date_placed, date_shipped, delivery_data FROM `orders` WHERE client_login like "'.$_SESSION['user_login'].'" order by date_placed desc;');


$html = '';
foreach ($stmt as $row){
    echo '<div class="table-responsive"><table class="table table2"><thead class="black-border">';
    echo '<tr><th scope="col " class="h5 align-middle">Order from '.$row['date_placed'].' Total price: '.$row['price'].' zł</th>';
    echo '<th scope="col" class="align-middle">Date shiped : '.$row['date_shipped'].'</th>';
    echo '<th><a href=detailsUserOrder.php?order='.$row['id'].'><button type="button" class="btn btn-success btn-whitesmoke" ">Details</button></a></th></tr></thead><tbody>';
    
    $prod = $pdo->query('SELECT p.id, `name`, `price`, quantity FROM `products` p inner join order_products op on p.id=op.product_id where op.id = '.$row['id'].';');
    
    
    foreach ($prod as $rows){
      $picture = $pdo->prepare('SELECT picture_one FROM `products_pictures` where product_id = '.$rows['id'].'');
      $picture ->execute();
      $one = $picture ->fetch();
      echo '<tr><td scope="row"><div class="d-flex align-items-center">';
      echo '<a  href="Product.php?product='.$rows['id'].'"><img src="'.$one['picture_one'].'" class="img-fluid rounded-3" style="width: 120px;" alt="Book">';
      echo '<div class="flex-column ms-4"><p class="mb-2">'.$rows['name'].'</p></a> ';
      echo '</div></div></td>';
      echo '<td class="align-middle"><p class="mb-2">Item price: '.$rows['price'].' zł</p></td>';
      echo ' <td class="align-middle"><p class="mb-0" style="font-weight: 500;">Amount: '.$rows['quantity'].'</p></td></tr>';
    }
    
    echo '</tbody></table></div>';
}

sleep(1);

echo $html;
  
  
  
  
          
          
            
              
                
                
                
              
            
            
              
                
                  
                    
                    
                      
                      
                    
                  
                
                
                  
                    


                
               
              