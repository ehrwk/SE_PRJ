<?php
	require_once './layout.inc';

	$base = new Layout;

	$base->link = './style.css';
	$base->content="
		<form>
			<table style='margin : 0 auto; margin-top : 5%;'>
				<tr>
					<th colspan=2>회원가입</th>
				</tr>
				<tr>
					<td>ID</td>
					<td><input type = 'text' size = '16' name = 'id'></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type = 'text' size = '16' name = 'inputPW'></td>
				</tr>
				<tr>
					<td>Check Password</td>
					<td><input type = 'text' size = '16' name = 'checkPW'></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type = 'text' size = '16' name = 'email'></td>
				</tr>
				<tr>
					<td colspan = 2 style = 'text-align : center;'><input type = 'submit' value = '등록'></td>
				</tr>
			</table>
		</form>
	";

	$base->LayoutMain();
?>