<?php

session_start();
require_once __DIR__ . "/Database/db.php";
require_once __DIR__ . "/functions.php";

// print_r($_GET);
// die;

$id = $_POST['selectDesign'];

$sql = 'SELECT * FROM companies WHERE company_id = :id ';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

$company = $stmt->fetch();


// $imageName = "pexels-photo-125532.jpeg";
// $image =  base_url() . '/public/' . '/images/' . $imageName;
// $id = $pdo->lastInsertId();

// $sql = "SELECT * FROM companies WHERE company_id = :id";
// $stmt= $pdo->prepare($sql);
// $stmt->execute(['id' => $id]);

//  if ($stmt->rowCount() == 0) {
//   header('Location: page1.php?status=danger');
//   die();
// } 

// $company = $stmt->fetchAll();

// echo "<pre>";
// print_r($company);
// die; 




?>

<!DOCTYPE html>
<html>

<head>
  <title>Your page</title>
  <meta charset="utf-8" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />

  <!-- Latest compiled and minified Bootstrap 4.6 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
  <!-- CSS script -->
  <link rel="stylesheet" href="/Utillities/style.css" />
  <!-- Latest Font-Awesome CDN -->
  <script src="https://kit.fontawesome.com/64087b922b.js" crossorigin="anonymous"></script>

  <style>
    .webpageHero {
      background-image: url("<?= $company['url_cover'] ?>");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      box-sizing: border-box;
    }

    .vh-70 {
      height: 70vh;
    }

    @media screen and (max-width: 425px) {
      .aboutUs .aboutText {
        width: 100%;
      }
    }

    @media screen and (min-width: 768px) {
      .aboutText {
        width: 70%;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand ml-3" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutUs">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services"><?= $company['service_product'] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <?php printSessionMessage() ?>
  <div id="home" class="webpageHero w-100 vh-70 text-center d-flex flex-column justify-content-center">
    <h1 class="text-dark"><?= $company['title'] ?></h1>
    <h2 class="text-dark"><?= $company['subtitle'] ?></h2>
  </div>
  <div id="aboutUs" class="container aboutUs">
    <div class="row text-center d-flex flex-column justify-content-center align-items-center p-3">
      <div class="aboutText col">
        <h2>About us</h2>
        <p><?= $company['about_you'] ?></p>
        <hr />
        <p>Tel: <?= $company['phone'] ?></p>
        <p>Location: <?= $company['location'] ?></p>
      </div>
    </div>
  </div>
  <div id="services" class="container cards">
    <h2><?= $company['service_product'] ?></h2>
    <div class="row d-flex flex-column flex-md-row">
      <div class="col">
        <div class="card">
          <img src="<?= $company['card1image'] ?>" class="card-img-top" alt="card1" />
          <div class="card-body bg-dark text-light">
            <h5 class="card-title"><?= $company['service_product'] ?> One Description</h5>
            <p class="card-text"><?= $company['card1text'] ?> </p>
            <p>Last edited: <?= $company['last_edit'] ?> </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?= $company['card2image'] ?>" class="card-img-top" alt="card1" />
          <div class="card-body bg-dark text-light">
            <h5 class="card-title"><?= $company['service_product'] ?> Two Description</h5>
            <p class="card-text"><?= $company['card2text'] ?> </p>
            <p>Last edited: <?= $company['last_edit'] ?> </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?= $company['card3image'] ?>" class="card-img-top" alt="card1" />
          <div class="card-body bg-dark text-light">
            <h5 class="card-title"><?= $company['service_product'] ?> Three Description</h5>
            <p class="card-text"><?= $company['card3text'] ?> </p>
            <p>Last edited: <?= $company['last_edit'] ?> </p>
          </div>
        </div>
      </div>
    </div>
    <hr class="my-5" />
  </div>
  <div id="contact" class="container contact bg-light">
    <div class="row d-flex flex-column flex-md-row">
      <div class="col">
        <h2>Contact</h2>
        <p><?= $company['about_company'] ?></p>
      </div>
      <div class="col">
        <form class="bg-light p-3">
          <label for="name">Name</label>
          <input type="text" class="form-control mb-3" id="name" name="name" />
          <label for="email">Email</label>
          <input type="text" class="form-control mb-3" id="email" name="email" />
          <label for="aboutYou">Message</label>
          <textarea type="text" class="form-control mb-3" id="aboutYou" name="aboutYou"></textarea>
          <div class="form-group mb-1 text-center">
            <button class="btn btn-info">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <footer>
    <div class="row d-flex flex-column justify-content-center align-items-center p-2 bg-dark text-light">
      <div class="col text-center">
        <p>Copyright by Brainster</p>
      </div>
      <div class="col text-center">
        <a class="mx-2" href="<?= $company['linkedin'] ?>">LinkedIn</a>
        <a class="mx-2" href="<?= $company['facebook'] ?>">Facebook</a>
        <a class="mx-2" href="<?= $company['twitter'] ?>">Twitter</a>
        <a class="mx-2" href="<?= $company['google'] ?>">Google</a>
      </div>
    </div>
  </footer>

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <!-- Latest Compiled Bootstrap 4.6 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>