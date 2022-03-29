<?php
$dbHost = 'localhost';

$dbUsername = 'root';

$dbPassword = '';

$dbName = 'pakainfo_v1';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){

   die("Unable to connect database: " . $db->connect_error);

}


$img = $_FILES["image"]["name"]; 

echo $img;

// $tmp = $_FILES["image"]["tmp_name"]; 
// $errorimg = $_FILES["image"]["error"]; 

// $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt');
// $path = 'uploads/'; 
// if(!empty($_POST['name']) || !empty($_POST['email']) || $_FILES['image'])
// {
// $img = $_FILES['image']['name'];
// $tmp = $_FILES['image']['tmp_name'];


// $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));


// $final_image = rand(1000,1000000).$img;

// if(in_array($ext, $valid_extensions)) 
// { 
// $path = $path.strtolower($final_image); 

// if(move_uploaded_file($tmp,$path)) 
// {
// echo "<img src='$path' />";
// $name = $_POST['name'];
// $email = $_POST['email'];


// $insert = $db->query("INSERT uploading (name,email,file_name) VALUES ('".$name."','".$email."','".$path."')");

// }
// } 
// else 
// {
// echo 'invalid';
// }
// }
?>