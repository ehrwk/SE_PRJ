<?php

$userid=$_POST['id'];
$userpw=$_POST['pw'];

if($userid==""||$userpw==""){
	echo '<script> alert("아이디 또는 비밀번호를 입력하세요."); history.back(); </script>';
} else{

	$mysqli=mysqli_connect('localhost','bitnami','1234','customerInfo');

	$jb_sql="SELECT * FROM member WHERE id='$userid' AND pw='$userpw' AND email='admin@email.com' AND permit=0 AND name='admin'";
	$jb_result=mysqli_query($mysqli, $jb_sql);

	if($jb_row=mysqli_fetch_array($jb_result)){


		echo"<script>location.href='adminMainPage.php';</script>";
	}
	else{
		echo"<script>alert('아이디 또는 비밀번호를 잘못 입력하였습니다.');history.back();</script>";
		}
}
?>
