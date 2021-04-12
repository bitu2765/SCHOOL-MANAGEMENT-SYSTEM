<?php

include("./connection_to_db.php");
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: ");
}
require("./fpdf/fpdf.php");
require_once __DIR__ . "/vendor/autoload.php";
$tem = '<link rel="stylesheet" href="./css/app.css">
<link href="./css/gapi.css" rel="stylesheet">
<link rel="stylesheet" href="./css/ui_d.css">
<table>
        <tbody>
            <tr>
                <td>
                    <img style="height: 100px;" src="./Exam/images/logo1.png">
                </td>
                <td style="width: 50px;" ></td>
                <td>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <div style="font-size: 14pt;margin-left:10px;">ઘી કેમ્બે એજ્યુકેશન સોસાયટી સંચાલિત​</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="font-size: 30pt;">શ્રી એસ.ઝેડ. વાઘેલા હાઇસ્કૂલ</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="font-size: 14pt;">બેઠક રોડ , ખંભાત-૩૮૮૬૨૦ , (જિ.આણંદ)</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>';

$sqlqu = "  SELECT * FROM employeemaster;";
$res = mysqli_query($conn, $sqlqu);

$stres = new \Mpdf\Mpdf([
    'default_font_size' => 15,
    'default_font' => 'ind_gu1_001'
]);
// $stres->AddPage('L', 'A4');
$stres->autoScriptToLang = true;
$stres->autoLangToFont = true;
$stres->header("ઘી કેમ્બે એજ્યુકેશન સોસાયટી સંચાલિત");
$stres->WriteHTML($tem);

// $slip->SetFont('Arial', '', 8);
// $slip->WriteHTML($cpdf);
// $stres->Output();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <link href="./css/gapi.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/ui_d.css">

    <title>Dashboard</title>
</head>

<body>
    <!-- <table style="width: 100 ;"></table> -->
    <!-- <div class="row">
        <div class="col-md-6">
            <img src="./Exam/images/logo1.png">
        </div>
        <div class="col-md-6">
            <div class="first fw-bolder">ઘી કેમ્બે એજ્યુકેશન સોસાયટી સંચાલિત​</div>

        </div>
    </div> -->
    <!-- <span class="mylogo">
    <img src="./Exam/images/logo1.png"></span>
<span class="myheadings">
    <div class="first fw-bolder">ઘી કેમ્બે એજ્યુકેશન સોસાયટી સંચાલિત​
    </div>
    <div class="secound fw-bold" style="font-size: 30pt;">શ્રી એસ.ઝેડ. વાઘેલા હાઇસ્કૂલ</div>
    <div class="third fw-bolder">બેઠક રોડ , ખંભાત-૩૮૮૬૨૦ , (જિ.આણંદ)</div>
</span> -->
    <table>
        <tbody>
            <tr>
                <td>
                    <img src="./Exam/images/logo1.png" style="height: 100px;">
                </td>
                <td></td>
                <td>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <div style="font-size: 10pt;margin-left:10px;">ઘી કેમ્બે એજ્યુકેશન સોસાયટી સંચાલિત​</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="font-size: 30pt;">શ્રી એસ.ઝેડ. વાઘેલા હાઇસ્કૂલ</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="font-size: 10pt;">બેઠક રોડ , ખંભાત-૩૮૮૬૨૦ , (જિ.આણંદ)</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td style="width: 300px;">
                    વિદ્યાર્થીનું નામ :- Sudani Bhautik Dhanjibhai
                </td>
                <td style="width: 100px;">
                    રોલ નંબર :-
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td style="width: 100px;">
                    જ.ર નંબર
                </td>
                <td style="width: 100px;">
                    ધોરણ
                </td>
                <td style="width: 100px;">
                    વગૅ
                </td>
                <td style="width: 100px;">
                    પરીક્ષા વર્ષ
                </td>
            </tr>
        </tbody>
    </table>
    <div class="third fw-bolder">બેઠક રોડ , ખંભાત-૩૮૮૬૨૦ , (જિ.આણંદ)</div>
</body>

</html>