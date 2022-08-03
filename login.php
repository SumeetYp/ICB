<?php

?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <title>Login | Member</title>
</head>
<body>
    <div class="container">
        <!-- <p class="login-text">Login with Social Account</p>
        <div class="login-social">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook</a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i>Twitter</a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i>Google+</a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i>Linkedin</a>
        </div> -->
        <form action="" method="POST" class="login-email">
            <p class="login-text">Login with Email</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button class="btn" name="submit">Login</button>
            </div>
            <p class="login-register-text">Don't have an account? <a href="https://bondsocially.org/contact.html">Contact Team</a></p>
        </form>
    </div>
</body>
</html>