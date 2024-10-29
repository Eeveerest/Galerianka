<?php
require_once 'database.php';

  
$stmt = $pdo->prepare('SELECT id, name FROM products where id in (select product_id from products_categories where category_id = '.$_POST["id"].')');
        $stmt->execute();
  
  
$html = '';
foreach ($stmt as $row){
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['name'].'</td>';

   echo '<td><button type="button" onclick="Id(this)" class="btn btn-success btn-whitesmoke del" data-bs-toggle="modal" data-bs-target="#deleteModal" id='.$row['id'].' ">
    Delete from category
    </button></td>';
    echo '</tr>';
}

sleep(1);

echo $html;