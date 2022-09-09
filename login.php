<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email' ");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['type'] = $user['type'];
        $_SESSION['first_name'] = $user['firstName'];
        $_SESSION['last_name'] = $user['lastName'];
        $_SESSION['full_name'] = $user['firstName']." ".$user['lastName'];
        $_SESSION['registration_date'] = $user['registrationDate'];
        $_SESSION['expiration_date'] = $user['expirationDate'];
        $_SESSION['profile'] = $user['profilepic'];
        $_SESSION['bio'] = $user['bio'];
        $_SESSION['mobile'] = $user['mobile'];
        $_SESSION['instagram'] = $user['instagram'];
        $_SESSION['telegram'] = $user['telegram'];
        $_SESSION['address'] = $user['address'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: home.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}