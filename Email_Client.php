<?php

try
{
    $to = "mondeeigwe@gmail.com";
    $subject = "Your Invoice";
    $txt = "Please find attached Invoice, Thank You!";
    $headers = "From: groovymondee@gmail.com";
    mail($to,$subject,$txt,$headers);

    if(isset($_POST['submit'])){
            echo '<script type="text/javascript">';
            echo ' alert("Message has been sent!")';
            echo '</script>';
            echo '<br>';
            echo '<br>';
    }}catch (Exception $e) {
        echo "Message could not be sent";
    }
?>

