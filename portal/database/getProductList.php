<?php
    include "../config.php";
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $id = $_GET['id'];
    // $id = 10000001;
    $queryGetProducts = "select * from associate where id = '".$id."'";
    $result = mysqli_query($mysqli, $queryGetProducts) or die ("SQL Failed");
    $products = $result->fetch_assoc();
    echo $products['pitching_products'];
?>