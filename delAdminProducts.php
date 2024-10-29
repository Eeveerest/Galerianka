<?php
require_once 'database.php';

    $pdo -> query('DELETE FROM products WHERE id='.$_GET['id']); 