<?php

require "vendor/autoload.php";
require('config.php');

session_start();

require('razorpay-php/Razorpay.php');

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;
$keyId = "rzp_test_13G2isdzTpKXkK";
$keySecret = "7NnSu0AIlRNFcodK20JLKyVn";
$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    // inserted data to database
    if(isset($_POST['save']))
    {
        $sql = "INSERT INTO users(firstName,lastName,email,dob,gender,addresses,city,states,pin,mobile,telegram,instagram,initiatives,aadhaar,pan) 
        VALUES('".addslashes($_POST['firstName'])."', '".addslashes($_POST['lastName'])."', '".addslashes($_POST['email'])."', ".addslashes($_POST['dob']).", '".addslashes($_POST['current-role'])."', '".addslashes($_POST['addresses'])."', '".addslashes($_POST['city'])."', '".addslashes($_POST['states'])."', ".addslashes($_POST['pin']).", ".addslashes($_POST['mobile']).", '".addslashes($_POST['telegram'])."', '".addslashes($_POST['instagram'])."', '".addslashes($_POST['improvements'])."', ".addslashes($_POST['aadhaar']).", '".addslashes($_POST['pan'])."')";
        $mysqli->query($sql);

        $sql_stats = "INSERT INTO users(username,userEmail) 
        VALUES('".addslashes($_POST['firstName'])."', '".addslashes($_POST['email'])."')";
        $mysqli->query($sql_stats);

        $sql_payment = "INSERT INTO payment(userEmail, order_id, payment_id ) 
        VALUES('".addslashes('".addslashes($_POST['email'])."', ".$POST['razorpay_order_id'].", ".$POST['razorpay_payment_id'].")";
        $mysqli->query($sql_payment);
    }

    if(isset($_POST["save"])){
        
        if($_POST["email"]==""){
        echo "Fill The Field..";
        }else{ 
        $email=$_POST['email'];
        $email =filter_var($email, FILTER_SANITIZE_EMAIL);
        $email= filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email){
        echo "Invalid Sender's Email";
        }
        else{
        $subject = $_POST['sub'];
        $message = $_POST['msg'];
        $headers = 'From:'. $email2 . "rn"; 
        $headers .= 'Cc:'. $email2 . "rn"; 
        $to = $_POST['email'];
        $receiver = " i@careforbharat.in";
       
        $message = wordwrap($message, 70);
    
        mail($to, $subject, $message, $headers);
        mail($receiver, $subject, $message, $headers);
        echo "Your mail has been sent successfuly ! Thank you for your feedback";
        }
        }
        }
        


    $html = "<p>Your payment was successful</p>
              <a href="index.php">Go Back</a>";
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;

?>