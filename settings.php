<?php
    include './config.php';
    $sql = "SELECT * FROM users";
    $resultUser = mysqli_query($mysqli, $sql) or die("SQL Failed");
    $outputUser = NULL;
    mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="css/profile-css/header.css">
    <link rel="stylesheet" href="css/profile-css/settings.css">
    <link rel="stylesheet" href="css/utils.css">

</head>

<body>
    <div class="flex-row">

        <nav>

            <!-- Hamburger Icon -->
            <div class="hamBurger">
                <div></div>
                <div></div>
                <div></div>
            </div>
    
            <?php

            $checkSrc = NULL;
            $borderColor = NULL;
            if(mysqli_num_rows($resultUser) > 0){
                $outputUser = mysqli_fetch_array($resultUser);
                if($outputUser){
                    switch($outputUser['type']){
                        case "admin": $borderColor= '#0ED678'; 
                                      $checkSrc= './images/check 1admin.png';
                                      break;
                        case "member": $borderColor= '#2196F3';
                                       $checkSrc= './images/memberProfile.svg';
                                       break;
                        case "volunteer": $borderColor= '#FFBE00';
                    }
                }
            }
            $display = '';
            if($checkSrc == NULL){
                $display = 'd-none';
            }
            
            echo "<div class='userName'>" . $outputUser['username'] . "</div>" . "\n" .
                    "<div class='profilePicture'>" . "\n" .
                    "<img class='profPic' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU' style='border-color: " . $borderColor . ";' alt=''>" . "\n" .
                    "<img class='check" . $display . "' src='" . $checkSrc . "' alt=''>" . "\n" .
                 "</div>";

        ?>
     
        </nav>

        <!-- SideBar Menu -->
        <div class="sideBar">
            <div class="sideItems">

                <!-- Side Elements -->
                <ul>
                    <a href="./index.php">Home</a>
                    <a href="./profile.php">Profile</a>
                    <a href="./trainings.php">My Training</a>
                    <a href="./events.php">My Events</a>
                    <a href="./donate.php">Donate</a>
                    <a href="./differenceIMade.php">Difference I Made</a>
                    <a href="./shareMyStory.php">Share My Story</a>
                    <a href="./addMarshalls.php">Add a Marshal</a>
                    <a href="./settings.php" style="background-color: #D9D9D9;">Settings & Support</a>
                    <a href="./coreTeam.php">Contact Team</a>
                    <a href="./alert.php">Send an Alert</a>
                </ul>
                <div class="cross">
                    <img src="./images/cross.png" alt="">
                </div>
            </div>
        </div>

        <h2>Settings</h2>

        <section class="settings">



            <div class="container3">
                <?php echo "<form id='settingsForm' action='./database/changeSettings.php?userId=$outputUser[id]' method='POST'>"; ?>
                    <div class="row input-container">
                        <div class="col-md-12">
                            <div class="styled-input wide">
                                <input name="mobile" type="phone" required value=<?php echo $outputUser['mobile'] ?> />
                                <label class="settings-label">Phone</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input">
                                <input type="password" name="currPassword" required/>
                                <label class="settings-label">Old Password</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input" style="float:right;">
                                <input id='updatedPassword' type="password" name="updatedPassword" required />
                                <label class="settings-label">New Password</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input" style="float:right;">
                                <input id='confirmPassword' type="password" name="updatedPasswordConfirmation" required />
                                <label class="settings-label">Retype New Password</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="styled-input wide">
                                <textarea name="address" required><?php echo $outputUser['address']?></textarea>
                                <label class="settings-label">Address</label>
                            </div>
                        </div>
                        <div class="col-xs-12" style="overflow: hidden;">
                            <button ref='submitSettings' class="btn-lrg submit-btn">Save</button>
                        </div>
                    </div>
                    <button id='submitSettings' class='d-none' type="submit"></button>
                </form>
            </div>


        </section>
        <br>

        <h2>Support</h2>

        <section class="support">

            <div class="container3">
            <?php echo "<form id='supportForm' action='./database/support.php?userId=$outputUser[id]&userEmail=$outputUser[email]&username=$outputUser[username]' method='POST'>"; ?>
                    <div class="row input-container">
                        <div class="col-xs-12">
                            <h3 style="margin: 20px;">Enquiry</h3>
                            <div class="styled-input wide">
                                <textarea name='enquiry' required></textarea>
                                <label class="settings-label">Type</label>
                            </div>
                        </div>
                        <div class="col-xs-12" style="overflow: hidden;">
                            <button ref='submitSupport' class="btn-lrg submit-btn">Save</button>
                        </div>

                    </div>
                    <button id="submitSupport" class='d-none' type="submit"></button>
                </form>



            </div>


        </section>



    </div>
    
    <script src="js/sideBar.js"></script>
    <script>
            const password = document.getElementById("updatedPassword"), confirm_password = document.getElementById("confirmPassword");
            function validatePassword(){
                if(password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Passwords Didn't Match, Try Again");
                } else {
                    confirm_password.setCustomValidity('');
                }
            }
            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
    </script>
</body>

</html>
