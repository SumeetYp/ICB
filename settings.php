<?php

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
    
            <!-- Username -->
            <div class="userName">Username</div>
    
            <!-- User's Profile Picture -->
            <div class="profilePicture">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU" alt="">
                <img class="check" src="./images/check 1admin.png" alt="">
            </div>
     
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
                <form>
                    <div class="row input-container">
                        <div class="col-md-12">
                            <div class="styled-input wide">
                                <input type="phone" required />
                                <label class="settings-label">Phone</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input">
                                <input type="text" required />
                                <label class="settings-label">Old Password</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input" style="float:right;">
                                <input type="text" required />
                                <label class="settings-label">New Password</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input" style="float:right;">
                                <input type="text" required />
                                <label class="settings-label">Retype New Password</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="styled-input wide">
                                <textarea required></textarea>
                                <label class="settings-label">Address</label>
                            </div>
                        </div>
                        <div class="col-xs-12" style="overflow: hidden;">
                            <div class="btn-lrg submit-btn">Save</div>
                        </div>
                    </div>
                </form>
            </div>


        </section>
        <br>

        <h2>Support</h2>

        <section class="support">

            <div class="container3">
                <form>
                    <div class="row input-container">
                        <div class="col-xs-12">
                            <h3 style="margin: 20px;">Enquiry</h3>
                            <div class="styled-input wide">
                                <textarea required></textarea>
                                <label class="settings-label">Type</label>
                            </div>
                        </div>
                        <div class="col-xs-12" style="overflow: hidden;">
                            <div class="btn-lrg submit-btn">Save</div>
                        </div>

                    </div>

                </form>



            </div>


        </section>



    </div>

    <script src="js/sideBar.js"></script>
</body>

</html>
