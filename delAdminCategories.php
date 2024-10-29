<?php
require_once 'database.php';

    $pdo -> query('DELETE FROM categories WHERE id='.$_GET['id']);