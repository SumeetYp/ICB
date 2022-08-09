<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Difference I Made</title>
    
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/profile-css/difference.css">

</head>

<body>

        <nav>

            <!-- Hamburger Icon -->
            <div class="hamBurger">
                <div></div>
                <div></div>
                <div></div>
            </div>
    
            <?php

            include './config.php';
            $sql = "SELECT * FROM users";
            $result = mysqli_query($mysqli, $sql) or die("SQL Failed");
            $output = NULL;
            $checkSrc = NULL;
            $borderColor = NULL;
            if(mysqli_num_rows($result) > 0){
                $output = mysqli_fetch_array($result);
                if($output){
                    switch($output['type']){
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
            mysqli_close($mysqli);
            echo "<div class='userName'>" . $output['username'] . "</div>" . "\n" .
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
                    <a href="./differenceIMade.php" style="background-color: #D9D9D9;">Difference I Made</a>
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

        <h1 class="Rank">Rank <b class="num">82</b></h1>

        <h2>Difference I Made</h2>


        <div class="chartCard">
            <div class="chartBox">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // setup 
            const data = {
                labels: ['Mental Health', 'Mission Shiksha', 'Animal Safety', 'Environment', 'Sex Education'],
                datasets: [{
                    data: [15, 12, 5, 20, 10],
                    backgroundColor: [
                        '#CB8FBD',
                        '#2EC5B6',
                        '#E01518',
                        '#41D950',
                        '#FFBE00'
                    ],
                    borderWidth: 1
                }],
            };

            // config 
            const config = {
                type: 'bar',
                data,
                options: {
                    plugins: {
                 legend: {
                 display: false
                  }
                   },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            // render init block
            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>


        <h2>Individual Event Montly Status</h2>

        <div class="chartCard">
            <div class="chartBox">

                <canvas id="myChart2" style="width:100%;max-width:700px"></canvas>

            </div>
        </div>

        <script>
            var xValues = ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
                'November', 'December'
            ];

            new Chart("myChart2", {
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                        label: 'Mental Health',
                        data: [860, 1140, 1060, 1060, 1070, 1110, 1330],
                        borderColor: '#CB8FBD',
                        fill: false,
                        borderWidth: 1,
                        backgroundColor: '#CB8FBD'
                    }, {
                        label: 'Mission Shiksha',
                        data: [1600, 1700, 1700, 1900, 2000, 2700, 4000],
                        borderColor: '#2EC5B6',
                        fill: false,
                        borderWidth: 1,
                        backgroundColor: '#2EC5B6'
                    }, {
                        label: 'Animal Safety',
                        data: [300, 700, 2000, 5000, 6000, 4000, 2000],
                        borderColor: '#E01518',
                        fill: false,
                        borderWidth: 1,
                        backgroundColor: '#E01518'
                    }, {
                        label: 'Environment',
                        data: [300, 700, 8000, 5000, 3000, 4500, 2000],
                        borderColor: '#41D950',
                        fill: false,
                        borderWidth: 1,
                        backgroundColor: '#41D950'
                    }, {
                        label: 'Sex Education',
                        data: [300, 500, 6000, 5000, 3500, 4500, 4600],
                        borderColor: '#FFBE00',
                        fill: false,
                        borderWidth: 1,
                        backgroundColor: '#FFBE00'
                    }]
                },
                options: {
                    legend: {
                        display: false
                    }
                }
            });
        </script>

        <h2>Overall Monthly Event Status</h2>

        <div class="chartCard">
            <div class="chartBox">

                <canvas id="myChart3" style="width:100%;max-width:700px"></canvas>

            </div>
        </div>

        <script>
            var xValues = ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
                'November', 'December'
            ];
            var yValues = [7, 8, 8, 9, 9, 9, 10];

            new Chart("myChart3", {
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                        label: 'Events',
                        backgroundColor: "rgba(0,0,0,0.3)",
                        borderColor: "rgba(0,0,0,1)",
                        data: yValues,
                        borderWidth: 1
                    }]
                }
            });
        </script>

        <h2 class="achievement">Achievements</h2>


        <div class="Card d-flex">

            
           
           
            
           

            <div class="col1">
              
                <h3>Events</h3>
                <ul>
                    <li>
                        <div class="square1 d-flex sqr"></div>
                        <p>Animal Safety </p>
                    </li>
                    <li>
                        <div class="square2 d-flex sqr"></div>
                       <p> Mission Shiksha</p>
                    </li>
                    <li>

                    <div class="square3 d-flex sqr"></div>
                        <p>Sex Education</p>
                    </li>
                    <li>
                        <div class="square4 d-flex sqr"></div>
                        <p>Mental Health</p>
                    </li>
                    <li>
                        <div class="square5 d-flex sqr"></div>
                        <p>Environment</p>
                    </li>
                    <li>
                        <div class="square6 d-flex sqr"></div>
                        <p>Others</p>
                    </li>
                </ul>
            </div>
            <div class="col2">
                <h3>Events Attended</h3>
                <ul class="attend">
                    <li>5</li>
                    <li>12</li>
                    <li>10</li>
                    <li>15</li>
                    <li>20</li>
                </ul>

            </div>
            <div class="col3">
                <h3>Events Held</h3>
                <ul>
                    <li>6</li>
                    <li>15</li>
                    <li>15</li>
                    <li>20</li>
                    <li>22</li>
                </ul>

            </div>


        </div>

        <h2>Events Data</h2>


        <div class="Card">

            <ul>

                <li>Total Events Attended: <b>62</b></li>
                <li>Total Events Held: <b>85</b></li>
                <li>Current Ranking: <b>16</b></li>
                <li>Total Marshals: <b>119</b></li>
            </ul>

        </div>

 
      


    <script src="js/sideBar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</body>

</html>
