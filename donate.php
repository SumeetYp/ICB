<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/donate.css">
    <link rel="stylesheet" href="./css/utils.css">
</head>

<body>
    <!-- Navigation Bar -->
    <?php
        include './header.php';
    ?>

    <!-- donate page  -->
    <div class="container">
        <div class="first-donate">
            <div class="another-div">
                <div class="donate">
                    <h2>
                        Donate
                    </h2>
                </div>
                <div class="d-donate">
                    <h3>
                        without 80G
                    </h3>
                </div>
            </div>
        </div>
        <div class="second-donate">
            <div class="another-div">
                <div class="donate">
                    <h2>
                        Donate
                    </h2>
                </div>
                <div class="d-donate">
                    <h3>
                        without 80G
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/sideBar.js"></script>
</body>

</html>