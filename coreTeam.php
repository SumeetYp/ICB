<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
        header("Location: ./index_login.php");
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
    <link rel="stylesheet" href="./css/coreTeam.css">
    <link rel="stylesheet" href="./css/utils.css">
    <title>Document</title>
</head>
<body>

    <!-- Navigation Bar -->
    <?php
        include './header.php';
    ?>

    <!-- Heading -->
    <h2>Contact Team</h2>

    <div class="container">
        <div class="contactTeam"></div>
    </div>
    <script src="./js/sideBar.js"></script>
    <script src="./js/coreTeam.js"></script>
</body>
</html>