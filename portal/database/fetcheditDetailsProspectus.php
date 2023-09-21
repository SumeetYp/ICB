<?php
    include "../config.php";
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $order_id = $_GET['ordId'];
    $assocaiate_id = $_SESSION['id'];
    $getting_hash = "select order_hash from order_table where order_id = ".$order_id." and associate_id= ".$assocaiate_id.";";
    // echo $getting_hash;
    $result = mysqli_query($mysqli, $getting_hash) or die("Error to fetch order id");
    $hash_id = ($result -> fetch_assoc())['order_hash'];
    // $order_hash_message = "".$order_id."".$assocaiate_id."";
    
    $order_hash_message = "".$order_id."".$assocaiate_id."";
    $order_hash = password_hash($order_hash_message, PASSWORD_BCRYPT);
      
    
    echo $hash_id;
    echo "<br>";
    // echo password_hash($order_hash_message, PASSWORD_BCRYPT);
    echo $order_hash;
    // if(password_verify($order_hash_message, $getting_hash)){
    //     echo "Hash verified";
    // }else{
    //     echo "Error in request made";
    // }

?>