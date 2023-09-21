<?php
    include "../config.php";

    $order_id = $_POST('ordId');
    $assocaiate_id = $_POST('ascid');
    $getting_hash = "select order_hash from ordertable where order_id = ".$order_id." and assocaiate_id=".$assocaiate_id.";";
    $order_hash_message = "".$order_id."".$assocaiate_id."";
    // echo $getting_hash;
    // echo "<br>";
    // echo password_hash($order_hash_message, PASSWORD_BCRYPT);
    if(password_verify($order_hash_message, $getting_hash)){
        echo "Hash verified";
    }else{
        echo "Error in request made";
    }

?>