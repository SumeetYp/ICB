<?php
    include '../config.php';
    $mobile = $_POST['mobile'];
    $bio = $_POST['bio'];
    $userEmail = $_GET['userEmail'];
    $sql = "UPDATE users SET mobile='$mobile', bio='$bio' WHERE email='$userEmail'";
    $result = mysqli_query($mysqli, $sql) or die("SQL Failed");
    mysqli_close($mysqli);
    header("Location: ../profile.php");
?>