<?php
require_once 'database.php';


$stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE :name OR id LIKE :id");
        $stmt -> bindValue(':name', '%'.$_POST['search'].'%', PDO::PARAM_STR);
        $stmt -> bindValue(':id', '%'.$_POST['search'].'%', PDO::PARAM_STR);
        $stmt->execute();
$html = '';
foreach ($stmt as $row){
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['price'].'</td>';   
    if(isset($row['manufacturer_id'])){
        $test = $pdo -> query('SELECT name from manufacturers where id='.$row['manufacturer_id'].';');
        $test = $test -> fetch();
        echo '<td>'.$test['name'].'</td>';
    }else {
        echo '<td>';
    }
    if(isset($row['delivery_id'])){
        $test = $pdo -> query('SELECT name from delivery where id='.$row['delivery_id'].';');
        $test = $test -> fetch();
        echo '<td>'.$test['name'].'</td>';
    }else {
        echo '<td>';
    }
  
    echo '<td><a href=editAdminProduct.php?id='.$row['id'].'><button type="button" class="btn btn-success btn-whitesmoke" ">
    Edit
    </button></a></td>';

   echo '<td><button type="button" onclick="Id(this)" class="btn btn-success btn-whitesmoke del" data-bs-toggle="modal" data-bs-target="#deleteModal" id='.$row['id'].' ">
    Delete
    </button></td>';
    echo '</tr>';
}

sleep(1);

echo $html;