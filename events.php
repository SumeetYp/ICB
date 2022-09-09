<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
        header("Location: ./index_login.php");
    }

    include './config.php';

    $today = date("Y-m-d");

    $sql = "SELECT * FROM events";
    $resultEvents = mysqli_query($mysqli, $sql) or die("SQL Failed");
    $outputEvents = [];
    if(mysqli_num_rows($resultEvents) > 0){
        while($row = mysqli_fetch_assoc($resultEvents)){
            $outputEvents[] = $row;
        }
    }

    $attendedEvents = [];
    $enrolledEvents = [];
    for($x=0; $x<sizeof($outputEvents); $x++){
        $eventName = $outputEvents[$x]['eventName'];
        $eventTableName = $outputEvents[$x]['eventTableName'];
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM `$eventTableName` WHERE enrolledUserEmail='$email'";
        $resultEventTable = mysqli_query($mysqli, $sql) or die("SQL Failed");
        $outputEventTable = NULL;
        if(mysqli_num_rows($resultEventTable) > 0){
            $outputEventTable = mysqli_fetch_array($resultEventTable);
            if($outputEventTable['enrolledUserAttended'] != 0){
                $attendedEvents[] = (object) ['id' => $outputEventTable['id'], 'enrolledUsername' => $outputEventTable['enrolledUsername'], 'enrolledUserMobile' => $outputEventTable['enrolledUserMobile'], 'enrolledUserEmail' => $outputEventTable['enrolledUserEmail'], 'eventName' => $eventName];
            }
            else if($outputEvents[$x]['eventDate']>$today){
                $enrolledEvents[] = (object) ['id' => $outputEventTable['id'], 'enrolledUsername' => $outputEventTable['enrolledUsername'], 'enrolledUserMobile' => $outputEventTable['enrolledUserMobile'], 'enrolledUserEmail' => $outputEventTable['enrolledUserEmail'], 'eventName' => $eventName];
            }
        }
    }
    
    mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/events.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/utils.css">
    <title>Document</title>

    <style>
        <?php include "./css/events.css" ?>
    </style>

</head>
<body>
    <!-- Navigation Bar -->
    <?php
        include './header.php';
    ?>

    <div class="container">
        <div class="head">
            <div class="enrolledEventsHead">Enrolled</div>
            <div class="attendedEventsHead active">Attended</div>
        </div>
        <div class="enrollments d-block">
            <?php 
                if(sizeof($enrolledEvents)>0){
                    for($x=0; $x<sizeof($enrolledEvents); $x++){
                        echo "<div class='enrolledEvent'>
                            <div class='enrolledEventHeading'>". $enrolledEvents[$x]->eventName . "</div>
                            <div class='enrolledEventData'>
                                <img src='./images/eye.svg' alt=''>
                            </div>
                        </div>";
                    }
                }
                else echo "<div class='empty'>You have not enrolled in any event yet.</div>";
            ?>
        </div>
        <div class="attendedEvents d-none">
            <?php 
                if(sizeof($attendedEvents)>0){
                    for($x=0; $x<sizeof($attendedEvents); $x++){
                        echo "<div class='attendedEvent'>
                            <div class='attendedEventHeading'>" . $attendedEvents[$x]->eventName . "</div>
                            <div class='attendedEventData'>
                                <img src='./images/download.svg' alt=''>
                            </div>
                        </div>";
                    }
                }
                else echo "<div class='empty'>You have not attended any event.</div>";
            ?>
        </div>

        <?php
            $display = sizeof($outputEvents)==0?"d-none": "";
            echo "<div class='opportunities " . $display . "'>";
        ?>

            <div class="opportunityHead">Enroll Now</div>
            <div class="opportunityList">
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- next button -->
                    <a class="prev" onclick="plusSlides(-1)">&#62;&#62;</a>
                    <div class="slides">
                        <?php
                            include './config.php';
                            $linearGradient = '';
                            $email=$_SESSION['email'];
                            for($x=0; $x<sizeof($outputEvents); $x++){
                                if($outputEvents[$x]['eventDate']>$today){
                                    $eventTableName = $outputEvents[$x]['eventTableName'];
                                    $enrolledEvent = $mysqli->query("SELECT * FROM `$eventTableName` WHERE enrolledUserEmail='$email'");
                                    switch($outputEvents[$x]["eventInitiative"]){
                                        case 'Animal Safety': $linearGradient = 'linear-gradient(90deg, rgba(224, 21, 24, 1) 0%, rgba(70, 70, 70, 0.2) 100%)'; 
                                                          $bannerImage = 'https://static.independent.co.uk/2022/06/06/11/GettyImages-544673512.jpg';
                                                              break;
                                        case 'Mental Health': $linearGradient = 'linear-gradient(90deg, rgba(203, 143, 189, 1) 0%, rgba(70, 70, 70, 0.2) 100%)';
                                                            $bannerImage = 'https://images.pexels.com/photos/185801/pexels-photo-185801.jpeg';
                                                              break;
                                        case 'Mission Shiksha': $linearGradient = 'linear-gradient(90deg, rgba(46, 197, 182, 1) 0%, rgba(70, 70, 70, 0.2) 100%)';
                                                                $bannerImage = 'https://images.pexels.com/photos/5088008/pexels-photo-5088008.jpeg';
                                                              break;
                                        case 'Environment': $linearGradient = 'linear-gradient(90deg, rgba(65, 217, 80, 1) 0%, rgba(70, 70, 70, 0.2) 100%)';
                                                            $bannerImage = 'https://images.unsplash.com/photo-1545147986-a9d6f2ab03b5';
                                                            break;
                                        case 'Sex Education': $linearGradient = 'linear-gradient(90deg, rgba(255, 190, 0) 0%, rgba(70, 70, 70, 0.2) 100%)';
                                                            $bannerImage = 'https://images.unsplash.com/photo-1545693315-85b6be26a3d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80';
                                                               break;
                                    }
                                    echo "<div class='mySlides slide' style='background: $linearGradient, url($bannerImage) no-repeat center center / cover;'>
                                         <div class='opportunityDetails'>
                                            <div class='opportunityName'>".$outputEvents[$x]["eventName"]."</div>
                                             <div class='opportunityInitiative'>Initiative: ".$outputEvents[$x]["eventInitiative"]."</div>
                                             <div class='coreOpportunityDetails'>
                                                <div class='opportunityDate'>Date: ".$outputEvents[$x]["eventDate"]."</div>
                                                <div class='opportunityDate'>Venue: ".$outputEvents[$x]["eventVenue"]."</div>
                                                <div class='opportunityDate'>Time: ".$outputEvents[$x]["eventTime"]."</div>
                                                <div class='opportunityDate'>Requirements: ".$outputEvents[$x]["eventRequirements"]."</div>
                                             </div>
                                         </div>";
                                         if($enrolledEvent->num_rows == 0){
                                            echo"<a class='enroll' href='./database/enrollEvent.php?userEmail=$email&event=$eventTableName'>Enroll</a></div>";
                                         } else {
                                            echo"<button disabled id='enrolledbtn' style='cursor:default;'>Enrolled</button></div>";
                                         }
                                }
                            }
                            mysqli_close($mysqli);
                        ?>
                    </div>
                    <a class="next" onclick="plusSlides(1)">&#62;&#62;</a>
                </div>
                <br>
                <!-- The dots/circles -->
                <div style="text-align:center" class="dots">
                    <?php
                        for($x=0; $x<sizeof($outputEvents); $x++){
                            if($outputEvents[$x]['eventDate']>$today){
                                echo "<span class='dot' onClick='currentSlide(" . $x . "+1)'></span>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>

    </div>
    <script src="./js/opportunity.js"></script>
    <script src="./js/event.js"></script>
    <script src="./js/sideBar.js"></script>
</body>
</html>