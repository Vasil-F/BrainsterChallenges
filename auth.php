<?php 
require_once __DIR__ . "/autoload.php";

if($_SERVER['REQUEST_METHOD'] !== "POST") {
    redirect("index.php");
}


$errors = [];

if($_POST['action'] == 'register') {
    $email = $_POST['email']; 
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $emailCount = explode("@", $email);

    if ($_POST['email'] == '' || $_POST['username'] == '' || $_POST['password'] == '') {
        array_push($errors, 'All fields must be filled');
    }   
        else {
        
        // if(strlen($emailCount[0]) < 5) {
        //     array_push($errors, 'Email must be at least 5 characters');
        // }
        $errors = emailCharacters($errors, $emailCount);

        // if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     array_push($errors, 'Email must be valid');
        // }
        $errors = emailValidation($errors, $email);

        // if (preg_match("/\s/", $username) || preg_match("/\W/", $username)) {
        //     array_push($errors, 'Username cannot contain any empty spaces or special characters');
        // }

        $errors = usernameValidation($errors, $username);

        // if (!preg_match("/\d/", $password) || !preg_match("/\W/", $password) || !preg_match("/[A-Z]/", $password)) {
        //     array_push($errors, 'Password must contain at least one number, one special character and one uppercase letter');
        // }

        $errors = passwordMatch($errors, $password);
    }

    $allUsers = file_get_contents(__DIR__ . "/database/data.txt");
    $allUsers = trim($allUsers);
    $allUsers = explode(PHP_EOL, $allUsers);

    foreach($allUsers as $user) {
        $user = explode("|", $user);
        if($email == $user[1]) {
            array_push($errors, "A user with this email already exists");
        } 
        if($username == $user[2]) {
            array_push($errors, "Username taken");
            break;
        } 
    }

    if(count($errors) > 0) {
        redirect("register.php", "danger", $errors);
    }

    $password = password_hash($password, PASSWORD_BCRYPT); 


    if(strlen($allUsers[0]) == 0) {
        $id = 1;
    } else {
        $id = count($allUsers) + 1;
    }


    $text = "$id|$email|$username|$password";

    if(file_put_contents(__DIR__ . "/database/data.txt", $text . PHP_EOL, FILE_APPEND)) {
        redirect("login.php", 'success', ['User registered. You can login now.']);
        isset($_SESSION['username']);
    } else {
        redirect("register.php", "danger", ['Registration failed']);
    }
    
} else if($_POST['action'] == 'login') {
    $username = $_POST['Username']; 
    $password = $_POST['password'];

    if ($_POST['Username'] == '' || $_POST['password'] == '') {
        array_push($errors, 'All fields must be filled');
    }  

    if(count($errors) > 0) {
        redirect("login.php", "danger", $errors);
    }

    $allUsers = file_get_contents(__DIR__ . "/database/data.txt");
    $allUsers = trim($allUsers);
    $allUsers = explode(PHP_EOL, $allUsers);

    foreach($allUsers as $user) {
        $user = explode("|", $user);
        if(($username == $user[2]) && password_verify($password, $user[3])) {
            $_SESSION['username'] = $user[2];
            $_SESSION['user_id'] = $user[0];
            header("Location: posts.php");
            die();
        }
    }

    redirect("login.php", "danger", ["Wrong username/password combination"]);

    header("Location: login.php");
    die();
 
}
