<?php 

require_once __DIR__ . "/consts.php";

function base_url() {
    return APP_URL;
}

function session_init() {
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
}

function setMessage($msg, $status) {
    session_init();
    $_SESSION['msg'] = $msg;
    $_SESSION['status'] = $status;
}

function printSessionMessage() {
    session_init();
    if(isset($_SESSION['msg'])) {
        echo "<p class='alert alert-{$_SESSION['status']}'>{$_SESSION['msg']}</p>";
        unset($_SESSION['msg']);
        unset($_SESSION['status']);
    }
}