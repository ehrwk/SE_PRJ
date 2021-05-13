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
}
	</style>
</head>
<body>
<?php
	$connect =mysqli_connect('localhost','bitnami','1234','event') or die('connection fail');
	$query="select * from eventpage order by number desc";
	$result = $connect->query($query);
	$total=mysqli_num_rows($result);
?>
<h2 align="center">이벤트 관리 게시판</h2>
<table>
	<thead>
		<tr>
			<td>번호</td>
			<td>제목</td>
			<td>작성자</td>
			<td>날짜</td>
			<td>소비자 조회수</td>
		</tr>
	</thead>

	<tbody>
		<?php 
		while ($rows=mysqli_fetch_assoc($result)) {
			if($total%2==0){
?>
				<tr class="even">
			<?php }
			else{
			?>
				<tr>
			<?php } ?>
		<td><?php echo $total?></td>
		<td><a href="admineventview.php?number=<?php echo $rows['number']?>"><?php echo $rows['title']?></td>
		<td><?php echo $rows['id']?></td>
		<td><?php echo $rows['date']?></td>
		<td>소비자 조회수여야 함</td>
		</tr>
	<?php
		$total--;
		}
	?>
	</tbody>
</table>
<div>
	<font onclick="location.href='.adminevent.php"></font>
</div>
</body>
</html>