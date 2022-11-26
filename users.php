<?php 
require_once __DIR__ . '/functions.php';
session_start();
auth();
require_once __DIR__ . '/Database/db.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: home.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $sqlSearch = 'SELECT * FROM registrations WHERE registration_number LIKE :registration';
        $stmtSearch = $pdo->prepare($sqlSearch);
        $stmtSearch->execute( ['registration' => $_POST['registration']] );
        
        if ($stmtSearch->rowCount() == 0) {
    
            $_SESSION['error'] = 'There is no such record!';
        }
 
} 
?>



<!DOCTYPE html>
<html>

<head>
    <title>Users</title>
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
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Vehicle Registration</a>
        <a href="login.php" class="navbar-brand">Login</a>
    </nav>
    <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger mb-0">
            <?= $_SESSION['error'] ?>
        </div>
    <?php }
    unset($_SESSION['error']) ?>
    <div class="container-fluid">
        <?php while ($searchResult = $stmtSearch->fetch())  {
             $vehicleDate = $searchResult['registration_to'];
             $vehicleDate = explode('-', $vehicleDate);
             $currentDate = date('Y-m-d');
             $currentDate = explode('-', $currentDate);
             $monthLimit = $currentDate[0] . '-' . $currentDate[1] + 1;
             $vehicleLimit = $vehicleDate[0] . '-' . $vehicleDate[1];
             $monthDue = $vehicleDate[0] == $currentDate[0] && $vehicleDate[1] <= $currentDate[1];
             $yearDue = $vehicleDate[0] < $currentDate[0];
            
            ?>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">vehicle model</th>
                    <th scope="col">vehicle type</th>
                    <th scope="col">vehicle chassis number</th>
                    <th scope="col">vehicle production year</th>
                    <th scope="col">registration number</th>
                    <th scope="col">fuel type</th>
                    <th scope="col">registration to</th>
                </tr>
            </thead>
            <tbody>
                    <tr <?= $vehicleLimit == $monthLimit ? "class='bg-warning'" : ""; ?> <?= $yearDue || $monthDue ? "class='bg-danger'" : ""; ?>>
                        <th scope="row"><?= $searchResult['id'] ?> </th>
                        <td><?= $searchResult['vehicle_model'] ?></td>
                        <td><?= $searchResult['vehicle_type'] ?></td>
                        <td><?= $searchResult['vehicle_chassis_number'] ?></td>
                        <td><?= $searchResult['vehicle_production_year'] ?></td>
                        <td><?= $searchResult['registration_number'] ?></td>
                        <td><?= $searchResult['fuel_type'] ?></td>
                        <td><?= $searchResult['registration_to'] ?></td>
                    </tr>
                </tbody>
            </table>
            <?php } ?>
    </div>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Latest Compiled Bootstrap 4.6 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>