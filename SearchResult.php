<?php
	include_once "./layout.inc";
	$base = new layout;

	session_start();

	$conn = mysqli_connect('localhost', 'bitnami', '1234', 'book') or die('fail');
	$sql = "SELECT * FROM bookdata";
	$sql_res = mysqli_query($conn, $sql);

	$base->style = "
		.infoBox{
			border: 1px solid #b0b0b0;
			width: 100%;
			height: 200px;
			padding: 5px;
		}
	";

?>
<!DOCTYPE html>
<html>
<head>
	<?php
		$base->LayoutStyle();
	?>
</head>
<body>
	<?php 
		$base->LayoutHeader();
		$base->LayoutMenu();
	?>
	<article>
		<p style="float: left;">검색결과-category, keyword</p>
		<?php
			while($des_row = mysqli_fetch_array($sql_res)){
				echo "<table class='infoBox'><tr><td>";
				echo "<a href='#' style='display: inline-block;'>img</a>".
					"<a href='#'>".$des_row['book_name']."</a><br>".
					$des_row['category']."<br>".
					$des_row['author']."<br>".
					$des_row['price']."<br>";
				echo "</td></tr></table>";
			}
		?>
	</article>
	<?php
		$base->LayoutFooter();
	?>
</body>
</html>
