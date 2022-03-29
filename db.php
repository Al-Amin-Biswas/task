<?php
$conn= new mysqli("localhost","root","","task");
if ($conn->connect_error) {
	die("Connection fail" . $conn->connect_error);
	}	
	//echo "Connected successfully";

  ?>