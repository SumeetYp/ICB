<?php

    $keyId = 'rzp_test';
    $keySecret = 'rzp_test';
    $displayCurrency = 'INR';
    
    //These should be commented out in production
    // This is for error reporting
    // Add it to config.php to report any errors
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    /* Database connection settings */
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'bs_portal';
    $mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);