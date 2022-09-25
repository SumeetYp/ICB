<?php

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
        header("Location: ./index.php");
    }
    if (!(isset($_SESSION['type']) && ($_SESSION['type']=='admin' || $_SESSION['type']=='core-team'))){
        header("Location: ../index.html");
    }
    include './config.php';

    $id=$_GET['eID'];
    $eventTableName=$_GET['eTN'];

    $sql = "SELECT * FROM events WHERE id='$id'";
    $resultEvent = mysqli_query($mysqli, $sql) or die('Some error occured');

    $outputEvent=NULL;
    if(mysqli_num_rows($resultEvent)>0){
        $outputEvent=mysqli_fetch_array($resultEvent);
    }

    $sql = "SELECT * FROM `$eventTableName`;";
    $resultUsers = mysqli_query($mysqli, $sql) or die('Some error occured');
    $outputUsersAll = [];
    if(mysqli_num_rows($resultUsers) > 0){
        while($row = mysqli_fetch_assoc($resultUsers)){
            $outputUsersAll[] = $row;
        }
    }
    $enrolledUsers = [];
    $attendedUsers = [];
    for($x=0; $x<sizeof($outputUsersAll); $x++){
        if($outputUsersAll[$x]['enrolledUserAttended']==0){
            $enrolledUsers[] = $outputUsersAll[$x];
        }
        else{
            $attendedUsers[] = $outputUsersAll[$x];
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $outputEvent['eventName']; ?></title>

    <!-- Font awesome key -->
    <script src="https://kit.fontawesome.com/ec7ea1a9d7.js" crossorigin="anonymous"></script>

    <!-- stylesheet link -->
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/eventmanage.css">
    <link rel="stylesheet" href="./css/utils.css">
</head>
<body>

<!-- Navbar goes here  -->
<?php
    include 'header.php';
?>

<!-- event name banner -->
<?php
    switch($outputEvent['eventInitiative']){
        case 'Animal Safety': $bannerColor = '224, 21, 24';
                              $bannerImage = 'https://static.independent.co.uk/2022/06/06/11/GettyImages-544673512.jpg';
                              break;
        case 'Mental Health': $bannerColor = '203, 143, 189';
                              $bannerImage = 'https://images.pexels.com/photos/185801/pexels-photo-185801.jpeg';
                              break;
        case 'Mission Shiksha': $bannerColor = '46, 197, 182';
                                $bannerImage = 'https://images.pexels.com/photos/5088008/pexels-photo-5088008.jpeg';
                                break;
        case 'Environment': $bannerColor = '65, 217, 80';
                            $bannerImage = 'https://images.unsplash.com/photo-1545147986-a9d6f2ab03b5';
                            break;
        case 'Sex Education': $bannerColor = '255, 190, 0';
                              $bannerImage = 'https://images.unsplash.com/photo-1545693315-85b6be26a3d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80';
                              break;
        default: $bannerColor = '0, 0, 0';
                 $bannerImage = 'https://images.pexels.com/photos/6331088/pexels-photo-6331088.jpeg';
                 break;
    }
    echo "<div class='peBanner' style='background: linear-gradient(180deg, rgba($bannerColor, 0.7) 22%, rgba($bannerColor, 0.14) 100%), url($bannerImage);background-position: center;background-repeat: no-repeat;background-size: cover;'>
            <h1 class='peHeading'>".$outputEvent['eventName']."</h1>
            <p class='peSub'>".$outputEvent['eventInitiative']."</p>
          </div>"
?>

<!-- details list -->
<div class="peDetails">
    <div class="peList">
        <i class="fa-solid fa-calendar-check fa-2x"></i> 
        <p><?php echo $outputEvent['eventDate']; ?></p>
    </div>
    <div class="peList">
        <i class="fa-solid fa-clock fa-2x"></i>
        <p><?php echo $outputEvent['eventTime']; ?></p>
    </div>
    <div class="peList">
        <i class="fa-solid fa-location-dot fa-2x"></i>
        <p><?php echo $outputEvent['eventVenue']; ?></p>
    </div>
    <div class="peList">
        <i class="fa-solid fa-rectangle-list fa-2x"></i>        
        <p><?php echo $outputEvent['eventRequirements']; ?></p>
    </div>
</div>

<!-- Enrollments list  -->
<div class="peEnrol">
    <div class="peHead">
        <h2>Enrollments</h2>
        <h2>Count : <span class="eCount"><?php echo sizeof($outputUsersAll); ?></span></h2>
    </div>
    <div class="peBody">
        <?php
            for($x=0; $x<sizeof($enrolledUsers); $x++){
                    echo "<div class='eRow'>
                            <div class='eName'>" . $enrolledUsers[$x]['enrolledUsername'] . "</div>" .
                           "<div class='eNum'>" . $enrolledUsers[$x]['enrolledUserMobile'] . "</div>
                            <a href='./database/attendance.php?attended=true&eTN=$eventTableName&email=" . $enrolledUsers[$x]['enrolledUserEmail'] . "'><i style='color:#00ba00' class='fa-solid fa-circle-check'></i></a>
                            <i style='color:#f80505' class='fa-solid fa-circle-xmark'></i>
                         </div>";
            }
            for($x=0; $x<sizeof($attendedUsers); $x++){
                    echo "<div class='eRow'>
                            <div class='eName eNameAttended'>" . $attendedUsers[$x]['enrolledUsername'] . "</div>" .
                           "<div class='eNum eNumAttended'>" . $attendedUsers[$x]['enrolledUserMobile'] . "</div>
                           <i style='color:#00ba00' class='fa-solid fa-circle-check'></i>
                           <a href='./database/attendance.php?attended=no&eTN=$eventTableName&email=" . $attendedUsers[$x]['enrolledUserEmail'] . "'><i style='color:#f80505' class='fa-solid fa-circle-xmark'></i></a>
                         </div>";
            }
        ?>
    </div>
</div>
<script src="./js/sideBar.js"></script>

</body>
</html>