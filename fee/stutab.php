<?php
include("connectdb.php");
?>

<table class="table table-striped" id="paytab" >
    <thead class="table-dark">
        <tr>
            <th scope="col">Sr No.</th>
            <th scope="col">Roll No.</th>
            <th scope="col">Student Name</th>
            <th scope="col">Fees Due</th>
            <th scope="col">Select Month</th>
            <th scope="col">Fees Paid</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $empidquery = "SELECT * FROM tbfeesmaster f INNER JOIN studentmaster s ON f.FeesStudentGRNo = s.StuGRNo AND s.StuStatus='ACTIVE' AND f.FeesAcademicYear='" . $_GET["ay"] . "' AND f.FeesStandard='" . $_GET["std"] . "' AND f.FeesDivison='" . $_GET["div"] . "' ORDER BY FeesStudentRollNo;";
        $empidresult = mysqli_query($con, $empidquery);
        $cnt = 1;
        // echo "<select class='form-control' name='fea' id='fediv'>";
        // echo "<option value='0' selected>Select Standard</option>";
        while ($eid = mysqli_fetch_array($empidresult)) {
            echo "<tr>";
            echo "<th scope='row'>" . $cnt++ . "</th>";
            echo "<td>" . $eid["FeesStudentRollNo"] . "</td>";
            echo "<td>" . $eid["FeesStudentName"] . "</td>";
            echo "<td>" . $eid["FeesDue"] . "</td>";
            echo "<td><div class='scr-mod'><table  id='subpt' name='mn'><tbody>";


            if ($eid["FeesJanuary"]) {
                echo "<tr>";
                echo "<td><input type='checkbox' id='1' checked name='jan' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-success'> January</label></td></tr>";
            } else {
                echo "<tr>";
                echo "<td><input type='checkbox' id='1' name='jan' style='margin: 5px;' ></td>";
                echo "<td><label for='ja' class='text-danger'> January</label></td></tr>";
            }


            if ($eid["FeesFebruary"]) {
                echo "<tr>";
                echo "<td><input type='checkbox' id='2' checked name='feb[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-success'> February</label></td></tr>";
            } else {
                echo "<tr>";
                echo "<td><input type='checkbox' id='2' name='feb[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-danger'> February</label></td></tr>";
            }


            if ($eid["FeesMarch"]) {
                echo "<tr>";
                echo "<td><input type='checkbox' id='3' checked name='mar[]' style='margin: 5px;' ></td>";
                echo "<td><label for='ja' class='text-success'> March</label></td></tr>";
            } else {
                echo "<tr>";
                echo "<td><input type='checkbox' id='3' name='mar[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-danger'> March</label></td></tr>";
            }


            if ($eid["FeesApril"]) {
                echo "<tr>";
                echo "<td><input type='checkbox' id='4' checked name='ap[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-success'> April</label></td></tr>";
            } else {
                echo "<tr>";
                echo "<td><input type='checkbox'  id='4' name='ap[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-danger'> April</label></td></tr>";
            }


            if ($eid["FeesMay"]) {
                echo "<tr>";
                echo "<td><input type='checkbox'  id='5' checked name='me[]' style='margin: 5px;' ></td>";
                echo "<td><label for='ja' class='text-success'> May</label></td></tr>";
            } else {
                echo "<tr>";
                echo "<td><input type='checkbox'  id='5' name='me[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-danger'> May</label></td></tr>";
            }


            if ($eid["FeesJune"]) {
                echo "<tr>";
                echo "<td><input type='checkbox' id='6' checked name='jn[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-success'> June</label></td></tr>";
            } else {
                echo "<tr>";
                echo "<td><input type='checkbox' id='6' name='jn[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-danger'> June</label></td></tr>";
            }


            if ($eid["FeesJuly"]) {
                echo "<tr>";
                echo "<td><input type='checkbox'  id='7' checked name='jl[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-success'> July</label></td></tr>";
            } else {
                echo "<tr>";
                echo "<td><input type='checkbox' id='7' name='jl[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-danger'> July</label></td></tr>";
            }


            if ($eid["FeesAugust"]) {
                echo "<tr>";
                echo "<td><input type='checkbox'  id='8' checked name='ag[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-success'> August</label></td></tr>";
            } else {
                echo "<tr>";
                echo "<td><input type='checkbox' id='8' name='ag[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-danger'> August</label></td></tr>";
            }


            if ($eid["FeesSeptember"]) {
                echo "<tr>";
                echo "<td><input type='checkbox'  id='9' checked name='sep[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-success'> September</label></td></tr>";
            } else {
                echo "<tr>";
                echo "<td><input type='checkbox' id='9' name='sep[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-danger'> September</label></td></tr>";
            }


            if ($eid["FeesOctomber"]) {
                echo "<tr>";
                echo "<td><input type='checkbox'  id='10' checked name='oc[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-success'> Octomber</label></td></tr>";
            } else {
                echo "<tr>";
                echo "<td><input type='checkbox' id='10' name='oc[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-danger'> Octomber</label></td></tr>";
            }


            if ($eid["FeesNovember"]) {
                echo "<tr>";
                echo "<td><input type='checkbox' id='11' checked name='no[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-success'> November</label></td></tr>";
            } else {
                echo "<tr>";
                echo "<td><input type='checkbox' id='11' name='no[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-danger'> November</label></td></tr>";
            }


            if ($eid["FeesDecember"]) {
                echo "<tr>";
                echo "<td><input type='checkbox' id='12' checked name='de[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-success'> December</label></td></tr>";
            } else {
                echo "<tr>";
                echo "<td><input type='checkbox' id='12' name='de[]' style='margin: 5px;'></td>";
                echo "<td><label for='ja' class='text-danger'> December</label></td></tr>";
            }

            echo "</tbody></table></div></td>";
            echo "<td>" . $eid["FeesPaid"] . "</td>";
            echo "</tr>";
        }
        ?>

    </tbody>
</table>