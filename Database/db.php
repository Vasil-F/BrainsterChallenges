<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=webpagecreator;", "root", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
} catch (PDOException $e) {
    echo "Database down";
    die();
}
