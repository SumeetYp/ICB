<?php
    include '../config.php';
    $id = $_GET['userId'];
    $userEmail = $_GET['userEmail'];
    $username = $_GET['username'];
    $enquiry = $_POST['enquiry'];
    $sql = "INSERT INTO support (userEmail, username, enquiry) VALUES ('$userEmail', '$username', '$enquiry')";
    mysqli_query($mysqli, $sql) or die("SQL Failed");
    mysqli_close($mysqli);
    header("Location: ../index.php");
?>