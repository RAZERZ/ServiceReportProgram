<!DOCTYPE HTML>

<html>

<div id="container">

    <div id="header">
        <head>

            <title>Sista steget...</title>
            <link rel="stylesheet" type="text/css" href="redirStylesheet.css" media="all">

        </head>
    </div>

    <div id="body">
        <body>

        <center><img src="http://www.data-butiken.com/public/img/user/databutikenlogo019.png" style="margin-top: -4%;"></center>

        <p class="Init-header" style="font-size:20px;"><b><u>Servicerapport</u></b></p>

        <table class="Service-nummer" border="2">
            <tr>
                <th>Service nummer:</th>
            </tr>
            <tr>
                <td>
                    <?php

                    error_reporting(E_ALL & ~E_NOTICE);

                    $serviceNummer = trim($_POST['serviceNummer']);
                    echo $serviceNummer;
                    ?>
                </td>
            </tr>
        </table>

        <table class="Date" border="2" align="right">
            <tr>
                <th>Datum</th>
            </tr>
            <tr>
                <td><?php echo date("Y-m-d"); ?></td>
            </tr>
        </table>

        <table class="Reparator" border="2">
            <tr>
                <th>Ansvarig Reparatör</th>
            </tr>
            <tr>
                <td>
                    <?php
                    if(isset($_POST['repairName'])) {
                        $repairName = trim($_POST['repairName']);

                        if(strlen($repairName) > 0) {
                            echo "$repairName";
                        }
                    }
                    ?>
                </td>

            </tr>
        </table>

        <table class="Kundens-uppgifter" border="2" align="right">
            <tr>
                <th>Kundens namn:</th>
                <th>Adress:</th>
                <th>Mail:</th>
                <th>Telefon:</th>
            </tr>
            <tr>
                <?php
                if(isset($_POST['kundensNamn'])) {
                    $kundensNamn = trim($_POST['kundensNamn']);

                    if(strlen($kundensNamn) > 0) {
                        ?>
                        <td>
                            <?php echo "$kundensNamn"; ?>
                        </td>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['kundensAdress'])) {
                    $kundensAdress = trim($_POST['kundensAdress']);

                    if(strlen($kundensAdress) > 0) {
                        ?>
                        <td>
                            <?php echo "$kundensAdress"; ?>
                        </td>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['kundensMail'])) {
                    $kundensMail = trim($_POST['kundensMail']);

                    if(strlen($kundensMail) > 0) {
                        ?>
                        <td>
                            <?php echo "$kundensMail"; ?>
                        </td>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['kundensNummer'])){
                    $kundensNummer = trim($_POST['kundensNummer']);

                    if(strlen($kundensNummer) > 0) {
                        ?>
                        <td>
                            <?php echo "$kundensNummer"; ?>
                        </td>
                        <?php
                    }
                }
                ?>
            </tr>
        </table>


        <table class="Defect-Area" border="2">
            <tr>
                <th>Problemet finns i:</th>
                <th>Specifikt i:</th>
            </tr>
            <tr>
                <?php
                if(isset($_POST['daCheckMobo'])) {
                    $daCheckMobo = trim($_POST['daCheckMobo']);

                    if(($daCheckMobo) > 0) {
                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Moderkortet
                        </td>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['daErrMobo'])) {
                    $daErrMobo = trim($_POST['daErrMobo']);

                    if(strlen($daErrMobo) > 0) {
                        ?>
                        <td>
                            <?php echo "Felbeskrivning: " . "$daErrMobo"; ?>
                        </td>
                        <?php
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                if(isset($_POST['daCheckGpu'])) {
                    $daCheckGpu = trim($_POST['daCheckGpu']);

                    if(($daCheckGpu) > 0) {
                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Grafikkortert
                        </td>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['daErrGpu'])) {
                    $daErrGpu = trim($_POST['daErrGpu']);

                    if(strlen($daErrGpu) > 0) {
                        ?>
                        <td>
                            <?php echo "Felbeskrivning: " . "$daErrGpu"; ?>
                        </td>
                        <?php
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                if(isset($_POST['daCheckCpu'])) {
                    $daCheckCpu = trim($_POST['daCheckCpu']);

                    if(($daCheckCpu) > 0) {
                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Processorn
                        </td>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['daErrCpu'])) {
                    $daErrCpu = trim($_POST['daErrCpu']);

                    if(strlen($daErrCpu) > 0) {
                        ?>
                        <td>
                            <?php echo "Felbeskrivning: " . "$daErrCpu"; ?>
                        </td>
                        <?php
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                if(isset($_POST['daCheckPsu'])) {
                    $daCheckPsu = trim($_POST['daCheckPsu']);

                    if(($daCheckPsu) > 0) {
                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Nätaggregat
                        </td>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['daErrPsu'])) {
                    $daErrPsu = trim($_POST['daErrPsu']);

                    if(strlen($daErrPsu) > 0) {
                        ?>
                        <td>
                            <?php echo "Felbeskrivning: " . "$daErrPsu"; ?>
                        </td>
                        <?php
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                if(isset($_POST['daCheckHdd'])) {
                    $daCheckHdd = trim($_POST['daCheckHdd']);

                    if(($daCheckHdd) > 0) {
                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Hårddisk
                        </td>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['daErrHdd'])) {
                    $daErrHdd = trim($_POST['daErrHdd']);

                    if(strlen($daErrHdd) > 0) {
                        ?>
                        <td>
                            <?php echo "Felbeskrivning: " . "$daErrHdd"; ?>
                        </td>
                        <?php
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                if(isset($_POST['daCheckCool'])) {
                    $daCheckCool = trim($_POST['daCheckCool']);

                    if(($daCheckCool) > 0) {
                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Kylaren
                        </td>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['daErrCool'])) {
                    $daErrCool = trim($_POST['daErrCool']);

                    if(strlen($daErrCool) > 0) {
                        ?>
                        <td>
                            <?php echo "Felbeskrivning: " . "$daErrCool"; ?>
                        </td>
                        <?php
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                if(isset($_POST['daCheckOther'])) {
                $daCheckOther = trim($_POST['daCheckOther']);

                if(($daCheckOther) > 0) {
                ?>
                <td>
                    <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Annat:
                    <?php
                    }
                    }

                    if(isset($_POST['daOtherValue'])) {
                    $daOtherValue = trim($_POST['daOtherValue']);

                    if(strlen($daOtherValue) > 0) {
                    echo "$daOtherValue";
                    ?>
                </td>
            <?php
            }
            }
            ?>
                <?php
                if(isset($_POST['daErrOther'])) {
                    $daErrOther = trim($_POST['daErrOther']);

                    if(strlen($daErrOther) > 0) {
                        ?>
                        <td>
                            <?php echo "Felbeskrivning: " . "$daErrOther"; ?>
                        </td>
                        <?php
                    }
                }
                ?>
            </tr>
        </table>

        <table class="Customer-Choice"  border="2">
            <tr>
                <th>Reparatörens åtgärd:</th>
                <th>Pris:</th>
            </tr>
            <tr>
                <?php
                if(isset($_POST['ccCheckSearch'])) {
                    $ccCheckSearch = trim($_POST['ccCheckSearch']);

                    if (($ccCheckSearch) > 0) {
                        $ccPriceSearch = "575";

                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Felsökning
                        </td>
                        <td>
                            575kr
                        </td>
                        <?php
                    }
                }

                ?>
            </tr>
            <tr>
                <?php
                if(isset($_POST['ccCheckMobo'])) {
                    $ccCheckMobo = trim($_POST['ccCheckMobo']);

                    if(($ccCheckMobo) > 0) {
                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Moderkortet
                        </td>
                        <?php

                    }
                }
                ?>
                <?php
                if(isset($_POST['ccPriceMobo'])) {
                    $ccPriceMobo = trim($_POST['ccPriceMobo']);

                    if(($ccPriceMobo) > 0) {
                        ?>
                        <td>
                            <?php echo "Inkl Moms: " . "$ccPriceMobo" . "kr" . "<br>";
                            echo "Exkl Moms: " . 0.75 * $ccPriceMobo . "kr";
                            ?>
                        </td>
                        <?php
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                if(isset($_POST['ccCheckGpu'])) {
                    $ccCheckGpu = trim($_POST['ccCheckGpu']);

                    if(($ccCheckGpu) > 0) {
                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Grafikkortet
                        </td>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['ccPriceGpu'])) {
                    $ccPriceGpu = trim($_POST['ccPriceGpu']);

                    if(($ccPriceGpu) > 0) {
                        ?>
                        <td>
                            <?php echo "Inkl Moms: " . "$ccPriceGpu" . "kr" . "<br>";
                            echo "Exkl Moms: " . 0.75 * $ccPriceGpu . "kr";
                            ?>
                        </td>
                        <?php
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                if(isset($_POST['ccCheckCpu'])) {
                    $ccCheckCpu = trim($_POST['ccCheckCpu']);

                    if(($ccCheckCpu) > 0) {
                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Processorn
                        </td>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['ccPriceCpu'])) {
                    $ccPriceCpu = trim($_POST['ccPriceCpu']);

                    if(($ccPriceCpu) > 0) {
                        ?>
                        <td>
                            <?php echo "Inkl Moms: " . "$ccPriceCpu" . "kr" . "<br>";
                            echo "Exkl Moms: " . 0.75 * $ccPriceCpu . "kr";
                            ?>
                        </td>
                        <?php
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                if(isset($_POST['ccCheckPsu'])) {
                    $ccCheckPsu = trim($_POST['ccCheckPsu']);

                    if(($ccCheckPsu) > 0) {
                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Nätaggregat
                        </td>
                        <?php
                    }
                }

                ?>
                <?php
                if(isset($_POST['ccPricePsu'])) {
                    $ccPricePsu = trim($_POST['ccPricePsu']);

                    if(($ccPricePsu) > 0) {
                        ?>
                        <td>
                            <?php echo "Inkl Moms: " . "$ccPricePsu" . "kr" . "<br>";
                            echo "Exkl Moms: " . 0.75 * $ccPricePsu . "kr";
                            ?>
                        </td>
                        <?php
                    }
                }

                ?>
            </tr>
            <tr>
                <?php
                if(isset($_POST['ccCheckHdd'])) {
                    $ccCheckHdd = trim($_POST['ccCheckHdd']);

                    if(($ccCheckHdd) > 0) {
                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Hårddisk
                        </td>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['ccPriceHdd'])) {
                    $ccPriceHdd = trim($_POST['ccPriceHdd']);

                    if(($ccPriceHdd) > 0) {
                        ?>
                        <td>
                            <?php echo "Inkl Moms: " . "$ccPriceHdd" . "kr" . "<br>";
                            echo "Exkl Moms: " . 0.75* $ccPriceHdd . "kr";
                            ?>
                        </td>
                        <?php
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                if(isset($_POST['ccCheckCool'])) {
                    $ccCheckCool = trim($_POST['ccCheckCool']);

                    if(($ccCheckCool) > 0) {
                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Kylaren
                        </td>
                        <?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['ccPriceCool'])) {
                    $ccPriceCool = trim($_POST['ccPriceCool']);

                    if(($ccPriceCool) > 0) {
                        ?>
                        <td>
                            <?php echo "Inkl Moms: " . "$ccPriceCool" . "kr" . "<br>";
                            echo "Exkl Moms: " . 0.75 * $ccPriceCool . "kr";
                            ?>
                        </td>
                        <?php
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                if(isset($_POST['ccCheckOther'])) {
                    $ccCheckOther = trim($_POST['ccCheckOther']);
                    $ccValueOther = trim($_POST['ccValueOther']);

                    if(($ccCheckOther) > 0) {
                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> <?php echo "Annat: " . "$daOtherValue"; ?>
                        </td>
                        <?php
                    }
                }
                ?>

                <td>
                    <?php echo "Inkl Moms: " . "$ccValueOther" . "kr" . "<br>";
                    echo "Exkl Moms: " . 0.75 * $ccValueOther . "kr";
                    ?>
                </td>

            </tr>
            <tr>
                <?php
                $TotalPrice = $ccPriceSearch + $ccValueOther + $ccPriceCool + $ccPriceHdd + $ccPricePsu + $ccPriceCpu + $ccPriceGpu + $ccPriceMobo;
                $exTotalPrice = $ccPriceSearch + (0.75 * $ccPriceOther) + (0.75 * $ccPriceCool) + (0.75 * $ccPriceHdd) + (0.75 * $ccPricePsu) + (0.75 * $ccPriceCpu) + (0.75 * $ccPriceGpu) + (0.75 * $ccPriceMobo);
                ?>
                <td>
                    <?php
                    echo "<hr><br><br><b>Att betala: </b>";
                    ?>
                </td>
                <td>
                    <?php
                    echo "<hr>" . "Inkl Moms: " . "$TotalPrice" . "kr" . "<br><br>";
                    echo "Exkl Moms: " . "$exTotalPrice" . "kr";
                    ?>
                </td>
            </tr>
        </table>

        <div class="signatures">

            <table class="Customer-Signature" border="2">
                <tr>
                    <th>Kundens Signatur:</th>
                </tr>
                <tr>
                    <td><br><br></td>
                </tr>
            </table>

            <table class="Repair-Signature" border="2">
                <tr>
                    <th>Reparatörens Signatur</th>
                </tr>
                <tr>
                    <td><br><br></td>
                </tr>
            </table>

        </body>
    </div>

</div>

<button id="printButton" style="float:right; margin-top: 1%; margin-bottom: 1%;" onclick="window.print();">Skriv Ut</button>

<div id="footer">
    <footer>

        <hr style="margin-top: 5%;">

        <table class="Info" style="width:100%;">
            <tr>
                <th style="font-size:10px; width: 10%;">Adress</th>
                <th style="font-size:10px; width: 10%;">Telefon</th>
                <th style="font-size:10px; width: 10%;">Postgiro</th>
                <th style="font-size:10px; width: 10%;">Internet</th>
            </tr>
            <tr>
                <td style="font-size:10px;">Frödingshöjd 20</td>
                <td style="font-size:10px;">054-690000</td>
                <td style="font-size: 10px;">1222935-7</td>
                <td style="font-size: 10px;">Sida = www.data-butiken.com<br>Mail = info@data-butiken.com</td>
            </tr>
            <tr>
                <td style="font-size:10px;">65637</td>
                <td style="font-size:10px;">054-7717366</td>
                <td style="font-size:10px;">5297-4581</td>
                <td style="font-size: 10px;">MOMSREGNR = SE630311523901</td>
            </tr>
        </table>

        <center><p style="font-size: 10px;">INNEHAR F SKATTEBEVIS</p></center>
        <p style="font-size:13px; text-align: left;">Skapad av Rami Abou Zahra</p>
    </footer>
</div>

</div>

</html>