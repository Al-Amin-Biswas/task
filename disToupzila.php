<?php 
include("db.php");
$disid=$_POST["disId"];
//echo $disid;
$sql="SELECT * FROM upozila WHERE disid=$disid";
$result = $conn->query($sql);


?>
 <option>--Select--</option>
 <?php 
 if ($result->num_rows > 0) {
 	while ($row = $result->fetch_assoc()) {
 	//echo $row["upName"];	
  ?>
  <option value="<?php echo $row['upName'];?>"><?php echo $row["upName"];?></option>
<?php
	}
}
?>