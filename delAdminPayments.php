<?php
require_once 'database.php';

    $pdo -> query('DELETE FROM payment_types WHERE id='.$_GET['id']);