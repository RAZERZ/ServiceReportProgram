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
                        echo "<ul><li>Felsökning</li></ul>";
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
                        print_r("<ul><li>" . $row['daOtherValue'] . "</li></ul>");

                    }

                echo "</td><td>";

                    if($row['ccPriceSearch'] > 0) {
                        print_r("<ul><li>" . $row['ccPriceSearch'] . "kr" . "</li></ul>");
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

                    if($row['ccValueOther'] > 0) {
                        print_r("<ul><li>" . $row['ccValueOther'] . "kr" . "</li></ul>");

                    }

                print_r("</td><td>" . $row['totalPrice'] . "kr" . "</td>");

$serviceNummer = $row['serviceNummer'];
$repairName = $row['repairName'];
$kundensNamn = $row['kNamn'];
$kundensAdress = $row['kAdress'];
$kundensMail = $row['kMail'];
$kundensNummer = $row['kNummer'];

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
$ccPriceSearch = $row['ccPriceSearch'];
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

?>

<td>
    <form action="print.php" method="post">
        <input type="hidden" name="serviceNummer" value='<? echo "$serviceNummer"; ?>'>
        <input type="hidden" name="repairName" value='<? echo "$repairName"; ?>'>
        <input type="hidden" name="kundensNamn" value='<? echo "$kundensNamn"; ?>'>
        <input type="hidden" name="kundensAdress" value='<? echo "$kundensAdress"; ?>'>
        <input type="hidden" name="kundensMail" value='<? echo "$kundensMail"; ?>'>
        <input type="hidden" name="kundensNummer" value='<? echo "$kundensNummer"; ?>'>

        <input type="hidden" name="daCheckMobo" value='<? echo "$daCheckMobo"; ?>'>
        <input type="hidden" name="daErrMobo" value='<? echo "$daErrMobo"; ?>'>
        <input type="hidden" name="daCheckGpu" value='<? echo "$daCheckGpu"; ?>'>
        <input type="hidden" name="daErrGpu" value='<? echo "$daErrGpu"; ?>'>
        <input type="hidden" name="daCheckCpu" value='<? echo "$daCheckCpu"; ?>'>
        <input type="hidden" name="daErrCpu" value='<? echo "$daErrCpu"; ?>'>
        <input type="hidden" name="daCheckPsu" value='<? echo "$daCheckPsu"; ?>'>
        <input type="hidden" name="daErrPsu" value='<? echo "$daErrPsu"; ?>'>
        <input type="hidden" name="daCheckHdd" value='<? echo "$daCheckHdd"; ?>'>
        <input type="hidden" name="daErrHdd" value='<? echo "$daErrHdd"; ?>'>
        <input type="hidden" name="daCheckCool" value='<? echo "$daCheckCool"; ?>'>
        <input type="hidden" name="daErrCool" value='<? echo "$daErrCool"; ?>'>
        <input type="hidden" name="daCheckOther" value='<? echo "$daCheckOther"; ?>'>
        <input type="hidden" name="daOtherValue" value='<? echo "$daOtherValue"; ?>'>
        <input type="hidden" name="daErrOther" value='<? echo "$daErrOther"; ?>'>

        <input type="hidden" name="ccCheckSearch" value='<? echo "$ccCheckSearch"; ?>'>
        <input type="hidden" name="ccCheckMobo" value='<? echo "$ccCheckMobo"; ?>'>
        <input type="hidden" name="ccPriceMobo" value='<? echo "$ccPriceMobo"; ?>'>
        <input type="hidden" name="ccCheckGpu" value='<? echo "$ccCheckGpu"; ?>'>
        <input type="hidden" name="ccPriceGpu" value='<? echo "$ccPriceGpu"; ?>'>
        <input type="hidden" name="ccCheckCpu" value='<? echo "$ccCheckCpu"; ?>'>
        <input type="hidden" name="ccPriceCpu" value='<? echo "$ccPriceCpu"; ?>'>
        <input type="hidden" name="ccCheckPsu" value='<? echo "$ccCheckPsu"; ?>'>
        <input type="hidden" name="ccPricePsu" value='<? echo "$ccPricePsu"; ?>'>
        <input type="hidden" name="ccCheckHdd" value='<? echo "$ccCheckHdd"; ?>'>
        <input type="hidden" name="ccPriceHdd" value='<? echo "$ccPriceHdd"; ?>'>
        <input type="hidden" name="ccCheckCool" value='<? echo "$ccCheckCool"; ?>'>
        <input type="hidden" name="ccPriceCool" value='<? echo "$ccPriceCool"; ?>'>
        <input type="hidden" name="ccCheckOther" value='<? echo "$ccCheckOther"; ?>'>
        <input type="hidden" name="ccValueOther" value='<? echo "$ccValueOther"; ?>'>

        <input type="submit" value="Skriv Ut">
    </form>

</td>

<?php
        echo "</tr>";

    }

    mysqli_free_result($result);
    
}
?>