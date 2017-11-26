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

    while ($row = mysqli_fetch_assoc($result)) { ?>

            <tr>
                <td><? print_r($row['serviceNummer']); ?></td>
                <td><? print_r($row['repairName']); ?></td>
                <td><? print_r($row['kNamn']); ?></td>
                <td><? print_r($row['kAdress']); ?></td>
                <td><? print_r($row['kMail']); ?></td>
                <td><? print_r($row['kNummer']); ?></td>
                <td><?

                    if($row['daCheckMobo'] > 0) { ?>
                        <ul><li>Moderkort</li></ul>

                        <?php
                    }

                    if($row['daCheckGpu'] > 0) { ?>
                        <ul><li>Grafikkort</li></ul>

                        <?php
                    }

                    if($row['daCheckCpu'] > 0) { ?>
                        <ul><li>Processorn</li></ul>

                        <?php
                    }

                    if($row['daCheckPsu'] > 0) { ?>
                        <ul><li>Nätaggregat</li></ul>

                        <?php
                    }

                    if($row['daCheckHdd'] > 0) { ?>
                        <ul><li>Hårddisk</li></ul>

                        <?php
                    }

                    if($row['daCheckCool'] > 0) { ?>
                        <ul><li>Kylaren</li></ul>

                        <?php
                    }

                    if($row['daCheckOther'] > 0) { ?>
                        <ul><li><? print_r($row['daOtherValue']); ?></li></ul>

                        <?php
                    }
                    ?></td>
                <td><?

                    if(strlen($row['daErrMobo']) > 0) { ?>
                        <ul><li><? print_r($row['daErrMobo']); ?></li></ul>

                        <?php
                    }

                    if(strlen($row['daErrGpu']) > 0) { ?>
                        <ul><li><? print_r($row['daErrGpu']); ?></li></ul>

                        <?php
                    }

                    if(strlen($row['daErrCpu']) > 0) { ?>
                        <ul><li><? print_r($row['daErrCpu']); ?></li></ul>

                        <?php
                    }

                    if(strlen($row['daErrPsu']) > 0) { ?>
                        <ul><li><? print_r($row['daErrPsu']); ?></li></ul>

                        <?php
                    }

                    if(strlen($row['daErrHdd']) > 0) { ?>
                        <ul><li><? print_r($row['daErrHdd']); ?></li></ul>

                        <?php
                    }

                    if(strlen($row['daErrCool']) > 0) { ?>
                        <ul><li><? print_r($row['daErrCool']); ?></li></ul>

                        <?php
                    }

                    if(strlen($row['daErrOther']) > 0) { ?>
                        <ul><li><? print_r($row['daErrOther']); ?></li></ul>

                        <?php
                    }

                    ?>
                </td>
                <td><?

                    if($row['ccCheckMobo'] > 0) { ?>
                        <ul><li>Moderkort</li></ul>

                        <?php
                    }

                    if($row['ccCheckGpu'] > 0) { ?>
                        <ul><li>Grafikkort</li></ul>

                        <?php
                    }

                    if($row['ccCheckCpu'] > 0) { ?>
                        <ul><li>Processorn</li></ul>

                        <?php
                    }

                    if($row['ccCheckPsu'] > 0) { ?>
                        <ul><li>Nätaggregat</li></ul>

                        <?php
                    }

                    if($row['ccCheckHdd'] > 0) { ?>
                        <ul><li>Hårddisk</li></ul>

                        <?php
                    }

                    if($row['ccCheckCool'] > 0) { ?>
                        <ul><li>Kylaren</li></ul>

                        <?php
                    }

                    if($row['ccCheckOther'] > 0) { ?>
                        <ul><li><? print_r($row['daOtherValue']); ?></li></ul>

                        <?php
                    }

                    ?>
                </td>
                <td><?

                    if($row['ccPriceMobo'] > 0) { ?>
                        <ul><li><? print_r($row['ccPriceMobo']); ?>kr</li></ul>

                        <?php
                    }

                    if($row['ccPriceGpu'] > 0) { ?>
                        <ul><li><? print_r($row['ccPriceGpu']); ?>kr</li></ul>

                        <?php
                    }

                    if($row['ccPriceCpu'] > 0) { ?>
                        <ul><li><? print_r($row['ccPriceCpu']); ?>kr</li></ul>

                        <?php
                    }

                    if($row['ccPricePsu'] > 0) { ?>
                        <ul><li><? print_r($row['ccPricePsu']); ?>kr</li></ul>

                        <?php
                    }

                    if($row['ccPriceHdd'] > 0) { ?>
                        <ul><li><? print_r($row['ccPriceHdd']); ?>kr</li></ul>

                        <?php
                    }

                    if($row['ccPriceCool'] > 0) { ?>
                        <ul><li><? print_r($row['ccPriceCool']); ?>kr</li></ul>

                        <?php
                    }

                    if($row['ccValueOther'] > 0) { ?>
                        <ul><li><? print_r($row['ccValueOther']); ?>kr</li></ul>

                        <?php
                    }

                    ?>
                </td>
                <td><? print_r($row['totalPrice']); ?>kr</td>
            </tr>
<?php

    }

?>

    </table></center>

<?php

    mysqli_free_result($result);
    
}
?>