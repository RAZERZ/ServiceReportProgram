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

        echo "</tr>";

    }

    echo "</table></center>";

    mysqli_free_result($result);
    
}
?>