<?php

require "config.php";

use Razorpay\Api\Api;

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
    <title>Document</title>
    <link rel="stylesheet" href="./css/membersRegistration.css">
</head>

<body>
    <h1 id="title">Members Registration</h1>
    <form id="survey-form" action="status.php" method="POST">
        <div class="form-group">
            <label id="name-label" for="name">First Name:</label>
            <input id="name" type="text" name="firstName" required placeholder="First Name">
            <span class="validity"></span>
        </div>
        <div class="form-group">
            <label id="name-label" for="name">Last Name:</label>
            <input id="name" type="text" name="lastName" required placeholder="Last Name">
            <span class="validity"></span>
        </div>

        <div class="form-group">
            <label id="email-label" for="email">Email:</label>
            <input id="email" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required
                placeholder="Email">
            <span class="validity"></span>
        </div>

        <!-- DOB : -->

        <div class="form-group">
            <label id="number-label" for="number">DOB :</label>
            <input type="date" name="dob">
            <span class="validity"></span>
        </div>

        <!-- <div class="form-group">
            <label id="role-label" for="dropdown">What is your current role:</label>
            <select id="dropdown" name="current-role">
                <option value="" disabled selected>Select an option</option>
                <option value="student">Student</option>
                <option value="blogger">Blogger/Hobbiest</option>
                <option value="smb">Small Business Owner</option>
                <option value="agency">Agency</option>
                <option value="other">Other</option>
            </select>
        </div> -->


        <!-- gender  -->
        <div class="form-group">
            <label id="role-label" for="dropdown">Gender:</label>
            <select id="dropdown" name="current-role" required>
                <option value="" disabled selected>Select an option</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <!-- address -->

        <div class="form-group">
            <label id="textarea-label" for="comments">Address:</label>
            <textarea id="comments" placeholder="address" cols="30" rows="5" name="addresses" required></textarea>
        </div>

        <!-- city -->
        <div class="form-group">
            <label id="name-label" for="name">City:</label>
            <input id="name" type="text" name="city" required placeholder="city">
            <span class="validity"></span>
        </div>

        <!-- State -->
        <div class="form-group">
            <label id="name-label" for="name">State:</label>
            <input id="name" type="text" name="states" required placeholder="state">
            <span class="validity"></span>
        </div>

        <!-- pin -->

        <div class="form-group">
            <label id="name-label" for="name">PIN:</label>
            <input id="name" type="number" name="pin" required placeholder="pin number">
            <span class="validity"></span>
        </div>

        <!-- whatsapp mobile number -->
        <div class="form-group">
            <label id="name-label" for="name">Mobile:</label>
            <input id="name" type="number" name="mobile" required placeholder="add WhatsApp Number only">
            <span class="validity"></span>
        </div>

        <!-- telegram -->
        <div class="form-group">
            <label id="name-label" for="name">Telegram:</label>
            <input id="name" type="text" name="telegram" required placeholder="add Telegram Link">
            <span class="validity"></span>
        </div>

        <!-- instagram -->
        <div class="form-group">
            <label id="name-label" for="name">Instagram:</label>
            <input id="name" type="text" name="instagram" required placeholder="add Instagram Link">
            <span class="validity"></span>
        </div>

        <!-- contribution -->

        <div class="form-group">
            <p>Initiatives I will contribute for :</p>
            <div class="input-group">
                <label><input type="checkbox" name="improvements" value="Mission-Shiksha"> Mission Shiksha</label>
                <label><input type="checkbox" name="improvements" value="Mental-Health"> Mental Health</label>
                <label><input type="checkbox" name="improvements" value="Animals-Safety"> Animals Safety</label>
                <label><input type="checkbox" name="improvements" value="Environment"> Environment</label>
                <label><input type="checkbox" name="improvements" value="Sex-Education"> Sex Education</label>
            </div>
        </div>

        <div class="form-group">
            <p>Type of Registration:</p>
            <div class="input-group">
                <label for="yes"><input id="yes" type="radio" name="user-rating" value="yes" checked> Member (₹
                    499/-)</label>
            </div>
        </div>

        <!-- adhar card number -->
        <div class="form-group">
            <label id="name-label" for="name">Adhar Card:</label>
            <input id="name" type="number" name="aadhaar" required placeholder="adhar card number">
            <span class="validity"></span>
        </div>

        <!-- pan card number -->
        <div class="form-group">
            <label id="name-label" for="name">Pan No:</label>
            <input id="name" type="number" name="pan" required placeholder="pan card number">
            <span class="validity"></span>
        </div>

        <!-- terms and condition -->
        <div class="form-group terms">
            <div class="input-group">
                <label><input type="checkbox" name="termsandconditions" value="events" checked> I agree to all the <a
                        href="">Terms
                        &
                        Conditions</a> </label>
            </div>
        </div>
        <div class="form-group">
            <button id="rzp-button1" class="button" type="submit" name="save">Save and Continue</button>
            </div>
    </form>
</body>
<script>
    function validate(){
        var curryear = new Date().getFullYear();
        var userdob = document.getElementById('dob').value;
        var birthyear = userdob.split('-')[0];
        var age = curryear - birthyear;
        var errMsg = "";
        if(age < 18){
            errMsg = errMsg + "User should be at least 18 years old";
        }
        if(errMsg !== ""){
            alert(errMsg);
            return false;
        }
        return true;
    }
</script>
</html>