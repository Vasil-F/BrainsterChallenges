<?php
require_once __DIR__ . '/functions.php';
session_start();
notauth();
require_once __DIR__ . '/Database/db.php';

$sqlModel = 'SELECT model FROM vehicle_models';
$stmtModel = $pdo->prepare($sqlModel);
$stmtModel->execute();

$flag = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['action'] == 'model') {

        if(empty($_POST['addModel'])) {
            $flag = false;
                $_SESSION['error'] = 'Input field can not be empty!';
                header('Location: admins.php');
                die();
        }

        while ($model = $stmtModel->fetch()) {
            if ($_POST['addModel'] == $model['model']) {
                $flag = false;
                $_SESSION['error'] = 'That vehicle model already exists';
                header('Location: admins.php');
                die();
            }
        }
        if ($flag) {
            $sql = "INSERT INTO vehicle_models (model) VALUES(:model)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['model' => $_POST['addModel']]);

            $_SESSION['success'] = 'Vehicle model added!';
            header('Location: admins.php');
        }
    }
}
