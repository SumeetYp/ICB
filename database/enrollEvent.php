<?php
    include '../config.php';
    $id = $_GET['userId'];
    $eventTableName = $_GET['event'];
    $sql = "SELECT username, mobile, email FROM users WHERE id='$id'";
    $resultUser = mysqli_query($mysqli, $sql) or die("SQL Failed");
    if(mysqli_num_rows($resultUser) > 0){
        $outputUser = mysqli_fetch_array($resultUser);
    }
    $enrolledUsername=$outputUser['username'];
    $enrolledUserMobile=$outputUser['mobile'];
    $enrolledUserEmail=$outputUser['email'];
    $sql = "INSERT INTO `$eventTableName` (id, enrolledUsername, enrolledUserMobile, enrolledUserEmail) VALUES ($id, '$enrolledUsername', $enrolledUserMobile, '$enrolledUserEmail')";
    $resultUser = mysqli_query($mysqli, $sql);
    mysqli_close($mysqli);
    header("Location: ../index.php");
?>