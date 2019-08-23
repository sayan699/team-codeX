<?php
include "dbconn.php";

$folder="pics/";
$problem=$_POST["problem"];
$filee=$_FILES["file"]["name"];
$tempname=$_FILES["file"]["tmp_name"];
$address=$_POST["address"]; 
$landmark=$_POST["landmark"];
$city=$_POST["city"];
$state=$_POST["state"];
$pin=$_POST["pin"];


$sql="INSERT INTO complaint(problem,address,landmark,city,state,pin) VALUES ('$problem','$address','$landmark','$city','$state','$pin');";


	mysqli_query($conn,$sql);
	header("Location: ..\hackathon\complaint.php");
	echo "done"

?>