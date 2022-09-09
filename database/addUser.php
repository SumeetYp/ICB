<?php
    include '../config.php';
    $newUserFirstName = $mysqli->escape_string($_POST['firstName']);
    $newUserLastName = $mysqli->escape_string($_POST['lastName']);
    $newUsername = $newUserFirstName.$newUserLastName;
    $newUserFullName = $newUserFirstName." ".$newUserLastName;
    $newUserEmail = $mysqli->escape_string($_POST['email']);
    $newUserDOB = date('Y-m-d', strtotime($_POST['dob']));
    $newUserGender = $mysqli->escape_string($_POST['gender']);
    $newUserAddress = $mysqli->escape_string($_POST['address']);
    $newUserCity = $mysqli->escape_string($_POST['city']);
    $newUserState = $mysqli->escape_string($_POST['state']);
    $newUserPIN = $mysqli->escape_string($_POST['pin']);
    $newUserMobile = $mysqli->escape_string($_POST['mobile']);
    $newUserTelegram = $_POST['telegram'];
    $newUserInstagram = $_POST['instagram'];
    $newUserType = $mysqli->escape_string($_POST['userType']);
    $newUserAadhaar = $mysqli->escape_string($_POST['aadhaar']);
    $newUserPAN = $mysqli->escape_string($_POST['pan']);
    $newUserRegistrationDate = date("Y-m-d");
    $newUserExpirationDate = date("Y-m-d", strtotime($newUserRegistrationDate."+365 Days"));
    $password = $mysqli->escape_string(password_hash("careforbharat", PASSWORD_BCRYPT));
    $hash = $mysqli->escape_string(hash('sha512', md5(rand(99,9999))));

    $sql = "INSERT INTO users (username, type, email, password, hash, firstName, lastName, registrationDate, expirationDate, profilepic, bio, dob, gender, address, city, state, pin, mobile, telegram, instagram, aadhaar, pan)" 
            . "VALUES ('$newUsername','$newUserType','$newUserEmail','$password', '$hash', '$newUserFirstName', '$newUserLastName', '$newUserRegistrationDate', '$newUserExpirationDate', './images/defaultprofile.png', 'Welcome!', '$newUserDOB', '$newUserGender', '$newUserAddress', '$newUserCity', '$newUserState', '$newUserPIN', '$newUserMobile', '$newUserTelegram', '$newUserInstagram', '$newUserAadhaar', '$newUserPAN')";
    $mysqli->query($sql);
    header("location: ../home.php");
?>