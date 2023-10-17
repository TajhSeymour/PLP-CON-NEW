<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

global $registrant_name;
global $registrant_email;

$phpmail = new PHPMailer(true);

try {
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'acc97a40b1a9ad';
    $phpmailer->Password = 'f3d2ad90b526cf';
    $phpmailer->SMTPSecure = 'tls';

    $phpmailer->setFrom('myname@mail.com', 'No-Reply');
    $phpmailer->addAddress($registrant_email, $registrant_name);
    $phpmailer->Subject = 'Conference Registration Confirmation and Approval Process for [Conference Name]';

    // Embed the image
    $phpmailer->addEmbeddedImage('/inter-american-log.jpeg', 'inter_american_logo_cid', 'inter-american-log.jpeg');

    // Set the email body with HTML content
    $phpmailer->isHTML(true);
    $phpmailer->Body = "
    <html>
    <head>
        <title>Conference Registration</title>
    </head>
        <img src='cid:inter_american_logo_cid' alt='4th Inter-American Meeting Logo' />

        <p>Dear $registrant_name,</p>
        <p>We sincerely appreciate your registration for the upcoming [Conference Name], scheduled to take place from [Conference Dates] at [Conference Venue]. Your interest in joining us for this event is truly valued.</p>
        <p>Please be informed that your registration has been denied approval.         
        
        <p>Warm regards,<br>
        [Your Name] - waiting on info<br>
        [Your Title] - waiting on info<br>
        [Conference Organizer/Organization Name]<br>
        [Contact Information: Email, Phone Number]<br>
        <a href=\"https://www.oas.org/en/\">The Organization of American States</a></p>

    </html>";

    $phpmailer->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
}
?>
