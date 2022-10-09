<?php 
require_once __DIR__ . "/autoload.php";
guestsOnly();

require_once __DIR__ . "/partials/header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
        <h2 class="text-center mt-5">Login form</h2>
            <form class="my-5" method="POST" action="auth.php">
                <input type="hidden" name="action" value="login" />
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" id="Username" name="Username" value="<?= old('Username') ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn button-color">Login</button>
            </form>
        </div>
    </div>
</div>

<?php 

require_once __DIR__ . "/partials/footer.php";

?>