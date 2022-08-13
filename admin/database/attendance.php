<?php
    $attended = $_GET['attended'];
    $eventTableName = $_GET['eTN'];
    $enrolledUserEmail = $_GET['email'];

    include '../config.php';

    if($attended=='true'){
        $sql = "UPDATE `$eventTableName` SET enrolledUserAttended=1 WHERE enrolledUserEmail='$enrolledUserEmail'";
        $result = mysqli_query($mysqli, $sql) or die("SQL Failed");
    }
    else if($attended=='false'){
        $sql = "DELETE FROM `$eventTableName` WHERE enrolledUserEmail='$enrolledUserEmail'";
        $result = mysqli_query($mysqli, $sql) or die("SQL Failed");
    }
    else {
        echo 'Some Error Occured';
    }

    mysqli_close($mysqli);

    $previousPage = $_SERVER['HTTP_REFERER'];
    header("Location: $previousPage");
?>