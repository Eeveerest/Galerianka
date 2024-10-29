<?php
require_once 'database.php';

    $pdo -> query('DELETE FROM products_categories WHERE product_id='.$_GET['id'].' and category_id =  '.$_POST["CategoryId"]);