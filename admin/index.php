<?php
include './config.php';

$sql = "SELECT * FROM users";
$resultUser = mysqli_query($mysqli, $sql) or die("SQL Failed");

$sql = "SELECT * FROM announcements ORDER BY noticeDate DESC";
$resultAnnouncements = mysqli_query($mysqli, $sql) or die("SQL Failed");
    
$sql = "SELECT * FROM events";
$resultEvents = mysqli_query($mysqli, $sql) or die("SQL Failed");

mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/utils.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <!-- Navigation Bar -->
    <nav>

        <!-- Hamburger Icon -->
        <div class="hamBurger">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <?php
        $outputUser = NULL;
        if (mysqli_num_rows($resultUser) > 0) {
            $outputUser = mysqli_fetch_array($resultUser);
        }
        echo "<div class='userName'>" . $outputUser['username'] . "</div>" . "\n" .
            "<div class='profilePicture'>" . "\n" .
            "<img class='profPic' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU' alt=''>" . "\n" .
            "<img class='check' src='./images/check 1admin.png' alt=''>" . "\n" .
            "</div>";
        ?>
    </nav>

    <!-- SideBar Menu -->
    <div class="sideBar">
        <div class="sideItems">

            <!-- Side Elements -->
            <ul>
                <a href="./index.php" style="background-color: #D9D9D9;">Home</a>
                <a href="./stats.php">Stats</a>
                <a href="./events.php">Event</a>
                <a href="./announcement.php">Announcement</a>
                <a href="./donate.php">Donate</a>
                <a href="./addMarshalls.php">Add a Marshal</a>
                <a href="./alert.php">Send an Alert</a>
            </ul>
            <div class="cross">
                <img src="./images/cross.png" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="search-container">
            <table class="tableSearch">
                <tr>
                    <td>
                        <input class="search" type="text" placeholder="Search for friends..." name="search">
                    </td>
                    <td class="searchLogo">
                        <a href=""><i class="fa fa-search"></i></a>
                    </td>
                </tr>
            </table>
        </div>

        <?php
            $outputAnnouncements = [];
            if(mysqli_num_rows($resultAnnouncements) > 0){
                while($row = mysqli_fetch_assoc($resultAnnouncements)){
                    $outputAnnouncements[] = $row;
                }
            }
            $display = sizeof($outputAnnouncements)==0?'d-none':'';
            echo "<div class='announcements " . $display . "'>";
        ?>
            <div class="announceHead">Big & Major Announcement</div>
            <div class="announceList">
                <ul class="announces">
                    <?php
                        for($x=0; $x < sizeof($outputAnnouncements); $x++){
                            echo "<li>" . $outputAnnouncements[$x]["content"] . "</li>" . "\n";
                        }
                    ?>
                </ul>
            </div>
        </div>

        <?php
            $outputEvents = [];
            if(mysqli_num_rows($resultEvents) > 0){
                while($row = mysqli_fetch_assoc($resultEvents)){
                    $outputEvents[] = $row;
                }
            }
            $display = sizeof($outputEvents)==0?"d-none": "";
            echo "<div class='opportunities " . $display . "'>";
        ?>

            <div class="opportunityHead">Opportunities Calendar</div>
            <div class="opportunityList">
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- next button -->
                    <a class="prev" onclick="plusSlides(-1)">&#62;&#62;</a>
                    <div class="slides">
                        <?php
                            $linearGradient = '';
                            for($x=0; $x<sizeof($outputEvents); $x++){
                                switch($outputEvents[$x]["eventInitiative"]){
                                    case 'Animal Safety': $linearGradient = 'linear-gradient(90deg, #E01518 0%, rgba(70, 70, 70, 0) 100%)'; 
                                                          break;
                                    case 'Mental Health': $linearGradient = 'linear-gradient(90deg, #CB8FBD 0%, rgba(70, 70, 70, 0) 100%)';
                                                          break;
                                    case 'Mission Shiksha': $linearGradient = 'linear-gradient(90deg, #2EC5B6 0%, rgba(70, 70, 70, 0) 100%)';
                                                          break;
                                    case 'Environment': $linearGradient = 'linear-gradient(90deg, #41D950 0%, rgba(70, 70, 70, 0) 100%)';
                                                        break;
                                    case 'Sex Education': $linearGradient = 'linear-gradient(90deg, #FFBE00 0%, rgba(70, 70, 70, 0) 100%)';
                                                           break;
                                }
                                date_default_timezone_set('Asia/Kolkata');
                                $date = date('Y-m-d');
                                $currDate = strtotime($date);
                                $expire = strtotime($outputEvents[$x]["eventDate"]);
                                echo "<div class='mySlides slide' style='background: " . $linearGradient . ", url(" . './images/donation.png' . ") no-repeat center center / cover;'>" .
                                         "<div class='opportunityDetails'>" .
                                             "<div class='opportunityName'>" .
                                                $outputEvents[$x]["eventName"] .
                                             "</div>".
                                             "<div class='opportunityInitiative'>Initiative: " .
                                                $outputEvents[$x]["eventInitiative"] .
                                             "</div>".
                                             "<div class='coreOpportunityDetails'>" .
                                                 "<div class='opportunityDate'>Date: " .
                                                     $outputEvents[$x]["eventDate"] .
                                                 "</div>".
                                                 "<div class='opportunityDate'>Venue: " .
                                                     $outputEvents[$x]["eventVenue"] .
                                                 "</div>".
                                                 "<div class='opportunityDate'>Time: " .
                                                     $outputEvents[$x]["eventTime"] .
                                                 "</div>".
                                                 "<div class='opportunityDate'>Requirements: " .
                                                     $outputEvents[$x]["eventRequirements"] .
                                                 "</div>".
                                             "</div>".
                                         "</div>".
                                         "<div class='daysContainer'>" .
                                            "<div class='daysSlide'>" .
                                                "<div class='daysLeft'>" .
                                                    "<div class='daysLeftNumber' style='left: " . ceil(abs($expire - $currDate) / 86400)/20*100 . "%; filter: hue-rotate(" . ceil(abs($expire - $currDate) / 86400) . "deg)'>" .
                                                        "<span>-" .
                                                            ceil(abs($expire - $currDate) / 86400) .
                                                        "D</span>" .
                                                    "</div>" .
                                                    "<input class='daysLeftSlide' min='1' max='20' type='range' step='1' disabled='true' value='" . ceil(abs($expire - $currDate) / 86400) . "'>" .
                                                "</div>" .
                                            "</div>" .
                                         "</div>" .
                                         "<a class='detailsBtn' target='_blank' href='" . $outputEvents[$x]["id"] . "'>Details</a>" .
                                     "</div>";
                            }
                        ?>
                    </div>
                    <a class="next" onclick="plusSlides(1)">&#62;&#62;</a>
                </div>
                <br>
                <!-- The dots/circles -->
                <div style="text-align:center" class="dots">
                    <?php
                        for($x=0; $x<sizeof($outputEvents); $x++){
                            echo "<span class='dot' onClick='currentSlide(" . $x . "+1)'></span>";
                        }
                    ?>
                </div>
            </div>
        </div>

    </div>
    <script src="./js/opportunity.js"></script>
    <script src="./js/sideBar.js"></script>
</body>

</html>