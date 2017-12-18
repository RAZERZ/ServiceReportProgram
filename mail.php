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
    $mail->Host = ''; //Smtp host
    $mail->SMTPAuth = true;
    $mail->Username = ''; //Smtp mail address
    $mail->Password = ''; //Smtp mail address passwd
    $mail->SMTPSecure = 'tls';
    $mail->Port = 2525;

    $mail->setFrom(''); //Smtp mail address
    $mail->addAddress("$kundensMail");


    $mail->isHTML(true);
    $mail->Subject = 'Service Rapport?';
    $mail->Body    = $mailText;

    $mail->send();

?>
    <center>
    <table border="1" style="width: 78%; height: 12%;">
        <tr>
            <th style="font-size: xx-large; color: red;">Meddelande skickat!</th>
        </tr>
    </table>

        <table border="1" style="width: 78%; height: 8%;">
            <tr>
                <th style="padding: 1%;"><a href="tables.php"><input type="button" value="Klicka här för att komma till databasen" style="padding: 2%; font-size: 80%; width: 100%;"></a></th>
                <th style="padding: 1%;"><a href="index.php"><input type="button" value="Klicka här för att komma till formuläret" style="padding: 2%; font-size: 80%; width: 100%;"></a></th>
            </tr>
        </table>

<?php

}
catch (Exception $e) {
    echo 'Meddelanded kunde ej skickas.';
    echo 'Mail fel: ' . $mail->ErrorInfo;
}

?>

