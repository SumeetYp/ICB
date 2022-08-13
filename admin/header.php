<?php
echo "<nav>
        <div class='hamBurger'>
            <div></div>
            <div></div>
            <div></div>
        </div>  
        <div class='userName'>" . $_SESSION['username'] . "</div>" . "\n" .
        "<div class='profilePicture'>" . "\n" .
            "<img class='profPic' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU' alt=''>" . "\n" .
            "<img class='check' src='./images/check 1admin.png' alt=''>" . "\n" .
        "</div>
      </nav>" .
      "<div class='sideBar hideSideBar'>
        <div class='sideItems'>
            <ul>
                <a href='./index.php'>Home</a>
                <a href='./stats.php'>Stats</a>
                <a href='./events.php'>Event</a>
                <a href='./announcement.php'>Announcement</a>
                <a href='./donate.php'>Donate</a>
                <a href='./addMarshalls.php'>Add a Marshal</a>
                <a href='./alert.php'>Send an Alert</a>
            </ul>
            <div class='cross'>
                <img src='./images/cross.png' alt=''>
            </div>
        </div>
       </div>";
?>