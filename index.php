<!DOCTYPE html>

<html>
    
    <head>
        
        <title>Service Rapport Program</title>
        <link rel="stylesheet" type="text/css" href="Stylesheet.css" media="all">
        
    </head>
    
    <body>
        
        <!-- Top items -->
        
        <center><img src="http://www.data-butiken.com/public/img/user/originaldatabutikenlogo.png" style="margin-top: -1%;"></center>
        
        <table class="Date" border="1" align="right">
            <tr>
                <th>Datum</th>
            </tr>
            <tr>
                <td>
                    <?php
                        echo date("Y-m-d");
                    ?>
                </td>
            </tr>
        </table>

        <img src="https://www.ehandelscertifiering.se/lv5/logotyp.php?size=75&bg=&lang=sv&url=www.data-butiken.com" style="position: absolute; margin-left: 64%; margin-top: 0%;">
        <img src="http://www.data-butiken.com/public/img/user/qrcode.39689118.png" style="position: absolute; margin-left: 63%; margin-top: 7%; width: 7%;">
        
        <p class="Init-header" style=font-size:20px;><b><u>Servicerapport</u></b></p>
        
        <form method="post" action="redir.php">
        
        <table class="Kundens-uppgifter" border="1" align="left">
            <tr>
                <th>Kundens namn:</th>
                <th>Adress:</th>
                <th>Mail:</th>
                <th>Telefon:</th>
            </tr>
            <tr>
                <td>
                    <input class="KU-input" type="text" name="Kundens-namn" />
                </td>
                <td>
                    <input type="text" name="Kundens-adress">
                </td>
                <td>
                    <input type="email" name="Kundens-mail">
                </td>
                <td>
                    <input type="number" name="Kundens-nummer">
                </td>
            </tr>
        </table>
                
        <table class="Reparator" border="1" align="right">
            <tr>
                <th>Ansvarig Reparatör</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Reparatorens-namn" />
                </td>
            </tr>
        </table>
        
        <table class="Defect-Area" border="1">
            <tr>
                <th>Problemet finns i:</th>
                <th>Specifikt i:</th>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="DA-check-mobo">Moderkortet
                </td>
                <td>Felbeskrivning: <input type="text" name="DA-err-mobo"></td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="DA-check-gpu">Grafikkortet
                </td>
                <td>Felbeskrivning: <input type="text" name="DA-err-gpu"></td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="DA-check-cpu">Processorn
                </td>
                <td>Felbeskrivning: <input type="text" name="DA-err-cpu"></td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="DA-check-psu">Nätaggregat
                </td>
                <td>Felbeskrivning: <input type="text" name="DA-err-psu"></td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="DA-check-hdd">Hårddisk
                </td>
                <td>Felbeskrivning: <input type="text" name="DA-err-hdd"></td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="DA-check-cool">Kylaren
                </td>
                <td>Felbeskrivning: <input type="text" name="DA-err-cool"></td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="DA-check-other">Annat: <input type="text" name="DA-other-value">
                </td>
                <td>Felbeskrivning: <input type="text" name="DA-err-other"></td>
            </tr>
        </table>
                
        <table class="Customer-Choice" border="1">
            <tr>
                <th>Reparatörens åtgärd:</th>
                <th>Pris:</th>
            </tr>
            <tr>
                <td><input type="checkbox" name="CC-check-search">Felsökning</td>
                <td>
                    <input type="checkbox" name="CC-check-Mac">Mac: 899kr <br>
                    <input type="checkbox" name="CC-check-PC">Pc: 575kr
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="CC-check-mobo">Moderkortet
                </td>
                <td>
                    <input type="number" name="CC-price-mobo">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="CC-check-gpu">Grafikkortet
                </td>
                <td>
                    <input type="number" name="CC-price-gpu">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="CC-check-cpu">Processorn
                </td>
                <td>
                    <input type="number" name="CC-price-cpu">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="CC-check-psu">Nätaggregat
                </td>
                <td>
                    <input type="number" name="CC-price-psu">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="CC-check-hdd">Hårddisk
                </td>
                <td>
                    <input type="number" name="CC-price-hdd">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="CC-check-cool">Kylaren
                </td>
                <td>
                    <input type="number" name="CC-price-cool">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="CC-check-other">Annat: <input type="text" name="CC-value-other">
                </td>
                <td>
                    <input type="number" name="CC-price-other">
                </td>
            </tr>
        </table>
            
            <input type="submit" value="Skicka" style="float: right; margin-bottom: 1%;">
            <br>
            </form>

    </body>
    
    <footer>
</html>