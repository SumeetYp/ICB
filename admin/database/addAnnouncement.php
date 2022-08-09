<?php
    include('../config.php');
    $expiryDate = $_POST['endDate'];
    $noticeDate = date("Y-m-d");
    $content = $_POST['announcement'];
    $sql = "INSERT INTO announcements (noticeDate, expiryDate, content) VALUES ('$noticeDate', '$expiryDate', '$content')";
    $resultAddAnnouncement = mysqli_query($mysqli, $sql) or die ("SQL Failed");
    mysqli_close($mysqli);
    header("Location: ../index.php");
?>