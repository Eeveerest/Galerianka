<?php
require_once 'database.php';

    $pdo -> query('DELETE FROM delivery WHERE id='.$_GET['id']);