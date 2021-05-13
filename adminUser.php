<?php
	include_once "adminLayout.inc";
	$admin = new AdminLayout;
	$db_conn = mysqli_connect('localhost', 'bitnami', '1234', 'customerInfo') or die('fail');

	$sql = "SELECT * FROM member LIMIT 5;";
	$res = mysqli_query($db_conn, $sql);
	if($res){
		$usrNum = mysqli_num_rows($res);
	}
	else {
		echo"fail";
		exit();
	}
	while($row = mysqli_fetch_array($res)) {
		$usrData = "<tr>
			<td>$row['name']</td>
			<td>$row['id']</td>
			<td>$row['pw']</td>
			<td>$row['email']</td>
		</tr>";
	}
	$admin->content = "
		<table style = 'border: 1px solid black; border-collapse: collaps;'>
			<tr>
			<th>이름</th>
			<th>아이디</th>
			<th>비밀번호</th>
			<th>이메일</th>
			</tr>
		</table>";

	$admin->AdminLayoutMain();
?>