<?php

session_start();

$connect = mysqli_connect("localhost","bitnami","1234","login") or die("fail");

$id = $_GET['id'];
$pw = $_GET['pw'];

$query = "SELECT * FROM adminlogin WHERE id = '$id'";
$result = $connect->query($query);

if(mysqli_num_rows($result)==1){

	$row=mysqli_fetch_assoc($result);

	if($row['pw']==$pw){
		$_SESSION['userid']=$id;
		#if(isset($_SESSION['userid'])){
			#echo"<script>location.href='mainPage.php';</script>";
		#} else{
			#echo "session fail";
		#}
	#} else{
		#echo"<script>alert('정보 없음');history.back();</script>";
	#}
#} else{
	#echo"<script>alert('로그인 실패');history.back();</script>";
#}
		echo"<script>alert('성공');history.back();</script>";
}
else{
	echo"fail";
}
}

?>
