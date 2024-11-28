<?php
require_once 'database.php';

    $pdo -> query('DELETE FROM orders WHERE id='.$_GET['id']);