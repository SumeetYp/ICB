<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
        header("Location: ./index_login.php");
    }
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/shareMyStory.css">
    <link rel="stylesheet" href="./css/utils.css">

    <style>
        <?php include "./css/shareMyStory.css" ?>
    </style>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <!-- Navigation Bar -->
    <?php
        include './header.php';
    ?>

    <!-- shareMyStory -->


    <div class="container">
        <?php 
            echo "<div class='profilePicture pp-sms'>" . "\n" .
                     "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU' style='border-color: " . $borderColor . ";' alt=''>" . "\n" .
                     "<img class='check right-tick " . $display . "' src='" . $checkSrc . "' alt=''>" . "\n" .
                 "</div>";
        ?>
        <div class="name">
            <h2> <?php echo $_SESSION['username']?></h2>
        </div>
        <div class="role">
            <h2><?php echo ucwords($_SESSION['type']); ?></h2>
        </div>
        <div class="sm-container">
            <div class="add-post">
                <h3>Add Post</h3>
                <img src="./images/plus.png" alt="">
            </div>
        </div>
        <div class="post-something">
            <?php echo "<form action='./database/shareMyStory.php?username=$username&email=$email' method='POST'>" ?>
            <textarea name='caption' placeholder="Enter Text" rows="20" id="comment_text" cols="40" class="ui-autocomplete-input" ></textarea>
            <br>    
            <input type="submit" class="btn">
            </form>
        </div>
        <div class="no-post-yet">
            <h2>No Post Yet</h2>
        </div>
    </div>
    
    <script src="./js/sideBar.js"></script>
</body>

</html>