<?php 

session_start();
require_once __DIR__ . "/Database/db.php";
require_once __DIR__ . "/functions.php";


$data = $_POST;


$sql = "INSERT INTO companies(url_cover, title, subtitle, about_you, phone, location, service_product, about_company, linkedin, facebook, twitter, google, card1image, card1text, card2image, card2text, card3image, card3text, last_edit) VALUES (:url_cover, :title, :subtitle, :about_you, :phone, :location, :service_product, :about_company, :linkedin, :facebook, :twitter, :google, :card1image, :card1text, :card2image, :card2text, :card3image, :card3text, :last_edit)";
$stmt = $pdo->prepare($sql);
$result = $stmt->execute($data);



if($result) {
    setMessage("Web page created", "success");
    header('Location: updatePage.php');
} else {
    setMessage("An error occured", "danger");
    header('Location: page1.php');
}

