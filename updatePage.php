<?php

session_start();
require_once __DIR__ . "/Database/db.php";
require_once __DIR__ . "/functions.php";

$sql = 'SELECT * FROM companies';
$stmt = $pdo->prepare($sql);
$stmt->execute();

// $company = $stmt->fetch();
// $id = $company['company_id'];


// echo "<pre>";
// print_r($company);
// die;


?>

<!DOCTYPE html>
<html>

<head>
    <title>Select page</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <!-- Latest compiled and minified Bootstrap 4.6 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- CSS script -->
    <link rel="stylesheet" href="style.css">
    <!-- Latest Font-Awesome CDN -->
    <script src="https://kit.fontawesome.com/64087b922b.js" crossorigin="anonymous"></script>

    <style>
        .container-fluid {
            background: rgb(0, 0, 0);
            background: linear-gradient(90deg, rgba(0, 0, 0, 1) 10%, rgba(121, 29, 9, 1) 44%, rgba(255, 226, 0, 1) 100%);
        }
    </style>
</head>

<body>
    <div class="container-fluid w-100 vh-100 text-center d-flex flex-column justify-content-center align-items-center">
        <?php printSessionMessage() ?>
        <h1>Select your web page design:</h1>
        <form method="POST" action="page3.php">
            <select class="form-control" name="selectDesign" id="selectDesign" required>
                <?php while ($company = $stmt->fetch()) { ?>
                    <option value=" <?= $company['company_id'] ?> "> <?= $company['company_id'] ?> - <?= $company['title'] ?> </option>
                <?php } ?>
            </select>
            <button class="btn btn-dark w-50 my-3" type="submit" formmethod="POST" formaction="page3.php">Submit</button>
        </form>
    </div>
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Latest Compiled Bootstrap 4.6 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>