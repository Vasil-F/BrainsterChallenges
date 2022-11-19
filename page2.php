<?php

session_start();
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/Database/db.php";

$imageName = "pexels-photo-840996.webp";
$image =  base_url() . '/public/' . '/images/' . $imageName;

?>


<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <!-- Latest compiled and minified Bootstrap 4.6 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- CSS script -->
    <link rel="stylesheet" href="/Utillities/style.css">
    <!-- Latest Font-Awesome CDN -->
    <script src="https://kit.fontawesome.com/64087b922b.js" crossorigin="anonymous"></script>

    <style>

        .page2-bg {
            background-image: url("<?= $image ?>");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .ml-50 {
            margin-left: 400px;
        }

        .h-fit {
            height: fit-content;
        }

        @media screen and (min-width: 1441px) {
            .page2-bg {
                height: 100vh;
            }
        }

    </style>
</head>

<body>

    <div class="page2-bg container-fluid w-100 h-fit d-flex flex-column ">
        <div class="row">
            <div class="col text-center mt-5 mb-3">
                <h2>You are one step away from your webpage.</h2>
            </div>
        </div>
        <form method="POST" action="addCompany.php">
        <div class="container">
            <div class="row">
                <div class="col py-5 py-md-2">
                    <div class="bg-light p-3">
                        <label for="imageURL">Cover image URL</label>
                        <input type="text" class="form-control mb-3" id="imageURL" name="url_cover">
                        <label for="mainTitle">Main title of Page</label>
                        <input type="text" class="form-control mb-3" id="mainTitle" name="title">
                        <label for="subtitle">Subtitle of Page</label>
                        <input type="text" class="form-control mb-3" id="subtitle" name="subtitle">
                        <label for="aboutYou">Something about you</label>
                        <textarea type="text" class="form-control mb-3" id="aboutYou" name="about_you"></textarea>
                        <label for="phone">Your telephone number</label>
                        <input type="number" class="form-control mb-3" id="phone" name="phone">
                        <label for="Location">Location</label>
                        <input type="text" class="form-control mb-3" id="Location" name="location">

                    </div>
                    <div class="bg-light mt-4 p-3 ">
                        <label for="servicesSelect">Do you provide services or products ?</label>
                        <select class="form-control" id="servicesSelect" name="service_product">
                            <option value="Services">Services</option>
                            <option value="Products">Products</option>
                        </select>
                    </div>
                </div>
                <div class="col mx-4">
                    <div class="bg-light p-3 ">
                        <p>Provide url for an image and a description of your service/product</p>
                        <label for="serviceImage1URL">Cover image URL</label>
                        <input type="text" class="form-control mb-3" id="serviceImage1URL" name="card1image">
                        <label for="serviceDescription1">Description of service/product</label>
                        <textarea type="text" class="form-control mb-3" id="serviceDescription1" name="card1text"></textarea>
                        <label for="serviceImage2URL">Cover image URL</label>
                        <input type="text" class="form-control mb-3" id="serviceImage2URL" name="card2image">
                        <label for="serviceDescription2">Description of service/product</label>
                        <textarea type="text" class="form-control mb-3" id="serviceDescription2" name="card2text"></textarea>
                        <label for="serviceImage3URL">Cover image URL</label>
                        <input type="text" class="form-control mb-3" id="serviceImage3URL" name="card3image">
                        <label for="serviceDescription3">Description of service/product</label>
                        <textarea type="text" class="form-control mb-3" id="serviceDescription3" name="card3text"></textarea>

                    </div>
                </div>
                <div class="col mt-5 mt-md-2">
                    <div class="bg-light p-3 ">
                        <p>Provide a description for your company, something people should be aware of before contacting you:</p>
                        <textarea type="text" class="form-control mb-3" id="companyDescription" name="about_company"></textarea>
                        <hr class="mt-5">
                        <label for="linkedIn">LinkedIn</label>
                        <input type="text" class="form-control mb-3" id="linkedIn" name="linkedin">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control mb-3" id="facebook" name="facebook">
                        <label for="twitter">Twitter</label>
                        <input type="text" class="form-control mb-3" id="twitter" name="twitter">
                        <label for="google">Google</label>
                        <input type="text" class="form-control mb-3" id="google" name="google">
                        <input type="hidden" class="form-control mb-3"  name="last_edit" value="<?= date('Y-m-d H:i:s') ?>">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row h-fit">
            <div class="container d-flex justify-content-center align-items-center ">
                <button class="btn btn-info w-50 my-3" type="submit" formmethod="POST" formaction="addCompany.php">Submit</button>
            </div>
        </div>
    </form>
    </div>


    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Latest Compiled Bootstrap 4.6 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>