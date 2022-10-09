<?php

require_once __DIR__ . "/autoload.php";
guestsOnly();

require_once __DIR__ . "/partials/header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h2 class="text-center mt-5">Sign up form</h2>
            <form class="my-5" method="POST" action="auth.php">
                <input type="hidden" name="action" value="register" />
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= old('email') ?>">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= old('username') ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn button-color">Register</button>
            </form>
        </div>
    </div>
</div>

<?php

require_once __DIR__ . "/partials/footer.php";

?>