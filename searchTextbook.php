<?php

<<<<<<< HEAD
 $base -> style = table {
			border-style: solid; border-width: medium;  border-radius: 5em; padding: 0.3em 1.5em; background: rgb(249, 249, 249); margin-left: 5px; border-color: rgb(51, 175, 233);
=======
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<style>
		table {
			border-style: solid; border-width: medium;  border-radius: 5em; padding: 0.3em 1.5em; background: #F9F9F9; margin-left: 5px; border-color: #33afe9;
>>>>>>> 2f7d59bd1c475f4eba71bb9f0459f89257ecaa18
		}

		select{
			width: 100px; padding: .4em .3em;
			border: none;
			font-family: inherit;
		}

<<<<<<< HEAD
		input:focus {outline-color: rgb(51, 175, 233)}


 public function searchbox()
 {
 	echo "<form method = "get" action="/save.php">
	<table>
		<th>
			<select category>
				<option>통합검색</option>
				<option>국내도서</option>
				<option>국외도서</option>
				<option>중고도서</option>
			</select>
		</th>
		<th>
			<input type="text" name="book_name" style="width:20em; height: 2em; border: none;">
		</th>
		<th>
			<input type="submit" value="검색">
		</th>
	</table>
	</form>";  /*<input type="submit" value="검색">에 class="" 버튼이미지 넣기 */
 }

?>
=======
		input:focus {outline-color: #33afe9}

	</style>
</head>
<body>
	<form method = "get" action="/save.php">
	<table>
		<th>
			<select category>
				<option>통합검색</option>
				<option>국내도서</option>
				<option>국외도서</option>
				<option>중고도서</option>
			</select>
		</th>
		<th>
			<input type="text" name="book_name" style="width:20em; height: 2em; border: none;">
		</th>
		<th>
			<input type="submit" value="검색">	/* class="" 버튼이미지 넣기 */
		</th>
	</table>
	</form>
</body>
</html>

?>
>>>>>>> 2f7d59bd1c475f4eba71bb9f0459f89257ecaa18
