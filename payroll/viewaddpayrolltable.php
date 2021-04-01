<div class="table-responsive" id="poll">
    <table class="table table-striped" id="myTable">
        <thead class="table table-dark">

            <tr>
                <th>IDNo</th>
                <th>FullName</th>
                <th>Designation</th>
                <th>PAN</th>
                <th>PFNo</th>
                <th>BankAccount</th>
                <th>Month</th>
                <th>Month Days</th>
                <th>Present days</th>
                <th>Leave days</th>
                <th>LWP</th>
                <th>Basix</th>
                <th>DA</th>
                <th>CLA</th>
                <th>HRA</th>
                <th>TA</th>
                <th>SPPay</th>
                <th>DGPay</th>
                <th>MA</th>
                <th>SalArreas1</th>
                <th>SalArreas2</th>
                <th> PT</th>
                <th> PF</th>
                <th> IT</th>
                <th> Other</th>
                <th> Total Earning</th>
                <th> Total Deduction</th>
                <th> Net Payable</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "schoolmanage");
            $sql="";
            if(isset($_POST["id"]))
            {
                $sql = "SELECT * FROM ttbsalarymaster WHERE year = '" . $_POST["ye"] . "' AND SalMonthname = '" . $_POST["mo"] . "'AND SalEmpNo = '" . $_POST["id"] . "';";
            }
            else
            {
                $sql = "SELECT * FROM ttbsalarymaster WHERE year = '" . $_POST["ye"] . "' AND SalMonthname = '" . $_POST["mo"] . "';";
            }
            $data = mysqli_query($conn, $sql);
            $total = mysqli_num_rows($data);
            if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "
                           		<tr>
                           		<td>" . $result['SalEmpNo'] . "</td>
                           		<td>" . $result['SalFullName'] . "</td>
                           		<td>" . $result['SalDesignation'] . "</td>
                           		<td>" . $result['SalPAN'] . "</td>
                           		<td>" . $result['SalPFNo'] . "</td>
                           		<td>" . $result['SalEmpBankAccount'] . "</td>
                                <td>" . $result["SalMonthname"] . "</td>
                                <td>" . $result["SalMonthdays"] . "</td>
                                <td> " . $result["SalPresentdays"] . "</td>
                                <td> " . $result["Salleavedays"] . "</td>
                                <td> " . $result["SalLWP"] . "</td>             
                                <td> " . $result["SalBasic"] . "</td>
                                <td> " . $result["SalDA"] . "</td>
                                <td> " . $result["SalCLA"] . "</td>
                                <td> " . $result["SalHRA"] . "</td>
                                <td> " . $result["SalTA"] . "</td>
                                <td> " . $result["SalSPPay"] . "</td>
                                <td> " . $result["SalDGPay"] . "</td>
                                <td> " . $result["SalMA"] . "</td>
                                <td> " . $result["SalArreas1"] . "</td>
                                <td> " . $result["SalArreas2"] . "</td>
                                <td> " . $result["SalPTax"] . "</td>
                                <td> " . $result["SalPF"] . "</td>
                                <td> " . $result["SalIncomTax"] . "</td>
                                <td> " . $result["Salother"] . "</td>
                                <td> " . $result["SalTotalEarning"] . "</td>
                                <td> " . $result["SalTotalDeduction"] . "</td>
                                <td> " . $result["SalNetPayable"] . "</td>
                           		
                           		<th><a href='updatepayroll.php?id=$result[SalEmpNo]&mo=$result[SalMonthname]&ye=$result[year]'><input type='submit' value='Edit' id='updatebtn' class='btn btn-pill btn-success btn-lg'></input></a></th>
                           		</tr>";
                }
            } else {
                echo "No records found";
            }
            ?>

        </tbody>
    </table>
</div>