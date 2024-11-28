<?php
require_once 'database.php';
  session_start();
  
 $pdo -> query('DELETE FROM user_favorites WHERE product = '.$_POST['id'].' and user_id like "'.$_SESSION['user_login'].'"');
  
$stmt = $pdo->query('SELECT id, name, price FROM `products` inner JOIN user_favorites on products.id = user_favorites.product WHERE user_favorites.user_id like "'.$_SESSION['user_login'].'";');

$html = '';
foreach ($stmt as $row){
    $picture = $pdo->prepare('SELECT picture_one FROM `products_pictures` where product_id = '.$row['id'].'');
    $picture ->execute();
    $one = $picture ->fetch();
    echo '<div class="col-md-6 col-lg-4 col-xl-3">';
    echo '<div class="thumb-wrapper">';
    echo '<div class="img-box picture-border">';
    echo '<a href="Product.php?product='.$row['id'].'">';
    echo '<img src="'.$one['picture_one'].'" class="img-fluid rounded-img" alt="'.$row['name'].'"></a>';
    echo '</div>';
    echo '<div class="thumb-content name-border text-center">';
    echo '<a href="Product.php?product='.$row['id'].'">';
    echo '<h4>'.$row['name'].'</h4></a>';
    echo '<p class="item-price"><b>'.$row['price'].' zł</b></p>';
    echo '<input type="submit" class="btn btn-success" name="Add_To" id="Add_To" onclick="Add_To('.$row['id'].')" value="Add to Cart" style="margin-right: 0.5rem">';
    echo '<span class="wish-icon"><i class="fa-solid fa-heart" id="'.$row['id'].'" onclick="Favorite('.$row['id'].')"></i></span></div></div></div>';
}

sleep(1);

echo $html;
