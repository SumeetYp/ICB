<?php
    include '../config.php';
    $mobile = $_POST['mobile'];
    $bio = $_POST['bio'];
    $id = $_GET['userId'];
    $sql = "UPDATE users SET mobile='$mobile', bio='$bio' WHERE id='$id'";
    $result = mysqli_query($mysqli, $sql) or die("SQL Failed");
    mysqli_close($mysqli);
    header("Location: ../profile.php");
?>