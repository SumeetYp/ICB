<?php   
    $eventName = $_POST['eventName'];
    $eventInitiative = $_POST['eventInitiative'];
    $eventTableName = $_POST['eventTableName'];
    $eventDate = $_POST['date'];
    $eventMonth = $_POST['month'];
    $eventYear = $_POST['year'];
    $eventHour = $_POST['hour'];
    $eventMinute = $_POST['minute'];
    $eventVenue = $_POST['eventVenue'];
    $eventRequirements = $_POST['eventRequirements'];
    $today = date("Y-m-d");
    $eDate = date_format(date_create("$eventYear-$eventMonth-$eventDate"), "Y-m-d");
    $eTime = date("h:i:s", mktime($eventHour, $eventMinute, 0));
    if($today < $eDate){
        include '../config.php';

        $sql = "INSERT INTO events (eventName, eventInitiative, eventTableName, eventDate, eventVenue, eventTime, eventRequirements) VALUES ('$eventName', '$eventInitiative', '$eventTableName', '$eDate', '$eventVenue', '$eTime', '$eventRequirements')";
        $result = mysqli_query($mysqli, $sql) or die('Event not added');

        $sql = "CREATE TABLE `$eventTableName`(
            id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            enrolledUsername VARCHAR(255),
            enrolledUserMobile BIGINT(15),
            enrolledUserEmail VARCHAR(255),
            enrolledUserAttended TINYINT(1) DEFAULT 0
        )";
        $result = mysqli_query($mysqli, $sql) or die('Event Table Creation Unsuccessful');

        mysqli_close($mysqli);
    }

    header("Location: ../index.php");

?>