<fieldset>
    <legend>Kundens Uppgifter</legend>

<?php

require __DIR__. '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$serviceNummer = $_POST['serviceNummer'];
$repairName = $_POST['repairName'];
$kundensNamn = $_POST['kundensNamn'];
$kundensAdress = $_POST['kundensAdress'];
$kundensMail = $_POST['kundensMail'];
$kundensNummer = $_POST['kundensNummer'];

?>

    <table border="1">
        <tr>
            <th>Service Nummer</th>
            <th>Reparatörens Namn</th>
            <th>Kundens Namn</th>
            <th>Kundens Mail</th>
            <th>Kundens Nummer</th>
        </tr>
        <tr>
            <?php

            echo '<td>' . $serviceNummer . '</td>';
            echo '<td>' . $repairName . '</td>';
            echo '<td>' . $kundensNamn . '</td>';
            echo '<td>' . $kundensMail . '</td>';
            echo '<td>' . $kundensNummer . '</td>';

            ?>
        </tr>
    </table>

</fieldset>
<fieldset>
    <legend>Skicka Mail</legend>

    <table border="1" style="position: absolute; width: 25%;">
        <tr>
            <th>Förprogramerad Mail</th>
        </tr>
        <tr>
            <td>
                <form action="" method="post">
                Produkten är Klar: <input type="radio" name="preChoose" value="Finished" style="float: right;">
                <hr>Försening: <input type="radio" name="preChoose" value="Delayed" style="float: right;">
                <hr>Eget Mail: <input type="radio" name="preChoose" value="userDefined" style="float:right;">
                    <input type="hidden" name="serviceNummer" value='<?php echo "$serviceNummer"; ?>'>
                    <input type="hidden" name="repairName" value='<?php echo "$repairName"; ?>'>
                    <input type="hidden" name="kundensNamn" value='<?php echo "$kundensNamn"; ?>'>
                    <input type="hidden" name="kundensAdress" value='<?php echo "$kundensAdress"; ?>'>
                    <input type="hidden" name="kundensMail" value='<?php echo "$kundensMail"; ?>'>
                    <input type="hidden" name="kundensNummer" value='<?php echo "$kundensNummer"; ?>'>
                <hr><input type="submit" value="Välj" style="width: 100%;">
                </form>
            </td>
        </tr>
    </table>

    <table border="1" style="float: right; width: 50%;">
        <tr>
            <th>Mail</th>
        </tr>
        <tr>
            <td>
                <form action="mail.php" method="post">
                <textarea rows="4" cols="50" name="mail" style="height: 155px; width: 100%;"><?php
                    if(isset($_POST['preChoose']) and $_POST['preChoose'] == 'Finished') {
                        echo "Hej " . $kundensNamn . ", din produkt (med service nummret " . $serviceNummer . ") är färdig.\n" . "Besök oss på Frödingshöjd 20, vardagar mellan 12:00 till 18:00.";
                    }
                    elseif(isset($_POST['preChoose']) and $_POST['preChoose'] == 'Delayed') {
                        echo "Hej " . $kundensNamn . ", din produkt (med service nummret " . $serviceNummer . ") kommer att bli försenad.\n" . "Vi kommer hålla er uppdaterade om statusen.";
                    }
                    elseif(isset($_POST['preChoose']) and $_POST['preChoose'] == 'userDefined') {
                        echo "Skriv text här...";
                    }
                    ?></textarea>
                    <input type="hidden" name="serviceNummer" value='<?php echo "$serviceNummer"; ?>'>
                    <input type="hidden" name="repairName" value='<?php echo "$repairName"; ?>'>
                    <input type="hidden" name="kundensNamn" value='<?php echo "$kundensNamn"; ?>'>
                    <input type="hidden" name="kundensAdress" value='<?php echo "$kundensAdress"; ?>'>
                    <input type="hidden" name="kundensMail" value='<?php echo "$kundensMail"; ?>'>
                    <input type="hidden" name="kundensNummer" value='<?php echo "$kundensNummer"; ?>'>
                <input type="submit" value="Skicka" style="margin-top: 3%; width: 100%; height: 30px;">
                </form>
            </td>
        </tr>
    </table>

</fieldset>