<div id="beforePrint">
<?php

$con = mysqli_connect('localhost', 'root', '', 'ServiceRapportProgram');

$query = "SELECT * FROM serviceRapport";

if ($result = mysqli_query($con, $query)) { ?>

    <p style="text-align: center; font-size: x-large;"><b>Alla I databasen</b></p><hr>

    <center><table border="1px" style="width: 100%; text-align: center;">
            <tr>
                <th>Service Nummer</th>
                <th>Reparatör</th>
                <th>Kundens Namn</th>
                <th>Kundens Adress</th>
                <th>Kundens Mail</th>
                <th>Kundens Nummer</th>
                <th>Defekt</th>
                <th>Defekt Area</th>
                <th>Reparatörens Åtgärd</th>
                <th>Pris</th>
                <th>Totalt</th>
                <th>Skriv Ut</th>
                <th>Notis</th>
            </tr>

<?php

    while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";

                print_r("<td>" . $row['serviceNummer'] . "</td>");
                print_r("<td>" . $row['repairName'] . "</td>");
                print_r("<td>" . $row['kNamn'] . "</td>");
                print_r("<td>" . $row['kAdress'] . "</td>");
                print_r("<td>" . $row['kMail'] . "</td>");
                print_r("<td>" . $row['kNummer'] . "</td>");
                echo "<td>";

                    if($row['daCheckMobo'] > 0) {
                        echo "<ul><li>Moderkort</li></ul>";

                    }

                    if($row['daCheckGpu'] > 0) {
                        echo "<ul><li>Grafikkort</li></ul>";

                    }

                    if($row['daCheckCpu'] > 0) {
                        echo "<ul><li>Processorn</li></ul>";

                    }

                    if($row['daCheckPsu'] > 0) {
                        echo "<ul><li>Nätaggregat</li></ul>";

                    }

                    if($row['daCheckHdd'] > 0) {
                        echo "<ul><li>Hårddisk</li></ul>";

                    }

                    if($row['daCheckCool'] > 0) {
                        echo "<ul><li>Kylaren</li></ul>";

                    }

                    if($row['daCheckOther'] > 0) {
                        print_r("<ul><li>" . $row['daOtherValue'] . "</li></ul>");

                    }

                    echo "</td><td>";

                    if(strlen($row['daErrMobo']) > 0) {
                        print_r("<ul><li>" . $row['daErrMobo'] . "</li></ul>");

                    }

                    if(strlen($row['daErrGpu']) > 0) {
                        print_r("<ul><li>" . $row['daErrGpu'] . "</li></ul>");

                    }

                    if(strlen($row['daErrCpu']) > 0) {
                        print_r("<ul><li>" . $row['daErrCpu'] . "</li></ul>");

                    }

                    if(strlen($row['daErrPsu']) > 0) {
                        print_r("<ul><li>" . $row['daErrPsu'] . "</li></ul>");

                    }

                    if(strlen($row['daErrHdd']) > 0) {
                        print_r("<ul><li>" . $row['daErrHdd'] . "</li></ul>");

                    }

                    if(strlen($row['daErrCool']) > 0) {
                        print_r("<ul><li>" . $row['daErrCool'] . "</li></ul>");

                    }

                    if(strlen($row['daErrOther']) > 0) {
                        print_r("<ul><li>" . $row['daErrOther'] . "</li></ul>");

                    }

                echo "</td><td>";

                    if($row['ccCheckSearch'] > 0) {
                        if($row['ccCheckMac']) {
                            echo "<ul><li>Felsökning (Mac)</li></ul>";
                        }
                        if($row['ccCheckPC']) {
                            echo "<ul><li>Felsökning (PC)</li></ul>";
                        }
                    }

                    if($row['ccCheckMobo'] > 0) {
                        echo "<ul><li>Moderkort</li></ul>";

                    }

                    if($row['ccCheckGpu'] > 0) {
                        echo "<ul><li>Grafikkort</li></ul>";

                    }

                    if($row['ccCheckCpu'] > 0) {
                        echo "<ul><li>Processorn</li></ul>";

                    }

                    if($row['ccCheckPsu'] > 0) {
                        echo "<ul><li>Nätaggregat</li></ul>";

                    }

                    if($row['ccCheckHdd'] > 0) {
                        echo "<ul><li>Hårddisk</li></ul>";

                    }

                    if($row['ccCheckCool'] > 0) {
                        echo "<ul><li>Kylaren</li></ul>";

                    }

                    if($row['ccCheckOther'] > 0) {
                        print_r("<ul><li>" . $row['ccValueOther'] . "</li></ul>");

                    }

                echo "</td><td>";

                    if($row['ccCheckMac'] > 0) {
                        print_r("<ul><li>899kr</li></ul>");
                    }

                    if($row['ccCheckPC'] > 0) {
                        print_r("<ul><li>575kr</li></ul>");
                    }

                    if($row['ccPriceMobo'] > 0) {
                        print_r("<ul><li>" . $row['ccPriceMobo'] . "kr" . "</li></ul>");

                    }

                    if($row['ccPriceGpu'] > 0) {
                        print_r("<ul><li>" . $row['ccPriceGpu'] . "kr" . "</li></ul>");

                    }

                    if($row['ccPriceCpu'] > 0) {
                        print_r("<ul><li>" . $row['ccPriceCpu'] . "kr" . "</li></ul>");

                    }

                    if($row['ccPricePsu'] > 0) {
                        print_r("<ul><li>" . $row['ccPricePsu'] . "kr" . "</li></ul>");

                    }

                    if($row['ccPriceHdd'] > 0) {
                        print_r("<ul><li>" . $row['ccPriceHdd'] . "kr" . "</li></ul>");

                    }

                    if($row['ccPriceCool'] > 0) {
                        print_r("<ul><li>" . $row['ccPriceCool'] . "kr" . "</li></ul>");

                    }

                    if($row['ccPriceOther'] > 0) {
                        print_r("<ul><li>" . $row['ccPriceOther'] . "kr" . "</li></ul>");

                    }

                print_r("</td><td>" . $row['totalPrice'] . "kr" . "</td>");

$serviceNummer = $row['serviceNummer'];
$repairName = $row['repairName'];
$kundensNamn = $row['kNamn'];
$kundensAdress = $row['kAdress'];
$kundensMail = $row['kMail'];
$kundensNummer = $row['kNummer'];
$totalPrice = $row['totalPrice'];

$daCheckMobo = $row['daCheckMobo'];
$daErrMobo = $row['daErrMobo'];
$daCheckGpu = $row['daCheckGpu'];
$daErrGpu = $row['daErrGpu'];
$daCheckCpu = $row['daCheckCpu'];
$daErrCpu = $row['daErrCpu'];
$daCheckPsu = $row['daCheckPsu'];
$daErrPsu = $row['daErrPsu'];
$daCheckHdd = $row['daCheckHdd'];
$daErrHdd = $row['daErrHdd'];
$daCheckCool = $row['daCheckCool'];
$daErrCool = $row['daErrCool'];
$daCheckOther = $row['daCheckOther'];
$daOtherValue = $row['daOtherValue'];
$daErrOther = $row['daErrOther'];

$ccCheckSearch = $row['ccCheckSearch'];
$ccCheckMac = $row['ccCheckMac'];
$ccCheckPC = $row['ccCheckPC'];
$ccCheckMobo = $row['ccCheckMobo'];
$ccPriceMobo = $row['ccPriceMobo'];
$ccCheckGpu = $row['ccCheckGpu'];
$ccPriceGpu = $row['ccPriceGpu'];
$ccCheckCpu = $row['ccCheckCpu'];
$ccPriceCpu = $row['ccPriceCpu'];
$ccCheckPsu = $row['ccCheckPsu'];
$ccPricePsu = $row['ccPricePsu'];
$ccCheckHdd = $row['ccCheckHdd'];
$ccPriceHdd = $row['ccPriceHdd'];
$ccCheckCool = $row['ccCheckCool'];
$ccPriceCool = $row['ccPriceCool'];
$ccCheckOther = $row['ccCheckOther'];
$ccValueOther = $row['ccValueOther'];
$ccPriceOther = $row['ccPriceOther'];

?>

<td>
    <form action="print.php" method="post">
        <input type="hidden" name="serviceNummer" value='<?php echo "$serviceNummer"; ?>'>
        <input type="hidden" name="repairName" value='<?php echo "$repairName"; ?>'>
        <input type="hidden" name="kundensNamn" value='<?php echo "$kundensNamn"; ?>'>
        <input type="hidden" name="kundensAdress" value='<?php echo "$kundensAdress"; ?>'>
        <input type="hidden" name="kundensMail" value='<?php echo "$kundensMail"; ?>'>
        <input type="hidden" name="kundensNummer" value='<?php echo "$kundensNummer"; ?>'>

        <input type="hidden" name="daCheckMobo" value='<?php echo "$daCheckMobo"; ?>'>
        <input type="hidden" name="daErrMobo" value='<?php echo "$daErrMobo"; ?>'>
        <input type="hidden" name="daCheckGpu" value='<?php echo "$daCheckGpu"; ?>'>
        <input type="hidden" name="daErrGpu" value='<?php echo "$daErrGpu"; ?>'>
        <input type="hidden" name="daCheckCpu" value='<?php echo "$daCheckCpu"; ?>'>
        <input type="hidden" name="daErrCpu" value='<?php echo "$daErrCpu"; ?>'>
        <input type="hidden" name="daCheckPsu" value='<?php echo "$daCheckPsu"; ?>'>
        <input type="hidden" name="daErrPsu" value='<?php echo "$daErrPsu"; ?>'>
        <input type="hidden" name="daCheckHdd" value='<?php echo "$daCheckHdd"; ?>'>
        <input type="hidden" name="daErrHdd" value='<?php echo "$daErrHdd"; ?>'>
        <input type="hidden" name="daCheckCool" value='<?php echo "$daCheckCool"; ?>'>
        <input type="hidden" name="daErrCool" value='<?php echo "$daErrCool"; ?>'>
        <input type="hidden" name="daCheckOther" value='<?php echo "$daCheckOther"; ?>'>
        <input type="hidden" name="daOtherValue" value='<?php echo "$daOtherValue"; ?>'>
        <input type="hidden" name="daErrOther" value='<?php echo "$daErrOther"; ?>'>

        <input type="hidden" name="ccCheckSearch" value='<?php echo "$ccCheckSearch"; ?>'>
        <input type="hidden" name="ccCheckMac" value='<?php echo "$ccCheckMac"; ?>'>
        <input type="hidden" name="ccCheckPC" value='<?php echo "$ccCheckPC"; ?>'>
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

        <input type="submit" value="Skriv Ut">
    </form>

</td>
            <td>
                <form method="post" action="mailer.php">
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
                    <input type="hidden" name="daOtherValue" value='<?php echo "$ccValueOther"; ?>'>
                    <input type="hidden" name="ccValueOther" value='<?php echo "$ccPriceOther"; ?>'>
                    <input type="submit" value="Mail">
                </form>
            </td>
<?php
        echo "</tr>";

    }

    mysqli_free_result($result);
    
}
?>