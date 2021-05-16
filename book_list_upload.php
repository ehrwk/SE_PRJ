<?php
  
   $conn = mysqli_connect(
  'localhost',      //주소
  'bitnami',        //username
  '1234',           //pw
  'book'            //database_name
 ) or die('fail');

  $category = $_POST['category'];
  $cate_dec = $_POST['cate_dec'];
  $book_name = $_POST['book_name'];
  $author = $_POST['author'];
  $price = $_POST['price'];

  $sql = "INSERT INTO bookdata (category, cate_dec, book_name, author, price) VALUES('$category', '$cate_dec', '$book_name', '$author', '$price');";

  $result = mysqli_query($conn, $sql);

  mysqli_close($conn);

 /*
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} 
else {
  echo '성공했습니다. <a href="create_book_list.php">돌아가기</a>';
}*/

?>
