<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
        header("Location: ./index_login.php");
    }
    require './config.php';
    require 'PHPMailer/PHPMailerAutoload.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['submit'])) {
            $raisedUserEmail = $_SESSION['email'];
            $raisedUsername = $_SESSION['username'];
            $name = $mysqli->escape_string($_POST['patientName']);
            $emergencyType = $mysqli->escape_string($_POST['emergencyType']);
            $place = $mysqli->escape_string($_POST['place']);
            $address = $mysqli->escape_string($_POST['patientAddress']);
            $mobile = $mysqli->escape_string($_POST['patientMobile']);

            $sql = "INSERT INTO alert (alertRaisedByUserEmail, alertRaisedByUsername, patientName, emergencyType, place, patientAddress, patientMobile) VALUES ('$raisedUserEmail','$raisedUsername','$name','$emergencyType', '$place', '$address', '$mobile')";

            if ( $mysqli->query($sql) ){

                $mail = new PHPMailer;
                // SMTP settings
                $mail->isSMTP();
                $mail->Host = 'smtp.hostinger.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'i@careforbharat.in';
                $mail->Password = 'noPassword';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = '465';

                // Email settings
                $mail->setFrom('i@careforbharat.in', 'Care for Bharat');
                $mail->addAddress('deshsevamai@bondsocially.org', 'Desh Seva Mai Bondsocially');
                // $mail->addAddress('ellen@example.com');
                $mail->addReplyTo($raisedUserEmail, $_SESSION['full_name']);
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('');
                // $mail->addAttachment($path);
                // $mail->addAttachment($offerletter, 'new.jpg'); 
                $mail->isHTML(true);

                $mail->Subject = 'New Alert Raised | careforbharat.in';  
                $mail->Body    = 'Hello, an alert has been raised!';
                $mail->AltBody = 'Hello, an alert has been raised!';

                if (!$mail->send()) {
                    echo "<script>alert('Message could not be sent! Mailer Error: ".$mail->ErrorInfo." !');</script>";
                    // echo "<script>alert('Mailer Error: ' . $mail->ErrorInfo . ' !');</script>";
                    header("Location: index.php");
                } else {
                    echo "<script>alert('Message has been sent! to Recipient');</script>";
                    header("Location: index.php");
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/alert.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/utils.css">

</head>

<body>
    <!-- Navigation Bar -->
    <?php
        include './header.php';
    ?>
    <h2>Send an alert</h2>
<div class="container">
    <div class="form-container">
        <form action="alert.php" method="POST">
            <label>Name:</label>
            <input type="text" placeholder="Full Name of Patient/Contact Person" name="patientName" required><br><br>
            <label>Type:</label>
            <select name="emergencyType" id="cars" aria-placeholder="Types of Emergency:">
                <option value="Human Care">Human Care</option>
                <option value="Animal Care">Animal Care</option>
                <option value="Relief/Pandemic">Relief/Pandemic</option>
                <option value="Medical">Medical</option>
            </select><br><br>
            <label>Place:</label>
            <input type="text" placeholder="City" name="place" required><br><br>
            <label>Address:</label>
            <input type="text" placeholder="Patient&#39;s Address" name="patientAddress" required><br><br>
            <label>Phone:</label>
            <input type="number" placeholder="Phone Number of Patient/Contact Person" name="patientMobile" required><br><br>
            <div class="btn">
                <input type="submit" class="submit" name="submit">
            </div>
        </form>
    </div>
    </div>
    <script src="./js/alert.js"></script>
    <script src="./js/sideBar.js"></script>
</body>

</html>