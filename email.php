<?php
if (isset($_GET['email']) && isset($_GET['code'])) {
    $email = $_GET['email'];
    $code = $_GET['code'];
    
    $subject = "Email Confirmation Code";
    $message = "Your confirmation code is: " . $code;
    $headers = "From: dream.russia@support.com\r\n";

    if (mail($email, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "missing_parameters";
}
?>

