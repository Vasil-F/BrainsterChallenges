<?php
require_once __DIR__ . "/functions.php";

$imageName = "pexels-photo-3184450.jpeg";
$image =  base_url() . '/public/' . '/images/' . $imageName;

?>


<!DOCTYPE html>
<html>

<head>
    <title>Web page builder</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <!-- Latest compiled and minified Bootstrap 4.6 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- CSS script -->
    <link rel="stylesheet" href="/Utillities/style.css">
    <!-- Latest Font-Awesome CDN -->
    <script src="https://kit.fontawesome.com/64087b922b.js" crossorigin="anonymous"></script>

    <style>
        .hero {
            background-image: url("<?= $image ?>");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .mb-50 {
            margin-bottom: 170px;
        }
    </style>

</head>

<body>
    <div class="hero container-fluid w-100 vh-100 d-flex flex-column justify-content-end align-items-center">
        <?php printSessionMessage() ?>
        <div class="row mb-50">
            <div class="col text-center mb-5">
                <h1 class="my-2">Create your very own webpage.</h1>
                <h2 class="my-2">All you need to do is fill out this form!</h2>
                <a href="page2.php" class="btn btn-outline-dark my-4 py-2 px-4">Start</a>
            </div>
        </div>
    </div>



    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Latest Compiled Bootstrap 4.6 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>