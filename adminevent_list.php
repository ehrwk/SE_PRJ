<?php
	include_once "adminLayout.inc";
	$admin = new AdminLayout;
	$connect =mysqli_connect('localhost','bitnami','1234','event') or die('connection fail');
	$query="select * from eventpage order by number desc";
	$result = $connect->query($query);
	$total=mysqli_num_rows($result);
	while($rows=mysqli_fetch_assoc($result)){$number=$rows['number'];
		$title= $rows['title'];
		$id= $rows['id'];
		$date= $rows['date'];
}
	$admin->content =
	"<h2 align='center'>이벤트 관리 게시판</h2>
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

		<td> $total</td>
		<td><a href='admineventview.php?number= $number'> $title</td>
		<td>$id</td>
		<td> $date</td>
		<td>소비자 조회수여야 함</td>
		</tr>
	
	</tbody>
	 <div>

            <button class='btn' onclick=#><a href='adminevent.php'>이벤트 작성하기</button>
        </div>
</table>

	"
	;
	$admin->AdminLayoutMain();
	?>