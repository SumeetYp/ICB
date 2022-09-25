<?php
    /* Database connection settings */
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'bs_portal';
    $mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);
