<?php
    include "../config.php";
    if(session_status()== PHP_SESSION_NONE){
        session_start();
    }


    $assocaiate_id = $_SESSION['id'];
    $order_id =  $mysqli->escape_string($_POST['orderId']);
    $value = $mysqli->escape_string($_POST['value']);

    // Getting hashed value from the database.
    $getting_hash = "select order_hash from order_table where order_id = ".$order_id." and associate_id= ".$assocaiate_id.";";
    $result = mysqli_query($mysqli, $getting_hash) or die("Error to fetch order id");
    // Store in the hash_id
    $hash_id = ($result -> fetch_assoc())['order_hash'];
    
    // Format of hash message (int) order_id and (int) associate_id 
    $order_hash_message = "".(int)$order_id."".(int)$assocaiate_id."";
    
    // Verifying the details
    if(password_verify($order_hash_message, $hash_id)){
        if($value==1 || $value==0 || $value==2){
           $sql_fetch_order = "UPDATE prospectus SET status=".$value." where order_id = ".$order_id."; ";
            $result_fetch_order = mysqli_query($mysqli, $sql_fetch_order) or die("Error in fecthing details");
            echo "updated record";
            // header("Location: ../salesCRM.php");
        }else{
            $_SESSION['message']="Error in request";
            // header("Location: ../Error.php");
        }
    }else{
        $_SESSION['message']= "Error in request made";
        // header("Location: ../Error.php");
    } 
?>