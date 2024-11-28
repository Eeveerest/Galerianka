<?php
session_start();
require_once 'database.php';

$stmt = $pdo->query('SELECT p.id, p.name, `price`, `manufacturer_id`, `parameters`, m.name as man FROM `products` p inner join manufacturers m on m.id=p.manufacturer_id  where p.id = '.$_POST['id'].'');
$cat = $pdo->query('SELECT name FROM `categories` c inner join products_categories pc on pc.category_id=c.id WHERE pc.product_id = '.$_POST['id'].' limit 1; ');
$picture = $pdo->prepare('SELECT * FROM `products_pictures` where product_id = '.$_POST['id'].'');
$picture ->execute();
$one = $picture ->fetch();  
  
if(isset($_SESSION['user_login'])){
  $get = $pdo->prepare('SELECT product FROM user_favorites where user_id like "'.$_SESSION['user_login'].'"');
  $get->execute();
  $result = $get->fetchAll(\PDO::FETCH_ASSOC);
  
}
  
      


  
$html = '';
foreach ($stmt as $row){
    echo '<div class="container-fluid" style="padding: 11px;"><div class="row name-border" style="background-color: rgb(50, 53, 46, 0.5); border-color: rgb(100, 112, 84);">';
    echo '<div class="col-lg-2 order-lg-1 order-2">';
    echo '<ul class="image_list">';
    echo '<li data-image="'.$one['picture_two'].'"><img src="'.$one['picture_two'].'" alt="'.$row['name'].'"></li>';
    echo '<li data-image="'.$one['picture_three'].'"><img src="'.$one['picture_three'].'" alt="'.$row['name'].'"></li>';
    echo '<li data-image="'.$one['picture_four'].'"><img src="'.$one['picture_four'].'" alt="'.$row['name'].'"></li>';
    echo '</ul></div>';
    echo '<div class="col-lg-4 order-lg-2 order-1">';
    echo '<div class="image_selected"><img src="'.$one['picture_one'].'" alt="'.$row['name'].'"></div></div>';
    echo '<div class="col-lg-6 order-3"><div class="product_description"><nav>';
    echo '<ol class="breadcrumb">';
    echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>';
    echo '<li class="breadcrumb-item"><a href="AllKnives.php">All Knives</a></li>';
    echo '<li class="breadcrumb-item active">'.$row['name'].'</li>';
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
        echo '<span class="wish-icon" style="margin-left: 3rem; font-size: 28px;"><i class="fa-solid fa-heart" id="heart_product_'.$row['id'].'" onclick="Favorite('.$row['id'].')"></i></span>';
      }
      else {
        echo '<span class="wish-icon" style="margin-left: 3rem; font-size: 28px;"><i class="fa fa-heart-o" id="heart_product_'.$row['id'].'" onclick="Favorite('.$row['id'].')"></i></span>';
      }
    }
    echo '</ol></nav>';
    echo '<div class="product_name">'.$row['name'].'</div><div> <span class="product_price">'.$row['price'].' zł</span> </div>';
    echo '<div><span class="product_info">Manufacturer: '.$row['man'].'<span><br>';
    echo '<span class="product_info">Delivery time: Available immediately<span><br>';
    echo '<div><div class="row"><div class="col-md-5"></div></div><div class="col-md-7"> </div></div></div>';
    echo '<div class="align-middle"><div class="d-flex flex-row">';
    echo '</div></div>';
    echo '<div class="row"><div class="col-6">';
    echo '<button type="button" class="btn btn-success shop-button" onclick="Add_To('.$row['id'].')">Add to Cart</button>';
    echo '</div></div></div></div></div>';

}


echo $html;
                                    
                              
                            
                            
                            
