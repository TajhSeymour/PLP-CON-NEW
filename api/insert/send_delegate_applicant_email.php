<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

try {
    $mail = new PHPMailer(TRUE);
    $mail->SMTPDebug = 3;
     $mail->Debugoutput = 'error_log';
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64'; // Use base64 encoding
    $mail->ContentType = 'text/html; charset=UTF-8';
    $mail->Host = 'plpconvention.org';
    $mail->SMTPAuth = true;
    $mail->Port = 465;
    $mail->Username = 'noreply@plpconvention.org';
    $mail->Password = '$Welcome2023';
    $mail->SMTPSecure = 'tls';
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->setFrom('noreply@plpconvention.org', 'noreply@plpconvention.org');
    $mail->addAddress($registrant_email, $registrant_name);
    $mail->Subject = 'Conference Registration Confirmation for The PLP Convention 2023';

    // $mail->addEmbeddedImage('assets/images/inter-american-logo.jpeg', 'inter_american_logo_cid', 'inter-american-logo.jpeg')  <imag src=\"cid:inter_american_logo_cid\" alt=\"Inter-American Logo\" width=\"100\" height=\"100\"> ;

    $mail->isHTML(true);
    $mail->Body = "
    <html>
    <head>
        <title>Conference Registration</title>
    </head>
       

        <p>Dear $registrant_name,</p>
        <p>We sincerely appreciate your registration for the upcoming The 55th Progressive Liberal Party Convention , scheduled to take place from November 9th-10th 2023 at The Baha Mar Resort.</p>
        <p>Please be informed that your registration is currently pending approval. Our team is meticulously reviewing all submissions to ensure a seamless and high-quality experience for all participants. An email will be sent to you as soon as your registration is approved. This communication will include your final confirmation details and further instructions for your participation in the conference.</p>

        <p><strong>Here are the details of your registration:</strong><br>
        Name: $registrant_name<br>
        Email: $registrant_email<br>
        Registration Type: <br>
        Conference Dates: November 9th-10th<br>
        Venue: The Baha Mar Resort<br>
        Registration ID: $registrant_id</p>

        <p><strong>Conference Schedule:</strong><br>
        An engaging and informative conference schedule awaits you, featuring distinguished keynote speakers, interactive workshops, and enlightening sessions. The comprehensive conference itinerary will be shared with you closer to the event. Please watch for updates in your email inbox.</p>

        <p><strong>Badge and Conference Materials:</strong><br>
        Upon your arrival at the event venue, kindly proceed to the registration desk to collect your conference badge and essential materials. To expedite the process, remember to bring a valid photo ID for identification purposes.</p>

        <p>Should you require any assistance or have inquiries, our dedicated conference support team is available to help. Feel free to reach out at [Conference Support Email/Phone Number]. We are committed to ensuring that your conference experience surpasses your expectations.</p>

        <p>We eagerly anticipate your participation in the The 55th Progressive Liberal Party Convention. Your presence will undoubtedly contribute to the overall success of the event. We sincerely appreciate your patience as we finalize all registrations.</p>

        <p>Warm regards,<br>
        <a href=\"https://www.plpconvention.org\">The 55th Progressive Liberal Party Convention Committee/a></p>


        
    </html>";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
