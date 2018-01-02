<fieldset>
    <legend>Kundens Uppgifter</legend>

<?php
error_reporting(E_ALL & ~E_NOTICE);

require __DIR__. '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$serviceNummer = $_POST['serviceNummer'];
$repairName = $_POST['repairName'];
$kundensNamn = $_POST['kundensNamn'];
$kundensAdress = $_POST['kundensAdress'];
$kundensMail = $_POST['kundensMail'];
$kundensNummer = $_POST['kundensNummer'];
$totalPrice = $_POST['totalPrice'];

$ccCheckMobo = $_POST['ccCheckMobo'];
$ccPriceMobo = $_POST['ccPriceMobo'];
$ccCheckGpu = $_POST['ccCheckGpu'];
$ccPriceGpu = $_POST['ccPriceGpu'];
$ccCheckCpu = $_POST['ccCheckCpu'];
$ccPriceCpu = $_POST['ccPriceCpu'];
$ccCheckPsu = $_POST['ccCheckPsu'];
$ccPricePsu = $_POST['ccPricePsu'];
$ccCheckHdd = $_POST['ccCheckHdd'];
$ccPriceHdd = $_POST['ccCheckHdd'];
$ccCheckCool = $_POST['ccCheckCool'];
$ccPriceCool = $_POST['ccPriceCool'];
$ccCheckOther = $_POST['ccCheckOther'];
$daOtherValue = $_POST['daOtherValue'];
$ccValueOther = $_POST['ccValueOther'];
$ccPriceOther = $_POST['ccPriceOther'];

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
                <hr>Utbytesdelar: <input type="radio" name="preChoose" value="conService" style="float: right;">
                <hr>Försening: <input type="radio" name="preChoose" value="Delayed" style="float: right;">
                <hr>Kostnadsändring: <input type="radio" name="preChoose" value="priceChange" style="float: right;">
                <input type="number" name="newPrice">
                <hr>Eget Mail: <input type="radio" name="preChoose" value="userDefined" style="float:right;">
                    <input type="hidden" name="serviceNummer" value='<?php echo "$serviceNummer"; ?>'>
                    <input type="hidden" name="repairName" value='<?php echo "$repairName"; ?>'>
                    <input type="hidden" name="kundensNamn" value='<?php echo "$kundensNamn"; ?>'>
                    <input type="hidden" name="kundensAdress" value='<?php echo "$kundensAdress"; ?>'>
                    <input type="hidden" name="kundensMail" value='<?php echo "$kundensMail"; ?>'>
                    <input type="hidden" name="kundensNummer" value='<?php echo "$kundensNummer"; ?>'>
                    <input type="hidden" name="totalPrice" value='<?php echo "$totalPrice"; ?>'>

                    <input type="hidden" name="ccCheckMobo" value='<?php echo "$ccCheckMobo"; ?>'>
                    <input type="hidden" name="ccPriceMobo" value='<?php echo "$ccPriceMobo"; ?>'>
                    <input type="hidden" name="ccCheckGpu" value='<?php echo "$ccCheckGpu"; ?>'>
                    <input type="hidden" name="ccPriceGpu" value='<?php echo "$ccPriceGpu"; ?>'>
                    <input type="hidden" name="ccCheckCpu" value='<?php echo "$ccCheckCpu"; ?>'>
                    <input type="hidden" name="ccPriceCpu" value='<?php echo "$ccPriceCpu"; ?>'>
                    <input type="hidden" name="ccCheckPsu" value='<?php echo "$ccCheckPsu"; ?>'>
                    <input type="hidden" name="ccPricePsu" value='<?php echo "$ccPricePsu"; ?>'>
                    <input type="hidden" name="ccCheckHdd" value='<?php echo "$ccCheckHdd"; ?>'>
                    <input type="hidden" name="ccPriceHdd" value='<?php echo "$ccPriceHdd"; ?>'>
                    <input type="hidden" name="ccCheckCool" value='<?php echo "$ccCheckCool"; ?>'>
                    <input type="hidden" name="ccPriceCool" value='<?php echo "$ccPriceCool"; ?>'>
                    <input type="hidden" name="ccCheckOther" value='<?php echo "$ccCheckOther"; ?>'>
                    <input type="hidden" name="daOtherValue" value='<?php echo "$daOtherValue"; ?>'>
                    <input type="hidden" name="ccValueOther" value='<?php echo "$ccValueOther"; ?>'>
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
                        echo "Hej " . $kundensNamn . ", din produkt (med service nummret " . $serviceNummer . ") är färdig.\n\n" . "Besök oss när det passar dig, vardagar mellan 12:00 till 18:00.";
                    }
                    elseif(isset($_POST['preChoose']) and $_POST['preChoose'] == 'conService') {
                        echo "Hej " . $kundensNamn . ".\n\nVi kontaktar er angående eran produkt som vi genomförde en felsökning på." . "\nDelarnas som ska bytas ut är:\n\n" .

                            ($ccCheckMobo > 0 ? "Moderkortet. Pris: " . $ccPriceMobo:'');

                            ($ccCheckGpu > 0 ? "Grafikkortet. Pris: " . $ccPriceGpu:'');

                            ($ccCheckCpu > 0 ? "Processorn. Pris: " . $ccPriceCpu:'');

                            ($ccCheckPsu > 0 ? "Nätaggregatet. Pris: " . $ccPricePsu:'');

                            ($ccCheckHdd > 0 ? "Hårddisk. Pris " . $ccPriceHdd:'');

                            ($ccCheckCool > 0 ? "Kylaren. Pris: " . $ccPriceCool:'');

                            ($ccCheckOther > 0 ? $ccValueOther . ". Pris: " . $ccPriceOther:'');

                            echo "\n\nDen totala kostnaden blir " . $totalPrice . "kr inklusive kostnad på felsökning.\n\nVill du att vi ska genomföra reparationen?" . "\n\nKontakta oss angående val med ditt service nummer via antingen telefon (054 690 000) eller mail (servicerapport@data-butiken.com).";
                        ;
                    }
                    elseif(isset($_POST['preChoose']) and $_POST['preChoose'] == 'Delayed') {
                        echo "Hej " . $kundensNamn . ".\n\nDin produkt (med service nummret " . $serviceNummer . ") kommer att bli försenad.\n\n" . "Detta kan bero på att delen eller delarna som behövs ej finns i lager.\n\nFrakttid är ofta runt 3-5 arbetsdagar.\n\nVi kommer hålla er uppdaterade om statusen.\n\nBehöver ni mer info, kontakta oss via mail (servicerapport@data-butiken.com) eller telefon (054 690 000) med ditt service numer.";
                    }
                    elseif(isset($_POST['preChoose']) and $_POST['preChoose'] == 'priceChange') {
                        echo "Hej " . $kundensNamn .".\n\nVi kontaktar er angående eran produkt med service nummret " . $serviceNummer . ".\n\nAngående priset som diskuterades vi start, kommer en kostnadsändring ske.\n\nDet nya priset går från " . $totalPrice . "kr " . "till " . $_POST['newPrice'] . "kr" . ", detta blir en kostnadsändring på " . ($_POST['newPrice'] - $totalPrice) . "kr" . "\n\nVill du fortsätta med dessa nya villkor eller ska vi avbryta servicen?";
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
                    <input type="hidden" name="totalPrice" value='<?php echo "$totalPrice"; ?>'>

                    <input type="hidden" name="ccCheckMobo" value='<?php echo "$ccCheckMobo"; ?>'>
                    <input type="hidden" name="ccPriceMobo" value='<?php echo "$ccPriceMobo"; ?>'>
                    <input type="hidden" name="ccCheckGpu" value='<?php echo "$ccCheckGpu"; ?>'>
                    <input type="hidden" name="ccPriceGpu" value='<?php echo "$ccPriceGpu"; ?>'>
                    <input type="hidden" name="ccCheckCpu" value='<?php echo "$ccCheckCpu"; ?>'>
                    <input type="hidden" name="ccPriceCpu" value='<?php echo "$ccPriceCpu"; ?>'>
                    <input type="hidden" name="ccCheckPsu" value='<?php echo "$ccCheckPsu"; ?>'>
                    <input type="hidden" name="ccPricePsu" value='<?php echo "$ccPricePsu"; ?>'>
                    <input type="hidden" name="ccCheckHdd" value='<?php echo "$ccCheckHdd"; ?>'>
                    <input type="hidden" name="ccPriceHdd" value='<?php echo "$ccPriceHdd"; ?>'>
                    <input type="hidden" name="ccCheckCool" value='<?php echo "$ccCheckCool"; ?>'>
                    <input type="hidden" name="ccPriceCool" value='<?php echo "$ccPriceCool"; ?>'>
                    <input type="hidden" name="ccCheckOther" value='<?php echo "$ccCheckOther"; ?>'>
                    <input type="hidden" name="ccValueOther" value='<?php echo "$ccValueOther"; ?>'>
                    <input type="hidden" name="ccPriceOther" value='<?php echo "$ccPriceOther"; ?>'>
                <input type="submit" value="Skicka" style="margin-top: 3%; width: 100%; height: 30px;">
                </form>
            </td>
        </tr>
    </table>

</fieldset>