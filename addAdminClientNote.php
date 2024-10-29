<?php
require_once 'database.php';

        $stmt = $pdo->prepare('UPDATE users SET
        notes=\''.$_POST["Note"].'\'
        WHERE login like "'.$_POST['ClientID'].'"');
        $stmt->execute();
        echo 'Added';