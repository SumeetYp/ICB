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
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/shareMyStory.css">
    <link rel="stylesheet" href="./css/utils.css">

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
            <h2><?php echo $_SESSION['type'] ?></h2>
        </div>
        <div class="sm-container">
            <div class="add-post">
                <h3>Add Post</h3>
                <img src="./images/plus.png" alt="">
            </div>
            <div class="share-my-story">
                <h3>Share My Story</h3>
                <img src="./images/share (1).png" alt="">
            </div>
            <div class="add-previous-story">
                <h3>Add Private Story</h3>
                <img src="./images/story.png" alt="">
            </div>
        </div>
        <div class="post-something">
            <img src="./images/upload.gif" alt="" class="upload-image"> <br>
            <h4 class="textt">Post Something!</h4> <br>
            <form action="">
                <label class="custom-file-upload">
                    <input type="file" />
                    Choose File
                </label>
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