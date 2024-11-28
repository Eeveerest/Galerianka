<?php
require_once 'database.php';


$stmt = $pdo->query('SELECT id, `client_login`, `date_placed`, `date_shipped` FROM orders');
  

$html = '';
foreach ($stmt as $row){
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['client_login'].'</td>';
    echo '<td>'.$row['date_placed'].'</td>';
    echo '<td>'.$row['date_shipped'].'</td>';
    
    echo '<td><a href=editAdminOrders.php?id='.$row['id'].'><button type="button" class="btn btn-success btn-whitesmoke" ">
    Edit
    </button></a></td>';

   echo '<td><button type="button" onclick="Id(this)" class="btn btn-success btn-whitesmoke del" data-bs-toggle="modal" data-bs-target="#deleteModal" id='.$row['id'].' ">
    Delete
    </button></td>';
    echo '</tr>';
}

sleep(1);

echo $html;