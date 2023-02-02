<?php
try {
    $pdo = new PDO('mysql:dbname=mysql;host=mysql', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $query = $pdo->query('SHOW VARIABLES like "version"');

    $row = $query->fetch();

    echo 'Connected successfully';
} catch (PDOException $e) {
    echo "Connection failed: ".$e->getMessage();
}
