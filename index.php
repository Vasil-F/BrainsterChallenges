<?php
require_once __DIR__ . "/autoload.php";
guestsOnly();

require_once __DIR__ . "/partials/header.php";
?>

 <div class="main container-fluid vh-100 w-100 d-flex flex-column align-items-center justify-content-center ">
    <div class="row flex-column justify-content-center align-items-center">
      <h1 class="mb-5">Please select an option:</h1>
    </div>
    <div class="row flex-row w-100 justify-content-center align-items-center mt-5">
      <div class="col d-flex flex-row justify-content-center w-100">
        <a class="btn btn-block btn-lg btn-danger w-75 font-weight-bold fs-lg" href="login.php">Login</a>
      </div>
      <div class="col d-flex flex-row justify-content-center w-100">
        <a class="btn btn-block btn-lg btn-warning w-75 font-weight-bold fs-lg" href="register.php">Register</a>
      </div>
    </div>
  </div>

<?php 
require_once __DIR__ . "/partials/footer.php";
?>