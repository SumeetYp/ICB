<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
        header("Location: ./index.php");
    }
    if (!isset($_SESSION['type'])){
        header("Location: ../index.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/comingSoon.css">
    <link rel="stylesheet" href="./css/utils.css">
    <style>
        <?php include "./css/header.css" ?>
    </style>
    <script src="./js/sliderAccordian.js" defer></script>
    <title>Coming Soon</title>
</head>
<body>
    <!-- Navigation Bar -->
    <?php
        include './header.php';
    ?>

    <!-- Coming Soon Text -->
    <div class="comingSoon">
        <div class="neonText1">Coming</div>
        <div class="neonText2">Soon</div>
    </div>

    <script src="./js/sideBar.js"></script>
</body>
</html>