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
        
        <center><img src="http://www.data-butiken.com/public/img/user/databutikenlogo019.png"></center>
        
        <p class="Init-header" style="font-size:20px;"><b><u>Servicerapport</u></b></p>

        <table class="Service-nummer" border="1">
            <tr>
                <th>Service nummer:</th>
            </tr>
            <tr>
                <td>
                    <?php
                    $kundensNummer = trim($_POST['Kundens-nummer']);
                    echo "DB-" . date("ymd") . substr($kundensNummer, -2);
                    ?>
                </td>
            </tr>
        </table>
        
        <table class="Date" border="1" align="right">
            <tr>
                <th>Datum</th>
            </tr>
            <tr>
                <td><?php echo date("Y-m-d"); ?></td>
            </tr>
        </table>
        
        <table class="Reparator" border="1">
            <tr>
                <th>Ansvarig Reparatör</th>
            </tr>
            <tr>
                <td>
                    <?php
                    if(isset($_POST['Reparatorens-namn'])) {
                        $repairName = trim($_POST['Reparatorens-namn']);
                        
                        if(strlen($repairName) > 0) {
                            echo "$repairName";
                        }
                    }
                    ?>
                </td>

            </tr>
        </table>
        
        <table class="Kundens-uppgifter" border="1" align="right">
            <tr>
                <th>Kundens namn:</th>
                <th>Adress:</th>
                <th>Mail:</th>
                <th>Telefon:</th>
            </tr>
            <tr>
                <?php
                if(isset($_POST['Kundens-namn'])) {
                    $kundensNamn = trim($_POST['Kundens-namn']);
                    
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
                if(isset($_POST['Kundens-adress'])) {
                    $kundensAdress = trim($_POST['Kundens-adress']);
                    
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
                if(isset($_POST['Kundens-mail'])) {
                    $kundensMail = trim($_POST['Kundens-mail']);
                    
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
                if(isset($_POST['Kundens-nummer'])){
                    $kundensNummer = trim($_POST['Kundens-nummer']);
                    
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
        
        
        <table class="Defect-Area" border="1">
            <tr>
                <th>Problemet finns i:</th>
                <th>Specifikt i:</th>
            </tr>
            <tr>
                    <?php
                    if(isset($_POST['DA-check-mobo'])) {
                        $daCheckMobo = trim($_POST['DA-check-mobo']);
                        
                        if(strlen($daCheckMobo) > 0) {
?>
                            <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Moderkortet
                            </td>
<?php
                        }
                    }
                    ?>
                    <?php
                    if(isset($_POST['DA-err-mobo'])) {
                        $daErrMobo = trim($_POST['DA-err-mobo']);
                        
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
                    if(isset($_POST['DA-check-gpu'])) {
                        $daCheckGpu = trim($_POST['DA-check-gpu']);
                        
                        if(strlen($daCheckGpu) > 0) {
?>
                            <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Grafikkortert
                            </td>
<?php
                        }
                    }
                    ?>
                    <?php
                    if(isset($_POST['DA-err-gpu'])) {
                        $daErrGpu = trim($_POST['DA-err-gpu']);
                        
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
                    if(isset($_POST['DA-check-cpu'])) {
                        $daCheckCpu = trim($_POST['DA-check-cpu']);
                        
                        if(strlen($daCheckCpu) > 0) {
?>
                            <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Processorn
                            </td>
<?php
                        }
                    }
                    ?>
                    <?php
                    if(isset($_POST['DA-err-cpu'])) {
                        $daErrCpu = trim($_POST['DA-err-cpu']);
                        
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
                    if(isset($_POST['DA-check-psu'])) {
                        $daCheckPsu = trim($_POST['DA-check-psu']);
                        
                        if(strlen($daCheckPsu) > 0) {
?>
                            <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Nätaggregat
                            </td>
<?php
                        }
                    }
                    ?>
                    <?php
                    if(isset($_POST['DA-err-psu'])) {
                        $daErrPsu = trim($_POST['DA-err-psu']);
                        
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
                    if(isset($_POST['DA-check-hdd'])) {
                        $daCheckHdd = trim($_POST['DA-check-hdd']);
                        
                        if(strlen($daCheckHdd) > 0) {
?>
                            <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Hårddisk
                            </td>
<?php
                        }
                    }
                    ?>
                    <?php
                    if(isset($_POST['DA-err-hdd'])) {
                        $daErrHdd = trim($_POST['DA-err-hdd']);
                        
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
                    if(isset($_POST['DA-check-cool'])) {
                        $daCheckCool = trim($_POST['DA-check-cool']);
                        
                        if(strlen($daCheckCool) > 0) {
?>
                            <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Kylaren
                            </td>
<?php
                        }
                    }
                    ?>
                    <?php
                    if(isset($_POST['DA-err-cool'])) {
                        $daErrCool = trim($_POST['DA-err-cool']);
                        
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
                    if(isset($_POST['DA-check-other'])) {
                        $daCheckOther = trim($_POST['DA-check-other']);
                        
                        if(strlen($daCheckOther) > 0) {
?>
                            <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Annat:
<?php
                        }
                    }
                    
                    if(isset($_POST['DA-other-value'])) {
                        $daOtherValue = trim($_POST['DA-other-value']);
                        
                        if(strlen($daOtherValue) > 0) {
                            echo "$daOtherValue";
?>
                            </td>
<?php
                        }
                    }
                    ?>
                    <?php
                    if(isset($_POST['DA-err-other'])) {
                        $daErrOther = trim($_POST['DA-err-other']);
                        
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
        
        <table class="Customer-Choice"  border="1">
            <tr>
                <th>Reparatörens åtgärd:</th>
                <th>Pris:</th>
            </tr>
            <tr>                    <?php
                    if(isset($_POST['CC-check-mobo'])) {
                        $ccCheckMobo = trim($_POST['CC-check-mobo']);
                        
                        if(strlen($ccCheckMobo) > 0) {
?>
                            <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Moderkortet
                            </td>
<?php
                                   
                        }
                    }
                    ?>
                <?php
                if(isset($_POST['CC-price-mobo'])) {
                    $ccPriceMobo = trim($_POST['CC-price-mobo']);
                    
                    if(strlen($ccPriceMobo) > 0) {
?>
                        <td>
                            <?php echo "$ccPriceMobo" . "kr"; ?>
                        </td>
<?php
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                if(isset($_POST['CC-check-gpu'])) {
                    $ccCheckGpu = trim($_POST['CC-check-gpu']);
                    
                    if(strlen($ccCheckGpu) > 0) {
?>
                        <td>
                            <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Grafikkortet
                        </td>
<?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['CC-price-gpu'])) {
                    $ccPriceGpu = trim($_POST['CC-price-gpu']);
                    
                    if(strlen($ccPriceGpu) > 0) {
?>
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
                if(isset($_POST['CC-check-cpu'])) {
                    $ccCheckCpu = trim($_POST['CC-check-cpu']);
                    
                    if(strlen($ccCheckCpu) > 0) {
?>
                    <td>
                        <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Processorn
                    </td>
<?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['CC-price-cpu'])) {
                    $ccPriceCpu = trim($_POST['CC-price-cpu']);
                    
                    if(strlen($ccPriceCpu) > 0) {
?>
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
                if(isset($_POST['CC-check-psu'])) {
                    $ccCheckPsu = trim($_POST['CC-check-psu']);
                    
                    if(strlen($ccCheckPsu) > 0) {
?>
                    <td>
                        <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Nätaggregat
                    </td>
<?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['CC-price-psu'])) {
                    $ccPricePsu = trim($_POST['CC-price-psu']);
                    
                    if(strlen($ccPricePsu) > 0) {
?>
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
                if(isset($_POST['CC-check-hdd'])) {
                    $ccCheckHdd = trim($_POST['CC-check-hdd']);
                    
                    if(strlen($ccCheckHdd) > 0) {
?>
                    <td>
                        <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Hårddisk
                    </td>
<?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['CC-price-hdd'])) {
                    $ccPriceHdd = trim($_POST['CC-price-hdd']);
                    
                    if(strlen($ccPriceHdd) > 0) {
?>
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
                if(isset($_POST['CC-check-cool'])) {
                    $ccCheckCool = trim($_POST['CC-check-cool']);
                    
                    if(strlen($ccCheckCool) > 0) {
?>
                    <td>
                        <input type="checkbox" <?php echo 'checked="checked"'; ?> /> Kylaren
                    </td>
<?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['CC-price-cool'])) {
                    $ccPriceCool = trim($_POST['CC-price-cool']);
                    
                    if(strlen($ccPriceCool) > 0) {
?>
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
                if(isset($_POST['CC-check-other'])) {
                    $ccCheckOther = trim($_POST['CC-check-other']);
                    $ccValueOther = trim($_POST['CC-value-other']);
                    
                    if(strlen($ccCheckOther) > 0) {
?>
                    <td>
                        <input type="checkbox" <?php echo 'checked="checked"'; ?> /> <?php echo "Annat: " . "$ccValueOther"; ?>
                    </td>
<?php
                    }
                }
                ?>
                <?php
                if(isset($_POST['CC-price-other'])) {
                    $ccPriceOther = trim($_POST['CC-price-other']);
                    
                    if(strlen($ccPriceOther) > 0) {
?>
                    <td>
                        <?php echo "$ccPriceOther" . "kr"; ?>
                    </td>
<?php
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                $InitPrice = 575;
                $TotalPrice = $InitPrice + $ccPriceOther + $ccPriceCool + $ccPriceHdd + $ccPricePsu + $ccPriceCpu + $ccPriceGpu + $ccPriceMobo;
                ?>
                <td>
                    <?php
                    echo "<hr><b>Att betala: </b>";
                    ?>
                </td>
                <td>
                    <?php
                    echo "<hr>" . "$TotalPrice" . "kr";
                    ?>
                </td>
            </tr>
        </table>
        
    </body>
        </div>
    
        <div id="footer">
        <footer>
        <hr>
            <button style="float: right;" onclick="skrivPrint()">Skriv Ut</button>
            <script>
                function skrivPrint() {
                    window.print();
                }
            </script>
        <center><p style="font-size:13px;">Skapad av Rami Abou Zahra</p></center>
    </footer>
        </div>
    
    </div>
        
</html>