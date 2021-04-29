<?php
$conn = mysqli_connect(
	'localhost', //주소
	'root',		//id
	'unix21002',//pw
	'test',		//database_name
);

$sql = "SELECT * FROM book_list";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>책정보 추가/수정/삭제</title>
	</head>	
	<body>
		<h1>책정보 추가</h1>
		<h3>categoty/cate_dec/book_name/author/price</h3>
		<h3>국내.국외.기타/10진분류/첵이름/저자/가격</h3>
		<form action = "book_list_upload.php" method="POST">
			<p><input type="text" name="cre_cate"></p>
			<p><input type="text" name="cate_dec"></p>
			<p><input type="text" name="book_name"></p>
			<p><input type="text" name="author"></p>
			<p><input type="text" name="price"></p>
		</form>
	</body>
<