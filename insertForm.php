<?php 
include("db.php");
$ApplicantName = $_POST['applicantName'];
$ApplicantEmail = $_POST['applicantEmail'];
$division=$_POST['division'];
$district=$_POST['district'];
$Upazila=$_POST['Upazila'];
$applicantAddress=$_POST['applicantAddress'];
// echo $ApplicantName ." ". $ApplicantEmail. " " .$division. " ".$district." ".$Upazila." ". $applicantAddress ;
foreach ($_POST["language"] as $key => $language) { 
	$language.= $language.",";
	//$language.= $language.",";  
  }
$image = basename($_FILES['image']['name']);
$temp = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];
$type = $_FILES['image']['type'];
$fileError = $_FILES['image']['error'];
$imgExt = explode('.', $image);
$actuExp = strtolower(end($imgExt));
$allow = array('jpg','png','jpeg');
if (in_array($actuExp , $allow)) {
	if ($fileError === 0) {
		if ($size < 500000) {
			$newName= uniqid('', true).'.'.$actuExp;
			$destination = 'images/'.$newName;
			//echo $destination;
			move_uploaded_file($temp, $destination);
		}
	}
}
else{
	echo "Not allow this type file";
}
$pdfimage = basename($_FILES['documentpdf']['name']);
$pdftemp = $_FILES['documentpdf']['tmp_name'];
$pdfsize = $_FILES['documentpdf']['size'];
$pdftype = $_FILES['documentpdf']['type'];
$pdffileError = $_FILES['documentpdf']['error'];
$pdfimgExt = explode('.', $pdfimage);
$pdfactuExp = strtolower(end($pdfimgExt));
$pdfallow = array('docx','pdf');
if (in_array($pdfactuExp , $pdfallow)) {
	if ($pdffileError === 0) {
		if ($pdfsize < 500000) {
			$pdfName= uniqid('', true).'.'.$pdfactuExp;
			$pdfdestination = 'document/'.$pdfName;
			//echo $destination;
			move_uploaded_file($pdftemp, $pdfdestination);
		}
	}
}
else{
	echo "Not allow this type file";
}
$sql  = "INSERT INTO student (stdName, stdEmail,division, district, upozila, address, languages, photos, resumes, activity) VALUES ('$ApplicantName','$ApplicantEmail','$division', '$district','$Upazila','$applicantAddress','$language','$newName', '$pdfName',1)";
$result= $conn->query($sql);
$createId = $conn -> insert_id;
echo $createId;











$visitorData = count($_POST["exam_name"]);
	
	if ($visitorData > 0) {
	    for ($i=0; $i < $visitorData; $i++) { 

			$exam_name   = $_POST["exam_name"][$i];
			$versity  = $_POST["versity"][$i];
			$board  = $_POST["board"][$i];
			$point  = $_POST["point"][$i];
		$esql  = "INSERT INTO education (examName,university,board,result,stdid) VALUES ('$exam_name','$versity','$board','$point','$createId')";
			$conn->query($esql); 
		
	    }
	    
	}else{
	    echo "Please Enter education data";
	}

	$trainingData = count($_POST["trainname"]);	
	if ($trainingData > 0) {
	    for ($j=0; $j < $trainingData; $j++) { 

			$training_name   = $_POST["trainname"][$j];
			$traitopic  = $_POST["traitopic"][$j];
			
		$tsql  = "INSERT INTO training (trainingName,trainingTopic,studentId) VALUES ('$training_name','$traitopic','$createId')";
			$conn->query($tsql); 
		
	    }
	    
	}else{
	    echo "Please Enter Training data";
	}


 
 ?>