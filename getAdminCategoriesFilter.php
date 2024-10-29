<?php
require_once 'database.php';


$stmt = $pdo->prepare("SELECT * FROM categories WHERE name LIKE :name OR id LIKE :id");
        $stmt -> bindValue(':name', '%'.$_POST['search'].'%', PDO::PARAM_STR);
        $stmt -> bindValue(':id', '%'.$_POST['search'].'%', PDO::PARAM_STR);
        $stmt->execute();

$html = '';
foreach ($stmt as $row){
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['name'].'</td>';
  
    echo '<td><a href=asignAdminProduct.php?id='.$row['id'].'><button type="button" class="btn btn-success btn-whitesmoke" ">
    Assign
    </button></a></td>';
  
    echo '<td><button type="button" onclick="IdEdit(this)" class="btn btn-success btn-whitesmoke" data-bs-toggle="modal" data-bs-target="#editModal" id='.$row['id'].' ">
    Edit
    </button></td>';

   echo '<td><button type="button" onclick="Id(this)" class="btn btn-success btn-whitesmoke del" data-bs-toggle="modal" data-bs-target="#deleteModal" id='.$row['id'].' ">
    Delete
    </button></td>';
    echo '</tr>';
}

sleep(1);

echo $html;