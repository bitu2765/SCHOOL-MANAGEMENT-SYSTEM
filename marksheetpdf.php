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
            <img src="./Exam/images/logo1.png" style="height: 200px;">
        </td>
        <td style="width: 50px;"></td>
        <td>
            <table>
                <tbody>
                    <tr>
                        <td>
                            <div style="font-size: 23pt;text-align: center;">ઘી કેમ્બે એજ્યુકેશન સોસાયટી સંચાલિત​</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="font-size: 43pt;">શ્રી એસ.ઝેડ. વાઘેલા હાઇસ્કૂલ</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="font-size: 15pt;">બેઠક રોડ , ખંભાત-૩૮૮૬૨૦ , (જિ.આણંદ)</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</tbody>
</table>
<br>
<table>
<tbody>
    <tr>
        <td style="width: 650px;">
            વિદ્યાર્થીનું નામ :-  Sudani Bhautik Dhanjibhai
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
                <td style="width: 220px;">
                    જ.ર નંબર :-
                </td>
                <td style="width: 220px;">
                    ધોરણ :-
                </td>
                <td style="width: 220px;">
                    વગૅ :-
                </td>
                <td style="width: 220px;">
                    પરીક્ષા વર્ષ :-
                </td>
            </tr>
        </tbody>
    </table>
    <table>
    <tbody>
            <tr style="border:0.1mm solid black" >
                <td scope="col" style="font-size: 13pt;border:0.1mm solid black" >પરીક્ષા</td>
                <td scope colspan="2" style="font-size: 15pt;border:0.1mm solid black" >First</td>
                <td scope colspan="2" style="font-size: 15pt;border:0.1mm solid black" >First</td>
                <td scope colspan="2" style="font-size: 15pt;border:0.1mm solid black" >First</td>
            </tr>
            <tr style="border:0.1mm solid black">
                <td scope="col" style="width: 250px;border:0.1mm solid black" >વિષય</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" > કુલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" >મેળવેલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" > કુલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" >મેળવેલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" > કુલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" >મેળવેલ ગુણ</td>
            </tr>
            <tr style="border:0.1mm solid black">
                <td scope="col" style="width: 250px;border:0.1mm solid black" >વિષય</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" > કુલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" >મેળવેલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" > કુલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" >મેળવેલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" > કુલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" >મેળવેલ ગુણ</td>
            </tr>
            <tr style="border:0.1mm solid black">
                <td scope="col" style="width: 250px;border:0.1mm solid black" >વિષય</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" > કુલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" >મેળવેલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" > કુલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" >મેળવેલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" > કુલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" >મેળવેલ ગુણ</td>
            </tr>
            <tr style="border:0.1mm solid black">
                <td scope="col" style="width: 250px;border:0.1mm solid black" >વિષય</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" > કુલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" >મેળવેલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" > કુલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" >મેળવેલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" > કુલ ગુણ</td>
                <td scope="col" style="width: 120px;border:0.1mm solid black" >મેળવેલ ગુણ</td>
            </tr>
            </tbody>
       
        </table>';


$stres = new \Mpdf\Mpdf([
    'default_font_size' => 15,
    'default_font' => 'ind_gu1_001'
]);
// $stres->AddPage('L', 'A4');
$stres->autoScriptToLang = true;
$stres->autoLangToFont = true;
// $stres->WriteHTML($tem);



$year = $_POST['search_Year'];
$standard = $_POST['search_Std'];
$exam = $_POST['search_Exam'];
$div = $_POST['search_Div'];



$str1 = "SELECT `IsResultVisible` FROM  exammaster  WHERE ExamAcademicYear='$year' AND ExamStandard='$standard' AND ExamName='$exam'";


$que = mysqli_query($conn, $str1);
$row = mysqli_fetch_assoc($que);
$statu = $row['IsResultVisible'];

if (!$statu) {
    $Message = urlencode('
<div class="card alert alert-danger" role="alert">
<h4 class="alert-heading">Result Is Not Declared Yet!</h4>
<p></p>
<p class="mt-12"></p>

</div>');
} else {




    $resultStatus = true;
    $totalSum = "";
    $obtainSum = "";
    $Rank = "";
    $arr = array();
    $str = " SELECT  GROUP_CONCAT(ResId SEPARATOR ',') AS 'ResID' FROM `resultmaster`
WHERE ResAcademicYear='$year' And ResStandard='$standard' And ResExamName='$exam' And ResDivision='$div'group by ResRollNo";
    $query = mysqli_query($conn, $str);
    while ($row = mysqli_fetch_assoc($query)) {
        $arr[] = explode(',', $row['ResID']);
    }

    for ($y = 0; $y < count($arr); $y++) {
        $in = $arr[$y];
        $total = 0;
        $obtain = 0;

        $sql = "SELECT * FROM resultmaster WHERE ResId IN (" . implode(',', $in) . ")";
        $query1 = mysqli_query($conn, $sql);
        $row11 = mysqli_fetch_assoc($query1);

        $stuRollNo = $row11['ResRollNo'];
        $stuName = $row11['ResStudentName'];
        $stuGRNo = $row11['ResGRNO'];
        $stuStd = $row11['ResStandard'];
        $stuDiv = $row11['ResDivision'];
        $examYear = $row11['ResAcademicYear'];
        $examName = $row11['ResExamName'];

        $resultpage = '<link rel="stylesheet" href="./css/app.css">
        <link href="./css/gapi.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/ui_d.css">
        <table>
        <tbody>
            <tr>
                <td>
                    <img src="./Exam/images/logo1.png" style="height: 200px;">
                </td>
                <td style="width: 50px;"></td>
                <td>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <div style="font-size: 23pt;text-align: center;">ઘી કેમ્બે એજ્યુકેશન સોસાયટી સંચાલિત​</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="font-size: 43pt;">શ્રી એસ.ઝેડ. વાઘેલા હાઇસ્કૂલ</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="font-size: 15pt;">બેઠક રોડ , ખંભાત-૩૮૮૬૨૦ , (જિ.આણંદ)</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
        </table>';

        $resultpage .= '<table>
        <tbody>
            <tr>
                <td style="width: 650px;">
                    વિદ્યાર્થીનું નામ :-  ' . $stuName . '
                </td>
                <td style="width: 100px;">
                    રોલ નંબર :- ' . $stuRollNo . '
                </td>
            </tr>
        </tbody>
        </table>';

        $resultpage .= '<table>
        <tbody>
            <tr>
                <td style="width: 220px;">
                    જ.ર નંબર :- ' . $stuGRNo . '
                </td>
                <td style="width: 220px;">
                    ધોરણ :- ' . $stuStd . '
                </td>
                <td style="width: 220px;">
                    વગૅ :- ' . $stuDiv . '
                </td>
                <td style="width: 220px;">
                    પરીક્ષા વર્ષ :- ' . $examYear . '
                </td>
            </tr>
        </tbody>
    </table>';
        $resultpage .= '<table>
    <tbody>
            <tr style="border:0.1mm solid black" >
                <td scope="col" style="font-size: 12pt;border:0.1mm solid black" >પરીક્ષા</td>
                <td scope colspan="2" style="font-size: 12pt;border:0.1mm solid black" >' . $examName . '</td>
            </tr>
            <tr style="border:0.1mm solid black">
                <td scope="col" style="font-size: 11pt;width: 350px;border:0.1mm solid black" >વિષય</td>
                <td scope="col" style="font-size: 11pt;width: 250px;border:0.1mm solid black" > કુલ ગુણ</td>
                <td scope="col" style="font-size: 11pt;width: 250px;border:0.1mm solid black" >મેળવેલ ગુણ</td>
            </tr>';
        for ($z = 0; $z < count($in); $z++) {
            $q = $in[$z];
            $str = " SELECT * FROM `resultmaster` WHERE ResId='$q'";
            $query = mysqli_query($conn, $str);
            $row111 = mysqli_fetch_assoc($query);
            $total += $row111['ResTotalMarks'];
            $obtain += $row111['ResMarksObtained'];

            $subName = $row111['ResSubName'];
            $subTotal = $row111['ResTotalMarks'];
            $subObtain = $row111['ResMarksObtained'];
            $stustatus = $row111['ResStatus'];
            // for ($iii = 0; $iii < 6; $iii++) {
            $resultpage .= '<tr style="border:0.1mm solid black" >';
            $resultpage .= '<td scope="col"  style="width: 350px;font-size: 11pt;border:0.1mm solid black" >' . $subName . '</td>';
            $resultpage .= '<td scope="col"  style="width: 250px;font-size: 11pt;border:0.1mm solid black" >' . $subTotal . '</td>';
            $resultpage .= '<td scope="col"  style="width: 250px;font-size: 11pt;border:0.1mm solid black" >' . $subObtain . '</td>';
            $resultpage .= '</tr>';
            // }
        }

        $resultpage .= '<tr style="border:0.1mm solid black" >';
        $resultpage .= '<td scope="col"  style="width: 350px;font-size: 11pt;border:0.1mm solid black" >Total Marks</td>';
        $resultpage .= '<td scope="col"  style="width: 250px;font-size: 11pt;border:0.1mm solid black" >' . $total . '</td>';
        $resultpage .= '<td scope="col"  style="width: 250px;font-size: 11pt;border:0.1mm solid black" >' . $obtain . '</td>';
        $resultpage .= '</tr>';

        $resultpage .= '<tr style="border:0.1mm solid black" >';
        $resultpage .= '<td scope="col"  style="width: 350px;font-size: 11pt;border:0.1mm solid black" >Result And Rank</td>';
        $resultpage .= '<td scope="col"  style="width: 250px;font-size: 11pt;border:0.1mm solid black" >' . $stustatus . '</td>';
        $resultpage .= '<td scope="col"  style="width: 250px;font-size: 11pt;border:0.1mm solid black" ></td>';
        $resultpage .= '</tr>';

        $resultpage .= '<tr style="border:0.1mm solid black" >';
        $resultpage .= '<td scope="col"  style="width: 350px;font-size: 11pt;border:0.1mm solid black" >Signature of class Teacher</td>';
        $resultpage .= '<td scope="col"  style="width: 250px;font-size: 11pt;" ></td>';
        $resultpage .= '<td scope="col"  style="width: 250px;font-size: 11pt;" ></td>';
        $resultpage .= '</tr>';

        $resultpage .= '<tr style="border:0.1mm solid black" >';
        $resultpage .= '<td scope="col"  style="width: 350px;font-size: 11pt;border:0.1mm solid black" >Signature of Principal</td>';
        $resultpage .= '<td scope="col"  style="width: 250px;font-size: 11pt;" ></td>';
        $resultpage .= '<td scope="col"  style="width: 250px;font-size: 11pt;" ></td>';
        $resultpage .= '</tr>';

        $resultpage .= '<tr style="border:0.1mm solid black" >';
        $resultpage .= '<td scope="col"  style="width: 350px;font-size: 11pt;border:0.1mm solid black" >Signature of Parents</td>';
        $resultpage .= '<td scope="col"  style="width: 250px;font-size: 11pt;" ></td>';
        $resultpage .= '<td scope="col"  style="width: 250px;font-size: 11pt;" ></td>';
        $resultpage .= '</tr>';
        $resultpage .= '</tbody>
        </table>';
        $stres->AddPage('L', 'A4');
        $stres->WriteHTML($resultpage);
        $stres->Line(7, 10, 7, 200);
        $stres->Line(290, 10, 290, 200);
        $stres->Line(7, 10, 290, 10);
        $stres->Line(7, 200, 290, 200);
    }
}



// $slip->SetFont('Arial', '', 8);
// $slip->WriteHTML($cpdf);
$stres->Output();
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <link href="./css/gapi.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/ui_d.css">

    <title>DA001

    </title>
</head>

<body>
    <table style="width: 100 ;"></table>
    <div class="row">
        <div class="col-md-6">
            <img src="./Exam/images/logo1.png">
        </div>
        <div class="col-md-6">
            <div class="first fw-bolder">ઘી કેમ્બે એજ્યુકેશન સોસાયટી સંચાલિત​</div>

        </div>
    </div>
    <span class="mylogo">
    <img src="./Exam/images/logo1.png"></span>
<span class="myheadings">
    <div class="first fw-bolder">ઘી કેમ્બે એજ્યુકેશન સોસાયટી સંચાલિત​
    </div>
    <div class="secound fw-bold" style="font-size: 30pt;">શ્રી એસ.ઝેડ. વાઘેલા હાઇસ્કૂલ</div>
    <div class="third fw-bolder">બેઠક રોડ , ખંભાત-૩૮૮૬૨૦ , (જિ.આણંદ)</div>
</span>
    <table>
        <tbody>
            <tr>
                <td>
                    <img src="./Exam/images/logo1.png" style="height: 200px;">
                </td>
                <td style="width: 50px;"></td>
                <td>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <div style="font-size: 23pt;text-align: center;">ઘી કેમ્બે એજ્યુકેશન સોસાયટી સંચાલિત​</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="font-size: 43pt;">શ્રી એસ.ઝેડ. વાઘેલા હાઇસ્કૂલ</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="font-size: 15pt;">બેઠક રોડ , ખંભાત-૩૮૮૬૨૦ , (જિ.આણંદ)</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <table>
        <tbody>
            <tr>
                <td style="width: 650px;">
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
                <td style="width: 220px;">
                    જ.ર નંબર :-
                </td>
                <td style="width: 220px;">
                    ધોરણ :-
                </td>
                <td style="width: 220px;">
                    વગૅ :-
                </td>
                <td style="width: 220px;">
                    પરીક્ષા વર્ષ :-
                </td>
            </tr>
        </tbody>
    </table>
    <table border="1">
        <thead>
            <tr>
                <th scope="col">પરીક્ષા</th>
                <th scope colspan="2">First</th>
            </tr>
            <tr>
                <th scope="col" style="width: 200px;">વિષય</th>
                <th scope="col" style="width: 200px;"> કુલ ગુણ</th>
                <th scope="col">મેળવેલ ગુણ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mathematic's</td>
                <td>100</td>
                <td>91</td>
            </tr>
        </tbody>
    </table>
</body>

</html> -->