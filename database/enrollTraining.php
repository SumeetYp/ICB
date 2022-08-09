<?php
    include '../config.php';
    $id = $_GET['userId'];
    $trainingTableName = $_GET['training'];
    $sql = "SELECT username, mobile, email FROM users WHERE id='$id'";
    $resultUser = mysqli_query($mysqli, $sql) or die("SQL Failed");
    if(mysqli_num_rows($resultUser) > 0){
        $outputUser = mysqli_fetch_array($resultUser);
    }
    $enrolledUsername=$outputUser['username'];
    $enrolledUserMobile=$outputUser['mobile'];
    $enrolledUserEmail=$outputUser['email'];
    $enrollmentDate = date("Y-m-d");
    $sql = "INSERT INTO $trainingTableName (id, enrolledUsername, enrolledUserMobile, enrolledUserEmail, enrollmentDate, enrolledUserCompleted) VALUES ($id, '$enrolledUsername', $enrolledUserMobile, '$enrolledUserEmail', '$enrollmentDate', 0)";
    $resultUser = mysqli_query($mysqli, $sql);
    mysqli_close($mysqli);
    header("Location: ../trainings.php");
?>