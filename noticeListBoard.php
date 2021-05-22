<?php
	include_once "./layout.inc";
	$base = new layout;
	
	$connect = mysqli_connect('localhost','bitnami','1234','event') or die('connection fail');
    $query = "SELECT * FROM eventdb WHERE finalDate >='$today' ORDER BY number DESC";
    $result = $connect->query($query);
	$total = mysqli_num_rows($result);

	$totalPage = mysqli_num_rows($result);
	$onePage = 1;
	$pageCnt = ceil($totalPage/$onePage);
?>

<!DOCTYPE html>
<html>
<head>
	<?php
		$base->style = "
			#boardTable th{
			border-top: 3px solid rgb(51, 175, 233);
			border-bottom: 1.5px solid rgb(160, 160, 160);
			padding: 10px;
		}";
		$base->LayoutStyle();
	?>
</head>
<body>
	<?php 
		$base->LayoutHeader();
		$base->LayoutMenu();
	?>
	<article>
		<div id = 'boardArea'>
			<center>
			<h1>공지/이벤트 게시판</h1>
			<table id = 'boardTable'>
				<tr>
					<th>번호</th>
					<th>제목</th>
					<th>날짜</th>
				</tr>
				<?php 
					while ($rows=mysqli_fetch_assoc($result)) {
						echo "<tr><td>".$total."</td>".
						"<td><a href='admineventview.php?number=".$rows['number']."'>".$rows['title']."</a></td>".
						"<td>".$rows['date']."</td>".
						"</tr>";
						$total = $total - 1;
					}
				?>
			</table>
		</center>
		</div>
	</article>
	<?php
		$base->LayoutFooter();
	?>
</body>
</html>