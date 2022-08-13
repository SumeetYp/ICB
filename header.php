<?php
    $checkSrc = NULL;
    $borderColor = NULL;
    switch($_SESSION['type']){
        case "admin": $borderColor= '#0ED678'; 
                      $checkSrc= './images/check 1admin.png';
                      break;
        case "member": $borderColor= '#2196F3';
                       $checkSrc= './images/memberProfile.svg';
                       break;
        case "volunteer": $borderColor= '#FFBE00';
    }
    $display = '';
    if($checkSrc == NULL){
        $display = 'd-none';
    }
    echo "<nav>
            <div class='hamBurger'>
                <div></div>
                <div></div>
                <div></div>
            </div>  
            <div class='userName'>" . $_SESSION['username'] . "</div>" . "\n" .
                "<div class='profilePicture'>" . "\n" .
                "<img class='profPic' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU' style='border-color: " . $borderColor . ";' alt=''>" . "\n" .
                "<img class='check " . $display . "' src='" . $checkSrc . "' alt=''>" . "\n" .
            "</div>
        </nav>" .
        "<div class='sideBar hideSideBar'>
            <div class='sideItems'>
                <ul>
                    <a href='./index.php'>Home</a>
                    <a href='./profile.php'>Profile</a>
                    <a href='./trainings.php'>My Training</a>
                    <a href='./events.php'>My Events</a>
                    <a href='./donate.php'>Donate</a>
                    <a href='./differenceIMade.php'>Difference I Made</a>
                    <a href='./shareMyStory.php'>Share My Story</a>
                    <a href='./addMarshalls.php'>Add a Marshal</a>
                    <a href='./settings.php'>Settings & Support</a>
                    <a href='./coreTeam.php'>Contact Team</a>
                    <a href='./alert.php'>Send an Alert</a>
                </ul>
                <div class='cross'>
                    <img src='./images/cross.png' alt=''>
                </div>
            </div>
        </div>";
?>