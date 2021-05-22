<?php
	$connect =mysqli_connect('localhost','bitnami','1234','event') or die('connection fail');
	$query="select * from eventdb order by number desc";
	$result = $connect->query($query);
	$total=mysqli_num_rows($result);
?>
<html>
<body>
<h2 align="center">이벤트 관리 게시판</h2>
<table>
	<thead>
		<tr>
			<td>번호</td>
			<td>제목</td>
			<td>날짜</td>
			<td>유효기간</td>
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
		<td><a href="admineventview.php?number=<?php echo $rows['number']?>"><?php echo $rows['title']?></td>
		<td><?php echo $rows['date']?></td>
		<td><?php echo $rows['finalDate']?></td>
		<td><?php echo $rows['hit']?></td>
		</tr>
	<?php
		$total--;
		}
	?>
	</tbody>
</table>
<div>
	<button onclick=window.parent.location.href="adminevent.php";>글 작성</button>
</div>
</body>
</html>
