<?php 
include("db.php");
$divisionid=$_POST["divId"];
$sql="SELECT * FROM district where divid=$divisionid";
$result= $conn->query($sql);
 ?>
 <option>--Select--</option>
 <?php 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {   
 ?>
        <option value="<?php echo $row['disid'];?>"><?php echo $row["disName"];?></option>
 <?php 
        }
            }
?>
