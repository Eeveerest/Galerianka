<?php
require_once 'database.php';


$stmt = $pdo->prepare('SELECT * FROM payment_types where name like :name or id like :id');
        $stmt -> bindValue(':name', '%'.$_POST['search'].'%', PDO::PARAM_STR);
        $stmt -> bindValue(':id', '%'.$_POST['search'].'%', PDO::PARAM_STR);
        $stmt->execute();


$html = '';
foreach ($stmt as $row){
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['name'].'</td>';

    
    echo '<td><a href=editAdminDelivery.php?id='.$row['id'].'><button type="button" class="btn btn-success btn-whitesmoke" ">
    Edit
    </button></a></td>';

   echo '<td><button type="button" onclick="Id(this)" class="btn btn-success btn-whitesmoke del" data-bs-toggle="modal" data-bs-target="#deleteModal" id='.$row['id'].' ">
    Delete
    </button></td>';
    echo '</tr>';
}

sleep(1);

echo $html;