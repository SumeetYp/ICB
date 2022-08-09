<?php
    include '../config.php';
    $id = $_GET['userId'];
    $mobile = $_POST['mobile'];
    $currPassword = $_POST['currPassword'];
    $updatedPassword = $_POST['updatedPassword'];
    $updatedPasswordConfirmation = $_POST['updatedPasswordConfirmation'];
    $address = $_POST['address'];
    if($updatedPassword == $updatedPasswordConfirmation){
        $sql = "UPDATE users SET mobile='$mobile', address='$address', password='$updatedPassword' WHERE id='$id' AND password='$currPassword'";
        $result = mysqli_query($mysqli, $sql) or die("SQL Failed");
        mysqli_close($mysqli);
        if(mysqli_num_rows($result)==0)header("Location: ../settings.php?update=false");
        else header("Location: ../index.php");
    }
?>