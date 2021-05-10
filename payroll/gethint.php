<?php
if (isset($_GET['eid'])) {
    include("connectdb.php");
    $q = $_GET['eid'];
    $sql = "SELECT * FROM employeemaster WHERE EmpNo = '" . $q . "'";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($result)) {
        $empname = $row["EmpNamePrefix"];
        $empname .= " ".$row["EmpFirstName"];
        // $empname .= " ".$row["EmpMidName"];
        // $empname .= " ".$row["EmpLastName"];
        $employeepan = $row['EmpPan'] ;
        $employeepfno = $row['EmpPFno'] ;
        $employeedesg = $row['EmpDesignation'] ;
    }
}
?>
<div class="row">
    <div class="col-md-2 text-left">
    </div>
    <div class="col-md-2 text-left">
    <label for="ename">Employee Name : </label>
    </div>
    <div class="col-md-2 text-left ">
        <input class="form-control" type="text"  value="<?php echo $empname; ?>" name="Emna" id="esna" readonly>
    </div>
    <div class="col-md-2 text-left">
    <label for="epan">PAN No : </label>
    </div>
    <div class="col-md-2 text-left">
        <input class="form-control" type="text" value=<?php echo $employeepan; ?> name="Empan" id="espan" readonly>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-2 text-left">
    </div>
    <div class="col-md-2 text-left">
    <label for="edesg">Employee Desig. :</label>
    </div>
    <div class="col-md-2 text-left">
        <input class="form-control" type="text" value="<?php echo $employeedesg; ?>" name="Emde" id="esdesg" readonly>
    </div>
    <div class="col-md-2 text-left">
    <label for="epfno">Employee PF No : </label>
    </div>
    <div class="col-md-2 text-left">
        <input class="form-control" type="text" value=<?php echo $employeepfno; ?> name="Empfn" id="espfn" readonly>
    </div>
</div>
<br>