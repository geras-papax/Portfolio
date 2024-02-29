<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "yourpersonal@gmail.com";
    $subject = $_POST["subject"];
    $sender = $_POST["email"];
    $message = $_POST["message"];
    
    $headers = "From: $sender";

    mail($recipient, $subject, $message, $headers);
}
?>
