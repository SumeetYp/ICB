<?php

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
        header("Location: ./index_login.php");
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
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/utils.css">
</head>
<body>

<!-- Navbar goes here  -->
<?php
    include 'header.php';
?>

<!-- event name banner -->
<div class="peBanner">
    <h1 class="peHeading"><?php echo $outputEvent['eventName']; ?></h1>
    <p class="peSub"><?php echo $outputEvent['eventInitiative']; ?></p>
</div>

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
                            <a href='./database/attendance.php?attended=false&eTN=$eventTableName&email=" . $enrolledUsers[$x]['enrolledUserEmail'] . "'><i style='color:#f80505' class='fa-solid fa-circle-xmark'></i></a>
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