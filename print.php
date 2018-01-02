<?php
error_reporting(E_ALL & ~E_NOTICE);

?>
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

        <center><img src="http://www.data-butiken.com/public/img/user/originaldatabutikenlogo.png" style="margin-top: -4%;"></center>

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
                <td><?php echo date("Y-m-d"); ?><br><br></td>
            </tr>
        </table>

        <img src="https://www.ehandelscertifiering.se/lv5/logotyp.php?size=75&bg=&lang=sv&url=www.data-butiken.com" style="position: absolute; margin-left: 28%; margin-top: -7%;">
        <img src="http://www.data-butiken.com/public/img/user/qrcode.39689118.png" style="position: absolute; margin-left: 63%; margin-top: -6%; width: 7%;">

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
                <th>Pris Inkl Moms:</th>
                <th>Exkl Moms:</th>
            </tr>
            <tr>
                <?php
                if(isset($_POST['ccCheckSearch'])) {
                    $ccCheckSearch = trim($_POST['ccCheckSearch']);

                    if (($ccCheckSearch) > 0) {

                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Felsökning
                        </td>
                        <td>
                            <?php
                            if(($_POST['ccCheckMac']) > 0) {
                                $ccCheckMac = trim($_POST['ccCheckMac']);
                                $ccPriceSearch = 899; ?>
                                <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Mac
                                <?php
                                echo $ccPriceSearch . "kr";
                            }
                            if(($_POST['ccCheckPC']) > 0) {
                                $ccCheckPC = $_POST['ccCheckPC'];
                                $ccPriceSearch = 575; ?>
                                <input type="checkbox" <?php echo 'checked="checked"'; ?> /> PC
                                <?php
                                echo $ccPriceSearch . "kr";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if(($_POST['ccCheckMac']) > 0) {
                                $ccCheckMac = trim($_POST['ccCheckMac']);
                                $ccPriceSearch = 899; ?>
                                <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Mac
                                <?php
                                echo $ccPriceSearch . "kr";
                            }
                            if(($_POST['ccCheckPC']) > 0) {
                                $ccCheckPC = $_POST['ccCheckPC'];
                                $ccPriceSearch = 575; ?>
                                <input type="checkbox" <?php echo 'checked="checked"'; ?> /> PC
                                <?php
                                echo $ccPriceSearch . "kr";
                            }
                            ?>
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
                        <td><?php echo 0.75 * $ccPriceMobo . "kr"; ?>
                        <td>
                            <?php echo "$ccPriceMobo" . "kr" . "<br>"; ?>
                        </td>
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
                        <td><?php echo 0.75 * $ccPriceGpu . "kr"; ?></td>
                        <td>
                        <?php echo "$ccPriceGpu" . "kr"; ?>
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
                        <td><?php echo 0.75 * $ccPriceCpu . "kr"; ?></td>
                        <td>
                        <?php echo "$ccPriceCpu" . "kr"; ?>
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
                        <td><?php echo 0.75 * $ccPricePsu . "kr"; ?></td>
                        <td>
                        <?php echo "$ccPricePsu" . "kr"; ?>
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
                        <td><?php echo 0.75* $ccPriceHdd . "kr"; ?></td>
                        <td>
                        <?php echo "$ccPriceHdd" . "kr"; ?>
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
                        <td><?php echo 0.75 * $ccPriceCool . "kr"; ?></td>
                        <td>
                        <?php echo "$ccPriceCool" . "kr"; ?>
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
                    $ccPriceOther = trim($_POST['ccPriceOther']);

                    if(($ccPriceOther) > 0) {
                        ?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> <?php echo "Annat: " . "$ccValueOther"; ?>
                        </td>
                <td>
                    <?php echo "$ccPriceOther" . "kr"; ?>
                </td>
                <td><?php echo 0.75 * $ccPriceOther . "kr"; ?></td>
                <?php
                    }
                }
                ?>

            </tr>
            <tr>
                <?php
                $TotalPrice = $ccPriceSearch + $ccPriceOther + $ccPriceCool + $ccPriceHdd + $ccPricePsu + $ccPriceCpu + $ccPriceGpu + $ccPriceMobo;
                $exTotalPrice = $ccPriceSearch + (0.75 * $ccPriceOther) + (0.75 * $ccPriceCool) + (0.75 * $ccPriceHdd) + (0.75 * $ccPricePsu) + (0.75 * $ccPriceCpu) + (0.75 * $ccPriceGpu) + (0.75 * $ccPriceMobo);
                ?>
                <td>
                    <?php
                    echo "<hr><b>Att betala: </b>";
                    ?>
                </td>
                <td><?php echo "<hr>" . "Inkl Moms: " . "$TotalPrice" . "kr"; ?></td>
                <td><?php echo "<hr>" . "Exkl Moms: " . "$exTotalPrice" . "kr"; ?></td>
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

    <table class="comment" border="2">
        <tr>
            <th>Kommentar:</th>
        </tr>
        <tr>
            <td><br><br></td>
        </tr>
    </table>

</div>

<button id="printButton" style="float:right; margin-top: 1%; margin-bottom: 1%;" onclick="window.print();">Skriv Ut</button>

<div id="footer">
    <footer>

        <hr style="margin-top: 5%;">

        <center><table border="2" class="Info" style="width:100%; margin-bottom: -1%;">
                <tr>
                    <td style="font-size:12px; width: 10%; border: 0px solid #ffffff;">Adress<br>Frödingshöjd 20<br>65637 Karlstad<br><br><br><br></td>
                    <td style="font-size:12px; width: 10%; border: 0px solid #ffffff;">Telefon<br>054-690000<br>Fax<br>054-691450<br><br><br></td>
                    <td style="font-size:12px; width: 10%; border: 0px solid #ffffff;">Postgiro<br>1222935-7<br>Bankgiro<br>5297-4581<br>Organisationsnr<br>19630311-5239<br><br></td>
                    <td style="font-size:12px; width: 10%; border: 0px solid #ffffff;">Internet<br>www.data-butiken.com<br>E-post<br>info@data-butiken.com<br>Momsreg.nr<br>SE630311523901<br>Innehar F-skattebevis</td>
                </tr>
            </table></center>

        <p style="font-size:10px; text-align: left;">Skapad av Rami Abou Zahra</p>
    </footer>

</div>

</div>

</html>