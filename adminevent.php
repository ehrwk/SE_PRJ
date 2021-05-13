<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
#wrap {
	margin: auto;
	width: 80%;
}
table .ontop{
	background-color: gray;
}
table{
	width: 100%;
	margin: auto;
	border-collapse: collapse;
	border:1px solid black;
	text-align: left;
}
td,th{
min-height: 10px;
border:1px solid black;
}
th{
	width: 10%;
}
 .btn{
float: right;	
}</style>
</head>
<body>
	<form method="get" action="adminevent_write.php">
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
		<td>내용</td>
		<td><textarea name=content cols=85 rows=15></textarea></td>
	</tr>
</table>
<center>
	<input type="submit" value="작성">
</center></div>
</form>

</body>
</html>