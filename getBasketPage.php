<?php
session_start();
require_once 'database.php';

 
$html = '';
  echo '<div class="table-responsive"><table class="table table2"><thead class="black-border">';
  echo '<tr><td scope="col " class="h5">Shopping Bag</th><th scope="col">Quantity</th><th scope="col">Price</th><th scope="col">Together</th><th></th></tr></thead>';
  echo '<tbody>';
  
  $total = 0;
  
  if(!empty($_SESSION['cart'])){
    
    
    $index = 0;
    if(!isset($_SESSION['qty_array'])){
      $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
    }
    
    $stmt = $pdo->query("SELECT id, name, price FROM `products` where id IN (".implode(',',$_SESSION['cart']).")");

    
    foreach ($stmt as $row){
      $picture = $pdo->prepare('SELECT picture_one FROM `products_pictures` where product_id = '.$row['id'].'');
      $picture ->execute();
      $one = $picture ->fetch();
    echo '<tr><td scope="row"><div class="d-flex align-items-center">';
    echo '<a  href="Product.php?product='.$row['id'].'"><img src="'.$one[0].'" class="img-fluid rounded-3" style="width: 120px;" alt="'.$row['name'].'"></a>';
    echo '<div class="flex-column ms-4"><a  href="Product.php?product='.$row['id'].'"><p class="mb-2">'.$row['name'].'</p></a></div></div></td>';
    echo '<td class="align-middle"><div class="d-flex flex-row">';
    echo '<button id="sub'.$row['id'].'" class="btn btn-link px-2" onclick="this.parentNode.querySelector(';
    echo "'input[type=number]'";
    echo ').stepDown();Calc_Sub('.$row['id'].')" style="display: none"><i class="fas fa-minus"></i></button>';
    echo '<input id="quantity'.$row['id'].'" min="1" max="10" name="quantity" value="1" type="number" class="form-control form-control-sm" style="width: 50px;" readonly>';
    echo '<button id="add'.$row['id'].'" class="btn btn-link px-2" onclick="this.parentNode.querySelector(';
    echo "'input[type=number]'";
    echo ').stepUp();Calc_total('.$row['id'].')"><i class="fas fa-plus"></i></button>';
    echo '</div></td><td class="align-middle"><p id="price'.$row['id'].'" class="mb-0" style="font-weight: 500;">'.$row['price'].' zł</p></td>';
    echo '<td class="align-middle"><p id="total'.$row['id'].'" class="mb-0" style="font-weight: 500;">'.$row['price'].' zł</p></td>';
    echo '<td class="align-middle"><p onclick="Del_basket('.$row['id'].','.$index.')" class="btn btn-success btn-sm"><i class="fa-solid fa-trash"></i></p></tr>';
    $index ++;
    $total += $row['price'];
    }
  }
  
  echo '</tbody></table></div>';
  echo '<div class="col d-md-flex justify-content-end" style="margin-top: 1rem; ">';
  echo '<div class="col col-md-6 col-lg-5 black-border justify-content-end">';
  echo '<div class="d-flex justify-content-between mb-4" style="font-weight: 500;">';
  echo '<p class="mb-2">Product value</p><p class="mb-2" id="value">'.$total.' zł</p></div>';
  echo '<div class="d-flex justify-content-between mb-4" style="font-weight: 500;">';
  echo '<p class="mb-2">Discount</p><p class="mb-2">0.00 zł</p></div>';
  echo '<hr class="my-4 hr2">';
  echo '<button type="button" class="btn btn-success btn-block btn-lg" onclick="Order()" style="width: calc(100% - 5em); float: right;">';
  echo '<div class="d-flex justify-content-between"><span>Checkout</span><span id="checkout">'.$total.' zł</span></div></button>';
  echo '</div></div></div>';
  
  
echo $html;
          
            

            
              
                
                
              
            


          

        