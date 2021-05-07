<?php
$conn = mysqli_connect(
	'localhost', //주소
	'root',		//id
	'unix21002',//pw
	'test',		//database_name
);

$filtered = array(
    'cre_cate'=>mysqli_real_escape_string($conn, $_POST['cre_cate']),
    'cate_dec'=>mysqli_real_escape_string($conn, $_POST['cate_dec']),
    'book_name'=>mysqli_real_escape_string($conn, $_POST['book_name']),
    'author'=>mysqli_real_escape_string($conn, $_POST['author']),
    'price'=>mysqli_real_escape_string($conn, $_POST['price'])
  );
 
$sql = "
  INSERT INTO topic
    (cre_cate, cate_dec, book_name, author, price)
    VALUES( 
      '{$filtered['cre_cate']}',
      '{$filtered['cate_dec']}',
      '{$filtered['book_name']}',
      '{$filtered['author']}',
      '{$filtered['price']}',
    )
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} else {
  echo '성공했습니다. <a href="create_book_list.php">돌아가기</a>';
}
?>
