<?php 
    require_once __DIR__ . "/autoload.php";
    authOnly();

    require_once __DIR__ . "/partials/header.php";
?>

<div class="container">
    <div class="row">
        <h2 class="mt-5">Welcome <?= $_SESSION['username'] ?> !</h2>
        </div>
    </div>
</div>

<?php 
    require_once __DIR__ . "/partials/footer.php";
?>
