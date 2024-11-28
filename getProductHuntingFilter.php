<?php
require_once 'database.php';
  session_start();

  $filter = $_POST['filter'];
  
   if ($filter!='none'){
    switch ($filter) {
      case "filter_one":
        $stmt = $pdo->prepare('SELECT id, name, price FROM `products` inner JOIN products_categories on products.id = products_categories.product_id WHERE products_categories.category_id = 1
          and name like :name order by price asc;');
       break;
      case "filter_two":
        $stmt = $pdo->prepare('SELECT id, name, price FROM `products` inner JOIN products_categories on products.id = products_categories.product_id WHERE products_categories.category_id = 1
          and name like :name order by price desc;');
      break;
      case "filter_three":
        $stmt = $pdo->prepare('SELECT id, name, price FROM `products` inner JOIN products_categories on products.id = products_categories.product_id WHERE products_categories.category_id = 1
          and name like :name order by name asc;');
      break;
      case "filter_four":
        $stmt = $pdo->prepare('SELECT id, name, price FROM `products` inner JOIN products_categories on products.id = products_categories.product_id WHERE products_categories.category_id = 1
          and name like :name order by name desc;');
      break;
        
 
    }
  }
  else {
    $stmt = $pdo->prepare('SELECT id, name, price FROM `products` inner JOIN products_categories on products.id = products_categories.product_id WHERE products_categories.category_id = 1
      and name like :name;'); 
  }
  

  $stmt -> bindValue(':name', '%'.$_POST['search'].'%', PDO::PARAM_STR);
  $stmt->execute();
  
  if(isset($_SESSION['user_login'])){
    $get = $pdo->prepare('SELECT product FROM user_favorites where user_id like "'.$_SESSION['user_login'].'"');
    $get->execute();
    $result = $get->fetchAll(\PDO::FETCH_ASSOC);
    
  }

$html = '';
foreach ($stmt as $row){
    $picture = $pdo->prepare('SELECT picture_one FROM `products_pictures` where product_id = '.$row['id'].'');
    $picture ->execute();
    $one = $picture ->fetch();
    echo '<div class="col-md-6 col-lg-4 col-xl-3">';
    echo '<div class="thumb-wrapper">';
    echo '<div class="img-box picture-border">';
    echo '<a href="Product.php?product='.$row['id'].'">';
    echo '<img src="'.$one[0].'" class="img-fluid rounded-img" alt='.$row['name'].'"></a>';
    echo '</div>';
    echo '<div class="thumb-content name-border text-center">';
    echo '<a href="Product.php?product='.$row['id'].'">';
    echo '<h4>'.$row['name'].'</h4></a>';
    echo '<p class="item-price"><b>'.$row['price'].' zł</b></p>';
    echo '<input type="submit" class="btn btn-success" name="Add_To" id="Add_To" onclick="Add_To('.$row['id'].')" value="Add to Cart" style="margin-right: 0.5rem">';
     if(isset($_SESSION['user_login'])){
     echo '<span class="wish-icon" >';  
      $i = 0;
      foreach ($result as $rows){       
        if ($row['id']==$rows['product'])
        {   
          $i = 1;
        }
      }
      if ($i==1){
        echo '<i class="fa-solid fa-heart" id="heart_product_'.$row['id'].'" onclick="Favorite('.$row['id'].')"></i></span>';
      }
      else {
        echo '<i class="fa fa-heart-o" id="heart_product_'.$row['id'].'" onclick="Favorite('.$row['id'].')"></i></span>';
      }
    }
  
   echo '</div></div></div>';
}

sleep(1);

echo $html;
