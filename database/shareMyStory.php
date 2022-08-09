<?php
    include '../config.php';
    $username = $_GET['username'];
    $email = $_GET['email'];
    $caption = $_POST['caption'];
    $dateposted = date("Y-m-d");
    $sql = "INSERT INTO `publicstory` (username, userEmail, caption, dateposted) VALUES ('$username', '$email', '$caption', '$dateposted')";
    $resultStory = mysqli_query($mysqli, $sql) or die ("SQL Failed");
    mysqli_close($mysqli);
    header("Location: ../index.php");
?>