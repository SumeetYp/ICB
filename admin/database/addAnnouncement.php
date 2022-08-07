<?php
    include('../config.php');
    $expiryDate = $_POST['endDate'];
    $noticeDate = date("Y-m-d");
    $id = abs( crc32( uniqid() ) );
    $content = $_POST['announcement'];
    $sql = "INSERT INTO announcements (id, noticeDate, expiryDate, content) VALUES ($id, '$noticeDate', '$expiryDate', '$content')";
    $resultAddAnnouncement = mysqli_query($mysqli, $sql) or die ("SQL Failed");
    mysqli_close($mysqli);
    header("Location: ../index.php");
?>