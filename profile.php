<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile-css/style.css">
    <link rel="stylesheet" href="css/profile-css/main.css">
    <link rel="stylesheet" href="css/profile-css/header.css">

</head>

<body>
   
        
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
    <div class="sideBar hideSideBar">
        <div class="sideItems">

            <!-- Side Elements -->
            <ul>
                <a href="./index.php">Home</a>
                <a href="./profile.php" style="background-color: #D9D9D9;">Profile</a>
                <a href="./trainings.php">My Training</a>
                <a href="./events.php">My Events</a>
                <a href="./donate.php">Donate</a>
                <a href="./differenceIMade.php">Difference I Made</a>
                <a href="./shareMyStory.php">Share My Story</a>
                <a href="./addMarshalls.php">Add a Marshal</a>
                <a href="./settings.php">Settings & Support</a>
                <a href="./coreTeam.php">Contact Team</a>
                <a href="./alert.php">Send an Alert</a>
            </ul>
            <div class="cross">
                <img src="./images/cross.png" alt="">
            </div>
        </div>
    </div>

    <section class="range-slider">
  
        <div class="container-slide"></div>
            <div class="range-slider-container-slide">
                <input type="range" class="range" min="0" max="100" step="1" value="82">
                <div class="percentage">
                    <span>80 Days</span>
                </div>
            </div>
 
    
    
        <script>

            const rangeEl = document.querySelector('input')
            const percentage = document.querySelector('.percentage')
            const percentageSpan = document.querySelector('.percentage span')
    
    
            range()
    
            rangeEl.addEventListener('input', range)
    
            function range () {
                percentage.style.left = `${rangeEl.value}%`;
                percentageSpan.innerText = `${rangeEl.value} Days`;
                percentage.style.filter = `hue-rotate(${rangeEl.value}deg)`
            }

        </script>

</section>


    <!-- Header Section -->

    <header id="topSection" style="overflow: hidden;">
        <div class="container grid grid-header">
            <div class="profilePicture">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU" alt="">
                <img class="check2" src="images/check 1admin.png" alt="">
            </div>
            </div>

            <div class="user-details">
                <div class="user-name-div">
                    <span class="username">FullName</span>
                </div>

                <div class="numbers">
                    <span class="post">Admin/Member/Volunteer</span>
                    <span class="follower">Joined on 14th May</span>
                </div>

                <div class="name-div">
                    <span class="name">WebApp | UI | Coding</span>
                </div>

                <div class="light-div">
                    <span class="light-name">Interests</span>
                </div>

                <div class="bio-div">
                    <p class="bio">
                        I am a Coder💻<br>
                        I am a WebApp👨‍💻<br>
                        You can send Email📥<br>
                    </p>
                </div>
            </div>
        </div>

        <div class="container">

            <button class="btn follow-btn">Instagram</button>
            <button class="btn follow2-btn">Telegram</button>
       <!---   <button class="btn msg-btn">Connect<img src="images/user.png"></button>  --> 
            <button id="btn-edit" class="profile-btn">Edit Profile</button>
            <button id="save" class="save-btn">Save</button>
            <button id="cancel" class="cancel-btn">Cancel</button>
            <br><br><br><br><br><br>
        </div>
     
    </header>


    <!-- Main Content Section -->

    <section id="edit" class="main-content d-flex">
        <div class="container2 d-flex">
            <div class="login-page d-flex">
                <div class="form">
                  <form id="form" class="register-form">
                     <h1> Edit Profile</h1>
                     <span class="line">
                    <label>Email:</label>
                    <input type="email" placeholder="Email"/>
                </span>
                <span class="line">
                    <label>Phone:</label>
                    <input type="phone" placeholder="phone"/>
                </span>
                <span class="line">
                    <label>Bio:</label>
                    <textarea placeholder="Type"></textarea>
                </span>
                  </form>
                </div>
              </div>
          
            

           

        </div>
    </section>



  

    <script src="js/profile-js/script.js"></script>
    <script src="js/sideBar.js"></script>
</body>

</html>