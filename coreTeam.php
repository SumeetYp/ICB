<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
        header("Location: ./index.php");
    }
    if (!isset($_SESSION['type'])){
        header("Location: ../index.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/coreTeam.css">
    <link rel="stylesheet" href="./css/utils.css">
    <title>CareforBharat</title>
</head>
<body>

    <!-- Navigation Bar -->
    <?php
        include './header.php';
    ?>

    <!-- Heading -->
    <h2>Contact Team</h2>

    <div class="container">
        <div class="contactTeam"></div>
        <div class="contactTeam">
            <div class="coreTeamMember">
                <div class="profilePictureCTM">
                    <div class="profilePicture">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&amp;usqp=CAU">
                        <img class="check" src="./images/checkadmin.png">
                    </div>
                </div>
                <div class="contactDetailsCTM">
                    <div class="nameCTM">Atharv Sawant</div>
                    <div class="positionCTM">Chairman</div>
                    <div class="socialMediaHandles">
                        <a href="https://t.me/atharvs16escape" target="_blank" class="telegram">Telegram</a>
                        <a href="https://www.instagram.com/atharvs16escape/" target="_blank" class="instagram">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="coreTeamMember">
                <div class="profilePictureCTM">
                    <div class="profilePicture">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&amp;usqp=CAU">
                        <img class="check" src="./images/checkadmin.png">
                    </div>
                </div>
                <div class="contactDetailsCTM">
                    <div class="nameCTM">Mandeep Dalavi</div>
                    <div class="positionCTM">Vice Chairman</div>
                    <div class="socialMediaHandles">
                        <a href="https://t.me/MandeepDalavi" target="_blank" class="telegram">Telegram</a>
                        <a href="https://www.instagram.com/mandeepdalavi" target="_blank" class="instagram">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="coreTeamMember">
                <div class="profilePictureCTM">
                    <div class="profilePicture">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&amp;usqp=CAU">
                        <img class="check" src="./images/checkadmin.png">
                    </div>
                </div>
                <div class="contactDetailsCTM">
                    <div class="nameCTM">Dhanashree Patil</div>
                    <div class="positionCTM">Project Director</div>
                    <div class="socialMediaHandles">
                        <a href="https://t.me/dhanashreepatil2801" target="_blank" class="telegram">Telegram</a>
                        <a href="https://www.instagram.com/dhanashree_patil_2801/" target="_blank" class="instagram">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="coreTeamMember">
                <div class="profilePictureCTM">
                    <div class="profilePicture">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&amp;usqp=CAU">
                        <img class="check" src="./images/checkadmin.png">
                    </div>
                </div>
                <div class="contactDetailsCTM">
                    <div class="nameCTM">Shreya Salunkhe</div>
                    <div class="positionCTM">ICB President</div>
                    <div class="socialMediaHandles">
                        <a href="https://t.me/Shre_sa" target="_blank" class="telegram">Telegram</a>
                        <a href="https://www.instagram.com/shre.sa_09/" target="_blank" class="instagram">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/sideBar.js"></script>
</body>
</html>