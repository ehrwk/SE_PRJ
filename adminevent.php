<?php
	include_once "adminLayout.inc";
	$admin = new AdminLayout;

	 $admin->content ="
	<form method='get' action='adminevent_write.php'>
		<div>
<table>
	<tr>
		<td>작성자</td>
		<td><input type=text name=name ></td>
	</tr>

	<tr>
		<td>제목</td>
		<td><input type=text name=title ></td>
	</tr>
	<tr>
		<td>이미지</td>
		<td><input type='file' name='imageform'/></td>
	</tr>

	<tr>
		<td>내용</td>
		<td><textarea name=content cols=85 rows=15></textarea></td>
	</tr>
</table>
<center>
	<input type='submit' value='작성'>
</center></div>
</form>
";

	$admin->AdminLayoutMain();
?>
