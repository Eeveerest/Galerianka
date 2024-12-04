<?php
session_start();
require_once 'database.php';

$stmt = $pdo->query('SELECT p.id, name, price FROM `products`p INNER JOIN order_products op on op.product_id = p.id group by p.id order by count(op.product_id) desc limit 8');
  
  
if(isset($_SESSION['user_login'])){
  $get = $pdo->prepare('SELECT product FROM user_favorites where user_id like "'.$_SESSION['user_login'].'"');
  $get->execute();
  $result = $get->fetchAll(\PDO::FETCH_ASSOC);
  
}
  
$first = 0;  
$list = 1;  
$html = '';
  
  echo '<div id="BestsellerCarousel" class="carousel slide carousel1" data-bs-ride="BestsellerCarousel">';
  echo '<div class="carousel-inner">';    
  
  foreach ($stmt as $row){
    $picture = $pdo->prepare('SELECT picture_one FROM `products_pictures` where product_id = '.$row['id'].'');
    $picture ->execute();
    $one = $picture ->fetch();
    if ($first == 0){
      echo '<div class="carousel-item active">';
      $first = 1;
    }
    else if ($list == 1){
      echo '<div class="carousel-item">';     
    }
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
        echo '<i class="fa-solid fa-heart" id="heart_product_two_'.$row['id'].'" onclick="Favorite('.$row['id'].')"></i></span>';
      }
      else {
        echo '<i class="fa fa-heart-o" id="heart_product_two_'.$row['id'].'" onclick="Favorite('.$row['id'].')"></i></span>';
      }
    }
    echo '</div></div></div>';
    $list++;
    if ($list >= 5){
      echo '</div>';
      $list = 1;
    }
    
  }

     echo '</div>';        
     echo '<a class="carousel-control-prev bg-transparent w-aut" href="#BestsellerCarousel" role="button" data-bs-slide="prev">';
     echo '<span class="carousel-control-prev-icon prev-icon1" aria-hidden="true"></span></a>';         
     echo '<a class="carousel-control-next bg-transparent w-aut" href="#BestsellerCarousel" role="button" data-bs-slide="next">';
     echo '<span class="carousel-control-next-icon next-icon1" aria-hidden="true"></span></a></div>';


sleep(0.5);

echo $html;

