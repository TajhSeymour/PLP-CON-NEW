<?php
$to = $registrant_email;
$subject = "Test Email";
$message = "This is a test email sent from PHP.";
$headers = "From: noreply@plpconvention.org\r\n";
$headers .= "Reply-To: noreply@plpconvention.org\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}
?>
