<?php
require_once 'database.php';


$stmt = $pdo->query('SELECT * FROM payment_types');

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