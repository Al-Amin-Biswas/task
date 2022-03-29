<!-- $sql="SELECT * FROM upozila where disid=$disid";
$result= $conn->query($sql); -->
 ?>
 <option>--Select--</option>
 <?php 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {   
 ?>
        <option value="<?php echo $row['upName'];?>"><?php echo $row["upName"];?></option>
 <?php 
        }
            }