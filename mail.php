<?php

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

$serviceNummer = $_POST['serviceNummer'];
$repairName = $_POST['repairName'];
$kundensNamn = $_POST['kundensNamn'];
$kundensAdress = $_POST['kundensAdress'];
$kundensMail = $_POST['kundensMail'];
$kundensNummer = $_POST['kundensNummer'];
$mailText = $_POST['mail'];

$mail = new PHPMailer(true);
try {

    $mail->CharSet = "UTF-8";
    $mail->isSMTP();
    $mail->Host = 'SMTP_Host';
    $mail->SMTPAuth = true;
    $mail->Username = 'Mail_Adress';
    $mail->Password = 'Mail_Passwd';
    $mail->SMTPSecure = 'tls';
    $mail->Port = Port_Number;

    $mail->setFrom('Mail_Adress'); //You are free to choose any mail adress which is hosted by the same smtp server

    $mail->addAddress("$kundensMail");


    $mail->isHTML(true);
    $mail->Subject = 'Service Rapport?';
    $mail->Body    = $mailText;

    $mail->send();

    echo "Meddelande skickat!<br>";
    echo "Klicka <a href=tables.php> här</a> för att gå tillbaka till databasen eller klicka <a href='index.php'> här</a> för att komma till formuläret.";
}
catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>

