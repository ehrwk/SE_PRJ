<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>책정보 추가/수정/삭제</title>
		<style> 
			th {border-top: 3px solid rgb(51, 175, 233); border-bottom:  1.5px solid rgb(160, 160, 160); padding: 3px;}
		</style>
	</head>	
	<body>
		<h1>책정보 추가</h1>
		<!--categoty/cate_dec/book_name/author/price-->
		<form name = "add_book" method="post" action = "book_list_upload.php">
		<table>
			<th>국내/국외/중고</th>
			<th>10진분류</th>
			<th>책이름</th>
			<th>저자</th>
			<th>가격</th>
			<tr>
				<td>
					<select name ="category" size ='1' style = "width : 100px; height: 30px">
						<option value = "korea">국내</option>
						<option value = "foreign">국외</option>
						<option value = "used">중고</option>
					</select>
				</td>
				<td>
					<select name ="cate_dec" style = "height: 29px">
						<option value = 0> 000 총류</option>
						<option value = 1> 100 철학</option>
						<option value = 2> 200 종교</option>
						<option value = 3> 300 사회과학</option>
						<option value = 4> 400 자연과학</option>
						<option value = 5> 500 기술과학</option>
						<option value = 6> 600 예술</option>
						<option value = 7> 700 언어</option>
						<option value = 8> 800 문학</option>
						<option value = 9> 900 역사</option>
					</select>	
				</td>
				<td><input type="text" name="book_name"></td>
				<td><input type="text" name="author" style = " width : 80px;"></td>
				<td><input type="text" name="price" style = " width : 70px;"></td>
			</tr>
		</table>
		<input type = "submit" value = "등록">
		</form>
		<div id = "list">
			
			데이터베이스 보여지는 곳 + 삭제기능 추가
		</div>
	</body>
</html>