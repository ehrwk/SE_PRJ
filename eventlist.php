<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="event.css">
</head>
<body>
<?php
	$connect = mysqli_connect('localhost','bitnami','1234','event') or die("connection fail");
	$query="select * from event order by number desc";
	$result = $connect->query($query);
	$total=mysqli_num_rows($result);
?>
<h2 align="center">이벤트 목록</h2>
<table>
	<thead>
		<tr>
			<td>번호</td>
			<td>제목</td>
			<td>작성자</td>
			<td>날짜</td>
			<td>조회수</td>
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
		<td><a href="event.php?number=<?php echo $rows['number']?>"><?php echo $rows['title']?></td>
		<td><?php echo $rows['id']?></td>
		<td><?php echo $rows['date']?></td>
		<td><?php echo $rows['hit']?></td>
		</tr>
	<?php
		$total--;
		}
	?>
	</tbody>
</table>
<div>
	<font onclick="location.href='.event.php"></font>
</div>
</body>
</html>