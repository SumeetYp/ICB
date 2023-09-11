<?php
    $checkSrc = NULL;
    $borderColor = NULL;
    $icbName = "";
    $options = array("<h2>Care For Bharat</h2><button class='accordian'>Volunteer</button>
    <ul class='panel'>
        <a href='./home.php'>Home</a>
        <a href='./profile.php'>Profile</a>
        <a href='./trainings.php'>My Training</a>
        <a href='./events.php'>My Events</a>
        <a href='./differenceIMade.php'>Difference I Made</a>
        <a href='./shareMyStory.php'>Share My Story</a>
        <a href='./donate.php'>Donate</a>
    </ul>",
    "<button class='accordian'>Associate</button>
    <ul class='panel'>
        <a href='./dashboard.php'>Dashboard</a>
        <a href='./manageDownline.php'>Manage Downline</a>
        <a href='./salesCRM.php'>Sales CRM</a>
        <a href='./products.php'>Products</a>
        <a href='./learn.php'>Learn</a>
    </ul>",
    "<button class='accordian'>Employee</button>
    <ul class='panel'>
        <a href='#'></a>
    </ul>",
    "<button class='accordian'>Partners</button>
    <ul class='panel'>
        <a href='#'></a>
    </ul>",
    "<button class='accordian'>Adminstrator</button>
    <ul class='panel'>
        <a href='./stats.php'>Stats</a>
        <a href='./eventsManage.php'>Event Manager</a>
        <a href='./announcement.php'>Announcement</a>
    </ul>"
    );
    $commonOptions = "<button class='accordian'>Support and Settings</button>
    <ul class='panel'>
        <a href=''>Settings & Support</a>
        <a href='./coreTeam.php'>Contact Team</a>
        <a href='./alert.php'>Send an Alert</a>
        <a href='./logout.php'>Logout</a>
    </ul>";
    
    switch($_SESSION['type']){
        case "admin": $borderColor= '#00FF00'; 
                        $checkSrc= './images/verify-admin.png';
                        $menu =  $options[0].$options[1].$options[2].$options[3].$options[4]."\n".$commonOptions;
                    //   "<a href='./home.php'>Home</a>
                    //             <a href='./stats.php'>Stats</a>
                    //             <a href='./eventsManage.php'>Event Manager</a>
                    //             <a href='./announcement.php'>Announcement</a>
                    //             <a href='./profile.php'>Profile</a>
                    //             <a href='./trainings.php'>My Training</a>
                    //             <a href='./events.php'>My Events</a>
                    //             <a href='./differenceIMade.php'>Difference I Made</a>
                    //             <a href='./shareMyStory.php'>Share My Story</a>
                    //             <a href='./donate.php'>Donate</a>
                    //             <a href='./addMarshalls.php'>Add a Marshal</a>
                    //             <a href='./settings.php'>Settings & Support</a>
                    //             <a href='./logout.php'>Logout</a>";
                      break;
        // case "core-team": $borderColor= '#FC8955';
        //                 $checkSrc= './images/shield core-team.png';
        //                 $menu =  "<a href='./home.php'>Home</a>
        //                             <a href='./profile.php'>Profile</a>
        //                             <a href='./trainings.php'>My Training</a>
        //                             <a href='./events.php'>My Events</a>
        //                             <a href='./differenceIMade.php'>Difference I Made</a>
        //                             <a href='./shareMyStory.php'>Share My Story</a>
        //                             <a href='./donate.php'>Donate</a>
        //                             <a href='./addMarshalls.php'>Add a Marshal</a>
        //                             <a href='./settings.php'>Settings & Support</a>
        //                             <a href='./coreTeam.php'>Contact Team</a>
        //                             <a href='./alert.php'>Send an Alert</a>
        //                             <a href='./logout.php'>Logout</a>";
        //                 break;
        case "volunteer": $borderColor= '#87CEEB';
                    $checkSrc= './images/verify-volunteer.png';
                    $menu = $icbName.$options[0]."\n".$commonOptions;
                    //    "<a href='./home.php'>Home</a>
                    //             <a href='./profile.php'>Profile</a>
                    //             <a href='./trainings.php'>My Training</a>
                    //             <a href='./events.php'>My Events</a>
                    //             <a href='./differenceIMade.php'>Difference I Made</a>
                    //             <a href='./shareMyStory.php'>Share My Story</a>
                    //             <a href='./donate.php'>Donate</a>
                    //             <a href='./settings.php'>Settings & Support</a>
                    //             <a href='./coreTeam.php'>Contact Team</a>
                    //             <a href='./alert.php'>Send an Alert</a>
                    //             <a href='./logout.php'>Logout</a>";
                       break;
        // case "student": $borderColor= '#FFC4C4';
        //                 $menu ="<a href='./home.php'>Home</a>
        //                         <a href='./profile.php'>Profile</a>
        //                         <a href='./trainings.php'>My Training</a>
        //                         <a href='./events.php'>My Events</a>
        //                         <a href='./differenceIMade.php'>Difference I Made</a>
        //                         <a href='./shareMyStory.php'>Share My Story</a>
        //                         <a href='./donate.php'>Donate</a>
        //                         <a href='./settings.php'>Settings & Support</a>
        //                         <a href='./coreTeam.php'>Contact Team</a>
        //                         <a href='./alert.php'>Send an Alert</a>
        //                         <a href='./logout.php'>Logout</a>";
        //                break;
        // case "volunteer": $menu = $options[0] + $commonOptions;
        //                         break;
        case "associate":
            $borderColor= '#4B0082';
            $checkSrc= './images/verify-asscociate.png'; 
            $menu = $icbName.$options[0].$options[1].$commonOptions;
            break;

        case "employees": 
            $borderColor= '#FFA500';
            $checkSrc= './images/verify-employee.png';
            $menu = $icbName.$options[0].$options[1].$options[2].$commonOptions;
            break;
        case "partners":
            $borderColor= '#0000FF';
            $checkSrc= './images/verify-partner.png';
            $menu = $icbName.$options[0].$options[1].$options[3].$commonOptions;
            break;

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
                "<img class='profPic' src='".$_SESSION['profile']."' style='border-color: " . $borderColor . ";' alt=''>" . "\n" .
                "<img class='check " . $display . "' src='" . $checkSrc . "' alt=''>" . "\n" .
            "</div>
        </nav>" .
        "<div class='sideBar hideSideBar'>
            <div class='sideItems'>
                <ul>
                    ".$menu."
                </ul>
                <div class='cross'>
                    <img src='./images/cross.png' alt=''>
                </div>
            </div>
        </div>";
?>