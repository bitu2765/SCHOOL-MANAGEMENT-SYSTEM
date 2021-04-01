<?php
//load_data.php  
include("connectdb.php");
$val1 = $_GET['value'];
$val = rtrim($val1, ", ");
$post = array();
$sql = "select $val from studentmaster";
$result1 = mysqli_query($connect, $sql);
?>
<div class="table-responsive" id="poll">
    <table class="table table-striped" id="myTable">
        <thead class="table table-dark">
            <?php
            $columns = array();
            $resultset = array();
            if (mysqli_num_rows($result1) > 0) {
                while ($row = mysqli_fetch_assoc($result1)) {
                    if (empty($columns)) {
                        $columns = array_keys($row);
                        echo '<tr><th>' . implode('</th><th>', $columns) . '</th></tr>';
                    }
            ?>
        </thead>
        <tbody>
    <?php
                    $resultset[] = $row;
                    echo '<tr><td>' . implode('</td><td>', $row) . '</td></tr>';
                }
            } ?>
        </tbody>
    </table>
</div>


   