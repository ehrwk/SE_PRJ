<?php
	$connect =mysqli_connect('localhost','bitnami','1234','event') or die('connection fail');
	$title = $_GET['title'];
	$id = $_GET['name'];
	$content = $_GET['content'];
	$date = date('Y-m-d H:i:s');

	$URL = './adminevent_list.php';

	$query = "INSERT INTO eventpage (number,title,content,date,hit,id)
	VALUES (null,'$title','$content','$date',0,'$id')";

	if (empty($title)) {
		echo "<script>alert('제목을 입력해주세요');
		history.back()
		</script>";
	}
	else
	{

		$result = $connect->query($query);
		if($result){
?>
		<script>
			alert("<?php echo"이벤트 글 등록되었습니다."?>");
			location.replace("<?php echo $URL?>");
		</script>
<?php
	}
		else{
			echo "FAIL";
	}
	mysqli_close($connect);
	}
	
?>

