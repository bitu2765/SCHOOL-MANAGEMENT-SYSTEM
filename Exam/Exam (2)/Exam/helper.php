<?php  
 //load_data.php  
 include 'connection.php';  
 $val = $_GET['value'];
 $val_m = mysqli_real_escape_string($conn, $val);

 $sql = "SELECT  DISTINCT * FROM `submaster` WHERE subStandard = '$val_m'";  
  
 $result = mysqli_query($conn, $sql);  
 
 if(mysqli_num_rows($result)>0)
 {
	 ?>
	  <div class="col-7" id="poll" name="sub">
	 <select name="sub" class="form-control">
	 <?php
	 while($row = mysqli_fetch_assoc($result))
	 {?>
	 <option value="<?php echo $row['SubName'];?>"><?php echo $row['SubName'];?></option>
	 <?php
	 }
	 ?>
	 </select>
	 <div>
 <?php } ?>
 
 