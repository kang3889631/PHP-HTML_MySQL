<?php
$to='sweng@gibraltarmine.com';
$subject="Greeting";
$message='Hello, SHiyin!';
$from='kang3889631@gmail.com';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
$message .= '</body></html>';

// Sending email
if(mail($to, $subject, $message, $headers)){
        echo 'Your mail has been sent successfully.';
} else{
        echo 'Unable to send email. Please try again.';
}
?>
