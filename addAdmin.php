<?php
require_once __DIR__ . '/functions.php';
session_start();
notauth();
require_once __DIR__ . '/Database/db.php';

$email = "aliceburton@example.com";
$password = 123456;
$passwordHash = password_hash($password, PASSWORD_BCRYPT);
die();



$sql = 'INSERT INTO admins (email, password) VALUES (:email, :password) ';
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $email, 'password' => $passwordHash]);