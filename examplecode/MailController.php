<?php
//Deze dependencies laden we handmatig in
use PHPMailer\phpmailer\PHPMailer;

require "PHPMAILER-master/src/PHPMailer.php";
require "PHPMAILER-master/src/SMTP.php";
require "PHPMAILER-master/src/exception.php";
//deze function stuurt emails via google
function mailen($email, $subject, $text)
{
    $mail = new PHPMailer();

    //verbinden met gmail
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "587";

    //gmail identificatie
    $mail->Username = "CoralYachtsSamAndreMarco@gmail.com";
    $mail->Password = "Wachtwoord123";

    //email opstellen
    $mail->isHTML(true);
    $mail->SetFrom("CoralYachtsSamAndreMarco@gmail.com", "Admin");
    $mail->Subject = $subject;
    $mail->ChatSet = "UTF-8";
    $bericht = "<body style=\"font-family: Courier New, Courier; font-size: 14px; color: #000;\">" . $text . "</body></html>";
    $mail->AddAddress($email);
    $mail->Body = $bericht;
    //stuur mail
    $mail->Send();
}

?>