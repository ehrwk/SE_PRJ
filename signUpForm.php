<?php
	require_once './layout.inc';

	$base = new Layout;

	$base->link = './style.css';
	$base->style = 'th,td{padding : 5px;}';
	$base->content="
		<form action = './registerUser.php' method = 'post'>
			<table style='margin : 0 auto;'>
				<tr>
					<th colspan=2>회원가입</th>
				</tr>
				<tr>
					<td>이름</td>
					<td><input type = 'text' size = '16' name='name'></td>
				</tr>
				<tr>
					<td>아이디</td>
					<td><input type = 'text' size = '16' name = 'id'></td>
				</tr>
				<tr>
					<td>비밀번호</td>
					<td><input type = 'password' size = '16' name = 'pw'></td>
				</tr>
				<tr>
					<td>비밀번호 확인</td>
					<td><input type = 'password' size = '16' name = 'chkPw'></td>
				</tr>
				<tr>
					<td>이메일</td>
					<td><input type = 'text' size = '16' name = 'mail'></td>
				</tr>
				<tr>
					<td colspan = 2 style = 'text-align : center;'><input type = 'submit' value = '등록'></td>
				</tr>
			</table>
		</form>
	";

	$base->LayoutMain();
?>