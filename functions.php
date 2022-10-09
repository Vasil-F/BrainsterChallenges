<?php 

function auth() {
    return isset($_SESSION['username']);
}

function guestsOnly() {
    if(auth()) {
        header("Location: posts.php");
        die();
    }
}

function authOnly() {
    if(!auth()) {
        header("Location: index.php");
        die();
    }
}

function redirect($url, $status = '', $msgs = []) {
    $_SESSION['status'] = $status;
    $_SESSION['msgs'] = $msgs;

    $_SESSION['old'] = $_POST;

    header("Location: $url");
    die();
}

function old($fieldName) {
    return $_SESSION['old'][$fieldName] ?? '';
}

function emailCharacters($errors, $emailCount){
    if(strlen($emailCount[0]) < 5) {
        array_push($errors, 'Email must be at least 5 characters');
    }
    return $errors;
}

function emailValidation($errors, $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, 'Email must be valid');
    }
    return $errors;
}

function usernameValidation($errors, $username){
    if (preg_match("/\s/", $username) || preg_match("/\W/", $username)) {
        array_push($errors, 'Username cannot contain any empty spaces or special characters');
    }
    return $errors;
}

function passwordMatch($errors, $password){
    if (!preg_match("/\d/", $password) || !preg_match("/\W/", $password) || !preg_match("/[A-Z]/", $password)) {
        array_push($errors, 'Password must contain at least one number, one special character and one uppercase letter');
    }
    return $errors;
}
