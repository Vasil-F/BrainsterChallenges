<div class="container">
    <div class="row">
       
            <nav class="navbar navbar-expand-lg navbar-light menu-background w-100">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <?php 
                        if(auth()) {
                            echo '<li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout '.$_SESSION['username'].'</a>
                            </li>';   
                        } else {
                            echo '<li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="register.php">Register</a>
                            </li>';
                        }
                        ?>
                    </ul>
                </div>
            </nav>
        
    </div>
</div>