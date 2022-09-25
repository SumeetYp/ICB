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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/addMarshalls.css">
    <link rel="stylesheet" href="./css/utils.css">
    <title>CareforBharat</title>
</head>
<body>

    <!-- Navigation Bar -->
    <?php
        include './header.php';
    ?>

    <div class="addMarshall">
        <div class="marshalls">
            <a target="_blank" href="./membersRegistration.php" class="addMember">
                <div class="details">
                    <div>Member</div>
                    <div>Membership Fee: &#8377;499/-</div>
                    <div>Eligibility: 18+ Only</div>
                </div>
            </a>
            <a target="_blank" href="./studentsRegistration.php" class="addSchool">
                <div class="details">
                    <div>School</div>
                    <div>SLTP Fee: &#8377;199/-</div>
                    <div>Eligibility: Must be enrolled in School</div>
                </div>
            </a>
            <!-- <a target="_blank" class="addVolunteer">
                <div class="details">
                    <div>Volunteers</div>
                    <div>(Not Now)</div>
                </div>
            </a> -->
        </div>
    </div>
    <script src="./js/sideBar.js"></script>
</body>
</html>