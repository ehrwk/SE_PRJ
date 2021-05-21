<?php
	error_reporting(E_ALL);
	ini_set( "display_errors", 1 );
	
	if(isset($_GET['number'])) {
    $conn =mysqli_connect("localhost","bitnami","1234","event") or die("connection fail");
    $number = $_GET["number"];
	$sql = "SELECT imageType,imageData FROM eventdb WHERE number=$number";

	$result=mysqli_query($conn,$sql); 
	$row = mysqli_fetch_array($result);
	Header( "Content-type:" . $row["imageType"]); 
	echo $row["imageData"]; 
}
	mysqli_close($conn);
?>