<?php
require_once 'database.php';


$stmt = $pdo->prepare('SELECT `login`, `name`, `surname`, `email` FROM users where login like :login or email like :email');
  $stmt -> bindValue(':login', '%'.$_POST['search'].'%', PDO::PARAM_STR);
        $stmt -> bindValue(':email', '%'.$_POST['search'].'%', PDO::PARAM_STR);
        $stmt->execute();

$html = '';
foreach ($stmt as $row){
    echo '<tr>';
    echo '<td>'.$row['login'].'</td>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['surname'].'</td>';   
    echo '<td>'.$row['email'].'</td>';   
  
  
    echo '<td><a href=editAdminClients.php?id='.$row['login'].'><button type="button" class="btn btn-success btn-whitesmoke" ">
    Edit
    </button></a></td>';

    echo '</tr>';
}

sleep(1);

echo $html;