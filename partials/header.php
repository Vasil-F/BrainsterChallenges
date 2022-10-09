<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My app</title>
    <link href="./assets/bootstrap-4.6.2-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/main.css" rel="stylesheet" />
</head>
<body class="main">
    <?php 
        require_once __DIR__ . "/menu.php";
    ?>
    <?php 
    if(isset($_SESSION['status'])) {
        $msgs = $_SESSION['msgs'];

        echo "<div class='container'><div class='row'><div class='col'>";

        if($_SESSION['status'] == 'danger') {
            echo "<div class='alert alert-danger'><ul class=' mb-0'>";
            foreach($msgs as $msg) {
                echo "<li class='text-warning'>{$msg}</li>";
            }
            echo "</ul></div>";
        } else if($_SESSION['status'] == 'success') {
            echo "<div class='alert alert-success'><ul class='mb-0'>";
            foreach($msgs as $msg) {
                echo "<li>{$msg}</li>";
            }
            echo "</ul></div>";
        }

        echo "</div></div></div>";

        unset($_SESSION['status']);
        unset($_SESSION['msg']);
    }
    ?>